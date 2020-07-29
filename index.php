<?php
include_once('display.php');
$query="select * from flight_details";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>flight details</title>
</head>
<body style="background-image: url('img/ap2.jpeg'); background-repeat: no-repeat;background-size:cover;">
	<table align="center" border="1px" style="width:600px;line-height:40px";>
		<tr>
			<th colspan="4"><h2>Flight details</h2></th>
			
		</tr>
		<tr>
			<th>Source</th>
			<th>Destination</th>
			<th>Price</th>
			<th>Book Flight</th>
		</tr>
		<?php
			while($rows=mysqli_fetch_assoc($result))
			{
		?>		
				<tr>

					<td><?php echo $rows['source']; ?></td>
					<td><?php echo $rows['destination']; ?></td>
					<td><?php echo $rows['price']; ?></td>
					
					<td><a href="booked.html" >BOOK FLIGHT TICKETS</a></td>
				</tr>
		<?php 
			}
		?>	
	</table>
</body>
</html>