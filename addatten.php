<?php

include "theader.php";
error_reporting(0);
$msg="";
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
										<h2>Add Attendence</h2>
										<p> <span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
                                            <select class="form-control" name="d" required="" selected>
                                                <option value="0">Select Department</option>
                                            <?php
                                            $res=mysqli_query($pc,"select * from department");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                            ?>
                                            <?php
                                            
                                            ?>
                                            <option <?php if(isset($_POST['d'])){if($_POST['d']== $row[0]) { ?> selected <?php }} ?> value="<?php echo $row[0];?>"><?php echo $row[1];?>
                                             
                                            </option>
                                           
                                            
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
                                            <option <?php if(isset($_POST['y'])){if($_POST['y']== $roww[0]) { ?> selected <?php }} ?> value="<?php echo $roww[0];?>"><?php echo $roww[1];?></option>
                                            
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
                                        <label class="hrzn-fm">Date</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="date" class="form-control input-sm" name="edate" value="<?php echo date("Y-m-d");?>" required="">
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
                           </div>
            </div>
        </form>
            <?php

            if (isset($_POST['submit'])) {
    $department = $_POST['d'];
    $year = $_POST['y'];
    $dat=$_POST['edate'];

    


    

       
        $result=mysqli_query($pc,"select * from students where deptid='$department' and semid='$year'");
        


?>
            
                
                            <table  class="table table-striped" style="background-color: white;">
                                <thead>
                                    <tr>
                                        
                                       
                                        <th>Student name</th>
                                        <th>Status</th>
                                        
                                        
                                        
                                        
                                      
                                </thead>
                                <tbody>
                <?php
                if(mysqli_num_rows($result)>0)
                {

                $i=0;
                while($ar=mysqli_fetch_array($result))
                {
                    $i++;
                ?>
                                    <tr>
                                       
                                       
                                     
                                        <td><?php echo $ar['stname'];?></td>
                                        <td><!--<form  method="post">
                                         <input type="hidden" name="stid" value="<?php echo $ar['studentid'];?>">
                                            Present:<input type="radio"  name="astatus<?php echo $i;?>" value="p" checked >
                                            
                                            Absent:<input type="radio"  name="astatus<?php echo $i;?>" !-->

                 <?php
                 
                $z="select * from student_attendence where studid='$ar[studentid]' and dat='$dat'";
            
             
                $y=mysqli_query($pc,$z);
                if(mysqli_num_rows($y)==1)
                {
                    $t=mysqli_fetch_array($y);
                    if($t['attstatus']=='a')
                    {
                        echo "Absent";
                    }
                    else
                    {
                      echo "Present";  
                    }
                }
                else
                {
                                            ?>
                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $ar['studentid'];?>">
  Add attendence
</button><div class="modal" id="myModal<?php echo $ar['studentid'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><p> <span class="bread-ntd">Attendence marking For :<strong><?php echo $ar['stname'];?></strong> on <?php echo date("d-m-Y",strtotime( $dat));?></strong></span></p></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form  method="post" action="addatten.php">
                                     

                                            Present:<input type="radio"  name="astatus" value="p" checked >
                                            
                                            Absent:<input type="radio"  name="astatus" value="a" >
                                            <input type="hidden" name="dee" value="<?php echo $department;?>">
                                             <input type="hidden" name="yee" value="<?php echo $year;?>">
                                             <input type="hidden" class="form-control input-sm" name="edat" value="<?php echo date("Y-m-d");?>" required="">
                                              <input type="hidden" class="form-control input-sm" name="sid" value="<?php echo $ar['studentid'];?>" >
                                               <input type="hidden" class="form-control input-sm" name="d" value="<?php echo $department;?>" >
                                                <input type="hidden" class="form-control input-sm" name="y" value="<?php echo $year;?>" >
                                             <input type="submit" class="btn btn-success notika-btn-success" name="sbmt">
                                              
                                         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php
}
?>
                                        </td>                               
                                         
                                        
                                    </tr>

                                 <?php
                             }
                         }
                         else
                         {
                            $msg="No data Found";
                         }
                             ?>  
                                </tbody>
                            </table>
                            
                            <?php 
                            if($msg!="")
                            {
                                ?>
                                <div class="alert alert-danger">
                    <strong>Nothing to show! </strong> <?php echo $msg;?>
                </div>
                            
                            <?php
                            }
                        }
                    
                    ?>
    
                       
                </div>
                        
                </div>
            </div>
        </div>
    </div>
     <?php

     if(isset($_POST['sbmt']))
                                        {
                                           
                                            $stat=$_POST['astatus'];
                                             $deptid=$_POST['dee'];
                                             $edat=$_POST['edat'];
                                            $sid=$_POST['sid'];
                                         
                                        if(mysqli_query($pc,"INSERT INTO student_attendence (studid,dat,attstatus) VALUES ('$sid','$edat','$stat')"))
                                        {
                                           
                                           
                                            
                                        }
                                        else
                                        {
                                            echo "error";
                                        }
                                        }
                                        ?> 
    <!-- Notification area End-->
