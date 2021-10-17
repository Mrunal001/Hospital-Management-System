<!doctype html>
<html lang="en">
<title>Contact</title>
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
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Patient name">
                </div>
              </div>

              <div class="col-sm-6 radio_btn">
                <label class="control-label col-form-label">Gender:</label>
                 <span class="custom-control custom-radio">
                    <input type="radio" value="Male" name="gender" class="custom-control-input" id="customControlValidation2" required>
                    <label class="custom-control-label" for="customControlValidation2">Male</label>
                </span>
                 <span class="custom-control custom-radio female_btn">
                    <input type="radio" value="Female" class="custom-control-input" id="customControlValidation3"  name="gender" required>
                    <label class="custom-control-label" for="customControlValidation3">Female</label>
                </span>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Blood Group">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control mydatepicker" placeholder="DOB" name="from_date" required="" autocomplete="off">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Address"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Mobile Number">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="City">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="LoginId">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="password" placeholder="Password">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control mydatepicker" placeholder="Appoinment Date" name="from_date" required="" autocomplete="off">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Appoinment Time">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control">
                    <option>Department</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control"> 
                    <option>Doctor</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Reason">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Book Appoinment</button>
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
</body>
</html>