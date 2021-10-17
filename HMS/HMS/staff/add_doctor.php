<?php
include'config.php';
$query = "SELECT * from department"; 
$select_result = mysqli_query($conn, $query) or die ( mysqli_error());
$name_error = '';
if(isset($_POST['submit'])){

 $target_dir = "upload/";
 $file = $_FILES['my_file']['name'];
 $path = pathinfo($file);
 $filename = rand(1111,9999).time();
 $ext = $path['extension'];
 $temp_name = $_FILES['my_file']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 if (file_exists($path_filename_ext)) {
 echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 /*echo "Congratulations! File Uploaded Successfully.";*/
 }

     $doctor_name =$_POST['doctor_name'];
     $doctor_mobile_number =$_POST['doctor_mobile_number'];
     $doctor_department =$_POST['doctor_department'];
     $doctor_loginid =$_POST['doctor_loginid'];
     $doctor_password =$_POST['doctor_password'];
     $doctor_education =$_POST['doctor_education'];
     $doctor_experiance =$_POST['doctor_experiance'];
     $doctor_consultancy_charge =$_POST['doctor_consultancy_charge'];
     $doctor_status =$_POST['doctor_status'];
     $my_file =$filename.".".$ext;
    
     $ins_query="insert into doctor
    (`doctor_name`,`doctor_mobile_number`,`doctor_department`,`doctor_loginid`,`doctor_password`,`doctor_education`,`doctor_experiance`,`doctor_consultancy_charge`,`doctor_status`,`patient_degree_certificate`)values
    ('$doctor_name','$doctor_mobile_number','$doctor_department','$doctor_loginid','$doctor_password','$doctor_education','$doctor_experiance','$doctor_consultancy_charge','$doctor_status','$my_file')";
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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">   
                                <div class="card-body">
                                    <h4 class="card-title">Add Doctor</h4>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="doctor_name" class="control-label col-form-label">Doctor Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name" class="form-control" id="doctor_name" >
                                            </div>
                                             <label for="doctor_mobile_number" class="control-label col-form-label">Mobile Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_mobile_number" class="form-control" id="doctor_mobile_number"  onkeypress="return isNumberKey(event)" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class=" control-label col-form-label">Department</label>
                                            <div class="col-md-4">
                                                <select name="doctor_department" class=" form-control custom-select">
                                                    <option>Department</option>
                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($select_result)) {
                                                        echo '<option value="'.$row["dept_id"].'">'.$row["dept_name"].'</option>';   
                                                    }
                                                    ?>
                                                   
                                                </select>
                                            </div>
                                            <label for="doctor_loginid" class="control-label col-form-label">Login ID</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_loginid" class="form-control" id="doctor_loginid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="doctor_password" class="control-label col-form-label">Password</label>
                                            <div class="col-sm-4">
                                                <input type="password" name="doctor_password" class="form-control" id="doctor_password">
                                            </div>
                                            <label for="doctor_education" class="control-label col-form-label">Education</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_education" class="form-control" id="doctor_education">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label for="doctor_experiance" class="control-label col-form-label">Experiance</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_experiance" class="form-control"  onkeypress="return isNumberKey(event)"  id="doctor_experiance">
                                            </div>
                                            <label for="doctor_consultancy_charge" class="control-label col-form-label">Consultancy Charge</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_consultancy_charge" class="form-control"  onkeypress="return isNumberKey(event)"  id="doctor_consultancy_charge">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">

                                            <label class="control-label col-form-label">Status:</label>
                                        <div class="col-md-2 radio_btn">
                                             <span class="custom-control custom-radio">
                                                <input type="radio" value="Active" name="doctor_status" class="custom-control-input" id="customControlValidation2" required checked="">
                                                <label class="custom-control-label" for="customControlValidation2">Active</label>
                                            </span>
                                             <span class="custom-control custom-radio female_btn">
                                                <input type="radio" value="Deactive" class="custom-control-input" id="customControlValidation3"  name="doctor_status" required>
                                                <label class="custom-control-label" for="customControlValidation3">Deactive</label>
                                            </span>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                            <label for="patient_degree_certificate" class="control-label col-form-label" style="width: 165px;">Upload Degree Certificate</label>
                                            <div class="col-sm-4">
                                               <input type="file" name="my_file" required="">
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
         function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
       return false;
   return true;
}

    </script>
</body>

</html>