<!doctype html>
<html>
<head>
<title>To-let Spaces</title>
<meta charset ="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="resi.css">
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

</head>

<body>
<div>
</div>


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


</html>