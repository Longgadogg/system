<?php include("sidebar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Use viewport height for full screen */
            margin: 0; /* Remove default margins */
            padding: 0; /* Remove default padding */
            background-image: url('pics/.jpg'); /* Add your image path here */
            background-size: cover; /* Cover the entire container */
            background-position: center; /* Center the image */
        }
        .card {
            width: 300px;
            margin: 0 10px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Date Today</h2>
        <p><?php echo date("Y-m-d"); ?></p>
    </div>
    <div class="card">
        <h2>Time Today</h2>
        <!-- Placeholder for displaying the current time -->
        <p id="currentTime">Fetching time...</p>
    </div>
</div>

<script>
    // Function to update the placeholder with the current time
    function updateCurrentTime() {
        // Get the current date and time
        const currentTime = new Date();

        // Format the time as HH:MM:SS (24-hour format)
        const hours = currentTime.getHours().toString().padStart(2, '0');
        const minutes = currentTime.getMinutes().toString().padStart(2, '0');
        const seconds = currentTime.getSeconds().toString().padStart(2, '0');

        // Update the placeholder text with the current time
        const currentTimeElement = document.getElementById('currentTime');
        currentTimeElement.textContent = `Current Time: ${hours}:${minutes}:${seconds}`;
    }

    // Call the function to update the current time when the page loads
    window.addEventListener('load', updateCurrentTime);

    // Update the current time every second
    setInterval(updateCurrentTime, 1000);
</script>

</body>
</html>
