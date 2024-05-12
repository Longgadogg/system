<?php include "sidebar.php"; ?>

<div class="container-fluid">
  <div class="col mt-2">
    <div class="card" style="width: 100%;">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <h1>Teaching Load</h1>
          </div>
          <div class="col">
            <form method="POST" action="sbteachingload.php" id="searchForm">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" aria-label="Search"
                  aria-describedby="button-addon2" id="searchInput">
                <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
                <button type="button" class="btn btn-danger" id="clearButton">Clear</button>
              </div>
            </form>
            <!-- Display Search Results -->
            <div id="searchResults"></div>
          </div>
        </div>
      </div>
      <!--  TABLE  -->
      <div class="container-fluid">
        <div class="card-body">
          <div class="line"></div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Professor Name</th>
                  <th>Semester</th>
                  <th>School Year</th>
                  <th>Action</th>
               
                </tr>
              </thead>
              <tbody>
                <?php include "tldb.php"; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
          <!-- Button trigger modal -->
<!-- CHECK -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
            Add a Member
          </button>
        </div>
        <!-- ADD Modal -->
        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Teaching Load Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="tldb.php" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="professorName" class="form-label">Professor Name</label>
                    <input type="text" class="form-control" id="professorName" name="professorname"
                      placeholder="Enter professor name" required>
                  </div>
                  <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="semester" name="semester" required>
                      <option selected disabled value="">Choose semester...</option>
                      <option>1st semester</option>
                      <option>2nd semester</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="schoolYear" class="form-label">School Year</label>
                    <input type="text" class="form-control" id="schoolYear" name="schoolyear"
                      placeholder="Enter school year (e.g., 2022-2023)" required>
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
          </div>
        </div>
      </div>


