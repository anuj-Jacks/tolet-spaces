<!doctype html>
<html>
<head>
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="regis.css">
</head>

<body>
<div id="Sign-Up">
<form name="loginForm" method="POST" action="login.php">
<table align="center">

<tr>
<td colspan=2><center><font size=4><b>Login</b></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size="25" name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size="25" name="pwd"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input id="button" type="submit" value="Login"></td>
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
else{ echo"connected to server\n";}

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