<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the DEAN</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        ::after,
::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

h1 {
    font-weight: 600;
    font-size: 1.5rem;
}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    display: flex;
}

.main {
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
    background-color: #fafbfe;
}

#sidebar {
    width: 260px;  /* Fixed the width to 260px */
    min-width: 260px;  /* Fixed the minimum width to 260px */
    z-index: 1000;
    background-color: maroon;
    display: flex;
    flex-direction: column;
}

.toggle-btn {
    display: none;  /* Hide the toggle button */
}

.sidebar-logo {
    margin: auto 0;
    padding-left: 40px;
}

.sidebar-logo a {
    color: #FFF;
    font-size: 1.15rem;
    font-weight: 600;
}

.sidebar-nav {
    padding: 2rem 0;
    flex: 1 1 auto;
}

a.sidebar-link {
    padding: .625rem 1.625rem;
    color: #FFF;
    display: block;
    font-size: 0.9rem;
    white-space: nowrap;
    border-left: 3px solid transparent;
}

.sidebar-link i {
    font-size: 1.1rem;
    margin-right: .75rem;
}

a.sidebar-link:hover {
    background-color: rgba(255, 255, 255, .075);
    border-left: 3px solid #3b7ddd;
}

.sidebar-item {
    position: relative;
}

.underline {
    border-bottom: 1px solid white;
    padding-bottom: 10px;
}

</style>

    </style>
</head>

<body>
<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                   <img src="pics/mainlogo.png" alt="" height="110px" style="margin-top: 20px;">
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="home.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="teaching_load.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Teaching Load</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="dtr.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>DTR</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="csr.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>CSR</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="course.php" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Course Syllabus</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="makeup.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Make-up Class</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="report.php" class="sidebar-link">
                        <i class="lni lni-pie-chart"></i>
                        <span>Report Grades</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="task.php" class="sidebar-link">
                        <i class="lni lni-briefcase-alt"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="request.php" class="sidebar-link">
                        <i class="lni lni-paperclip"></i>
                        <span>Request Letter</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="flag.php" class="sidebar-link">
                        <i class="lni lni-notepad"></i>
                        <span>Flag Ceremony</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="clearance.php" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Clearances for Overload of <br> Teaching Person</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="heads.php" class="sidebar-link">
                        <i class="lni lni-consulting"></i>
                        <span>Memo Heads</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="deans.php" class="sidebar-link">
                        <i class="lni lni-handshake"></i>
                        <span>Memo Deans</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="officeorders.php" class="sidebar-link">
                        <i class="lni lni-handshake"></i>
                        <span>COE Office Orders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="about.php" class="sidebar-link">
                        <i class="lni lni-handshake"></i>
                        <span>System About</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="manual.php" class="sidebar-link">
                        <i class="lni lni-handshake"></i>
                        <span>User Manual</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="index.html" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!---main Page-->

        <div class="main p-1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
    </script>
</body>

</html>
