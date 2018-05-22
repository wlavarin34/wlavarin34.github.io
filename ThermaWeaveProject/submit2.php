<?php
include("db.php");

$email = $_POST["email"];


if(!$email){
echo "error 1";
}else{
echo "Sucess 1";
}

$sql = "INSERT INTO Subscribe (email) VALUES ('".$email."')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<script>
    window.location.replace("http://wilkenslavarin.us/ThermaWeaveProject/Newsletter.html")
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>