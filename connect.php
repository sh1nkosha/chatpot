
<?php
//display errors:
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

 
$motor1 = $_POST["motor1"];
$motor2 = $_POST["motor2"];
$motor3 = $_POST["motor3"];
$motor4 = $_POST["motor4"];
$motor5 = $_POST["motor5"];
$motor6 = $_POST["motor6"];

//connect connection:
$con = mysqli_connect("localhost","root","","db") or die("Error: Can't Connect to Server");
//check connection:
$cc = mysqli_select_db($con,"db") or die("Error: Can't Connect to DB");

//store data in save butoon:
if(isset($_POST["save"])){
        $stmt=$con->prepare("INSERT INTO motors (motor1,motor2,motor3,motor4,motor5,motor6) VALUES (?,?,?,?,?,?)");
        $stmt -> bind_param("iiiiii",$motor1 ,$motor2 ,$motor3 ,$motor4 ,$motor5 ,$motor6);
        $stmt->execute();
        echo "Saved successfully";
        echo "<br/>";
        }
		
//on butoon:
if(isset($_POST["on"])){

       $sql = "INSERT INTO motors(on) VALUES (1)";        
       $res2 = mysqli_query($con,$sql);
         echo "on successfully";
         echo "<br/>";
}

?>