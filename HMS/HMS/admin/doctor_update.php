<?php
session_start();
if(!isset($_SESSION['id'])){header("Location:admin_login.php"); exit;}
include'config.php';
$name_error = '';
$id=$_REQUEST['id'];
$query = "SELECT * from doctor where doctor_id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$query = "SELECT * from department"; 
$select_result = mysqli_query($conn, $query) or die ( mysqli_error());
if(isset($_POST['submit'])){

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
    
    $update="update doctor set doctor_name='".$doctor_name."',
doctor_mobile_number='".$doctor_mobile_number."', doctor_department='".$doctor_department."',doctor_loginid='".$doctor_loginid."',doctor_education='".$doctor_education."' ,doctor_experiance='".$doctor_experiance."',doctor_consultancy_charge='".$doctor_consultancy_charge."',doctor_status='".$doctor_status."'where doctor_id='".$id."'";
    $result = mysqli_query($conn,$update); 
    header("Location:view_doctor.php"); 
exit;
    
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
                                    <h4 class="card-title">Update Doctor</h4>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="doctor_name" class="control-label col-form-label">Doctor Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_name" class="form-control" id="doctor_name"  value="<?php echo $row['doctor_name'];?>" onkeypress="return (event.charCode > 64 && 
    event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  >
                                            </div>
                                             <label for="doctor_mobile_number" class="control-label col-form-label">Mobile Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_mobile_number" class="form-control" id="doctor_mobile_number"  onkeypress="return isNumberKey(event)"  value="<?php echo $row['doctor_mobile_number'];?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class=" control-label col-form-label">Department</label>
                                            <div class="col-md-4">
                                                <select name="doctor_department" class=" form-control custom-select">
                                                    <option>Department</option>
                                                     <?php
                                                    while ($row1 = mysqli_fetch_assoc($select_result)) {
                                                        if($row1["dept_id"] == $row["doctor_department"]){
                                                            echo '<option value="'.$row1["dept_id"].'" selected="selected">'.$row1["dept_name"].'</option>';   
                                                        }else{
                                                            echo '<option value="'.$row1["dept_id"].'">'.$row1["dept_name"].'</option>';   
                                                        }
                                                    }
                                                    ?>
                                                   
                                                </select>
                                            </div>
                                            <label for="doctor_loginid" class="control-label col-form-label">Login ID</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_loginid" class="form-control" id="doctor_loginid" value="<?php echo $row['doctor_loginid'];?>" onkeypress="return isNumberKey(event)"  >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="doctor_education" class="control-label col-form-label">Education</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_education" class="form-control" id="doctor_education" value="<?php echo $row['doctor_education'];?>">
                                            </div>
                                            <label for="doctor_experiance" class="control-label col-form-label">Experiance</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_experiance" class="form-control"  onkeypress="return isNumberKey(event)"  id="doctor_experiance" value="<?php echo $row['doctor_experiance'];?>">
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            
                                            <label for="doctor_consultancy_charge" class="control-label col-form-label">Consultancy Charge</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="doctor_consultancy_charge" class="form-control"  onkeypress="return isNumberKey(event)"  id="doctor_consultancy_charge" value="<?php echo $row['doctor_consultancy_charge'];?>">
                                            </div>
                                            <label class="control-label col-form-label">Status:</label>
                                           <div class="col-md-2 radio_btn">
                                              <span class="custom-control custom-radio">
                                                <input type="radio" value="Active" name="doctor_status" class="custom-control-input" id="active" required <?php echo (($row["doctor_status"] == 'Active') ? 'checked' : '') ?>>
                                                <label class="custom-control-label" for="active">Active</label>
                                            </span>
                                             <span class="custom-control custom-radio female_btn">
                                                <input type="radio" value="Deactive" class="custom-control-input" id="deactive"  name="doctor_status" required <?php echo (($row["doctor_status"] == 'Deactive') ? 'checked' : '') ?>>
                                                <label class="custom-control-label" for="deactive">Deactive</label>
                                            </span>
                                        </div>
                                            
                                    </div>
                                     <!--   
                                    <div class="form-group row">
                                            <label for="patient_degree_certificate" class="control-label col-form-label" style="width: 165px;">Upload Degree Certificate</label>
                                            <div class="col-sm-4">
                                               <input type="file" value="<?php echo $row['patient_degree_certificate'];?>" name="my_file" required="">
                                            </div>
                                            
                                        </div> -->
                                       
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
         function isNumberKey(evt){
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57))
       return false;
   return true;
}

    </script>
</body>

</html>