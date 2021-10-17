<?php
session_start();
if(!isset($_SESSION['id'])){header("Location:admin_login.php"); exit;}
 include'config.php';?>
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
                                <h5 class="card-title">View Patient</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr NO.</th>
                                                <th>Patient Name </th>
                                                <th>Addmission Details </th>
                                                <th>Address </th>
                                                <th>Gender </th>
                                                <th>Blood Group </th>
                                                <th>Date of Birth</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                            $sel_query="Select * from patient ORDER BY patient_id desc;";
                                            $select_result = mysqli_query($conn,$sel_query);
                                            while($row = mysqli_fetch_assoc($select_result)) { ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row["patient_name"]; ?></td>
                                                <td><?php echo $row["patient_addmission_date"]. ' '.$row["patient_addmission_time"]; ?> </td>
                                                <td><?php echo $row["patient_address"]; ?> </td>
                                                <td><?php echo $row["patient_gender"]; ?> </td>
                                                <td><?php echo $row["patient_blood_group"]; ?> </td>
                                                <td><?php echo $row["patient_date_of_birth"]; ?> </td>
                                                <!-- <td><?php echo $row["patient_gender"]. ' '.$row["patient_blood_group"]. ' '.$row["patient_date_of_birth"]; ?></td> -->
                                                <td><a href="patient_update.php?id=<?php echo $row["patient_id"]; ?>" data-toggle="tooltip" data-placement="top" title="Update">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="patient_delete.php?id=<?php echo $row["patient_id"]; ?>" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete?');"data-placement="top" title="Delete">
                                                </i><i class="mdi mdi-close"></i>
                                            </a></td>
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