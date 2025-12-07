<?php
$name = $_POST["name"];
$number = $_POST["number"];
$password = $_POST["password"];
$conn = new mysqli('localhost','root','','gd');
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO userlogin(name, number, password) VALUES ('$name','$number','$password')");
    $sql = $stmt->execute();
    echo $sql;
    header("Location: Gd Supermarket.html");
    $stmt->close();
    $conn->close();
}
?>