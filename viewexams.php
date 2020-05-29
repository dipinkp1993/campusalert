
<?php
include "adminheader.php";
error_reporting(0);

?>
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-app"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>View Exams</h2>
										<p> <span class="bread-ntd">Exam Details</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="Campus Alert-icon Campus Alert-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Notification area Start-->
    <div class="notification-area">
        <div class="container">
             <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Department</th>
                                        <th>Year</th>
                                        <th>Exam Name</th>
                                        <th>Exam Date</th>
                                        <th>Exam Time</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($pc, "SELECT * from exams");
                                    $i=1;
                                         while($det = mysqli_fetch_assoc($sql))
                                         {
                                            $o=mysqli_query($pc, "SELECT * from department where deid='$det[deptid]' ");
                                            $det1 = mysqli_fetch_assoc($o);
                                            $o2=mysqli_query($pc, "SELECT * from semester where sid='$det[semid]' ");
                                            $det2 = mysqli_fetch_assoc($o2);
                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $det1['dname'];?></td>
                                        <td><?php echo $det2['semester'];?></td>
                                        <td><?php echo $det['examname'];?></td>
                                        <td><?php echo date("d-m-Y",strtotime($det['examdate']));?></td>
                                        <td><?php echo $det['toe'];?></td>
                                       
                                    </tr>
                                    <?php
                                }
                                    ?>
                                   
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
     <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- Notification area End-->
