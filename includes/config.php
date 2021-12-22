<?php

ob_start(); // On output buffering
session_start();

date_default_timezone_set("Asia/Kathmandu");
 

try{
 $con = new PDO("mysql:dbname=nepflixx;host=localhost", "root","");
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
 exit("Connection Failed :" . $e->getMessage());
}

?>