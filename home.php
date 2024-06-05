<?php include("sidebar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVSU College of Engineering Deans Office</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <style>
        body {
            margin-top: 0;
            background: #f6f9fc;
        }

        /* Styles for hover effects */
        .category-card {
            transition: transform 0.3s ease-in-out; /* Smooth transition effect */
            text-align: center; /* Center the card's content */
            border: none;
            padding: 1.5rem 0;
            box-shadow: 0.125rem 0.25rem rgba(35, 38, 45, 0.09);
            background-color: #fff;
            border-radius: 0.25rem;
            display: flex;
            align-items: center; /* Center content within the card */
            justify-content: center; /* Center content vertically within the card */
        }

        .category-card:hover {
            transform: scale(1.05); /* Slightly scale up card on hover */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
        }

        .category-icon {
            width: 3.2rem;
            height: 3.2rem;
            border-radius: 50%;
            display: flex;
            justify-content: center; /* Center the icon horizontally */
            align-items: center; /* Center the icon vertically */
            background-color: #e9f3ff; /* Set default background color */
            transition: background-color 0.3s ease; /* Smooth transition effect */
        }

        .category-card:hover .category-icon {
            background-color: #3b7ddd; /* Change background color on hover */
        }

        .mt-6 {
            margin-top: 4rem;
            padding-left: 25px;
            font-weight: bold;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .text-uppercase-bold-sm {
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 2px;
            font-size: 0.85rem;
        }

        .badge {
            padding: 0.4rem 0.65rem 0.25rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="pics/evsulogo.png" alt="EVSU Logo" width="30" height="24" class="d-inline-block align-text-top">
                EVSU College of Engineering Deans Office
            </a>
        </div>
    </nav>

    <section class="pt-8 pt-md-9">
        <!-- Categories -->
        <div class="row mt-6">
            <div class="col-12 mb-4">
                <span class="badge bg-pastel-primary text-primary text-uppercase-bold-sm">Modules</span>
            </div>

            <!-- Category -->
            <div class="col-md-4 mb-4 text-center">
                <a href="professors.php" class="card category-card">
                    <span class="icon-circle icon-circle-lg category-icon text-primary">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="text-dark mt-3">Professors</span>
                </a>
            </div>
            <!-- Category -->
            <div class="col-md-4 mb-4 text-center">
                <a href="departments.php" class="card category-card">
                    <span class="icon-circle icon-circle-lg category-icon text-primary">
                        <i class="fas fa-building"></i>
                    </span>
                    <span class="text-dark mt-3">Department Heads</span>
                </a>
            </div>
            <!-- Category -->
            <div class="col-md-4 mb-4 text-center">
                <a href="mawi.php" class="card category-card">
                    <span class="icon-circle icon-circle-lg category-icon text-primary">
                        <i class="fas fa-address-card"></i>
                    </span>
                    <span class="text-dark mt-3">Devs</span>
                </a>
            </div>
        </div>
    </section>
</body>

</html>
