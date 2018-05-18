<?php
$host="localhost";
$user="root";
$pass="";
$db ="miti";


$conn = new mysqli($host,$user,$pass,$db);

//Connectivity
if($conn->connect_error){
    die("Sorry");
}

$web_user = $_REQUEST["user"];
$web_pass =$_REQUEST["pass"];

$sql = "Select * from students where email='$web_user' and pass='$web_pass'";

$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $name = $row["name"];
    }
    echo "Welcom Dear $name";
}else{
    echo "Not valid User or Password";
}



?>