<!DOCTYPE html>
<html>
<head>
    <title>게시판</title>
    <meta charset="utf-8">
</head>
<body>
  <h1>☆게시판☆</h1>
  <?php

  $con=mysqli_connect("localhost", "root", "toor0310","mydb") or die ("mysql connect error");
  $query = "select * from board";
  $result = mysqli_query($con,$query) or die("query error");
  $count = mysqli_num_rows($result);

  ?>

  <table align = center >
    <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        <td width = "100" align = "center">조회수</td>
    </tr>
  <tbody>
  <?php
    while($rows = mysqli_fetch_assoc($result)){
  ?>
  <tr>
    <td width = "50" align = "center"><?php echo $count ?></td>
    <td width = "500" align = "center">
      <a href = "view.php?num=<?php echo $rows['num']?>">
      <?php echo $rows['title'] ?></td>
    <td width = "100" align = "center"><?php echo $rows['id']?></td>
    <td width = "200" align = "center"><?php echo $rows['date']?></td>
    <td width = "100" align = "center"><?php echo $rows['hit']?></td>
<?php $count--;
  } ?>
</tr>
</tbody>
</table>
  <input type="button" id="button" onclick='write.php' value="글쓰기"/>
  <br>
  <br>
  <form method = GET action=query.php>
    search: <input type = "text" name="search">
    <input type=submit value="쿼리 전송">
  </form>

</body>
</html>
