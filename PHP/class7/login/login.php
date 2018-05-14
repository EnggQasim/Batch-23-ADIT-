<?php
$user = $_REQUEST['user'];
$password = $_REQUEST['pass'];

if($user=="admin" && $password=="admin"){
echo "<h1>VALIDUSER!</H1>";
}else{
echo "<h2>Notvalid user</h2>";
}

?>