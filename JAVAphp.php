<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
      "width=device-width, initial-scale=1.0">
    <title>Score Board</title>
    <link rel="stylesheet" type="text/css" href="score.css">
</head>
<body>

<div class="my_class">
<div class="sc">
<a href="displayscore.php" style="margin-top:-230px;float:right;color:lightcoral; text-decoration:none; font-size:20px;padding:12px 15px ;border: 1px solid white;">View all Subjects Score</a></li>
</div>
<?php
session_start();
$count=0;
$a1=$_POST["ans1"];
$a2=$_POST["ans2"];
$a3=$_POST["ans3"];

$a4=$_POST["ans4"];
$a5=$_POST["ans5"];
if($a1=="Fail-fast")
{
  $count++;
}
if($a2=="SwechQuiz")
{
  $count++;
}
if($a3=="object")
{
  $count++;
}
if($a4==" Row")
{
  $count++;
}
if($a5=="throws")
{
  $count++;
}

echo "Your Score  "."</br>";
echo '<div class="sc"> ' ;
echo "$count";
$conn=mysqli_connect("localhost:3306","root","12345","Swech");
$y=$_SESSION['uid'];
$sql1="update Score set JAVA='$count' where Email='$y'";
if(mysqli_query($conn,$sql1))
   {}
echo '</div>';

$per=($count/5)*360;

$GLOBALS['p']=$per;
?>


</div>

<div class="v"></div>

<div class="perf">
<h1><br>Your Performance <br></h1>

<div class="piechart" style="background-image: conic-gradient(palevioletred <?php echo $GLOBALS['p'];?>deg, 
              pink 0);">
</div>

<div class="index">

<div class="dot" style="height: 15px;
  width: 15px;
  background-color:pink;
  border-radius: 100%; ">
<div style="color:pink; margin-left:18px;"> Wrong<br></div>

<div class="dot" style="height: 15px;
  width: 15px;
  background-color:palevioletred;
  border-radius: 100%;">
<div style="color:palevioletred; margin-left:18px;">Correct </div>
</div>


</body>
</html>


