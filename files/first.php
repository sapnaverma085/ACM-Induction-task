<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width", initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

    <title>Document</title>
  </head>
  <body>
      <div class="container">
    <form  method="post">
        <h1 class="heading">Sign up Now</h1>
        <hr>
        <p>First Name: *<input type="text" name="fname" id="fname" placeholder="enter your first name" required>   </p>
<p>Last Name: * <input type="text" name="lname" id="lname" placeholder="enter your last name" required></p>
<p>Email: * <input type="email" name="email" id="email" placeholder="enter your email" required></p>
<p>password: * <input type="password" name="password" id="password" placeholder="enter your password" required></p> 
<p id="already">
    Already sign up? <a href="login.php">login</a>


</p>
<p><span><input type="checkbox" name="checkbox" id="checkbox" required></span>I agree to the terms of services</p>
<input type="submit" value="sign up"> 
  </form>
</div>

  </body>
</html>
<?php
$server="localhost";
$username="root";
$password="";
$con = mysqli_connect($server,$username,$password,"signup");
if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_error());
}
// echo"success connection to the db";
$fname  = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password  = $_POST['password'];
$sql = "INSERT INTO `signup` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password');";

//if($sql)

   // echo"successful";


if($con->query($sql)== true)
{
    echo "sucessfully inserted";
}
else{
    echo"ERROR: $sql <br> $con->error";

} //to create a merge conflict
echo "to create a conflict";
$con->close();
?>
