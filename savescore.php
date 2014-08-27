<?php
header('Access-Control-Allow-Orgin:*');
$con= mysqli_connect("localhost","root","","dbmathmaster");

$password=$_GET["password"];
$username=$_GET["username"];
$address=$_GET["address"];
$score=$_GET["score"];


$sql= mysqli_query($con,"INSERT INTO  tbl_score VALUES('".$password."', '".$username."', '".$address."', '".$score."')");

if($sql){
echo 'Data Save';
}
else{
echo'Data was not saved';
}


?>