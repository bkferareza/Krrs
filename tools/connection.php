<?php
 
function OpenCon()
 {
 $dbhost = "localhost";//replace localhost
 $dbuser = "root";
 $dbpass = "";
 $db = "krrs";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>