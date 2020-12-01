<!DOCTYPE html>
<html>
<head>
    <title>쿼리</title>
    <meta charset="utf-8">
</head>
<body>
<?php
$con=mysqli_connect("localhost", "root", "toor0310","mydb") or die ("mysql connect error");

$search = $_GET["search"];

if(isset($search)){
  $query = "select num, title, id from board where title like '%".$search."%';";
  $result = mysqli_query($con,$query) or die("query error");
  $count = mysqli_num_rows($result);
  while($rows = mysqli_fetch_assoc($result)){
    echo $rows['num'];
    echo " ";
    echo $rows['title'];
    echo " ";
    echo $rows['id'];
    echo " ";
}} ?>

</body>
</html>
