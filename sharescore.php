<?php
header('Access-Control-Allow-Orgin:*');
$con= mysqli_connect("localhost","root","","dbgame");

$username=$_GET["username"];
$address=$_GET["address"];
$score=$_GET["score"];

$sql= mysqli_query($con,"INSERT INTO  profile VALUES('".$username."', '".$address."', '".$score."')");

if($sql){
echo 'Data Save';
}
else{
echo'Data was not saved';
}
?>