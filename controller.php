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

?>