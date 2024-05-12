<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deansoffice";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted with a post request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve data from the form
    $professorname = $_POST['professorname'];
    $faculty = $_POST['faculty'];
    $leave = $_POST['leave'];

    // Image upload handling
    $targetDir = "pics/"; // Directory where you want to store uploaded images
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO csrdb (professorname, faculty, `leave`, pic) VALUES (?, ?, ?, ?)");
        
        // Check if prepare() was successful
        if (!$stmt) {
            throw new Exception("Failed to prepare statement.");
        }
    
        // Bind parameters
       // Assuming $stmt is your mysqli_stmt object

// Bind parameters
$stmt->bind_param("ssss", $professorname, $faculty, $leave, $targetFile);

// Execute the statement
$stmt->execute();

        
        echo "Record inserted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    

    header("Location: csr.php");
    exit; // Terminate the script execution after the redirect
    
}



// Initialize search query variable
$searchQuery = "";

// Check if the form is submitted with a search query
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    // Retrieve the search query from the form
    $search = $_POST['search'];

    // Prepare the search query to prevent SQL injection
    $searchQuery = " WHERE professorname LIKE '%$search%' OR faculty LIKE '%$search%' OR leave LIKE '%$search%'";
}

// Construct the SQL query to fetch data based on the search query
$sql = "SELECT * FROM csrdb" . $searchQuery . " LIMIT 5";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Invalid Query" . $conn->error);
}

// Check if there are any results
if ($result->num_rows > 0) {
    // Display the search results
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row["professorname"] . "</td>
            <td>" . $row["faculty"] . "</td>
            <td>" . $row["leave"] . "</td>
            
            <td>
                 <button type='button' class='btn btn-primary view-btn' data-bs-toggle='modal' data-bs-target='#view' data-img='{$row["pic"]}'>View</button>
                 <button type='button' class='btn btn-danger' onclick='populateForm(\"{$row["professorname"]}\", \"{$row["faculty"]}\", \"{$row["leave"]}\")' data-bs-toggle='modal' data-bs-target='#Edit'>Edit</button>
            </td>
        </tr>";
    }
} else {
    // No results found
    echo "<tr><td colspan='4'>No results found.</td></tr>";
}

// Close database connection
$conn->close();

?>