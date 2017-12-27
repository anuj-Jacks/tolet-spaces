<!DOCTYPE HTML> 
<html>
 <head> 
 <title>Sign-Up</title> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="regis.css">
 
 </head> 
 <body >
 <div id="Sign-Up"> 
 <fieldset style="width:30%">
 <legend>Registration Form</legend>
 <table border="0" align="center"> 
 <tr>
 <form method="POST" action="regis.php">
 <td>Name</td><td> <input type="text" name="name"></td>
 </tr> 
 <tr> 
 <td>Email</td><td> <input type="text" name="email"></td>
 </tr> 
 <tr> <td>Contact</td><td> <input type="number" name="contact"></td> 
 </tr> 
 <tr> <td>Property Type</td><td> <select name="property">
  <option value="residential">Residential</option>
  <option value="commercial">Commercial</option>
  <option value="silent office">Silent office</option>
  <option value="coworking">Co-working office</option>
</select></td> 
 </tr> 
 <tr> <td>Area</td><td><select name="area">
  <option value="Gomtinagar">Gomti Nagar</option>
  <option value="GomtiNagar Ext">Gomti Nagar Extension</option>
 
</select></td>
 </tr> 
 <tr> <td><input id="button" type="submit" name="submit" value="Rent Your Property"></td>
 </tr> 
 </form> 
 </table>
 </fieldset> 
 </div> 
 </body> 
 </html>
 
 
 <?php
 if( $_SERVER['REQUEST_METHOD'] == "POST" ){
  // Connect to the database
    $con = mysqli_connect("localhost","root","", "tolet");

    if(!$con){
        die('Connection Failed'.mysql_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $prop = $_POST['property'];
    $area = $_POST['area'];    

    if( isset( $name ) && isset( $email ) && isset( $contact ) && isset( $prop ) && isset( $area )){
      
      $query = sprintf("INSERT INTO property (Oname, Oemail, Ocontact, Type, Locality) VALUES ('%s', '%s', %u, '%s', %u)", $name, $email, $contact, $prop, $area);
      
      mysqli_query($con, $query);
      
      if( mysqli_insert_id( $con ) ){
        echo "Updated data successfully\n";
      }
    }
    mysqli_close($con);
 }
 ?>