<?php
include "osheader.php";
if (isset($_POST['submit'])) {
    $department = $_POST['d'];
    $year = $_POST['y'];
    $mdate=$_POST['edate'];
    $details=$_POST['details'];
    $time=$_POST['time'];
       
        if(mysqli_query($pc, "INSERT INTO parentsmeeting  (description,mdate,mtime,deptid,yid) VALUES ('".$details."','".$mdate."','".$time."','".$department."','".$year."')"))
        {
        echo "<script>alert('added sucessfuly');window.location='addparentsmeeting.php'</script>";
    }
}
?>
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
										<h2>Add Parents Meeting</h2>
										<p> <span class="bread-ntd">Examdetails</span></p>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <form method="post">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Department</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <select class="form-control" name="d" required="">
                                                <option value="0">Select Department</option>
                                            <?php
                                            $res=mysqli_query($pc,"select * from department");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                                            
                                            <?php
                                        }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Year</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                           <select class="form-control" name="y" required="">
                                                <option value="0">Select Year</option>
                                            <?php
                                            $ress=mysqli_query($pc,"select * from semester");
                                            while($roww=mysqli_fetch_array($ress))
                                            {
                                            ?>
                                            <option value="<?php echo $roww[0];?>"><?php echo $roww[1];?></option>
                                            
                                            <?php
                                        }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Meeting Date</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="date" class="form-control input-sm" name="edate" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Meeting Time</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="time" class="form-control input-sm" name="time" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Details</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <textarea class="form-control input-sm" name="details" required=""> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <input type="submit" class="btn btn-success notika-btn-success" name="submit">
                                </div>
                            </div>
                        </div>
                    </div
                    </form>                </div>
            </div>
            <div class="row">
                        
                </div>
            </div>
        </div>
    </div>
    <!-- Notification area End-->
