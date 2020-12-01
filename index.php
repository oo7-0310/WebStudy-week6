<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['id']) || !isset($_SESSION['pwd'])) {
        Header('location: login.php');}//세션 미연결 시 login.php로 이동

else{
          echo"<br>";
        }
?>

<html>
<head>
    <title>oo7-0310 Page</title>
    <meta charset="utf-8">
</head>
<body>
  <h1>☆나는야 아바타 스타 SWU☆</h1>
  <?php
    echo "ID :".$_SESSION['id']."<br>";
    echo "PW : ".$_SESSION['pwd']."<br>";
    ?>
    <a href="logout.php">로그아웃</a>
  <p>
    <input type = "button" onclick="location.href = 'board.php'" value="게시판"/>
  </p>
  </form>
</body>
</html>
