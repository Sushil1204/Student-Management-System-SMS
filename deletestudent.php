<?php
include 'connection.php';
$sid = $_GET['sid'];
$Q = "DELETE FROM student WHERE SID = '$sid'";
$data = mysqli_query($conn,$Q);
if ($data==true) 
	{
		echo '<script type="text/javascript"> alert("Record Deleted")</script>';
		header("location:index.php");
	}
	else 
	{
		echo '<script type="text/javascript"> alert("Record Not Deleted")</script>';
	}

?>