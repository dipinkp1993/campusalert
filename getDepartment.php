<?php
include 'connect.php';
$query = "select * from department";
$result = mysqli_query($pc,$query);
$data = array();
while($row = mysqli_fetch_array($result)) {
    $arr = array(
        'did' => $row["deid"],
        'dname' => $row["dname"]
        );
    array_push($data,$arr);
}
echo json_encode($data);
?>