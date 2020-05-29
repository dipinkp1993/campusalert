<?php
include 'adminheader.php';
$err = "";
$msg = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $usr = $_POST['username'];
    $pasw = $_POST['password'];
    $usql = mysqli_query($pc, "SELECT * FROM login WHERE username = '$usr'");
    if (mysqli_num_rows($usql) == 1) {
        $err = "Username already exists !";
    }
    if ($err == "") {
        mysqli_query($pc, "INSERT INTO login (username,password,type) VALUES ('$usr','$pasw','teacher')");
        $logid = mysqli_insert_id($pc);
        mysqli_query($pc, "INSERT INTO teachers (logid,name) VALUES ('$logid','$name')");
        $msg = "Teacher Added !";
    }
}
?>
<!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> Teachers </h2>
                            <hr/>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Teacher</h5>
                                <?php if($msg != "") {?>
                                    <div class="alert alert-success">
                                        <strong>Success ! </strong><?php echo $msg;?>
                                    </div>
                                <?php } 
                                if($err != "") {?>
                                    <div class="alert alert-danger">
                                        <strong>Failed ! </strong><?php echo $err;?>
                                    </div>
                                <?php } ?>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="inputName">Name</label>
                                            <input id="inputName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter Teacher's name" autocomplete="off" class="form-control" value="<?php if (isset($_POST['submit']) && $err != "") {echo $name;}?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                            <input id="inputUserName" type="text" name="username" data-parsley-trigger="change" required="" placeholder="Enter username" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input id="inputPassword" name="password" type="password" placeholder="Password" required="" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="submit" class="btn btn-space btn-primary">Submit</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Teachers</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $sl=0;
                                         $sql = mysqli_query($pc, "SELECT teachers.name,login.username FROM teachers INNER JOIN login on teachers.logid = login.loginid");
                                         while($det = mysqli_fetch_assoc($sql))
                                         {
                                             $sl++; ?>
                                            <tr>
                                                <th scope="row"><?php echo $sl;?></th>
                                                <td><?php echo $det['name'];?></td>
                                                <td><?php echo $det['username'];?></td>
                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
<?php
include 'footer.php';
?>