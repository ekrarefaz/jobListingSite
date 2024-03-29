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
        <script src="./scripts/form-validation.js" defer></script>
        <script src="./scripts/script.js" defer></script>
        <script src="./scripts/enhancements.js" defer></script>
        <title>Job Application</title>
    </head>
    <body class="apply-pg-body" id="applybody">
    <?php include_once "header.inc"; ?>
        <form method="post" action="./processEOI.php" id="apply-form" novalidate="novalidate">
        <div class="form-main">
            <div class="job-details">
                <fieldset>
                    <legend>Job Details</legend>
                        <label for="reference-no">Job Reference Number:</label>
                        <input type="text" id="reference-no" name="reference-no" pattern="[a-zA-Z0-9]{5}" required="required">
                        <br>
                        <p>Job Title:</p>
                        <select name="job-title" id="job-title">
                            <option value="">Please Select</option>
                            <option value="Junior System Admin">Junior System Admin</option>
                            <option value="Network Architect">Network Architect</option>
                        </select>
                </fieldset>
                <fieldset>
                    <legend>User Info</legend>
                    
                    <label for="username">User</label>
                    <input type="text" id="username" name="username">

                    <label for="password">Pass</label>
                    <input type="password" id="password" name="password">

                </fieldset>
            </div>
            <div class="personal-details">
                <fieldset>
                        <legend>Personal Details</legend>
                        <div class="form-control">
                            <p>
                                <label for="fname">Given Name</label> 
                                <input type="text" name= "fname" id="fname" />
                                <small></small>
                            </p>
                        </div>
                        <div class="form-control">
                            <p>     
                                <label for="gname">Family Name</label> 
                                <input type="text" name= "gname" id="gname"/>
                                <small></small>
                            </p>
                        </div>
                        <div class="form-control"> 
                            <p>    
                                <label for="dob">Date of Birth</label> 
                                <input type="date" name= "dob" id="dob" required="required"/> 
                                <small></small>   
                            </p>
                        </div> 
                        <p>Gender:</p>
                        <input type="radio" name="gender" value="male" id="male" checked="checked">
                        <label for="male">Male</label>
                        
                        <input type="radio" name="gender" id="female" value="female" checked="checked">
                        <label for="female">Female</label>
                </fieldset>
            </div>
            <div class="address-details">
                <fieldset>
                    <legend>Address</legend>
                       <div class="form-control">
                            <p>
                                <label for="street-address">Street Address</label>
                                <input type="text" id="street-address" name="street-address" required="required">
                                <small></small>
                            </p>
                        </div>
                        <div class="form-control">
                            <p>
                                <label for="suburb">Suburb-Town</label>
                                <input type="text" id="suburb" name="suburb" required="required">
                                <small></small>
                            </p>
                        </div>
                        <div class="form-control">
                            <p>
                                <label for="postcode">Postcode: </label>
                                <input type="text" id="postcode" name="postcode" pattern="\d{4}" required="required">
                                <small></small>
                            </p>
                        </div>
                    <div class="form-control">
                        <label>State:</label>
                            <select name="state" id="state" required="required">
                                <option value="">Please Select State</option>
                                <option value="QLD">QLD</option>
                                <option value="VIC">VIC</option>
                                <option value="NSW">NSW</option>
                                <option value="NT">NT</option>
                                <option value="WA">WA</option>
                                <option value="SA">SA</option>
                                <option value="TAS">TAS</option>
                                <option value="ACT">ACT</option>
                            </select>
                            <small></small>
                    </div>
                </fieldset>  
            </div>
            <div class="contact-details">
				<fieldset>    
                    <legend>Additional Information</legend>
                    <div class="form-control">
                        <p>
                            <label for="email">Email: </label>
                            <input type="text" id="email" name="email" required="required">
                            <small></small>
                        </p>
                    </div>
                    <div class="form-control">
                        <p>
                            <label for="phone">Phone Number: </label>
                            <input type="text" id="phone" name="phone" required="required">
                            <small></small>
                        </p>
                    </div>
				</fieldset>
            </div>      
            <div class="skill-details">  
            <fieldset>
                    <legend>Skills</legend>
                    <input type="checkbox" id="programming" name="programming" class="rcheck">
                    <label for="programming"> Programming</label>

                    <input type="checkbox" id="linux" name="linux/unix" class="rcheck">
                    <label for="Linux/Unix"> Linux/Unix</label>

                    <input type="checkbox" id="networking" name="networking" class="rcheck">
                    <label for="Networking"> Networking</label>

                    <input type="checkbox" id="communication" name="communication" class="rcheck">
                    <label for="Communication"> Communication</label>

                    <input type="checkbox" id="others" name="others" class="rcheck">
                    <label for="others"> Others</label>
                    <div class="form-control"> 
                        <p>
                            <label for="other-skills">Other Skills</label>
                            <br>
                            <textarea id="other-skills" name="other-skills" placeholder="List you additional skills here" rows="4" cols="33"></textarea>
                            <small></small>
                        </p> 
                    </div>
            </fieldset>
            </div>
            <small class="final-error"></small>
            </div>
            <div class="popup-container" id="popup-container">
                <div class="popup">
                    <h1>Timeout Warning</h1>
                    <p>You Will be Redirected to Homepage in 40 seconds<br>Please Complete your form</p>
                </div>
            </div>
            <div class="page-btn-wrapper">    
                <div>
                    <input class ="submit-btn" type= "submit" value="Book" name = "Submit" />
                </div>
                <div>
                    <input class ="reset-btn" type = "reset" value="Reset"/>
                </div>
            </div>
        <? include_once "footer.inc"; 
        ?>
    </form>
    </body>
    </html>
