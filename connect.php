<?php
$title = $_POST['title'];
$author= $_POST['author'];
$name = $_POST['name'];
$ph = $_POST['phone'];

$conn = mysqli_connect("localhost","root","sahiti123","donor");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO data (Name,Phone,Title,Author)
VALUES ('$name',,'$ph','$title','$author')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>