<?php


if(isset($_POST['search']))
{
	if($_POST['valueToSearch']==!"")
	{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM property WHERE Oname LIKE '%".$valueToSearch."%'";
	 $query = "SELECT * FROM property WHERE Locality LIKE '%".$valueToSearch."%'";
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

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="test4.php" method="post">
		 
			<input type="submit" name="filter1" value="Family">
		    <input type="submit" name="filter2" value="Bachelor"><br><br>
		
            <input type="text" name="valueToSearch" placeholder="Value To Search">
						<select name="valueToSearch">
				<option   value="Gomtinagar">Gomtinagar</option>
				<option   value="GomtinagarEX">Gomtinagar extension</option>
				<option   value="hazratganj">Hazaratganj</option>
  
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
        
    </body>
</html>
