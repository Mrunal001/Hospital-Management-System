<?php 
include'config.php';
$query = "SELECT * from department"; 
$select_result = mysqli_query($conn, $query) or die ( mysqli_error());

$dr_query = "SELECT * from doctor"; 
$select_dr_result = mysqli_query($conn, $dr_query) or die ( mysqli_error());

if(isset($_POST['submit'])){
     $patient_name        =$_POST['patient_name'];
     $patient_gender      =$_POST['patient_gender'];
     $patient_blood_group =$_POST['patient_blood_group'];
     $patient_dob         =$_POST['patient_dob'];
     $patient_add         =$_POST['patient_add'];
     $patient_mobile      =$_POST['patient_mobile'];
     $patient_city        =$_POST['patient_city'];
     $patient_loginid     =$_POST['patient_loginid'];
     $patient_password    =$_POST['patient_password'];
     $patient_appoin_date =$_POST['patient_appoin_date'];
     $patient_appo_time   =$_POST['patient_appo_time'];
     $patient_dept        =$_POST['patient_dept'];
     $patient_doctor      =$_POST['patient_doctor'];
     $patient_reason      =$_POST['patient_reason'];

     $ins_query="insert into appointment
    (`patient_name`,`patient_gender`,`patient_blood_group`,`patient_dob`,`patient_add`,`patient_mobile`,`patient_city`,`patient_loginid`,`patient_password`,`patient_appoin_date`,`patient_appo_time`,`patient_dept`,`patient_doctor`,`patient_reason`)values
    ('$patient_name','$patient_gender','$patient_blood_group','$patient_dob','$patient_add','$patient_mobile','$patient_city','$patient_loginid','$patient_password','$patient_appoin_date','$patient_appo_time','$patient_dept','$patient_doctor','$patient_reason')";
   
    $result = mysqli_query($conn,$ins_query);   
}

?>
<!doctype html>
<html lang="en">
<title>Appointment</title>
<head>
    <?php include'head.php'; ?>
</head>
<body>


    <!--================Header Menu Area =================-->
    <?php include 'header.php'; ?>
    <!--================Header Menu Area =================-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Make an Appointment</h2>
        </div>
        <div class="col-lg-12">
          <form class="form-contact contact_form" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="patient_name" id="name" type="text" placeholder="Patient name">
                </div>
              </div>

              <div class="col-sm-6 radio_btn">
                <label class="control-label col-form-label">Gender:</label>
                 <span class="custom-control custom-radio">
                    <input type="radio" value="Male" name="patient_gender" class="custom-control-input" id="customControlValidation2" required>
                    <label class="custom-control-label" for="customControlValidation2">Male</label>
                </span>
                 <span class="custom-control custom-radio female_btn">
                    <input type="radio" value="Female" class="custom-control-input" id="customControlValidation3"  name="patient_gender" required>
                    <label class="custom-control-label" for="customControlValidation3">Female</label>
                </span>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_blood_group" id="name" type="text" placeholder="Blood Group">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control mydatepicker" placeholder="DOB" name="patient_dob" required="" autocomplete="off">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <textarea class="form-control" name="patient_add" placeholder="Address"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_mobile" id="subject" type="text" placeholder="Mobile Number">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_city" id="subject" type="text" placeholder="City">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_loginid" id="subject" type="text" placeholder="LoginId">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_password" id="subject" type="password" placeholder="Password">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control mydatepicker" placeholder="Appoinment Date" name="patient_appoin_date" required="" autocomplete="off">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_appo_time" id='datetimepicker3' type="text" placeholder="Enter Appoinment Time">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control" name="patient_dept">
                    <option value="">Department</option>
                    <?php
                      while ($row = mysqli_fetch_assoc($select_result)) {
                          echo '<option value="'.$row["dept_id"].'">'.$row["dept_name"].'</option>';   
                      }
                      ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control" name="patient_doctor"> 
                    <option  value="">Doctor</option>
                    <?php
                      while ($row = mysqli_fetch_assoc($select_dr_result)) {
                          echo '<option value="'.$row["doctor_id"].'">'.$row["doctor_name"].'</option>';   
                      }
                      ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="patient_reason" id="subject" type="text" placeholder="Reason">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" name="submit" class="button button-contactForm">Book Appoinment</button>
            </div>
          </form>


        </div>

      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

<!-- start footer Area -->
         <?php include 'footer.php'; ?>
    <!-- End footer Area -->


    
<!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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