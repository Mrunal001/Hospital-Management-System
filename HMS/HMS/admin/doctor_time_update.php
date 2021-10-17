<?php
session_start();
if(!isset($_SESSION['id'])){header("Location:admin_login.php"); exit;}
include'config.php';
$name_error = '';
$id=$_REQUEST['id'];
$query = "SELECT * from doctor_timing where doctor_time_id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$query = "SELECT * from doctor"; 
$select_result = mysqli_query($conn, $query) or die ( mysqli_error());
if(isset($_POST['submit'])){

     $doctor_name =$_POST['doctor_name'];
     $doctor_from =$_POST['doctor_from'];
     $doctor_to =$_POST['doctor_to'];
     $doctor_time_status =$_POST['doctor_time_status'];

    $update="update doctor_timing set doctor_time_dr_id='".$doctor_name."',
doctor_from='".$doctor_from."', doctor_to='".$doctor_to."',doctor_time_status='".$doctor_time_status."'where doctor_time_id='".$id."'";
    $result = mysqli_query($conn,$update); 
    header("Location:view_doctor_timing.php"); 
exit;
    
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<!-- <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
 -->    <?php include 'head.php'; ?>
 
  
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
                            <form class="form-horizontal" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Update Doctor Timings</h4>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class=" control-label col-form-label">Doctor</label>
                                            <div class="col-md-4">
                                                <select name="doctor_name" class=" form-control custom-select">
                                                    <option>Doctor</option>
                                                    <?php
                                                    while ($row1 = mysqli_fetch_assoc($select_result)) {
                                                        if($row1["doctor_id"] == $row["doctor_time_dr_id"]){
                                                            echo '<option value="'.$row1["doctor_id"].'" selected="selected">'.$row1["doctor_name"].'</option>';   
                                                        }else{
                                                            echo '<option value="'.$row1["doctor_id"].'">'.$row1["doctor_name"].'</option>';   
                                                        } 
                                                    }
                                                    ?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="blood_group" class="control-label col-form-label">From</label>
                                            <div class="input-group col-sm-4">
                                                 <input type='text' class="form-control" id='datetimepicker3' name="doctor_from" value="<?php echo $row['doctor_from'];?>"/>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text "><i class="fa fa-clock"></i></span>
                                                 </div>
                                            </div>
                                       
                                            <label for="blood_group" class="control-label col-form-label">To</label>
                                            <div class="input-group col-sm-4">
                                                 <input type='text' class="form-control" id='datetimepicker4' name="doctor_to" value="<?php echo $row['doctor_to'];?>"/>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text "><i class="fa fa-clock"></i></span>
                                                 </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="control-label col-form-label">Status:</label>
                                            <div class="col-md-2 radio_btn">
                                             <span class="custom-control custom-radio">
                                                <input type="radio" value="Active" name="doctor_time_status" class="custom-control-input" id="active" required <?php echo (($row["doctor_time_status"] == 'Active') ? 'checked' : '') ?>>
                                                <label class="custom-control-label" for="active">Active</label>
                                            </span>
                                             <span class="custom-control custom-radio female_btn">
                                                <input type="radio" value="Deactive" class="custom-control-input" id="deactive"  name="doctor_time_status" required <?php echo (($row["doctor_time_status"] == 'Deactive') ? 'checked' : '') ?>>
                                                <label class="custom-control-label" for="deactive">Deactive</label>
                                            </span>
                                            </div>
                                        </div>
                                       
                                     </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Edit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <!-- editor -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
     <?php include 'footer_script.php'; ?>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });
        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
   <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
<script src="../dist/js/jquery.min.js"></script>
<script src="../dist/js/moment.js"></script>
<script src="../dist/js/bootstrap-datetimepicker.min.js"></script>


</body>

</html>