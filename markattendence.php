<?php
ob_start();
?>
<?php
include "theader.php";
 $stid=$_GET['stid'];
    $date=$_GET['dat'];
   
 
                                       
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
                                          <?php
                                       $q="select * from students where studentid='$stid'";
                                       $r=mysqli_query($pc,$q);
                                       $res=mysqli_fetch_array($r);

                                       ?>  
										<h2>Mark Attendence</h2>
										<p> <span class="bread-ntd">Attemdence marking For :<strong><?php echo $res['stname'];?></strong> on <?php echo date("d-m-Y",strtotime($date));?></strong></span></p>
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
                              
                                
                                </div>
                            </div>
                        </div>
                       
                         <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Status</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                          <form  method="post">
                                     

                                            Present:<input type="radio"  name="astatus" value="p" checked >
                                            
                                            Absent:<input type="radio"  name="astatus" value="a" >
                                            <input type="hidden" name="d" value="<?php echo $res['deptid'];?>">
                                             <input type="hidden" name="y" value="<?php echo $res['semid'];?>">
                                        </div>
                                    </div>
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
    <?php

     if(isset($_POST['submit']))
                                        {
                                           
                                            $stat=$_POST['astatus'];
                                            $deptid=$_POST['d'];
                                            $semid=$_POST['y'];
                                         
                                        if(mysqli_query($pc, "INSERT INTO student_attendence (studid,dat,attstatus) VALUES ('$stid','$date','$stat')"))
                                        {
                                            echo "<script>alert('attendence marked');</script>";
                                            header( "Location:addattendence.php?da=$date&&dept=$deptid&&semid=$semid&&gsub=gsub" );
                                            ob_enf_fluch();
                                        }
                                        else
                                        {
                                            echo "error";
                                        }
                                        }
                                        ?> 

    <!-- Notification area End-->
