<?php
session_start();
if(!isset($_SESSION['id'])){header("Location:admin_login.php"); exit;} ?>
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
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Appointment </h4>
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
                                        <div class="input-group col-sm-3">
                                            <input type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy" name="birthdate" required="">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
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
                                        <label for="city" class="control-label col-form-label">Enter Appoinment Date</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="city" class="form-control" id="city" >
                                        </div>
                                        <label for="loginid" class="control-label col-form-label">Enter Appoinment Time</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="loginid" id="loginid">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class=" control-label col-form-label">Department</label>
                                    <div class="col-md-4">
                                        <select class=" form-control custom-select">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                           
                                        </select>
                                    </div>
                                    <label class=" control-label col-form-label">Doctor</label>
                                    <div class="col-md-4">
                                        <select class=" form-control custom-select">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                           
                                        </select>
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
                                        <button type="button" class="btn btn-primary">Add</button>
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
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../../dist/js/pages/mask/mask.init.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/libs/quill/dist/quill.min.js"></script>
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
</body>

</html>