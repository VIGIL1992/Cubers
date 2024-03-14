<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from ui-themez.smartinnovates.net/items/infolio/Infolio/page-contact3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2024 09:31:44 GMT -->
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Infolio Multi-Purpose themeforest">
    <meta name="description" content="Infolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Infolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&amp;display=swap" rel="stylesheet">

    <!-- Font -->
    <link rel="stylesheet" href="assets/css/satoshi.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>





    <div id="smooth-wrapper">



        <?php
            // include 'includes/header.php'; 
            include 'includes/navbar.php'; 
        ?>



        <div id="smooth-content">

            <main class="main-bg">



                <!-- ==================== Start Header ==================== -->

                <header class="page-header-cerv bg-img section-padding" data-background="assets/imgs/header/2.jpg"
                    data-overlay-dark="4">
                    <div class="container pt-100">
                        <div class="text-center">
                            <h1 class="fz-100">Contact Us.</h1>
                            <div class="mt-15">
                                <a href="home-main.html">Home</a>
                                <span class="padding-rl-20">|</span>
                                <span class="main-color">Contact</span>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Header ==================== -->



                <!-- ==================== Start Contact ==================== -->

                <section class="contact section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 valign">
                                <div class="sec-head info-box full-width md-mb80">
                                    <div class="phone fz-30 fw-600 underline main-color">
                                        <a href="#0">+91 123 456 78 90</a>
                                    </div>
                                    <div class="morinfo mt-50 pb-30 bord-thin-bottom">
                                        <h6 class="mb-15">Address</h6>
                                        <p>2nd Floor, Mangalya Complex MPC Junction, Koduvally, Kerala 673572</p>
                                    </div>
                                    <div class="morinfo mt-30 pb-30 bord-thin-bottom">
                                        <h6 class="mb-15">Email</h6>
                                        <p>Support@uithemez.com</p>
                                    </div>

                                    <div class="social-icon-circle mt-50">
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fab fa-dribbble"></i></a>
                                        <a href="#0"><i class="fab fa-behance"></i></a>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 offset-lg-1 valign">
                                <div class="full-width">
                                    <div class="sec-head mb-50">
                                        <h6 class="sub-title main-color mb-15">Let's Chat</h6>
                                        <h3 class="text-u ls1">Send a <span class="fw-200">message</span></h3>
                                    </div>
                                    <form id="contact-form" class="form2" method="post" action="https://ui-themez.smartinnovates.net/items/infolio/Infolio/contact.php">

                                        <div class="messages"></div>

                                        <div class="controls row">

                                            <div class="col-lg-6">
                                                <div class="form-group mb-30">
                                                    <input id="form_name" type="text" name="name" placeholder="Name"
                                                        required="required">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group mb-30">
                                                    <input id="form_email" type="email" name="email" placeholder="Email"
                                                        required="required">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group mb-30">
                                                    <input id="form_subject" type="text" name="subject"
                                                        placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea id="form_message" name="message" placeholder="Message"
                                                        rows="4" required="required"></textarea>
                                                </div>
                                                <div class="mt-30">
                                                    <button type="submit" class="butn butn-full butn-bord radius-30">
                                                        <span class="text">Let's Talk</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End Contact ==================== -->



                <!-- ==================== Start google-map ==================== -->

                <div class="google-map">
                    <iframe id="gmap_canvas"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45551.85557124099!2d75.8883358680329!3d11.361446206301766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65d577878f70d%3A0x8c18924568cb100!2sPixell%20Media%20Technologies!5e0!3m2!1sen!2sin!4v1710155217241!5m2!1sen!2sin">
                    </iframe>
                </div>

                <!-- ==================== End google-map ==================== -->



            </main>

            <?php
                include 'includes/footer.php'; 
            ?>
            


        </div>

    </div>










    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>

</body>


<!-- Mirrored from ui-themez.smartinnovates.net/items/infolio/Infolio/page-contact3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2024 09:31:44 GMT -->
</html>