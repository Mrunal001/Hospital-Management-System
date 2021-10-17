<?php
session_start();
if(!isset($_SESSION['id'])){header("Location:admin_login.php"); exit;}
include'config.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
   <?php include 'head.php'; ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       <?php include 'header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include 'sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">View Pending Appointments</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr NO.</th>
                                                <th>Appointment D&T</th>
                                                <th>Department </th>
                                                <th>Doctor </th>
                                                <th>Appointment Reason</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                            $sel_query="Select * from appointment, doctor, department WHERE patient_doctor = doctor_id  AND dept_id = patient_dept AND patient_status = 2";
                                        
                                            $select_result = mysqli_query($conn,$sel_query);
                                            while($row = mysqli_fetch_assoc($select_result)) { ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row["patient_appoin_date"]. ' '.$row["patient_appo_time"]; ?> </td>
                                                <td><?php echo $row["dept_name"]; ?> </td>
                                                <td><?php echo $row["doctor_name"]; ?> </td>
                                                <td><?php echo $row["patient_reason"]; ?> </td>
                                               
                                                <td style="width: 152px;">
                                                    <?php
                                                      if($row["patient_status"] == 0){
                                                            echo "<span class='status_deactive'>Not Approved</span>";

                                                        }else if($row["patient_status"] == 1){
                                                             echo "<span class='status_active'> Approved</span>";
                                                        
                                                        }else{
                                                             echo "<span class='status_pending'>Pending Approval</span>";
                                                        }
 
                                                    ?>
                                                        
                                                </td>
                                                 <td style="width: 212px;">
                                                <?php  if($row["patient_status"] == 2){ ?>

                                                <a href="leave_status_code.php?id=<?php echo $row["appointment_id"]; ?>&type=1&page=leave_management" class="approved_btn" name="approved">Approved</a>
                                                    <a href="leave_status_code.php?id=<?php echo $row["appointment_id"]; ?>&type=0&page=view_approved_appointment" class="not_approved_btn">Not Approved</a>
                                                <?php } ?>

                                                <?php  if($row["patient_status"] == 1){ ?>
                                                    <a href="leave_status_code.php?id=<?php echo $row["appointment_id"]; ?>&type=0&page=view_approved_appointment" class="not_approved_btn">Not Approved</a>
                                                <?php } ?>
                                                <?php  if($row["patient_status"] == 0){ ?>

                                                <a href="leave_status_code.php?id=<?php echo $row["appointment_id"]; ?>&type=1&page=view_approved_appointment" class="approved_btn" name="approved">Approved</a>
                                                   
                                                <?php } ?>
                                                </td>
                                            </tr>
                                           <?php $count++; } ?>
                                           
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                        
                        
                    </div>
                </div>
               
            </div>            

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'footer_script.php'; ?>
</body>

</html>