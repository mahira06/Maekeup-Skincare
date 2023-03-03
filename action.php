<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cont-form";

function getData(){
    $data=array();
    $data[1]= $_POST['fname'];
    $data[2]= $_POST['lname'];
    $data[3]= $_POST['Email'];
    $data[4]= $_POST['Message'];
return $data;
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$data= getData();
$sql = "INSERT INTO info (fname, lname, Email, Message) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]')";
echo "Connected ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>