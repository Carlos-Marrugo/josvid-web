<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (empty($_SESSION['user'])) {
    // Si no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: login.html");
    exit;
}

include 'php/database.php';

$idUsuario = $_SESSION['id'];

$stmt = mysqli_prepare($conexion, "SELECT * FROM useraccount WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $idUsuario);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);

mysqli_close($conexion);
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

    <!-- CSS -->
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

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #F37513;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .casc {
            color: #fff;
        }

        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
        }

        .card {

            background-color: #1a1a1a;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: -500px;
            margin-top: -700px;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
            border: 4px solid #fff;
            /* añade un borde blanco a la imagen */
        }

        .user-data {
            text-align: center;
            color: white;
        }

        .user-name {
            font-size: 20px;
            margin-bottom: 10px;
            color: white;
        }

        .user-email {
            color: #f1f1f1;
        }

        .info-card {
            background-color: #1a1a1a;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: -700px;
            margin-left: -800px;
        }

        .info-item {
            margin-bottom: 10px;
            color: white;
        }

        .info-label {
            font-weight: bold;
            color: white;
        }

        /* Ocultar los botones cuando el usuario ha iniciado sesión */
        .button-container {
            display: none;
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
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
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
                                                <li class="active"><a href="index.php">Home</a></li>
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
                            <div>
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
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="backphoto">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">

            </div>

            <main>
                <!-- Contenido principal -->
                <div class="container">
                    <div class="card">
                        <img src="assets/img/icon/usuario.png" alt="Profile Picture" class="profile-picture">
                        <div class="user-data">
                            <p class="user-name"><?php echo $usuario['name']; ?></p>
                            <p class="user-email"><?php echo $usuario['email']; ?></p>
                        </div>
                    </div>

                    <div class="info-card">

                        <?php
                        //updating info
                        if (isset($_POST['enviar'])) {
                            echo "Editar";
                        } else {
                           /* $id = $_GET['id'];
                            $sql = "select * from useraccount where id = '" . $id . "'";
                            echo $sql;
                            $resultado = mysqli_query($conexion, $sql);

                            $fila = mysqli_fetch_assoc($resultado);
                            $name = $fila['name'];
                            $email = $fila['email'];

                            mysqli_close($conexion);*/
                        ?>

                            <form action="act.php" method="post" class="casc">
                                <div class="form-group">
                                    <label for="name">Nombre:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="idcurso">ID del Curso:</label>
                                    <input type="number" class="form-control" id="idcurso" name="idcurso" required>
                                </div>
                                <button type="submit" class="btn btn-success" action="">Actualizar Usuario</button>
                    </div>
                    </form>
                <?php
                        }
                ?>

                </div>
                </div>
                </div>


            </main>

        </section>

        </section>
        <!-- About Area End -->
    </main>

    <!-- Scroll Up -->
    <div id="back-top">
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