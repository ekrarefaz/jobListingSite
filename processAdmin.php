<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Manager Page</title>
</head>
<body>
    <?php
// check if admin login was success else redirect to login page if page tried to access directly
        session_start();
        if(empty($_SESSION["admin"])){
            header("location: login.php");
        }
        include_once "settings.inc";
        $sql_table = "eoi";
// make connection to database
        $conn = mysqli_connect(
            $host,
            $user,
            $pwd,
            $sql_db
        );

        if(isset($_POST["option"])){
            $option = $_POST["option"];
        }

        $job_ref = trim($_POST["job_ref"]);
        $name = trim($_POST["name"]);
        $eoi_id = trim($_POST["eoi_id"]);
        $new_status = trim($_POST["status"]);
        $delete_ref = trim($_POST["delete_ref"]);
       // check which option was selected from drop-down menu
	 switch($option){
            case 'full-db':
                $query = "SELECT * FROM $sql_table";
                break;
            case 'job-query':
                $query = "SELECT * FROM $sql_table WHERE job_ref=\"$job_ref\"";
                break;
            case 'name-query':
                $query = "SELECT * FROM $sql_table WHERE CONCAT(first_name, ' ', last_name) LIKE \"%$name%\"";
                break;
            case 'eoi-query':
                $query = "UPDATE $sql_table SET app_status = \"$new_status\" WHERE eoi_id = \"$eoi_id\"";
                echo "<p>Status Updated in DB</p>";
                break;
            case 'delete-query':
                $query = "DELETE FROM $sql_table WHERE job_ref=\"$delete_ref\"";
                break;
        }
        if(!$conn){
            echo "<p>Connection Fail</p>";
        }
        else{
            echo "<p>SuccessFul Connection</p>";
            $result = mysqli_query($conn, $query);
            if(!$result){
                echo "<p>Something Wrong with $query</p>";
            }
            else{
                echo "<table border=\"1\">\n";
                echo "<tr>";
                echo "<th>eoi_id</th> <th>job-reference</th> <th>firstname</th> <th>lastname</th>  <th>gender</th>  <th>dob</th> <th>street-address</th> <th>suburb-town</th> <th>state</th> <th>postcode</th> <th>email</th> <th>phone</th> <th>skills</th> <th>other-skills</th> <th>status</th>";
                echo "</tr>";
// display the table if delete query or status update query was no selected
		if ($option != 'delete-query' && $option != 'eoi-query'){
                while ($row = mysqli_fetch_assoc($result)){

                echo "<tr>";
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
	}
            echo "</table>";
        }
            mysqli_close($conn);
            unset($_SESSION["loggedin"]);
        }
    ?>
</body>
</html>
