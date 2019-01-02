<?php
//turn  ERRORS
ini_set('display_errors', 1);
error_reporting(~0);

// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
//error_reporting(0);    error reporting  is  switched OFF , in  final  must  be  ON
error_reporting(1);// it  was  the  first variant
include("config/database.php");
session_start(); 
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************





// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
//WORKING
$db=new PDO('mysql:host=localhost;dbname=inner_join','root','root');
//$db = new PDO('mysql:host='.MYSQL_HOST.'; dbname='.MYSQL_DATABASE, MYSQL_LOGIN, MYSQL_PASSWORD); // CAUSES MISTAKE!!!!!!!!!!!!!!!!!11
//$db->exec('SET NAMES utf8');
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************





// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
//TRYING TO REFER TO CLASS
include("Classes/GetTemplateClass.php");//OOP  Classes   function =GetTemplateClass
//include("Classes/LoadDB.php");

// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************









// REcords  all  visits  to  SQl  mvcStats  DB
// **************************************************************************************
// **************************************************************************************
// ** 
     //require("Classes/RecordStatisticsSQL.php");
     //RecordStatisticsSQL::Record();
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************
?>






<!DOCTYPE html>
<html>
<head>
<title>Inner JOIN</title>
 <meta charset="utf-8">
<link rel="stylesheet" media="screen"  type="text/css" href="css/style.css">





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="myscript.js"></script><!--My script-->

<meta charset="utf-8">


</head>

<body >

<div>
Creating DB, setting  values  + Inner  Join
</br></br>
<a href="http://localhost/inner_join/create_table_&_values.php">Create table & values</a></br>
</div>











<h3> Getting  Inner JOin </h3>


<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "inner_join";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      //$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests"); 

// INNER JOIN  STATEMENT
$stmt = $conn->prepare("SELECT lastname,department FROM MyGuests        inner join        MyGuests2      on MyGuests.dep_id=MyGuests2.id	      "); 
("SELECT * FROM MyGuests        inner join        MyGuests2      on MyGuests.dep_id = MyGuests2.deparment  WHERE MyGuests.dep_id= MyGuests2.id    ");

 //inner join  //LEFT OUTER JOIN
$stmt->execute();





//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo ''; print_r($rows);




    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach( $stmt->fetchAll() as $k=>$v) { 
        echo $v['lastname']."===".  $v['department']     ."</br>";
    }
//


  
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }







?>















</body>



</html>
