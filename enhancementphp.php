<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="HTML, CSS" />
        <meta name="author" content="s103494172"  />
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
        <!--Linking my css file.-->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" id="theme-style" href="">
        <!-- Link to Javascripts -->
        <script src="./scripts/enhancements.js" defer></script>
        <title>Enhancement PHP</title>
    </head>
    <body id=enhancebody>
        <?php include_once "header.inc"; ?>
        <div class="card">
            <div class="card1">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <h2>Enhancement 1 Admin Login</h2>
                    </div>
                    <div class="card_face card_face--back">
                       <div class="card_content">
                           <div class="card_header">
                               <h2>Description</h2>
                           </div>
                           <div class="card_body">
                            <p>The admin can login from the login page using the admin credentials only. The admin login is verified against the user database containing all the admin users. The password is stored in hashed form for security. The admin login after success is redirected to Manage Page where the admin can make queries against EOIs</p>
                            <a href="./login.php">Login Page</a>
                            <p>USERNAME : admin</p>
                            <p>PASSWORD : admin</p>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="card2">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <h2>Enhancement 2 User Login Page</h2>

                    </div>
                    <div class="card_face card_face--back">
                       <div class="card_content">
                           <div class="card_header">
                               <h2>Description</h2>
                           </div>
                           <div class="card_body">
                            <p>A user can login from login page if they have completed the Application using their credentials. Password again stored in EOI table in hashed form and matched against username from database. The user is redirected to a User Manage Page where they can see their application information and also their application status. Any attempt to visit the pages without login is redirected to Login page.</p>
                            <a href="./login.php">Login Page</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "footer.inc"?>
</body>
</html>