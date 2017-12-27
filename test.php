<?php session_start();
$conn=mysqli_connect('localhost','root','','task1'); ?>

<?php $a='';$b='';$fname='';$lname='';$email='';$pass='';$cpass=''; 
if(isset($_POST['submit'])&&$_POST['fname']!=''&&$_POST['lname']!=''&&$_POST['email']!=''&&$_POST['pass']!=''&&$_POST['cpass']!='' ){

	
	$fname=$_POST['fname'];


	$lname=$_POST['lname'];

	
	$email=$_POST['email'];

	
	$pass=$_POST['pass'];



	$cpass=$_POST['cpass'];

	
	
	if($pass==$cpass){
		
	

	$query="insert into profile(name,email,password) values('$fname$lname','$email','$pass')";
	mysqli_query($conn,$query);
}
else{
	$a="passwords do not match!";
}
}

?>
<!doctype html>
<html>
<head>
<title>
		Login/Register!
</title>
	
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fonts/fontcss/font-awesome.css">
	
</head>
	<body>
		<div class="container-fluid">
<!-- Registration page strts here-->			
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h2 class="text-center">Not A Member Yet?</h2>
		<h3 class="text-center">Register Here</h3>
		<h2 class="text-center"><span class="fa fa-hand-o-down" aria-hidden="true"></span></h2>
		<form method="POST" action="#">
			<div class="form-group">
				<label for="fname" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">First Name</label>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
				<input type="text" class="form-control" id="fname" name="fname" placeholder="Ex-Dheerendra"><?php echo $b; ?>
			</div>
			<div class="clearfix"></div>
			</div>			
			<div class="form-group">
				<label for="lname" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">Last Name</label>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">	
				<input type="text" class="form-control col-lg-4 col-md-4 col-sm-4 col-xs-8" id="lname" name="lname" placeholder="Ex-Rajput">
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="form-group">
				<label for="email" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">Email</label>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">	
				<input type="mail" class="form-control col-lg-4 col-md-4 col-sm-4 col-xs-8" id="email" name="email" Placeholder="Ex-dheerendra687@gmail.com">
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="form-group">
				<label for="pass" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">Password</label>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">	
				<input type="password" class="form-control col-lg-4 col-md-4 col-sm-4 col-xs-8" id="pass" name="pass">
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="form-group">
				<label for="cpass" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">Confirm Password</label>
			<div class="col-lg-410col-md-10 col-sm-10 col-xs-8">	
				<input type="password" class="form-control col-lg-4 col-md-4 col-sm-4 col-xs-8" id="cpass" name="cpass">
			</div>
			<?php echo $a; ?>
			<div class="clearfix"></div>
		</div>
		
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
				<input type="submit" class="btn btn-primary" name="submit" value="Register!">
			
		</div>
	
</form>

</div>
<?php 
if(isset($_POST['login'])){
	$loginmail=$_POST['loginmail'];
	$loginpass=$_POST['loginpass'];
	$select="select * from profile where email='".$loginmail."' && password='".$loginpass."' ";
	$res=mysqli_query($conn,$select);
	if($x=mysqli_fetch_array($res)){
		$_SESSION['profile_holder']=$x['name'];
		header("location:Welcome.php");
	}



else{
	echo "<script>alert('email&password do not match');</script>";
}
}

?>
<!--Login Form Starts Here -->
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h2 class="text-center">Already a Member?</h2>
		<h3 class="text-center">Login Here</h3>
		<h2 class="text-center"><span class="fa fa-hand-o-down" aria-hidden="true"></span></h2>
		<form method="POST" action="#">
			<div class="form-group">
				<label for="mail" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">Email</label>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
				<input type="mail" class="form-control" id="mail" name="loginmail" placeholder="Ex-Dheerendra687@gmail.com">
			</div>
			<div class="clearfix"></div>
			</div>			
			<div class="form-group">
				<label for="Password" class="col-lg-2 col-md-2 col-sm-2 col-xs-4">Password</label>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">	
				<input type="password" class="form-control" id="Password" name="loginpass">
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">
				<input type="submit" class="btn btn-primary btn-lg" style="border-radius:50%;" name="login" value="Ready to go">
			
		</div>
	
			
	
</form>

</div>

		</div>





</div>
	</body>
</html>