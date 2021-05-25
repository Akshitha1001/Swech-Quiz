<html>
<head>
<title> Swech -- Your Performance</title>
<link rel="stylesheet" type="text/css" href="displayscore.css">
<style>
table
{
font-size:50px;
border-style:solid;
border-width:5px;
border-color:black;
border-collapse:collapse;
padding:15px 20px;
}
td{
   text-align:center;
}
</style>
</head>
<body>
<div style="margin-top:10px; font-size:30px;">
<h1><center> Your Recent Score </center></h1></div>
<?php
session_start();
$conn=mysqli_connect("localhost:3306","root","12345","Swech");
$y=$_SESSION['uid'];
$sql1="Select * from Score where Email= '$y' ";
$result=mysqli_query($conn,$sql1);
if($result)
{
     $row=mysqli_fetch_assoc($result);
     $Maths_Score=$row['Mathemematics'];
     $C_Score= $row["C"];
     $CPP_Score= $row["CPP"];
     $JAVA_Score= $row["JAVA"];
     $Python_Score=$row["Python"];
     $gk_Score=$row["General_Knowledge"];
}
if($Maths_Score==-1)
   $Maths_Score="Please Attempt Quiz";
if($C_Score==-1)
   $C_Score="Please Attempt Quiz";
if($CPP_Score==-1)
   $CPP_Score="Please Attempt Quiz";
if($JAVA_Score==-1)
   $JAVA_Score="Please Attempt Quiz";
if($Python_Score==-1)
   $Python_Score="Please Attempt Quiz";
if($gk_Score==-1)
   $gk_Score="Please Attempt Quiz";
echo '<div class="display"> ' ;
echo '<center>';
echo "<table border=1> <tr>
<th>Subject</th>
<th>Score</th>
</tr>";
echo "<tr>";
echo "<td>"."Mathematics"."</td>";
echo "<td>".$Maths_Score."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."C"."</td>";
echo "<td>".$C_Score."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."C++"."</td>";
echo "<td>".$CPP_Score."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."JAVA"."</td>";
echo "<td>".$JAVA_Score."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Python"."</td>";
echo "<td>".$Python_Score."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."General Knowledge"."</td>";
echo "<td>".$gk_Score."</td>";
echo "</tr>";
echo '</center>';
echo '</div>';
?>
</body>
</html>



