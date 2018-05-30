<?php 
session_start();

$_SESSION["name"]="Junaid";
$_SESSION["age"]="18";
$_SESSION["contact"]="0333-1231237";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Hello Mr/Miss".$_SESSION['name']." you are ".$_SESSION['age']." old your contact number is ".$_SESSION['contact']."</h1>";
echo $_COOKIE["user"];
echo $_COOKIE["age"];
?>    
</body>
</html>