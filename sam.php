<?php
$conn=mysqli_connect("localhost:3306","root","12345","Swech");
if(!$conn)
echo "Failed\n";
else
echo " Success\n" ;
$sql1="insert into Score(Email,Mathemematics,C,CPP,JAVA,Python,General_knowledge) values('akshi@gmail.com',' ',' ',' ',' ',' ',' ')";
if(mysqli_query($conn,$sql1))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);
?>