<?php 

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panal</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">

</head>

<body>
    <div id="header">
        <img src="images/logo-banner.png" class="header_img" alt="">

    </div>

    <div id="sidebar">
        <ul>
            <li>
                <!-- logged in user information -->
                <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
                <?php endif ?>
            </li>
            <li><a href="add student.html"><button value="Add Student">Add Student</button> </a></li>
            <li><a href="index.php?logout='1'"> <button value="logout">logout</button> </a> </li>
        </ul>
    </div>

    <div id="data">
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <br><br>
            <h3>
                <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
            </h3>
        </div>
        <?php endif ?>

        <br>
        <center>
            <h2>Student Database</h2>
        </center>
        <center>
            <?php
 		include("connection.php");
 		error_reporting(0);
 		$insert = "SELECT * FROM student ORDER BY SID";
 		$result = $conn->query($insert);
		if ($result->num_rows > 0) {
    	echo "<table><tr><th>SID </th>
    	<th> Roll no </th>
 		<th> First name </th>
 		<th> Last name </th>
 		<th> DOB </th>
 		<th> Mobile no </th>
 		<th> Gender </th>
 		<th> Address </th>
 		<th> Class </th>
 		<th> Update </th>
 		<th> Delete </th>
 		<th> View </th>
 		</tr>";
    // output data of each row
    	while($row = $result->fetch_assoc()) {
        echo "<tr>
 			<td>".$row["SID"]."</td>
 			<td>".$row["Roll_No"]."</td>
 			<td>".$row["Firstname"]."</td>
 			<td>".$row["Lastname"]."</td>
 			<td>".$row["Date_of_Birth"]."</td>
 			<td>".$row["Mobile_number"]."</td>
 			<td>".$row["Gender"]."</td>
 			<td>".$row["Address"]."</td>
 			<td>".$row["Class"]."</td>
 			<td><a href='updatestudent.php?sid=".$row["SID"]."'><img src='images/update.png'></img></a></td>
 			<td><a href='deletestudent.php?sid=".$row["SID"]."'><img src='images/delete.png'></img></a></td>
 			<td><a href='viewstudent.php?sid=".$row["SID"]."'><img src='images/view.png'></img></a></td>
 			</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
        </center>
    </div>

</body>

</html>