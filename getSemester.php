<?php
include 'connect.php';
$query = "select * from semester";
$result = mysqli_query($pc,$query);
$data = array();
while($row = mysqli_fetch_array($result)) {
    $arr = array(
        'sid' => $row["sid"],
        'sem' => $row["semester"]
        );
    array_push($data,$arr);
}
echo json_encode($data);
?>