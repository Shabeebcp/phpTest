<?php 
include_once 'db.php';

////[Method2-------------------------------------------------------------------------------]
if(isset($_POST['btn1'])){
	InsertValues($conn);
}
function InsertValues($conn){
	$studName = $_POST['txtUser'];
	$studPass = $_POST['txtPass'];
	$sql = "Insert Into tblUser  Values ('$studName','$studPass')";

	if(mysqli_query($conn,$sql)){
	echo 	'<script>alert("New record created successfully !")</script>';
	} else {
		echo "Error: " . $sql . "
		" . mysqli_error($conn);
	}
	mysqli_close($conn);

}
////[---------------------------------------------------------------------------------------]

///[Method One----------------------------------------------------------------------------]
if(isset($_POST['submit'])){
	$studName = $_POST['txtUser'];
	$studPass = $_POST['txtPass'];
	$sql = "Insert Into tblUser  Values ('$studName','$studPass')";

	if(mysqli_query($conn,$sql)){
		echo "New record created successfully !";

	} else {
		echo "Error: " . $sql . "
		" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
///[-----------------------------------------------------------------------------------------]

//[--------Fetch Data By Select Query---------------------------------------------------------]
if(isset($_POST['btnSelect'])){
	$sql = "Select * from tblUser";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		echo "<table><tr><td>StudentName</td><td>Password</td></tr>";
		while($rows = $result->fetch_assoc()){
			echo "<tr><td>".$rows["StudentName"]."</td><td>".$rows["Password"]."</td></tr>";			

		}
	}
}
///[-----------------------------------------------------------------------------------------]

//[Delete From A List Of Data (GEt from Sended StudentName)]
if(isset($_GET['passedName'])){
	$studName = $_GET['passedName'];
	$sql = "DELETE FROM tblUser Where StudentName='$studName'";
	mysqli_query($conn,$sql);
	header('Location:pageOne.php');
}
///[-----------------------------------------------------------------------------------------]



///[----Edit Entry---------------------------------------------------------------------------]
if(isset($_GET['editEntry'])){
	$studName = $_GET['editEntry'];
	$sql = "UPDATE tblUser SET StudentName='ThisisEdited' WHERE StudentName='$studName'";
	mysqli_query($conn,$sql);
	header('Location:pageOne.php');
}
///[-----------------------------------------------------------------------------------------]
?>