<?php  
include_once 'controller.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page One</title>
</head>
<style type="text/css">
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 5px 5px 5px 5px;
	}
</style>
<body>
	<table>
		<tr> 
			<th>Student Name</th>
			<th>Password</th>
			<th>Edit</th>
			<th>X</th>
		</tr>
		<tr> 
			<?php 
			$sql = "Select  * from tblUser";
			$result = $conn->query($sql);
			if($result->num_rows>0){

				while($rows = $result->fetch_assoc()){

					echo "<td>".$rows['StudentName']."</td>";
					echo "<td>".$rows['Password']."</td>";
					echo "<td><button><a href='controller.php?editEntry=".$rows["StudentName"]."'>Edit</a></button></td>";
					echo "<td><button><a href='controller.php?passedName=".$rows["StudentName"]."'>Remove</a></button></td>";
					echo "</tr>";

				}

			}


			?>

		</table>

	</body>
	</html>