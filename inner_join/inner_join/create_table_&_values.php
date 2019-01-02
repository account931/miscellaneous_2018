<?php
//turn  ERRORS
ini_set('display_errors', 1);
error_reporting(~0);
?>




<!DOCTYPE html>
<html>
<head>
<title>Inner JOIN_CREATE DB </title>
 <meta charset="utf-8">
<link rel="stylesheet" media="screen"  type="text/css" href="style.css">





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="myscript.js"></script><!--My script-->

<meta charset="utf-8">


</head>

<body >

<div>
This  page  triggers  Creating  a  table  &  add  values
</div>














<?php

// Create connection (PDO  +  MySQLi Object-oriented))


//PDO 
// **************************************************************************************
// **************************************************************************************
// **                                                                                  **

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "inner_join";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//END  sql to create table




//PDO insert VAlues
try {
    
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Item1', 'Item2', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "</br>New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//END PDO  INSERT VALUES





//close connection
$conn = null;


// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************






//(MySQLi Object-oriented) //working
// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "inner_join";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully</br>";
} else {
    echo "Error creating table: " . $conn->error;
}





//  Adding  VAlues ;
$sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// END ADDING  VALUES


$conn->close();




*/
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************
echo "</br>";










?>















</body>



</html>
