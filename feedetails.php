<?php 
include 'connect.php';
$lid=$_POST["lid"];

$sql="SELECT f.feeamount,f.duedate from fees f,login l,students s where l.loginid=s.login_id and s.deptid=f.deptid and s.semid=f.semid and f.duedate<=curdate() and s.login_id=".$lid."";
$result = mysqli_query($pc,$sql);
$firstrow = mysqli_fetch_assoc($result);

echo json_encode($firstrow);


?>   