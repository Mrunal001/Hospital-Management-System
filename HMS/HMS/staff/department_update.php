<?php
include'config.php';
$name_error = '';
$id=$_REQUEST['id'];
$query = "SELECT * from department where dept_id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){

     $dept_name =$_POST['dept_name'];
     $dept_description =$_POST['dept_description'];
     $dept_status =$_POST['dept_status'];

$update="update department set dept_name='".$dept_name."',
dept_description='".$dept_description."', dept_status='".$dept_status."'where dept_id='".$id."'";
    $result = mysqli_query($conn,$update); 
    header("Location:view_department.php"); 
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
                                    <h4 class="card-title">Add New Department</h4>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="dept_name" class="control-label col-form-label">Department Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="dept_name" class="form-control" value="<?php echo $row['dept_name'];?>" id="dept_name">
                                            </div>
                                            <label for="dept_description" class="control-label col-form-label">Description</label>
                                            <div class="col-sm-4">
                                                <input type="text" value="<?php echo $row['dept_description'];?>" name="dept_description" class="form-control" id="dept_description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-form-label">Status:</label>
                                            <div class="col-md-2 radio_btn">
                                             <span class="custom-control custom-radio">
                                                <input type="radio" value="Active" name="dept_status" class="custom-control-input" id="customControlValidation2" required <?php echo (($row["dept_status"] == 'Active') ? 'checked' : '') ?>>
                                                <label class="custom-control-label" for="customControlValidation2">Active</label>
                                            </span>
                                             <span class="custom-control custom-radio female_btn">
                                                <input type="radio" value="Deactive" class="custom-control-input" id="customControlValidation3"  name="dept_status" required <?php echo (($row["dept_status"] == 'Deactive') ? 'checked' : '') ?>>
                                                <label class="custom-control-label" for="customControlValidation3">Deactive</label>
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
</body>

</html>