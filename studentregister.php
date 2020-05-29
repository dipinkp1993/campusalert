<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dep = $_POST["dep"];
$sem = $_POST["sem"];
$username = $_POST["username"];
$password = $_POST["password"];
include 'connect.php';
$query = "select * from login where username = '$username'";
$result = mysqli_query($pc, $query);
if(mysqli_num_rows($result) > 0) {
    $data = array(
                'success' => -1
            );
}
else {
    $query = "insert into login values(null,'$username','$password','student')";
    $result = mysqli_query($pc, $query);
    if($result > 0) {
        $login_id = mysqli_insert_id($pc);
        $ss="select deid from department where dname='$dep'";
        $rr=  mysqli_query($pc, $ss);
        $row=  mysqli_fetch_array($rr);
        $did=$row[0];
        
        $se="select sid from semester where semester='$sem'";
        $rrr=  mysqli_query($pc, $se);
        $roww=  mysqli_fetch_array($rrr);
        $sid=$roww[0];
        
        
        
         $query = "insert into students(login_id,stname,email,cno,deptid,semid) values($login_id,'$name','$email','$phone','$did','$sid')";
        //  echo $query;
        $result = mysqli_query($pc, $query);
        if($result > 0) {
                $data = array(
                    'success' => $login_id
                );
        }
        else {
                $data = array(
                    'success' => 0
                );
        }
    }
     else {
         $data = array(
            'success' => 0
        );
    }
}
echo json_encode($data);
?>