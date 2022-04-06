<?php
  $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
  $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

  if(isset($_POST['submit'])){
    if ($uname == "admin") {
      if ($pass == "password") {
        echo "<script>alert('Welcome Admin1!!');</script>";
        header("Location: main.php");
        echo "<script>alert('Welcome Admin2!!');</script>";
      }
      else{
        echo "<script>alert('Invalid Password!!');</script>";
      }
    }
    else{
      echo "<script>alert('Invalid Username!!');</script>";    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width: 50%;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #FFA500;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #ff0000;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 10%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<center><h2>Login Form</h2></center>

<center><form method="post">
  <div class="imgcontainer">
    <img src="dhl.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" pattern="[a-zA-Z0-9]+" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit" name="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form></center>

</body>
</html>
