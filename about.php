<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Assignment 1" />
        <meta name="keywords" content="HTML, CSS" />
        <meta name="author" content="s103494172"  />
        <!--Linking my css file. Keep in same folder for it to work-->
        <link rel="stylesheet" type="text/css" href="./styles/style.css">
        <link rel="stylesheet" type="text/css" href="./styles/dl.css">
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
        <title>About Author</title>
    </head>
    <body>
    <?php include_once "header.inc"; ?>
    <div class="mega-intro">
        <h1>SHaCKDART</h1>
    </div>
        <div class="about-main">
            <div class="info-wrapper">
                <dl>
                    <dt>Name</dt><dd>Ekrar Uddin Mohammed Efaz</dd>
                    
                    <dt>Student Number</dt><dd>103494172</dd>
                    
                    <dt>Tutor Name</dt><dd>Guanming Cui</dd>
                    
                    <dt>Course Name</dt><dd>Bachelor of Computer Science</dd>
                    <dt>Email</dt><dd><a href="mailto:103494172@student.swin.edu.au" class=mailto-btn>Send email</a></dd>                  
                </dl>
            </div>
            <div class="img-wrapper">
                <div class="img-frame">
                    <figure>
                        <img class="selfp" src="./images/slef2.jpeg" alt="Self-Image">
                    </figure>
                </div>
            </div>
        </div>
        <div class="ceo-wrapper">
            <p>Hey It's Ekrar.I am the CEO of Shackdart.I have been working to build shackdart from Highschool.</p>
            <p>Swinburne is the best.</p>           
        </div>
            <br>
            <section class="timetable">
                <h3>Swinburne Timetable</h3>
                <table>
                    <tr class = "top-row">
                        <th>Time</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th>
                    </tr>
                    <tr>
                        <td>9 AM-10 AM</td><td>COS10009<br>Live Online</td><td>--</td><td>--</td><td>COS10003<br>Live Online</td><td>--</td>
                    </tr>
                    <tr>
                        <td>10 AM-11 AM</td><td>--</td><td>--</td><td>--</td><td>COS10003<br>Live Online</td><td>--</td>
                    </tr>
                    <tr>
                        <td>11 AM-12 PM</td><td>--</td><td>--</td><td>--</td><td>COS10009<br>Live Online</td><td>TNE10006<br>Lab</td>
                    </tr>
                    <tr>
                        <td>12 PM-1 AM</td><td>TNE10006<br>Live Online</td><td>COS10009<br>Tutorial</td><td>--</td><td>--</td><td>TNE10006<br>Lab</td>
                    </tr>
                    <tr>
                        <td>1 PM-2 PM</td><td>TNE10006<br>Live Online</td><td>COS10009<br>Tutorial</td><td>--</td><td>COS10003<br>Tutorial</td><td>TNE10006<br>Lab</td>
                    </tr>
                    <tr>
                        <td>2 PM-3 PM</td><td>COS10011<br>Live Online</td><td>--</td><td>--</td><td>COS10003<br>Tutorial</td><td>--</td>
                    </tr>
                    <tr>
                        <td>3 PM-4 PM</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                    </tr>
                    <tr>
                        <td>4 PM-5 PM</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
                    </tr>
                    <tr>
                        <td>5 PM-6 PM</td><td>--</td><td>--</td><td>COS10011<br>Tutorial</td><td>--</td><td>--</td>
                    </tr>
                    <tr>
                        <td>6 PM-7 PM</td><td>--</td><td>--</td><td>COS10011<br>Tutorial</td><td>--</td><td>--</td>
                    </tr>
                </table>
            </section>
        <?php include_once "footer.inc";?>   
    </body>
    </html>
 