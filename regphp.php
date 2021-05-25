<?php
$conn=mysqli_connect("localhost:3306","root","12345","Swech");
if(!$conn)
echo "Failed\n";
else
echo " Success\n" ;
$u=$_POST["uid"];
$p=$_POST["pass"];
$sql="insert Info(Email,Password) values('$u','$p')";
if(mysqli_query($conn,$sql))
{
        $sql1="insert into Score(Email,Mathemematics,C,CPP,JAVA,Python,General_knowledge) values('$u','-1','-1','-1','-1','-1','-1' )";
        if(mysqli_query($conn,$sql1))
          echo "Inserted<br>";
        else
         echo "Failed<br>".mysqli_error($conn);
        header("Location:loginhtml.html");
}
else
 echo "failed<br>".mysqli_error($conn);
mysqli_close($conn);
?>
