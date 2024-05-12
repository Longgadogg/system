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
    
    // Check if 'mastery' is set and not empty
    if(isset($_POST['mastery']) && !empty($_POST['mastery'])) {
        $mastery = $_POST['mastery'];
    } else {
        // Handle the case when 'mastery' is not set or empty
        // You can set a default value or display an error message
        // For example:
        $mastery = ""; // Set a default value or leave it empty
    }

    // Image upload handling
    $targetDir = "pics/";
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
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO dtrdb (professorname, mastery, pic) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $professorname, $mastery, $targetFile);

    // Execute the SQL statement
    $stmt->execute();

    // Close statement
    $stmt->close();

    header("Location: dtr.php");
    exit; // Terminate the script execution after the redirect
}


// Initialize search query variable
$searchQuery = "";

// Check if the form is submitted with a search query
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    // Retrieve the search query from the form
    $search = $_POST['search'];

    // Prepare the search query to prevent SQL injection
    $searchQuery = " WHERE professorname LIKE '%$search%' OR department  LIKE '%$search%'";
}

// Construct the SQL query to fetch data based on the search query
$sql = "SELECT * FROM dtrdb" . $searchQuery . " LIMIT 5";
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
            <td>" . $row["mastery"] . "</td>
            
            <td>
                 <button type='button' class='btn btn-primary view-btn' data-bs-toggle='modal' data-bs-target='#view' data-img='{$row["pic"]}'>View</button>
                 <button type='button' class='btn btn-danger' onclick='populateForm(\"{$row["professorname"]}\", \"{$row["mastery"]}\")' data-bs-toggle='modal' data-bs-target='#Edit'>Edit</button>
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
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                // Reopen database connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch all image paths from the database
                $sql = "SELECT pic FROM dtrdb";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $img = $row["pic"];
                        echo "<img src='$img' class='img-fluid' alt='Image'><br>";
                    }
                } else {
                    echo "No images found.";
                }

                // Close database connection
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>







<div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Teaching Load Form</h2>
      </div>
      <div class="card-body">
      <form id="editForm">
    <div class="mb-3">
        <label for="editProfessorName" class="form-label">Professor Name</label>
        <input type="text" class="form-control" id="editProfessorName" placeholder="Enter professor name" required>
    </div>
    <div class="mb-3">
        <label for="editSemester" class="form-label">Semester</label>
        <input type="text" class="form-control" id="editSemester" placeholder="Enter semester" required>
    </div>
    <div class="mb-3">
        <label for="editSchoolYear" class="form-label">School Year</label>
        <input type="text" class="form-control" id="editSchoolYear" placeholder="Enter school year" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
      </div>
    </div>
  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="deleteRow()">Delete Data</button>
</div>
</div>
</div>
</div>

<script>
// Function to delete row
function deleteRow() {
    // Get the professor name, semester, and school year values from the form
    var professorname = document.getElementById("professorname").value;
    var semester = document.getElementById("mastery").value;
    

    // Perform your deletion logic here
    console.log("Deleting row with Professor Name:", professorname, "Mastery:", mastery);

    // Clear the form fields after deletion if needed
    document.getElementById("professorname").value = "";
    document.getElementById("mastery").value = "";
    

    // Close the modal
    $('#Edit').modal('hide');
}

    $(document).ready(function(){
        $('.view-btn').click(function() {
            var imgPath = $(this).data('img');
            $('#modalImage').attr('src', imgPath);
        });
    });


</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-E2A/pR1pGGOfl4G1yDP1R6LCZX+12XxN3S/gLbPwLXO4rI4/8weH5bvrFfrpZidB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
