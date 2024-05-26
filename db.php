<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "CREATE DATABASE IF NOT EXISTS project01;";


if ($conn->query($query) === TRUE) {
    $conn->select_db("project01");
    
if(isset($_POST['insert'])){
    {
        $nameSurname = $_POST['nameSurname'];
        $companyName = $_POST['companyName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $studentType = $_POST['studentType'];
        $sql2 = "INSERT INTO students(nameSurname,companyName,email,phoneNumber,studentType) 
        VALUES('$nameSurname','$companyName','$email','$phoneNumber','$studentType')";
    }

    if ($conn->query($sql2) === TRUE) {
     
        echo "<script>window.location = 'clients.php'</script>";
      
        }
}
}

if ($conn->query($query) === TRUE) {
  $conn->select_db("project01");
  
  $sqlTable1=" CREATE TABLE IF NOT EXISTS students (
    id int NOT NULL AUTO_INCREMENT,
    nameSurname VARCHAR(50),
    companyName VARCHAR(50),
    email VARCHAR(50),
    phoneNumber varchar(50),
    studentType varchar(50),
    PRIMARY KEY (id)
  );";

     if ($conn->query($sqlTable1) === TRUE) {} else {}
} 
else {
    $conn->error;
}

?>