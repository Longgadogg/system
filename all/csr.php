<?php  include("sidebar.php");  ?>





<div class="container-fluid">
    <div class="row">
        <div class="col mt-2">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h1>IT Department CSR</h1>
                        </div>
                        <div class="col">
                            <form method="POST" action="csrdb.php" id="searchForm">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search" name="search" aria-label="Search" aria-describedby="button-addon2" id="searchInput">
                                    <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
                                    <button type="button" class="btn btn-danger" id="clearButton">Clear</button>
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
                                        <th>Professor Name</th>
                                        <th>Faculty</th>
                                        
                                        <th>Nature of Leave/Travel </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include("csrdb.php"); ?>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">CSR Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="csrdb.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="professorName" class="form-label">Professor Name</label>
        <input type="text" class="form-control" id="professorName" name="professorname" placeholder="Enter professor name" required>
    </div>
    <div class="mb-3">
        <label for="faculty" class="form-label">Faculty</label>
        <select class="form-select" id="faculty" name="faculty" required>
            <option selected disabled value="">Choose Faculty</option>
            <option>IT</option>
           
        </select>
    </div>
    <div class="mb-3">
        <label for="monthdates" class="form-label">Month Dates</label>
        <input type="text" class="form-control" id="monthdates" name="monthdates" placeholder="Enter Month Dates" required>
    </div>
    <div class="mb-3">
        <label for="leave" class="form-label">Nature of Leave</label>
        <input type="text" class="form-control" id="schoolYear" name="leave" placeholder="Enter Nature of Leave" required>
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






