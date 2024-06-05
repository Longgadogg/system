<?php  include("sidebar.php");  ?>





<div class="container-fluid">
    <div class="row">
        <div class="col mt-2">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h1>Task (College of Engineering)</h1>
                        </div>
                        <div class="col">
                        <form method="POST" action="task.php" id="searchForm">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" aria-label="Search"
                  aria-describedby="button-addon2" id="searchInput" required>
                <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
                <button type="button" class="btn btn-danger" id="clearButton" onclick="returnToTable()">Clear</button>
                <script>
                  function returnToTable() {
                  window.location.href = 'task.php';
                  }
                </script>
              </div>
            </form>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card-body">
                        <div class="line"></div>
                        <div class="table-responsive">
                            <table class="table"> 
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Professor Name</th>
                                        <th>Faculty</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include("taskdb.php"); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
  Add a Member
</button>
</div>




<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="taskdb.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="professorName" class="form-label">Professor Name</label>
        <input type="text" class="form-control" id="professorName" name="professorname" placeholder="Enter professor name" required>
    </div>
    <div class="mb-3">
        <label for="faculty" class="form-label">Faculty</label>
        <select class="form-select" id="faculty" name="faculty" required>
            <option selected disabled value="">Choose Faculty</option>
            <option>IT</option>
            <option>ME</option>
            <option>CE</option>
            <option>ECE</option>
            <option>Che</option>
            <option>IE</option>
            <option>EE</option>
            <option>GE</option>
           
        </select>
    </div>
    
    

    <!-- Image upload -->
    <div class="mb-3">
        <label for="imageInput" class="form-label">Choose Image</label>
        <input type="file" class="form-control" id="imageInput" name="image">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



     </div>
    </div>
</div>






