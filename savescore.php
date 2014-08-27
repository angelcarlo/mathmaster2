<?php
header('Access-Control-Allow-Orgin:*');
$con= mysqli_connect("localhost","root","","dbmathmaster");

$username=$_GET["username"];
$address=$_GET["address"];
$score=$_GET["score"];

$sql= mysqli_query($con,"INSERT INTO  tbl_score VALUES('".$username."', '".$address."', '".$score."')");

if($sql){

echo 'Data Save';
}
else{
echo'Data was not saved';
}


?>