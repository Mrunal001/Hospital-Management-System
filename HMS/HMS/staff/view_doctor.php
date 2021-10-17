<?php
session_start();
if(!isset($_SESSION['staff_id'])){header("Location:staff_login.php"); exit;}
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
                                <h5 class="card-title">View Doctor & Doctor Timing</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr NO.</th>
                                                <th>Doctor Name </th>
                                                <th>Mobile Number </th>
                                                <th>Department </th>
                                                <th>Login ID</th>
                                                <th>Education</th>
                                                <th>Experiance</th>
                                                <th>Consultancy Charge</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php
                                            $count=1;
                                            $sel_query="Select * from doctor,department,doctor_timing WHERE doctor_department = dept_id AND doctor_id = doctor_time_dr_id ORDER BY doctor_id desc;";
                                            $select_result = mysqli_query($conn,$sel_query);

                                            while($row = mysqli_fetch_assoc($select_result)) { ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row["doctor_name"]; ?></td>
                                                <td><?php echo $row["doctor_mobile_number"]; ?> </td>
                                                <td><?php echo $row["dept_name"]; ?></td>
                                                <td><?php echo $row["doctor_loginid"]; ?></td>
                                                <td><?php echo $row["doctor_education"]; ?></td>
                                                <td><?php echo $row["doctor_experiance"]; ?></td>
                                                <td><?php echo $row["doctor_consultancy_charge"]; ?></td>
                                                <td><?php echo $row["doctor_from"]; ?></td>
                                                <td><?php echo $row["doctor_to"]; ?></td>

                                                
                                                 <td><?php echo (($row["doctor_time_status"] == 'Active') ? "<span class='status_active'>Active</span>" : "<span class='status_deactive'>Deactive</span>") ?></td>
                                                 
                                            </tr>
                                           <?php $count++; } ?>
                                        </tbody>
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