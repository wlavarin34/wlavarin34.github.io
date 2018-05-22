
<?php
include("db.php");

$name = $_POST["testName"];
$message = $_POST["testTet"];

if(!name || !message){
echo "error 1";
}else{
echo "Sucess 1";
}

$sql = "INSERT INTO Testimonials (Name, Message, Datetime) VALUES ('".$name."', '".$message."', '".date("Y-m-d H:i:s")."')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<script>
    window.location.replace("http://wilkenslavarin.us/ThermaWeaveProject/Testimonial.php")
    </script>';
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>