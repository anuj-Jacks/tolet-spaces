<?php


if(isset($_POST['search']))
{
	if($_POST['valueToSearch']==!"")
	{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM property WHERE Oname LIKE '%".$valueToSearch."%'";
	$query = "SELECT * FROM property WHERE Locality LIKE '%".$valueToSearch."%'";
	$query = "SELECT * FROM property WHERE bhk LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
	}
	else {
	 $query = "SELECT * FROM property WHERE ResType = 'family'";
    $search_result = filterTable($query);
}
    
}
 elseif (isset($_POST['filter2'])) {
    $query = "SELECT * FROM property WHERE ResType = 'bachelor'";
    $search_result = filterTable($query);
}
else {
	 $query = "SELECT * FROM property WHERE ResType = 'family'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "tolet");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

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
 <form action="resi.php" method="post">
		 
			<input type="submit" name="filter1" value="Family">
		    <input type="submit" name="filter2" value="Bachelor"><br><br>
			
			
		
            <input type="text" name="valueToSearch" placeholder="Value To Search">
			<select name="valueToSearch">
				<option  value="Gomtinagar">Gomtinagar</option>
				<option  value="GomtinagarEX">Gomtinagar Extension</option>
				<option  value="hazratganj">Hazaratganj</option>
            </select>
			<select name="valueToSearch">
				<option  value="2">2 BHK</option>
				<option  value="3">3 BHK</option>
				<option  value="4">4 BHK</option>
            </select>
			<br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Address</th>
                    <th>Area</th>
                    <th>Budget</th>
                    <th>Furnishing</th>
					<th>bhk</th>
					<th>ResType</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo " " .$row['Housenum']. " " .$row['Locality']. " " .$row['City']. " " .$row['State']. " " .$row['Country']." <br> " .$row['pincode']. " ";?></td>
                    <td><?php echo $row['Area'];?></td>
                    <td><?php echo $row['Budget'];?></td>
                    <td><?php echo $row['Furnishing'];?></td>
					<td><?php echo $row['bhk'];?></td>
					<td><?php echo $row['ResType'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
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
