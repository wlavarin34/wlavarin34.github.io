<!DOCTYPE html>
<html>
<head>
<style tyle="text/css">
h1 {
	text-align: center;
	}
table {
	text-align: center;
	vertical-align: middle;
	border: 2px solid black;
	border-collapse: collapse;
	margin: 20px auto;
	font-family: Verdana, Helvetica, serif;
	}
table tr:nth-child(even) {
	background-color: #ccc;
	}
table tr:first-child {
	border-bottom: 2px solid black;
	font-weight: bold;
	}
td {
	padding: 5px 15px 5px 15px;
	border: 1px solid black;
	}
</style>
</head>
<body>
<?php
include("db.php");

$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$city = $_POST['city'];	
$state = $_POST['state'];    

if (!$firstname || !$lastname || !$address || !$city || !$state) {
    echo "<p>You have not entered all the required information. </p>";
    exit;
}

// add slashes if add and strip slashes default is not turned on
// magic_quotes_gpc is off by default in XAMPP, add \ if value contains a quote
if (!get_magic_quotes_gpc()){
	$firstname = addslashes($firstname); 
	$lastname = addslashes($lastname);
	$address = addslashes($address);
	$city = addslashes($city);
}

// insert into contact database
$sqlString = "INSERT into contacts values " . "(0, '$title', '$firstname', '$lastname', '$address', '$city', '$state')";
$result = $con->query($sqlString);
if (!$result){	
	echo ("<p>Error: Contact information was not added.</p>" .
			"<p>Error code $dbConnect->errno: $dbConnect->error. </p>");
	$con->close();
	exit;
	}else{
	echo "Success for Insertion";
	}

$con->close();
//** end of input processing
?>
<div id=header>
	<h1>Thank You for Registering</h1>
</div>
<table>
	<tr>
		<td>Title</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Address</td>
		<td>City</td>
		<td>State</td>
	</tr>	

<?php 
  include("db.php");

 $data = mysqli_query($con,"SELECT * FROM contacts ORDER By contactid DESC"); 
 
 $info = mysqli_fetch_array($data);

 while($info = mysqli_fetch_array( $data )) 
 { 
 echo "<tr>"; 
 echo "<td>".$info['title'] . "</td> "; 
 echo "<td>".$info['firstname'] . " </td>";
 echo "<td>".$info['lastname']. " </td>";
 echo "<td>" .$info['address']. " </td>";
 echo "<td>" .$info['city']. " </td>";
 echo "<td>" .$info['state']. "</td>";
 echo "</tr>";
 } 
mysqli_close();
?> 

</table>
</body>
</html>
