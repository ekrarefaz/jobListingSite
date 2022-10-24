<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
</head>
<body>
<?php
    include "./lib/password_compat/lib/password.php";
    session_start();
    function check_ifempty($data){
        if ($data != ""){
            return true;
        }
        else{
            return false;
        }
    }
    function validate_user(){
        if(isset($_POST["username"])){
            $username = $_POST["username"];
            if(check_ifempty($username)){
                $username = $_POST["username"];
                return $username;
            }
        }
        else{
            header("location: login.php");
        }
    }
    function validate_pass(){
        if(isset($_POST["password"])){
            $password = $_POST["password"];
            if(check_ifempty($password)){
                $password = $_POST["password"];
                return $password;
            }
        }
        else{
            header("location : login.php");
        }
    }
// fucntion to verify admin login
    function admin($conn,$username,$password){
        $sql_table = "user";
        $query = "SELECT passwd FROM $sql_table WHERE username=\"$username\"";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "$query FAILED";
        }
        else{
            while ($row = mysqli_fetch_assoc($result)){
                $hash = $row["passwd"];
            }
            $verify = password_verify($password,$hash);
            echo "$hash";
            echo "$password";
            if($verify){
                $_SESSION["admin"] = true;
                header("location: ./manage.php");
            }
            else{
                echo "Login Failed";
            }
        }
    }
// function to verify user login
    function user($conn,$username,$password){
        $sql_table = "eoi";
        $query = "SELECT passwd FROM $sql_table WHERE username=\"$username\"";
        $result = mysqli_query($conn,$query);
        if(!$result){
            echo "$query FAILED";
        }
        else{
            while ($row = mysqli_fetch_assoc($result)){
                $hash = $row["passwd"];
            }
            if(empty($hash)){
                header("location : loginFail.php");
            }
            else{
//match password stored in database to user input
                $verify = password_verify($password,$hash);
                if($verify){
                    $_SESSION["username"] = $username;
                    $_SESSION["loggedin"] = true;
                    header("location: ./processUser.php");
                }
                else{
                    header("location :./ loginFail.php");
                }
            }
        }
    }
    function main(){

        $username = validate_user();
        $password = validate_pass();
        include_once "settings.inc";
        $conn = mysqli_connect($host,$user,$pwd,$sql_db);
        
        if(!$conn){
            echo "Connection Failed";
        }
        else{
// check if admin login or user login was attempted
            if ($username == "admin"){
                admin($conn,$username,$password);
            }
            else{
                user($conn,$username,$password);
            }
        }

    }
    main();
?>
</body>
</html>
