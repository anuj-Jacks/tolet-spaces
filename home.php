<!DOCTYPE html>
<html lang="en">

<head>
<title>To-let Spaces</title>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="home.css">

 <script>
      function myMap() {
        var vikas = {lat: 26.849417, lng: 80.995800};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: vikas
        });
        var marker = new google.maps.Marker({
          position: vikas,
          map: map
        });
      }
    </script>
	<script>
// When the user clicks on <div>, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</head>


<body>
<header>
<nav>
  <a href= "login.php">hindi</a>
 </nav>
<div>
<center><img src="tolet.jpg" alt="logo" id="logoimg" ></center>
  <h2>We Let You Spaces</h2>
  </div>
  
 
</header>
 
<section>
<div class="popup" onclick="myFunction()"><center><img src="image/rent.jpg" alt="rent" id="rent"></center>

  <table class="popuptext" id="myPopup">
  <tr>
  <td><a href="resi.php">Residential</a></td>
  <td><a href="resi.php">Commercial</a></td>
  </tr>
  <tr>
  <td><a href="resi.php">Silent office </a></td>
  <td><a href="resi.php">Co-working Office</a></td>
  </tr>
  
  </table>
</div>

<div class="buy" ><center><img src="image/buyhouse.jpg" alt="buy" id="buy"></center></div>
<div class="sell"><a href="regis.php"><center><img src="image/sellrent3.jpg" alt="sellrent" id="sell"></center></a></div>
</section>

<footer>
<div class="footcontainer">
<div id="map">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqkutp8CscYXwHurR6Jl9DQ8U1COUpLbE&callback=myMap"></script>

</div>
<a href= "login.php">Login</a>
<h6>All rights reserved. &#169; copyright 2017 @To-let spaces</h6>
</div>
</footer>

</body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.min.js"></script>
</html>