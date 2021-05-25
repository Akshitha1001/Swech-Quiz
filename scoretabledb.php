<?php
$conn1=mysqli_connect("localhost:3306","root","12345","Swech");
if(!$conn1)
 echo "unable to connect";
else
  echo "connection success\n";
$sql="delete from Info";
if(mysqli_query($conn1,$sql))
 echo "Table Created<br>";
else
  echo "Table Failed<br>".mysqli_error($conn1);
$sql1="delete from Score";
if(mysqli_query($conn1,$sql1))
 echo "Table Created<br>";
else
  echo "Table Failed<br>".mysqli_error($conn1);
mysqli_close($conn1);
?>