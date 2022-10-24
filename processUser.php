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
        <title>User Application Manage</title>
    </head>
<body>
    <?php
        session_start();
        if(empty($_SESSION["loggedin"])){
            header("location: login.php");
        }
        include_once "header.inc";
        include_once "settings.inc";
        $sql_table = "eoi";
        $conn = $conn = mysqli_connect($host,$user,$pwd,$sql_db);
        if(!$conn){
            echo "Failed Conn";
        }
        else{
        // draw the information table for user     
            $username = $_SESSION["username"];
            $query = "SELECT * from eoi WHERE username=\"$username\"";
            $result = mysqli_query($conn,$query);
            if(!$result){
                echo "$query FAILED";
            }
            else{ 
                echo "<table class =\"dbtable\">\n";
                echo "<tr>";
                echo "<td>username</td> <td>eoi_id</td> <td>job-reference</td> <td>firstname</td> <td>lastname</td>  <td>gender</td>  <td>dob</td> <td>street-address</td> <td>suburb-town</td> <td>state</td> <td>postcode</td> <td>email</td> <td>phone</td> <td>skills</td> <td>other-skills</td> <td>status</td>";
                echo "</tr>";
                while ($row = mysqli_fetch_assoc($result)){
    
                    echo "<tr>";
                    echo "<td>",$row["username"],"</td>";
                    echo "<td>",$row["eoi_id"],"</td>";
                    echo "<td>",$row["job_ref"],"</td>" ;
                    echo "<td>",$row["first_name"],"</td>" ;
                    echo "<td>",$row["last_name"],"</td>" ;
                    echo "<td>",$row["gender"],"</td>" ;
                    echo "<td>",$row["dob"],"</td>" ;
                    echo "<td>",$row["street_address"],"</td>" ;
                    echo "<td>",$row["suburb_town"],"</td>" ;
                    echo "<td>",$row["statename"],"</td>" ;
                    echo "<td>",$row["postcode"],"</td>" ;
                    echo "<td>",$row["email"],"</td>" ;
                    echo "<td>",$row["phone"],"</td>" ;
                    echo "<td>",$row["skills"],"</td>" ;
                    echo "<td>",$row["other_skills"],"</td>" ;
                    echo "<td>",$row["app_status"],"</td>" ;
                    echo "</tr>";
                }
                mysqli_free_result($result);
                echo "</table>";
                echo "<button>Delete</button>";
            }
	// close database conection and remove login success from session
            mysqli_close($conn);
            unset($_SESSION["loggedin"]);
        }
    ?>
</body>
</html>
