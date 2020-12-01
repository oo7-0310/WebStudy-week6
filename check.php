<?php
session_start();
$ID=$_POST['ID'];
$PW=$_POST['PW'];
$con=mysqli_connect("localhost","root","toor0310","mydb");

$query="select * from member where id='$ID'";
$result=mysqli_query($con,$query) or die("query error");
$query2="select * from member where pwd='$PW'";
$result2=mysqli_query($con,$query2) or die("query error");

if(mysqli_num_rows($result)==1){
  $row=mysqli_fetch_assoc($result);
  if($row['pwd']==$PW){
    $_SESSION['id']=$ID;
    $_SESSION['pwd']=$PW;
    if(isset($_SESSION['id']))
    {
      Header('location: index.php');
    }
    else {
      echo "세션 저장 실패";
    }
  }
  else {
    echo "아이디 또는 비밀번호를 잘못 입력하였습니다1.";
  }
}
else {
  echo "아이디 또는 비밀번호를 잘못 입력하였습니다2.";
}

 ?>
