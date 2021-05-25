<?php
session_start();
$conn=mysqli_connect("localhost:3306","root","12345","Swech");
if(!$conn)
echo "Failed\n";
else
echo " Database Connection Success\n" ;
$u=$_POST["uid"];
$p=$_POST["pass"];
$_SESSION['uid']=$u;
$sql="select * from Info where Email='$u' and password='$p'" ;
if(mysqli_query($conn,$sql))
{
   $result = $conn->query($sql);
   if($result->num_rows>=1)
   header("Location:home.html");
   else
      echo "Enter valid User Name and Password";
  
}
else
 echo "failed<br>".mysqli_error($conn);
mysqli_close($conn);
?>
                                                                                                                                                                                                                                                                                                                                                                     