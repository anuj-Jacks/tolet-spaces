<!doctype html>
<html>
<head>
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<div id="Sign-Up">
<form name="loginForm" method="POST" action="login.php">
<table align="center">

<tr>
<td colspan="2"><font size=4><center><b>LOGIN</b></center></font></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" placeholder="Enter Email" name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password"  placeholder="Password" name="pwd"></td>
</tr>

<tr>
<td ><input type="Reset" class="button"></td>
<td><input class="button" type="submit" value="Login"></td>
</tr>

</table>
</form>
<div>

</body>
</html>




<?php

// Connect to the database
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
$con = mysqli_connect("localhost","root","","tolet");

if(!$con)
{
    die('Connection Failed'.mysqli_error($con));
}
else { echo"connected to server\n";}

$email = $_POST['userid'];
$pass = $_POST['pwd'];
if( isset( $email )&& isset($pass)){
$query= "SELECT Username, password FROM admin WHERE Username = '$email'";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

if($row["Username"]==$email && $row["password"]==$pass)
{
    echo"You are a validated user.";
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
}
}
	?>