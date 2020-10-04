<?php
session_start();

if(isset($_SESSION['username'])){

  header("Location: index.php");
  exit;
}


$username=$pass="";

$nameErr=$passErr="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if($_SERVER['REQUEST_METHOD']== 'POST'){
     
    if (empty(trim($_POST["username"]))) {
        $nameErr = "Name is required";
      
      }
      elseif(!preg_match("/^[a-zA-Z0-9\.]*$/", $_POST["username"])){
          $nameErr = "Only alphabets, numbers are allowed";
      }
      else {
        $username = test_input($_POST["username"]);
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      }

      if(empty(trim($_POST["password"]))){
        $passErr ="Password Required";
      }elseif(!preg_match("/^[a-zA-Z0-9@\.]*$/", $_POST["password"])){
        $passErr = "Check Password Input";
  
      }else{
        $pass = test_input($_POST["password"]);
        $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      }
      
      if(empty($nameErr)&&empty($passErr)){
        header('Location: index.php?username='.$username);
      }
  





  }











?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="scripts.js"></script>
</head>
<body>

  <div class="wrapper">
        <h1>LOGIN</h1><br>
        <center><H3>New User?<a href="signin1.php" onmouseover="style.color='red'" onmouseout="style.color='black'" > CLICK TO SIGN IN </a></H3></center><br>
        <div id="error_message"></div>


        <form action="" method="POST" >
            <div class="input_field">
                <label for="username">Username<span class="error">*  <?php echo $nameErr;?></label>
                <br>
                <input type="text" name="username" id="username" placeholder="USERNAME">
            </div>
            <br>

            <div class="input_field">
                <label for="password">Password<span class="error">*  <?php echo $passErr;?></label>
                <br>
                <input type="password" name="password" id="password" placeholder="PASSWORD" >
            </div>
            <br>
            <div class="btn">
                <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'"> LOGIN</button> 
            </div>
        </form>
    </div>
</body>
</html>