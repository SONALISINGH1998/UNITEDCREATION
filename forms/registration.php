<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root');
if($con){
  
  echo"connection succesfull..";
}
  else
  {
  	echo"no connection";
}
mysqli_select_db($con,'mediserve');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$pass = $_POST['password'];
$aadhar = $_POST['aadhar'];
$income = $_POST['income'];
$incomeapp = $_POST['incomeapp'];
$problem = $_POST['problem'];

$q = "select * from signin where name='$name' && email='$email' && mobile='$mobile' && address='$address' && password ='$pass' && aadhar='$aadhar' && income='$income' && incomeapp='$incomeapp' && problem='$problem' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1){
	echo "data already exists";
}
	  else
	  {
	  	$qy="insert into signin(name ,email,mobile,address,password,aadhar,income,incomeapp,problem) values('$name' ,'$email','$mobile','$address','$pass','$aadhar','$income','$incomeapp','$problem') ";
	    mysqli_query($con, $qy);

	  }

?>