<?php
session_start();
$con=mysqli_connect("localhost", "root", "toor0310","mydb") or die ("mysql connect error");
//mysql연결
$num=$_GET['num'];

$query = "select title, content, date, hit, id from board where num=$num";
//id정보만 가져옴

$result = mysqli_query($con,$query) or die("query error");
$rows = mysqli_fetch_assoc($result);

$hit="update board set hit=hit+1 where num=$num";
$result2 = mysqli_query($con,$hit) or die("query error");

?>

<table border= 1px>
  <tr>
    <td height= 30px width = 600px colspan="4"><?php echo $rows['title']?></td>
  </tr>
  <tr>
    <td width = 100px>작성자</td>
    <td><?php echo $rows['id']?></td>
    <tr></tr>
    <td>조회수</td>
    <td><?php echo $rows['hit']?></td>
  </tr>
  <tr>
    <td colspan="4" valign="top">
    <?php echo $rows['content']?></td>
  </tr>
</table>

<button onclick="location.href = 'board.php'"> 목록</button>
