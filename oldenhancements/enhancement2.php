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
        <title>Enhancement JS</title>
    </head>
    <body id=enhancebody>
        <?php include_once "header.inc"; ?>
        <div class="card">
            <div class="card1">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <h2>Enhancement 1 Theme</h2>
                        <div id="theme-wrapper">
                            <div  id="light-mode" class="theme-dot"></div>
                            <div  id="dark-mode" class="theme-dot"></div>
                        </div>
                    </div>
                    <div class="card_face card_face--back">
                       <div class="card_content">
                           <div class="card_header">
                               <h2>Description</h2>
                           </div>
                           <div class="card_body">
                            <p>Used ID to add an event listener to theme-buttons,on click the respective theme CSS variable file is loaded.Further the File is stored in session storage to maintain the color mode until changed</p>
                           <a href="#theme-wrapper" id="enhance-click">Theme Buttons</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="card2">
                <div class="card_inner">
                    <div class="card_face card_face--front">
                        <h2>Enhancement 2 Timer</h2>

                    </div>
                    <div class="card_face card_face--back">
                       <div class="card_content">
                           <div class="card_header">
                               <h2>Description</h2>
                           </div>
                           <div class="card_body">
                            <p>The user gets 2 Mintues to fill up the form. The timer Starts as the form page loads and a warning is displayed for 5 seconds to remind the user that remaining time to fill the form is 40s</p>
                            <a href="./apply.php">Form Page</a>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "footer.inc"?>
</body>
</html>