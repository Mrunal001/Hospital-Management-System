<?php
include'config.php';
$name_error = '';
if(isset($_POST['submit'])){

     $patient_name =$_POST['patient_name'];
     $patient_gender =$_POST['gender'];
     $patient_blood_group =$_POST['blood_group'];
     $patient_date_of_birth =$_POST['birthdate'];
     $patient_address =$_POST['address'];
     $patient_mobile_no =$_POST['mobile_no'];
     $patient_city =$_POST['city'];
     $patient_loginid =$_POST['loginid'];
     $patient_addmission_date =$_POST['addmission_date'];
     $patient_addmission_time =$_POST['addmission_time'];
     $patient_password =$_POST['password'];
    
    
     $ins_query="insert into patient
    (`patient_name`,`patient_gender`,`patient_blood_group`,`patient_date_of_birth`,`patient_address`,`patient_mobile_no`,`patient_city`,`patient_loginid`,`patient_addmission_date`,`patient_addmission_time`,`patient_password`)values
    ('$patient_name','$patient_gender','$patient_blood_group','$patient_date_of_birth','$patient_address','$patient_mobile_no','$patient_city','$patient_loginid','$patient_addmission_date','$patient_addmission_time','$patient_password')";
    $result = mysqli_query($conn,$ins_query); 
    
}
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
                        <h4 class="page-title">Form Basic</h4>
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
                                    <h4 class="card-title">Add Patient </h4>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="patient_name" class="control-label col-form-label">Patient Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="patient_name" class="form-control" id="patient_name" >
                                            </div>
                                        <label class="control-label col-form-label">Gender:</label>
                                        <div class="col-md-2 radio_btn">
                                             <span class="custom-control custom-radio">
                                                <input type="radio" value="Male" name="gender" class="custom-control-input" id="customControlValidation2" required>
                                                <label class="custom-control-label" for="customControlValidation2">Male</label>
                                            </span>
                                             <span class="custom-control custom-radio female_btn">
                                                <input type="radio" value="Female" class="custom-control-input" id="customControlValidation3"  name="gender" required>
                                                <label class="custom-control-label" for="customControlValidation3">Female</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="blood_group" class="control-label col-form-label">Blood Group</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="blood_group" class="form-control" id="blood_group">
                                        </div>
                                        <label class="control-label col-form-label">Date of Birth</label>

                                        <div class="input-group col-sm-4">
                                            <input type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy" name="birthdate" required="" autocomplete="off">
                                            <div class="input-group-append">
                                                <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="control-label col-form-label">Address</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" id="address" name="address"></textarea>
                                        </div>
                                        <label for="mobile_no" class="control-label col-form-label">Mobile No</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="mobile_no" id="mobile_no">
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="city" class="control-label col-form-label">City</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="city" class="form-control" id="city" >
                                        </div>
                                        <label for="loginid" class="control-label col-form-label">LoginID</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="loginid" id="loginid">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="city" class="control-label col-form-label" style="width: 117px;">Addmission Date</label>
                                         <div class="input-group col-sm-4">
                                            <input type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy" name="addmission_date" required="">
                                            <div class="input-group-append">
                                                <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <label for="city" class="control-label col-form-label" style="width: 117px;">Addmission Time</label>
                                         <div class="input-group col-sm-4">
                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="addmission_time" id='datetimepicker4' required="">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="control-label col-form-label">Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>
                                    </div>
                               
                            </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Add">
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
    <?php include'footer_script.php'; ?>
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