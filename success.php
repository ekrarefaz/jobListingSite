<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="HTML, CSS" />
        <meta name="author" content="s103494172"  />
        <!--Linking my css file. Keep in same folder for it to work-->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" id="theme-style" href="">

        <!--Adding fonts from google fonts-->
        <!--FONT VT32-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <!--Font AMATIC SC-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet"> 
        <!--Font Press Start 2P-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
        <!-- Link to Javascripts -->
        <script src="./scripts/enhancements.js" defer></script>
        <title>Success!</title>
    </head>

<body>
    <div class="success-container" id="success-container">
        <div class="popup">
            <h1>Application Successful</h1>
            <?php 
            session_start();
            echo "<p>EOI APPLICATION ID:" . $_SESSION["eoi_id"] . "</p>";
            ?>
            <p>Your Application is received. Redirected to Homepage<br></p>
            <p><a href="./jobs.php">Jobs</a></p>
        </div>
    </div>
</body>
</html>