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
setcookie("user","Meer Sadiq",time()-10,"/");
setcookie("age","25",time()+20,"/");

echo $_COOKIE["user"];
echo $_COOKIE["age"];

?>


</body>
</html>