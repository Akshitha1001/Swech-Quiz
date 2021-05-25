<?php
$conn=mysqli_connect("localhost:3306", "root", "12345");
if(!$conn)
 echo "unable to connect";
else
  echo "connection success";
$sql="create database Swech";
if(mysqli_query($conn,$sql))
echo "Database Created<br>";
else
echo "DB Failed<br>";
mysqli_close($conn);
$conn1=mysqli_connect("localhost:3306","root","12345","Swech");
if(!$conn1)
 echo "unable to connect";
else
  echo "connection success";
$sql1="create table Info(Email varchar(50), password varchar(30))";
if(mysqli_query($conn1,$sql1))
echo "Table Created<br>";
else
echo "Table Failed<br>";
mysqli_close($conn1);
?>