<?php 
include 'connect.php';
$lid=$_POST["lid"];

$sql="SELECT m.description,m.mdate,m.mtime from parent p,parentsmeeting m where p.dep=m.deptid and p.sem=m.yid and p.login_id=".$lid." and m.mdate<=curdate() order by m.mdate desc";
$result = mysqli_query($pc,$sql);
$firstrow = mysqli_fetch_assoc($result);

echo json_encode($firstrow);


?>                                         
                                            