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
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "miti";

   $watchMan = new mysqli($host, $user, $pass, $db);

   if($watchMan->connect_error){
    echo "Some thing is wrong";
   }else{
       echo "Successfully Connected with $db Database";
   }
   ?> 
</body>
</html>