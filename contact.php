<?php
session_start();
?><!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cursos | Educación</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<!-- Header Start -->
<div class="header-area header-transparent">
    <div class="main-header ">
        <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" width="150px"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li class="active" ><a href="index.php">Home</a></li>
                                        <li><a href="courses.php">Cursos</a></li>
                                          <li><a href="about.php">Acerca</a></li>
                                          <li><a href="contact.php">Contactanos</a></li>
                                          <li><a href="pagos.php"><img src="images/icons.png"></a></li>
                                          <li><a href="#">Perfil</a>
                                            <ul class="submenu">
                                                
                                                <li><a href="perfil.php">Perfil</a></li>
                                                <li><a href="editarperfil.php"><img src="assets/img/menu/profile.png" width="30px">Editar perfil</a></li>
                                                <li><a href="php/cerrarSesion.php"><img src="assets/img/menu/logout.png" width="30px">Salir</a></li>

                                            </ul>
                                        </li>
                                          <!-- Button -->
                                          <?php
                                          if (!isset($_SESSION['user'])) {
                                            ?>
                                          <li class="button-header margin-left "><a href="register.html" class="btn">únete</a></li>
                                          <li class="button-header"><a href="login.html" class="btn btn3">Iniciar sesión</a></li>
                                          <?php
                                                }
                                                ?>    
                                    </ul>
                                </nav>
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
</div>
<!-- Header End -->
<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Contactanos</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a>Contactos</a></li> 
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
           
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Ponerse en contacto</h2>
                </div>
                <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
            </div>
        </div>
    </div>
    <div class="form-group mt-3">
        <button type="button" class="button button-contactForm boxed-btn" id="enviarBtn">Enviar</button>
    </div>
</form>

<script>
    document.getElementById('enviarBtn').addEventListener('click', function() {
        document.getElementById('contactForm').submit();
    });
</script>

                </div>
                <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>50, Cra. 50 #31, Cartagena de Indias, Bolívar</h3>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>56517180</h3>
                            <p>Lunes a Viernes de 8am a 9pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>unicolombo.edu.co</h3>
                            <p>¡Envíanos tu consulta en cualquier momento!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
<footer>
    <div class="footer-wrappper footer-bg">
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row justify-content-between">
                   <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                           <div class="single-footer-caption mb-30">
                               <!-- logo -->
                               <div class="footer-logo mb-25">
                                   <a href="index.php"><img src="assets/img/logo/footer.png" width="225px"></a>
                               </div>
                               <div class="footer-tittle">
                                   <div class="footer-pera">
                                       <p>Disfruta</p>
                                   </div>
                               </div>
                               <!-- social -->
                               <div class="footer-social">
                                   <a href="#"><i class="fab fa-twitter"></i></a>
                                   <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                   <a href="#"><i class="fab fa-pinterest-p"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                         <h4>Soporte</h4>
                         <ul>
                             <li><a href="contact.php">Contactanos= Línea telefónica ó Correo eletrónico</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                 <div class="single-footer-caption mb-50">
                     <div class="footer-tittle">
                         <h4>Compañia</h4>
                         <ul>
                             <li><a href="#">Design & creatives</a></li>
                             <li><a href="#">Telecommunication</a></li>
                         </ul>
                        </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  </footer> 
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>