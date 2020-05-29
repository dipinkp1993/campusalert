<?php



$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$type=$_REQUEST['type'];

// $uname="qis";
// $pass="qis123";
// $type="worker";


include './connect.php';


if($type=="student"){
    $sql="select loginid from login where username='$uname' and password='$pass' and type = 'student' ";
$res=  mysqli_query($pc, $sql);
$row=  mysqli_fetch_array($res);
$logid=$row[0];
// echo $sql;
if(isset($logid)){
      $response=array("logid"=>$logid,"type"=>2);
    echo json_encode($response);
}
else{
      $response=array("logid"=>0,"type"=>2);
    echo json_encode($response);
}
  
}
else if($type=="parent"){
    $sql="select loginid from login where username='$uname' and password='$pass'  and type = 'parent' ";
$res=  mysqli_query($pc, $sql);

$row=  mysqli_fetch_array($res);
$logid=$row[0];
    if(isset($logid)){
      $response=array("logid"=>$logid,"type"=>1);
    echo json_encode($response);
}
else{
      $response=array("logid"=>0,"type"=>1);
    echo json_encode($response);
}
}

?>