<?php
//to display errors.
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

$con = mysqli_connect("localhost","root","","robotarm") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"robotarm") or die("Error: Can't Connect to DB");

//insert to every butoon Special value.

if(isset($_POST["stop"])){
       $insertvar2 = "INSERT INTO base(stop) VALUES ('0')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "stoped";}
		 
if(isset($_POST["forward"])){
       $insertvar2 = "INSERT INTO base(forward) VALUES ('F')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "move forward";}
		 
if(isset($_POST["leftt"])){
       $insertvar2 = "INSERT INTO base(leftt) VALUES ('L')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "move left";}

if(isset($_POST["backward"])){
       $insertvar2 = "INSERT INTO base(backward) VALUES ('B')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "move backward";}

if(isset($_POST["rightt"])){
       $insertvar2 = "INSERT INTO base(rightt) VALUES ('R')";        
       $res2 = mysqli_query($con,$insertvar2);
         echo "move right";}





?>