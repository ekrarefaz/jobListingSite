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
        <title>Login</title>
</head>
<body>
<?php include_once "header.inc";?>
    <div class="login-card" id="login-card">
        <div class="login-header">
            <h1>Login</h1>
        </div>
            <div class="login-form">

                <form method="post" action="processLogin.php">
                    <p>
                    <label for="username">User</label>
                    <input type="text" id="username" name="username" required>
                    </p>
                    <p>
                    <label for="passwd">Pass</label>
                    <input type="password" id="password" name="password" required>
                    </p>
                    <input type="submit" value="login" id="submit" class="submit-btn">
                </form>
            </div>
        </div>
        <?php include_once "footer.inc"; ?>
</body>
</html>
