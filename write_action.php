<?php
$name=$_POST['name'];
$title=$_POST['title'];
$content=$_POST['content'];
$pwtext=$_POST['pwtext'];
$date = date('Y-m-d H:i:s');
//$id=$_POST['id'];//작성자
//$pwd=$_POST['pwd'];//글의 비밀번호

$con=mysqli_connect("localhost", "root", "toor0310","mydb") or die ("mysql connect error");

$query = "insert into board (num, title, content, id, pwd, date, hit) values (null,'$title','$content','$name','$pwtext','$date',0)";

$result = mysqli_query($con,$query) or die("query error");

if($result){
?>
<script>
  alert("<?php echo"글이 저장되었습니다."?>");
  location.replace("<?php echo './board.php'?>");
</script>

<?php
 }
 else{
   echo "저장 실패";
 }
 ?>
