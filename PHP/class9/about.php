<?php
session_start();
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
echo "<h2>Welcom Dear ".$_COOKIE["user"]."</h2>"
?>  

</body>
</html>