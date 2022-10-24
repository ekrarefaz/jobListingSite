<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// include required php files

    include "./lib/password_compat/lib/password.php";
    include_once "settings.inc";

// redirect to apply page if processEOI accessed directly
    if(!isset($_POST["Submit"])){
        header("location: apply.php");
    }
        
    else{
        $sql_table = "eoi";
        $errmsg = "";
// function to sanitize input
        function sanitize_input($data){
            $data= trim($data);
            $data= stripslashes($data);
            $data= htmlspecialchars($data);
            return $data;
        }
        function check_ifempty($data){
            if ($data != ""){
                return true;
            }
            else{
                return false;
            }
        }
// function to validate postcode and state match

        function match_state_postcode($state,$postcode){
            $postcode = (string)$postcode;
            
                switch ($state){
                    case "VIC":
                        if (substr($postcode,0,1) == 3){
                            $match = true;
                            break;
                        }
                        else if(substr($postcode,0,1) == 8){
                            $match = true;
                            break;
                        }
                        else{
                            $match = false;
                            break;
                        }
                    case "QLD":
                        if(substr($postcode,0,1) == 4){
                            $match = true;
                            break;
                        }
                        else if (substr($postcode,0,1) == 9){
                            $match = true;
                            break;
                        }
                        else{
                            $match = false;
                            break;
                        }                
                    case "NSW":
                        if (substr($postcode,0,1) == 1){
                            $match = true;
                            break;
                        }
                        else if(substr($postcode,0,1) == 2){
                            $match = true;
                            break;
                        }
                        else{
                            $match = false;
                            break;
                        } 
                    case "WA":
                        if (!(substr($postcode,0,1) == 6 )){
                            $match = false;
                            break;
                        } 
                        else{
                            $match = true;
                            break;
                        }
                    case "SA":
                        if (!(substr($postcode,0,1) == 5 )){
                            $match = false;
                            break;
                        }
                        else{
                            $match = true;
                            break;
                        }
                    case "TAS":
                        if (!(substr($postcode,0,1) == 7 )){
                            $match = false;
                            break;
                        }
                        else{
                            $match = true;
                            break;
                        }
                    case "NT":
                        if (!(substr($postcode,0,1) == 0 )){
                            $match = false;
                            break;
                        }
                        else{
                            $match = true;
                            break;

                        }
                    case "ACT":
                        if (!(substr($postcode,0,1) == 0 )){
                            $match = false;
                            break;
                        }
                        else{
                            $match = true;
                        }
                }
        
            return $match;
        }
// input validation

        if(isset($_POST["reference-no"])){
            $ref_no = $_POST["reference-no"];
            if(check_ifempty($ref_no)){
                if(!preg_match("/^[a-zA-Z0-9]*$/",$ref_no)){
                    $errmsg .= "Only 5 Alphanumeric Chars for Reference ";
                }
                else{
                    $ref_no = sanitize_input($ref_no);
                }
            } 
            else{
                $errmsg .= "Empty Input!! ";
            }
        }

        if(isset($_POST["username"])){
            $username = $_POST["username"];
            if(check_ifempty($username)){
                $username = $_POST["username"];
            }
        }
        else{
            $errmsg .= "Empty Username";
        }

        if(isset($_POST["password"])){
            $password = $_POST["password"];
            if(check_ifempty($password)){
                $password = $_POST["password"];
                $hash = password_hash($password,PASSWORD_DEFAULT);
            }
        }
        else{
            $errmsg .= "Invalid Password";
        }


        if(isset($_POST["fname"])){
            $fam_name = $_POST["fname"];
            if(check_ifempty($fam_name)){
                if(!preg_match("/^[a-zA-Z]*$/",$fam_name)){
                    $errmsg .= "Only Alpha Chars ";
                }
                else{
                    $fam_name = sanitize_input($fam_name);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
        if(isset($_POST["gname"])){
            $given_name = $_POST["gname"];
            if(check_ifempty($given_name)){
                if(!preg_match("/^[a-zA-Z]*$/",$given_name)){
                    $errmsg .= "Only Alpha Chars ";
                }
                else{
                    $given_name = sanitize_input($given_name);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
        if(isset($_POST["dob"])){
            $dob = $_POST["dob"];
            if(check_ifempty($dob)){
                if(!preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]*$/",$dob)){
                    $errmsg .= "Wrong Date Format ";
                }
                else{
                    $dob = sanitize_input($dob);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
// checking appropriate age

        $age = date_diff(date_create($dob), date_create('now'))->y;
        if($age > 50 || $age < 15 ){
            $errmsg = "Inappropriate Age";
        }

        if(isset($_POST["street-address"])){
            $street = $_POST["street-address"];
            if(check_ifempty($street)){
                if(!preg_match("/^[a-zA-Z0-9\s]*$/",$street)){
                    $errmsg .= "Invalid Street Address ";
                }
                else{
                    $street = sanitize_input($street);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
        if(isset($_POST["suburb"])){
            $suburb = $_POST["suburb"];
            if(check_ifempty($suburb)){
                if(!preg_match("/^[a-zA-Z]*$/",$suburb)){
                    $errmsg .= "Invalid Suburb ";
                }
                else{
                    $suburb = sanitize_input($suburb);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
        if(isset($_POST["state"])){
            $state = $_POST["state"];
            if(check_ifempty($state)){
                if(!preg_match("/^[a-zA-Z]*$/",$state)){
                    $errmsg .= "Invalid State ";
                }
                else{
                    $state = sanitize_input($state);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
        if(isset($_POST["postcode"])){
            $postcode = $_POST["postcode"];
            if(check_ifempty($postcode)){
                if((!preg_match("/^[0-9]{4}*$/",$postcode)) && strlen($postcode) != 4){
                    $errmsg .= "Invalid Postcode  ";
                }
                else{
                    $postcode = sanitize_input($postcode);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }
        if(isset($_POST["email"])){
            $email = $_POST["email"];
            if(check_ifempty($email)){
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errmsg .= "Invalid email format";
                  }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }

        if(isset($_POST["phone"])){
            $phone = $_POST["phone"];
            if(check_ifempty($phone)){
                if(!preg_match("/^[0-9]*$/",$phone)){
                    $errmsg .= "Invalid Phone ";
                }
                else{
                    $phone = sanitize_input($phone);
                }
            }
            else{
                $errmsg .= "Empty Input!! ";
            }
        }

        if(isset($_POST["gender"])){
            $gender = $_POST["gender"];
        }
        $skills = "";

        if(isset($_POST["networking"])){
            $skills = $skills."networking, ";
        }
        if(isset($_POST["programming"])){
            $skills =$skills."programming, ";
        }
        if(isset($_POST["communication"])){
            $skills = $skills."communication, ";
        }
        if(isset($_POST["linux/unix"])){
            $skills = $skills."linux/unix, ";
        }
        if(isset($_POST["others"])){
            $skills = $skills."others, ";
            if(isset($_POST["other-skills"])){
                $other_skills = $_POST["other-skills"];
                if(check_ifempty($other_skills)){
                    if(!preg_match("/^[a-zA-Z0-9]*$/",$other_skills)){
                        $errmsg .= "Other Skills cannot be empty ";
                    }
                    else{
                        $other_skills = sanitize_input($other_skills);
                    }
                }
                else{
                    $errmsg .= "Other Skills cannot be empty ";
                }
            }
        }

        if(match_state_postcode($state,$postcode) === false){
            $errmsg .= "Invalid Postcode for State";
        }
// connection to database establish

        $conn = mysqli_connect($host,$user,$pwd,$sql_db);
        if(!$conn){
            echo "<p>Couldn't Reach DB</p>";
        }
        else{
            $app_status = "new";
            echo "<p>Successfully Accessed DB</p>";
// check if table exists

            $check_table_query = ("SELECT 1 FROM $sql_table");
            $exists = mysqli_query($conn, $check_table_query);
// if table doesn't exist create one

            if(!$exists){
                $create_table = ("CREATE TABLE $sql_table (
                eoi_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                job_ref VARCHAR(5) NOT NULL,
                first_name VARCHAR(25) NOT NULL,
                last_name VARCHAR(25) NOT NULL,
                gender VARCHAR(6) NOT NULL,
                dob DATE NOT NULL,
                street_address VARCHAR(100) NOT NULL,
                suburb_town VARCHAR(50) NOT NULL,
                statename VARCHAR(5) NOT NULL,
                postcode INT NOT NULL,
                email VARCHAR(50),
                phone INT NOT NULL,
                skills VARCHAR(100) NOT NULL,
                other_skills TEXT,
                username VARCHAR(25),
                passwd TEXT,
                app_status VARCHAR(10)

                    )
                ");

                $table_status = mysqli_query($conn, $create_table);
                if($table_status){
                    echo "Table Created";
                }
                else{
                    header("location: error.html");
                }
            }
            else{
                $table_status = true;
            }

// make insert from data into table 
            if($table_status){
                $query =
                ("INSERT INTO $sql_table (job_ref, first_name, last_name, gender, dob, street_address, suburb_town, statename, postcode, email, phone, skills, other_skills, username, passwd, app_status)
                VALUES 
                ('$ref_no','$fam_name','$given_name', '$gender', '$dob', '$street','$suburb', '$state', '$postcode',' $email', '$phone', '$skills', '$other_skills', '$username', '$hash', '$app_status')");
                if ($errmsg == ""){
                    $result = mysqli_query($conn, $query);
                    if(!$result){
                        header("location: ./error.php");
                    }
                    else{
                        echo "<p>Successfully Added to DB</p>";
                        header("location: ./success.php");
                    }
// grab the EOI numbe rand store in session to show successful application
                    session_start();
                    $eoi_query = mysqli_query($conn,"SELECT eoi_id FROM $sql_table WHERE first_name = \"$fam_name\" AND dob = \"$dob\"");
                    $_SESSION["errmsg"] = $errmsg;
                    while ($row = mysqli_fetch_assoc($eoi_query)){
                        $_SESSION["eoi_id"] = $row["eoi_id"];
                    }
                    $_SESSION["errmsg"] = $errmsg;

                }
 // redirect to erro rpage on failure to insert data 
               else{
                    session_start();
                    $_SESSION["errmsg"] = $errmsg;
                    header("location: ./error.php");
                }
            }

        }
    }
    

?>
</body>
</html>
