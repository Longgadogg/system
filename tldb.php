<?php
include ("connection.php");
// Check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted with a post request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['submit'])) {
    // Retrieve data from the form
    $professorname = $_POST['professorname'];
    $faculty = $_POST['faculty'];
    $semester = $_POST['semester'];
    $schoolyear = $_POST['schoolyear'];

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
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
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

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO tldb (professorname, faculty, semester, schoolyear, pic) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $professorname, $faculty, $semester, $schoolyear, $targetFile);

    // Execute the SQL statement
    $stmt->execute();

    // Close statement
    $stmt->close();

    header("Location: teaching_load.php");

    exit; // Terminate the script execution after the redirect
}

// Initialize search query variable
$searchQuery = "";

// Check if the form is submitted with a search query
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST['search'])) {
    // Retrieve the search query from the form
    $search = $_POST['search'];

    // Prepare the search query to prevent SQL injection
    $searchQuery = " WHERE professorname LIKE '%$search%' OR faculty LIKE '%$search%' OR semester LIKE '%$search%' OR schoolyear LIKE '%$search%'";
} else{
    $searchQuery = "";
}

// Construct the SQL query to fetch data based on the search query
$sql = "SELECT * FROM tldb" . $searchQuery . " LIMIT 5";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die ("Invalid Query" . $conn->error);
}
// table
// Check if there are any results
if ($result->num_rows > 0) {
    // Display the search results
    while ($row = $result->fetch_assoc()) {
        $modalId = 'viewModal_' . $row["id"];// = viewModal1
        $modalIdDelete = 'deleteModal_' . $row["id"];
        echo "
        <tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["professorname"] . "</td>
            <td>" . $row["faculty"] . "</td>
            <td>" . $row["semester"] . "</td>
            <td>" . $row["schoolyear"] . "</td>
            <td>
                <button type='button' class='btn btn-primary view-btn' data-bs-toggle='modal' data-bs-target='#$modalId'>View</button>
                <button type='button' class='btn btn-danger delete-btn' data-bs-toggle='modal' data-bs-target='#$modalIdDelete'>Delete</button>                 
            </td>
        </tr>
        <!-- View Modal -->
        <div class='modal fade' id='$modalId' tabindex='-1' aria-labelledby='viewModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='viewModalLabel'>View Details</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <!-- Display details here -->
                        <img src='" . $row["pic"] . "' alt='Image' style='max-width: 100%; height: auto;'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal -->
        <div class='modal fade' id='$modalIdDelete' tabindex='-1' aria-labelledby='viewModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-lg modal-dialog-centered'>
                <div class='modal-content'>
                    <div class='modal-header bg-danger text-white'>
                        <h5 class='modal-title' id='viewModalLabel'>Confirm Deletion</h5>
                        <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <div class='mb-3'>
                            <strong>ID:</strong> " . $row["id"] . "
                        </div>
                        <div class='mb-3'>
                            <strong>Professor Name:</strong> " . $row["professorname"] . "
                        </div>
                        <div class='mb-3'>
                            <strong>Faculty:</strong> " . $row["faculty"] . "
                        </div>
                        <div class='mb-3'>
                            <strong>Semester:</strong> " . $row["semester"] . "
                        </div>
                        <div class='mb-3'>
                            <strong>School Year:</strong> " . $row["schoolyear"] . "
                        </div>
                        <div class='text-center'>
                            <button type='button' class='btn btn-danger'>
                                <a href='delete.php?deleteid=".$row["id"]."' class='text-white text-decoration-none'>Delete</a>
                            </button>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        ";
    }
} else {
    // No results found
    echo "<tr><td colspan='5'>No results found.</td></tr>";
}

// Close database connection
$conn->close();

