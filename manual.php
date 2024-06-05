<?php include("sidebar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teaching Load Management System - User Manual</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }
    h1, h2, h3 {
      color: #343a40;
    }
    .table-of-contents ul {
      list-style-type: none;
      padding-left: 0;
    }
    .table-of-contents li {
      padding: 0.5rem 0;
    }
    .table-of-contents li a {
      text-decoration: none;
      color: #007bff;
    }
    .table-of-contents li a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container mt-4">
    <h1 class="text-center">User Manual for Teaching Load Management System</h1>
    
    <div class="table-of-contents my-4">
      <h2>Table of Contents</h2>
      <ul>
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#system-requirements">System Requirements</a></li>
        
        <li><a href="#navigating-interface">Navigating the Interface</a>
          <ul>
            <li><a href="#sidebar">Sidebar</a></li>
            <li><a href="#main-content">Main Content Area</a></li>
          </ul>
        </li>
        <li><a href="#using-system">Using the System</a>
          <ul>
            <li><a href="#searching-records">Searching for Records</a></li>
            <li><a href="#clearing-search">Clearing Search Results</a></li>
            <li><a href="#adding-member">Adding a New Member</a></li>
          </ul>
        </li>
        <li><a href="#faq">Frequently Asked Questions (FAQ)</a></li>
        <li><a href="#troubleshooting">Troubleshooting</a></li>
        
      </ul>
    </div>

    <h2 id="introduction">Introduction</h2>
    <p>The Teaching Load Management System is designed for the College of Engineering to manage and track teaching loads of professors. This manual will guide you through the setup, navigation, and usage of the system.</p>

    <h2 id="system-requirements">System Requirements</h2>
    <ul>
      <li>A web server with PHP support (e.g., Apache)</li>
      <li>MySQL or similar database system</li>
      <li>Modern web browser (e.g., Google Chrome, Mozilla Firefox)</li>
    </ul>

   

    <h2 id="navigating-interface">Navigating the Interface</h2>

    <h3 id="sidebar">Sidebar</h3>
    <ul>
      <li>The sidebar is included in every page using PHP include statements.</li>
      <li>Provides navigation links to different sections of the system.</li>
    </ul>

    <h3 id="main-content">Main Content Area</h3>
    <ul>
      <li>Displays the information.</li>
      <li>Contains search functionality and a form to add new members.</li>
    </ul>

    <h2 id="using-system">Using the System</h2>

    <h3 id="searching-records">Searching for Records</h3>
    <ul>
      <li>Enter your search term in the search input field.</li>
      <li>Click the <strong>Search</strong> button.</li>
    </ul>

    <h3 id="clearing-search">Clearing Search Results</h3>
    <ul>
      <li>Click the <strong>Clear</strong> button.</li>
      <li>The <strong>Clear</strong> button triggers a JavaScript function to reload the page.</li>
    </ul>

    <h3 id="adding-member">Adding a New Member</h3>
    <ul>
      <li>Click the <strong>Add a Member</strong> button to open the modal form.</li>
      <li>Fill in the required information.</li>
      <li>Click the <strong>Submit</strong> button.</li>
    </ul>

    <h2 id="faq">Frequently Asked Questions (FAQ)</h2>

    <h3>How do I reset my search?</h3>
    <ul>
      <li>Click the <strong>Clear</strong> button to reset the search and display the full table.</li>
    </ul>

    <h3>What file formats are supported for image uploads?</h3>
    <ul>
      <li>Supported file formats include JPEG, PNG, and GIF.</li>
    </ul>

    <h2 id="troubleshooting">Troubleshooting</h2>

    <h3>Issue: The search function does not return any results.</h3>
    <ul>
      <li>Ensure the search term is correctly spelled.</li>
      <li>Check the database connection and data integrity.</li>
    </ul>

    <h3>Issue: Unable to add a new member.</h3>
    <ul>
      <li>Verify all required fields are filled out.</li>
      
    </ul>


  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
