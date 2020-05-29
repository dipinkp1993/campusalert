<?php
include "osheader.php";

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
										<h2>Meeting List</h2>
										<p> <span class="bread-ntd">Pareningt Meet Details</span></p>
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
                                        
                                        <th>Meeting Date</th>
                                        <th>Meeting Time</th>
                                        <th>Department</th>
                                        <th>Year</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($pc, "SELECT * from parentsmeeting");
                                    $i=1;
                                         while($det = mysqli_fetch_assoc($sql))
                                         {
                                            $dq="select * from department where deid=$det[deptid]";
                                             $yq="select * from semester where sid=$det[yid]";
                                             $dqq = mysqli_fetch_assoc(mysqli_query($pc,$dq));
                                              $yqq = mysqli_fetch_assoc(mysqli_query($pc,$yq));

                                    ?>
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                       </td>
                                        <td><?php echo date("d-m-Y",strtotime($det['mdate']));?></td>
                                        <td><?php echo $det['mtime'];?></td>
                                         <td><?php echo $dqq['dname'];?></td>
                                          <td><?php echo $yqq['semester'];?></td>

                                       
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
