<?PHP
session_start();
$con=mysqli_connect("localhost", "root", "toor0310","mydb") or die ("mysql connect error");


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>로그인페이지</title>
</head>


<body>
  <h1>LOGIN</h1>
  <form action = "check.php" method="POST"><!--post 형식으로 ID,PW에 입력한 값을 보낸다 -->
    <table>
      <tr>
        <td>ID</td>
        <td><input type="text" name="ID" /></td>
      </tr>
      <tr>
        <td>PW</td>
        <td><input type="password" name="PW" /></td>
      </tr>
    </table>
      <input type="submit" onclick="location.href = 'check.php'" value="login"/><!--check.php는 입력한 계정 저옵가 기존에 있는 것과 일치하는지 확인하는 곳 -->
      <input type = "button" onclick="location.href = 'signup.html'" value="sign up"/>
</html>
