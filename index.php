<?php
//dbhost depends on your local server indicated at the top of php my admin  Server: 127.0.0.1:4306
//modify your dbhost
//modify your dbuser / your user account that you will use to log in myphpadmin
//dbname set this to your databasename

 $dbhost ="127.0.0.1:4306";
 $dbuser ="root1";
 $dbpass ="123456";
 $dbname = "test";


$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$Username =$_POST['Username'];
$pswd =$_POST['pswd'];
$conpswd =$_POST['conpswd'];
$houseNo =$_POST['houseNo'];
$baranggay =$_POST['baranggay'];
$city =$_POST['city'];
$province =$_POST['province'];
$region =$_POST['region'];
$postal =$_POST['postal'];

//DATABASE CONNECTION
$con = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);
if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
  }else{
    $stmt = $con->prepare("insert into person(firstname,lastname,email,contact,Username,pswd,conpswd,houseNo,baranggay,city,province,region,postal)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissssssssi",$firstname, $lastname, $email, $contact, $Username, $pswd, $conpswd, $houseNo, $baranggay, $city, $province, $region, $postal);
    $stmt->execute();
    echo "Registration sucessfully.......";
    $stmt->close();
    $con->close();

  }

?>