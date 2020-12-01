<?php
//session_start();
$ID=$_POST['ID'];//post 형식으로 입력받은 값들을 새로운 변수에 저장
$PW=$_POST['PW'];
$NAME=$_POST['NAME'];
$EMAIL=$_POST['EMAIL'];

$con=mysqli_connect("localhost", "root", "toor0310","mydb") or die ("mysql connect error");
//mysql연결

$query = "select * from member where id='$ID'";
//id정보만 가져옴


//각 위치에 내용추가

$result = mysqli_query($con,$query) or die("query error");

$count = mysqli_num_rows($result);
if ($count==1){
  echo "중복된 ID입니다.";
  echo "<a href=signup.html>이전으로</a>";
  exit();
}

elseif($ID==NULL || $PW==NULL || $NAME==NULL || $EMAIL ==NULL)
{
  echo "빈 칸을 모두 채워주세요";
  echo "<a href=signup.html>이전으로</a>";
  exit();
}


//$signup = mysqli_query($con, $query2);

$query2 = "insert into member (id, pwd, name, email) values ('$ID','$PW','$NAME','$EMAIL')";

$result2 = mysqli_query($con, $query2);
if($result2)
{
  echo "sign up success";
  echo "<a href='login.php'>로그인 창으로</a>";
}
else{
  echo "한글ㄴㄴ";
}


 ?>
