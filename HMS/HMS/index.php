<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<title>Medcare Medical</title>
<head>
    <?php include'head.php'; ?>
</head>
<body>

    <!--================Header Menu Area =================-->
    <?php include 'header.php'; ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <h1>Making Health<br>
                    Care Better Together</h1>
                    <p>Also you dry creeping beast multiply fourth abundantly our itsel signs bring our. Won form living. Whose dry you seasons divide given gathering great in whose you'll greater let livein form beast  sinthete
                    better together these place absolute right.</p>
                    <a href="appointment.php" class="main_btn">Make an Appointment</a>
                    <!-- <a href="" class="main_btn_light">View Department</a> -->
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->

    <!--================ Service section start =================-->  

    <div class="service-area area-padding-top" id="department">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-12 col-xl-12">
                    <h3 class="text-center">Department</h3>
                </div>
            </div>
           
            <div class="row">
               <?php   $sel_query="Select * from department ORDER BY dept_id desc;";
                $select_result = mysqli_query($conn,$sel_query);
                 while($row = mysqli_fetch_assoc($select_result)) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
<!-- 
                        <span class="card-service__icon">
                            <i class="flaticon-brain"></i>
                        </span> -->
                        
                        <h3 class="card-service__title"><?php echo $row["dept_name"]; ?></h3>
                        <p class="card-service__subtitle"><?php echo $row["dept_description"]; ?></p>
                        <a class="card-service__link" href="#">Learn More</a>
                    </div>
                </div>
                 <?php  } ?>
            </div>
        </div>
    </div>    
    <!--================ Service section end =================-->    

<!--================ Team section start =================-->  
    <section class="team-area area-padding" id="doctors">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-12 col-xl-12">
                    <h3 class="text-center">Doctors</h3>
                </div>
                
            </div>

            <div class="row">
                <?php
                $sel_query="Select * from doctor,department WHERE dept_id = doctor_department ORDER BY doctor_id desc;";
                $select_result = mysqli_query($conn,$sel_query);
                while($row = mysqli_fetch_assoc($select_result)) { ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <!-- <img class="card-img rounded-0" src="img/team/1.jpg" alt=""> -->
                        <div class="card-team__body text-center">
                            <h3><a href="#"><?php echo $row["doctor_name"]; ?></a></h3>
                            <p><?php echo $row["dept_name"]; ?></p>
                            <div class="team-footer d-flex justify-content-between">
                                <a class="dn_btn" href=""><i class="ti-mobile"></i><?php echo $row["doctor_mobile_number"]; ?></a>

                            </div> 
                        </div>
                    </div>
                </div>
                <?php  } ?>

            </div>
        </div>
    </section>
    <!--================ Team section end =================-->  


    <!-- ================ Hotline Area Starts ================= -->  
    <section class="hotline-area text-center area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+01) – 256 567 550</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Hotline Area End ================= -->  

    <!-- start footer Area -->
    <?php include 'footer.php'; ?>
    <!-- End footer Area -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php include 'footer_script.php'; ?>
</body>
</html>