<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<script src="js/abc.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="POST" action="#" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="text" name="user" placeholder="Email" required class="form-control input-lg" value="joestudent@gmail.com" />
          
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" name="pass"/>
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
        
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "ubl";

   $conn = new mysqli($host,$user,$pass,$db);
   // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $webUser = $_REQUEST["user"];
    $webPass = $_REQUEST["pass"];
    $sql = "Select * from users where user='".$webUser."' or cell='".$webUser."' and pass='".$webPass."' ";
   
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $_SESSION["user"] = $row["Name"];
            $_SESSION["id"] = $row["id"];
            $_SESSION["pic"] = $row["pic"];
            header('Location: http://localhost/class12/profile.php');
        }
    }

    $conn->close();
}
?>
  </div>
  

  
  
</div>
</body>
</html>