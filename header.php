<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HospitalCare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <style>
  /* Modal Background */
  .custom-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(2px);
  }

  /* Modal Box */
  .custom-modal-content {
    background: #fff;
    margin: 5% auto;
    padding: 30px 25px;
    border-radius: 12px;
    width: 90%;
    max-width: 420px;
    position: relative;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    animation: fadeIn 0.3s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* Close Button */
  .custom-close-btn {
    position: absolute;
    top: 12px;
    right: 16px;
    font-size: 22px;
    font-weight: bold;
    color: #666;
    cursor: pointer;
    transition: 0.3s;
  }

  .custom-close-btn:hover {
    color: #000;
  }

  /* Tabs */
  .custom-tabs {
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    border-bottom: 2px solid #eee;
  }

  .custom-tabs button {
    flex: 1;
    padding: 12px 0;
    background: none;
    border: none;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    color: #666;
    transition: 0.3s;
    border-bottom: 3px solid transparent;
  }

  .custom-tabs button:hover {
    color: #007BFF;
  }

  .custom-tabs button.active {
    color: #007BFF;
    border-color: #007BFF;
  }

  /* Form */
  .custom-form {
    display: none;
    flex-direction: column;
    gap: 15px;
  }

  .custom-form.active {
    display: flex;
  }

  .custom-form input,
  .custom-form select {
    padding: 12px 14px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 15px;
    outline: none;
    transition: border-color 0.3s;
  }

  .custom-form input:focus,
  .custom-form select:focus {
    border-color: #007BFF;
  }

  .custom-submit-btn {
    background: #007BFF;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
  }

  .custom-submit-btn:hover {
    background: #0056b3;
  }

  /* Mobile Responsive */
  @media (max-width: 480px) {
    .custom-modal-content {
      padding: 20px 15px;
    }

    .custom-tabs button {
      font-size: 14px;
    }
  }
</style>
</head>
<body>
  <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="no-image">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="doctor.php">Doctors</a></li>
                                        <li><a href="department.php">Department</a></li>
                                        <li><a href="blog.php">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog_details.php">Blog Details</a></li>
                                                <li><a href="elements.php">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="#" class="btn header-btn" id="openModalBtn">Login</a>
                                <a href="logout.php" class="btn header-btn" id="openModalBtn">Logout</a>                                
                            </div>
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>