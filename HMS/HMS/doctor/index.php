<?php 
session_start();
if(!isset($_SESSION['doctor_id'])){header("Location:doctor_login.php"); exit;}
include'config.php'; 
$query = "SELECT * from doctor,department where dept_id = doctor_department AND doctor_id='".$_SESSION['doctor_id']."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$emp_row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Dashboard</title>
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
        <?php include 'sidebar.php' ?>
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
                        <h4 class="page-title">Dashboard</h4>
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <!-- <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <?php 
                                $count_query = "SELECT COUNT(doctor_id) as user FROM doctor";
                                $result = mysqli_query($conn,$count_query);
                                $row = mysqli_fetch_assoc( $result );?>

                               <h1 class="dashboard_heading"><?php echo $row["user"]; ?></h1>
                               <h6 class="text-white">No. of Doctor</h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                <?php 
                                $count_query_patient = "SELECT COUNT(patient_id) as user FROM patient";
                                $result_patient = mysqli_query($conn,$count_query_patient);
                                $row_patent = mysqli_fetch_assoc( $result_patient );?>

                               <h1 class="dashboard_heading"><?php echo $row_patent["user"]; ?></h1>
                                <h6 class="text-white">No. of Patients</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <?php 
                                $count_query_apt = "SELECT COUNT(appointment_id) as user FROM appointment";
                                $result_apt = mysqli_query($conn,$count_query_apt);
                                $row_patent = mysqli_fetch_assoc( $result_apt );?>

                               <h1 class="dashboard_heading"><?php echo $row_patent["user"]; ?></h1>
                                <h6 class="text-white">No. of Appointments</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                    
                    
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
               <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                           <table class="emp_data_table">
                               <tr>
                                   <th>Name</th>
                                   <td><?php echo $emp_row['doctor_name']; ?></td>
                               </tr>
                               <tr>
                                   <th>Mobile Number</th>
                                   <td><?php echo $emp_row['doctor_mobile_number']; ?></td>
                               </tr>
                               <tr>
                                   <th>Department</th>
                                   <td><?php echo $emp_row['dept_name']; ?></td>
                               </tr>
                               <tr>
                                   <th>LoginID</th>
                                   <td><?php echo $emp_row['doctor_loginid']; ?></td>
                               </tr>
                               
                               
                           </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                           <table class="emp_data_table">
                                <tr>
                                   <th>Password</th>
                                   <td><?php echo $emp_row['doctor_password']; ?></td>
                                </tr>
                                <tr>
                                   <th>Education</th>
                                   <td><?php echo $emp_row['doctor_education']; ?></td>
                               </tr>
                               <tr>
                                   <th>Experiance</th>
                                   <td><?php echo $emp_row['doctor_experiance']; ?></td>
                               </tr>
                               <tr>
                                   <th>Consultancy Charge</th>
                                   <td><?php echo $emp_row['doctor_consultancy_charge']; ?></td>
                               </tr>
                               <!-- <tr>
                                   <th>Degree Certificate</th>
                                   <td><?php echo $emp_row['doctor_degree_certificate']; ?></td>
                               </tr> -->

                           </table>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
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
    <?php include'footer_script.php'; ?>
<script type="text/javascript">
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
</body>

</html>