<?php
// $servername = "localhost";
// $username = "root";
// $password="";
// $dbname="VineyardLodge";

$servername = "127.0.0.1";
$username = "root";
$password="e.VrBmf.sSU0";
$dbname="VineyardLodge";

//create connection
$con = new mysqli($servername,$username,$password,$dbname) or die("could not connect database");


if ($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

?> 
