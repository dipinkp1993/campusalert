<?php 
include 'connect.php';
$lid=$_POST['lid'];
// $lid=12;
$sql="SELECT a.attstatus from parent p,students s,login l,student_attendence a where p.sturegno=l.username and l.loginid=s.login_id and s.studentid=a.studid and p.login_id=".$lid." and a.dat=curdate() and a.attstatus='a';";
$result = mysqli_query($pc,$sql);
$firstrow = mysqli_fetch_assoc($result);

echo json_encode($firstrow);


?>                                         
                                            