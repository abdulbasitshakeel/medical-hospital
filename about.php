
<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = $_POST['name'] ?? '';
    $phone = $_POST['email'] ?? ''; // assuming email input is actually phone
    $doctor_name = $_POST['select'] ?? '';
    $email = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    $created_at = date("Y-m-d H-i-s");

    // Make sure the number of columns matches the number of placeholders (5)
    $sql = "INSERT INTO appointment (patient_name, phone, doctor_name, email, message, created_at)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind 5 values ("sssss" = 5 strings)
    $stmt->bind_param("ssssss", $patient_name, $phone, $doctor_name, $email, $message,$created_at);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Appointment Booked Successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('❌ Booking Failed');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<?php include('header.php');?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About Start-->
    <div class="about-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-35">
                            <span>About Our Company</span>
                            <h2>Welcome To Our Hospital</h2>
                        </div>
                        <p> Our team of experienced doctors, skilled nurses, and dedicated staff work around the clock to ensure the well-being, comfort, and recovery of every patient. Equipped with state-of-the-art technology and a modern infrastructure, Pluse Medical is not just a place of treatment—it's a place of hope, healing, and trust. Your health is our mission.</p>
                        <div class="about-btn1 mb-30">
                            <a href="about.php" class="btn about-btn">Find Doctors .<i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30">
                            <a href="about.php" class="btn about-btn2">Appointment <i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30">
                            <a href="about.php" class="btn about-btn2">Emargency 1 <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About  End-->
    <!--? All startups Start -->
    <div class="all-starups-area testimonial-area fix">
        <!-- left Contents -->
        <div class="starups">
            <!--? Testimonial Start -->
            <div class="h1-testimonial-active">
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                    <!-- Testimonial Content -->
                    <div class="testimonial-caption ">
                        <div class="testimonial-top-cap">
                            <img src="assets/img/gallery/testimonial.png" alt="">
                            <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for yout hard.”</p>
                        </div>
                        <!-- founder -->
                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                            <div class="founder-img">
                                <img src="assets/img/gallery/Homepage_testi.png" alt="">
                            </div>
                            <div class="founder-text">
                                <span>Margaret Lawson</span>
                                <p>Chif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        </div>
        <!--Right Contents  -->
        <div class="starups-img"></div>
    </div>
    <!--All startups End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Gellary</span>
                        <h2>Our Medical Camp</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
     <!--? Contact form Start -->
     <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>Appointment Apply Form</span>
                                        <h2>Appointment Form</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="about.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                    <select name="select" id="select2" required>
                                        <option value="">Choose Doctor</option>
                                        <option value="dr john">dr john</option>
                                        <option value="dr Miya">dr Miya</option>
                                        <option value="dr Shakil">dr Shakil</option>
                                        <option value="dr Tamim">dr Tamim</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="subject" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-65">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="btn" type="submit">Submit Now <i class="ti-arrow-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact left Img-->
        <div class="from-left d-none d-lg-block">
            <img src="assets/img/gallery/contact_form.png" alt="">
        </div>
    </div>
    <!-- Contact form End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery Products End -->
     <!--? Team Start -->
     <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Doctors</span>
                        <h2>Our Specialist</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Alvin Maxwell</a></h3>
                            <span>Cardiology</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Maria Smith</a></h3>
                            <span>Dermotology</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Angela Doe</a></h3>
                            <span>Family Medicine</span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    </main>
    <?php include('footer.php');?>
