<?php 
include 'connect.php';
$sql="SELECT eventname,eventdate,eventtime from eventnotification where eventdate<=curdate() order by eventdate desc;";
$result = mysqli_query($pc,$sql);
$firstrow = mysqli_fetch_assoc($result);

echo json_encode($firstrow);


?>                                         
                                            