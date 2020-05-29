<?php 
include 'connect.php';
$lid=$_POST["lid"];
$sql="SELECT e.examname,e.examdate from exams e,login l,students s where l.loginid=s.login_id and s.deptid=e.deptid and s.semid=e.semid and e.examdate<=curdate() and s.login_id=".$lid."";
$result = mysqli_query($pc,$sql);
$firstrow = mysqli_fetch_assoc($result);

echo json_encode($firstrow);


?>   