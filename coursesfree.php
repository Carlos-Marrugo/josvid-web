<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cursos | Educación</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
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
                                <a href="index.html"><img src="assets/img/logo/logo.png" width="150px"></a>
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
                                          <!--validar si la variable de sesion existe-->
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Nuestros Cursos</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Servicios</a></li> 
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
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Nuestros cursos destacados</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="background-color: rgba(181, 184, 182);">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/Busqueda Binaria ED.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Ing. Carlos Marrugo</p>
                                    <h3><a href="#">Estructura de Datos - Busqueda Binaria</a></h3>
                                    <p>Este curso se enfoca en explorar en detalle la búsqueda binaria y su aplicación en diversas estructuras de datos.
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <p><span>(4.5)</span> basado en 120</p>
                                        </div>
                                        <div class="price">
                                            <span>$135</span>
                                        </div>
                                    </div>
                                    <form action="pagos.php" method="POST">
                                        <input type="hidden" name="courseName" value="Estructura de Datos - Busqueda Binaria">
                                        <input type="hidden" name="price" value="135">
                                        <input type="hidden" name="imageURL" value="assets/img/gallery/topic7.png">
                                        <!-- Submit button -->
                                        <button type="submit" class="border-btn border-btn2">Adquirir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="background-color: rgba(227, 177, 148);">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/Git Github miniatura.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Ing Carlos Marrugo</p>
                                    <h3><a href="#">Git - Terminal - VSC / Github</a></h3>
                                    <p>Este curso intensivo de Git y GitHub, aprenderás habilidades fundamentales para gestionar eficazmente el control de versiones de tus proyectos de manera eficiente. 
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <p><span>(4.5)</span> basado en 120</p>
                                        </div>
                                        <div class="price">
                                            <span>$135</span>
                                        </div>
                                    </div>
                                    <form action="pagos.php" method="POST">
                                        <input type="hidden" name="courseName" value="Git - Terminal - VSC / Github">
                                        <input type="hidden" name="price" value="135">
                                        <input type="hidden" name="imageURL" value="assets/img/gallery/Git Github miniatura.png">
                                        <!-- Submit button -->
                                        <button type="submit" class="border-btn border-btn2">Adquirir</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="background-color: rgba(170, 169, 168);">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/Notion Miniatura.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Inge. Carlos Marrugo</p>
                                    <h3><a href="#">Organizarme Como Programador</a></h3>
                                    <p>Este curso está diseñado para ayudarte a desarrollar habilidades efectivas de organización y gestión del tiempo, adaptadas para programadores.
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <p><span>(4.5)</span> basado en 120</p>
                                        </div>
                                        <div class="price">
                                            <span>$135</span>
                                        </div>
                                    </div>
                                    <form action="pagos.php" method="POST">
                                        <input type="hidden" name="courseName" value="Organizarme como programador">
                                        <input type="hidden" name="price" value="135">
                                        <input type="hidden" name="imageURL" value="assets/img/gallery/Git Github miniatura.png">
                                        <!-- Submit button -->
                                        <button type="submit" class="border-btn border-btn2">Adquirir</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="background-color: rgba(170, 169, 168);">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/Notion Miniatura.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Inge. Carlos Marrugo</p>
                                    <h3><a href="#">Organizarme Como Programador</a></h3>
                                    <p>Este curso está diseñado para ayudarte a desarrollar habilidades efectivas de organización y gestión del tiempo, adaptadas para programadores.
                                        
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <p><span>(4.5)</span> basado en 120</p>
                                        </div>
                                        <div class="price">
                                            <span>$135</span>
                                        </div>
                                    </div>
                                    <form action="pagos.php" method="POST">
                                        <input type="hidden" name="courseName" value="Work as a programmmer">
                                        <input type="hidden" name="price" value="135">
                                        <input type="hidden" name="imageURL" value="assets/img/gallery/Git Github miniatura.png">
                                        <!-- Submit button -->
                                        <button type="submit" class="border-btn border-btn2">Adquirir</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30" style="background-color: rgba(227, 177, 148);">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/Git Github miniatura.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Ing Carlos Marrugo</p>
                                    <h3><a href="#">Git - Terminal - VSC / Github</a></h3>
                                    <p>Este curso intensivo de Git y GitHub, aprenderás habilidades fundamentales para gestionar eficazmente el control de versiones de tus proyectos de manera eficiente.</p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <p><span>(4.5)</span> basado en 120</p>
                                        </div>
                                        <div class="price">
                                            <span>$135</span>
                                        </div>
                                    </div>
                                    <!-- Course information form -->
                                    <form action="pagos.php" method="POST">
                                        <input type="hidden" name="courseName" value="Git - Terminal - VSC / Github">
                                        <input type="hidden" name="price" value="135">
                                        <input type="hidden" name="imageURL" value="assets/img/gallery/Git Github miniatura.png">
                                        <!-- Submit button -->
                                        <button type="submit" class="border-btn border-btn2">Adquirir</button>
                                    </form>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30"style="background-color: rgba(170, 169, 168);">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="#"><img src="assets/img/gallery/Busqueda Binaria ED.png" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p>Ing. Carlos Marrugo</p>
                                    <h3><a href="#">Estructura de Datos - Busqueda Binaria</a></h3>
                                    <p>Este curso se enfoca en explorar en detalle la búsqueda binaria y su aplicación en diversas estructuras de datos.
                                    </p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="restaurant-name">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <p><span>(4.5)</span> basado en 120</p>
                                        </div>
                                        <div class="price">
                                            <span>$135</span>
                                        </div>
                                    </div>
                                    <form action="pagos.php" method="POST">
                                        <input type="hidden" name="courseName" value="Busqueda binaria">
                                        <input type="hidden" name="price" value="135">
                                        <input type="hidden" name="imageURL" value="assets/img/gallery/Git Github miniatura.png">
                                        <!-- Submit button -->
                                        <button type="submit" class="border-btn border-btn2">Adquirir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Explora los temas principales</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic1.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Estructura de Datos - Busqueda Binaria</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Git - Terminal - VSC / Github</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic3.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Organizarme como programador</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                       <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
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
      <!-- Scroll Up -->
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
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
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