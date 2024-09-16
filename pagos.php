<?php
session_start();
?>
<!doctype html>
<html lang="en">

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
  <link rel="stylesheet" href="php/javascript.js">
</head>

<body>

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
                  <h1 data-animation="bounceIn" data-delay="0.2s">Carrito de compras</h1>
                  <!-- breadcrumb Start-->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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


    <!-- Start Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <br>
              <h1>Pagos</h1>
            </div>
          </div>
          <div class="col-lg-7">

          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->



    <div class="untree_co-section before-footer-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>

                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "test";

                  // Creating conexion
                  $conn = new mysqli($servername, $username, $password, $dbname);

                  // VVerifying conexion
                  if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                  }

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $courseName = $_POST['courseName'];
                    $price = $_POST['price'];
                    $imageURL = $_POST['imageURL'];

                    // Insertar los datos en la base de datos
                    $sql = "INSERT INTO usercourses (Id_user,courseName, price, imageURL) VALUES ('" . $_SESSION["id"] . "','$courseName', '$price', '$imageURL')";

                    if ($conn->query($sql) === TRUE) {
                      echo "Curso adquirido exitosamente";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                  }
                  $sql = "SELECT
                            `id`,
                            `Id_user`,
                            `imageURL`,
                            `courseName`,
                            `price`,
                            `imageURL`
                          FROM `test`.`usercourses` where Id_user = '" . $_SESSION["id"] . "'";
                  $result = mysqli_query($conn, $sql);

                  $precio = 0;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id_i = $row['id'];

                    echo '<tr><td class="product-thumbnail"><img src="./' . $row['imageURL'] . '" alt="Image" height="auto" width="42"></td>';
                    echo '<td class="product-thumbnail">' . $row['courseName'] . '</td>';
                    echo '<td class="product-thumbnail">' . $row['price'] . '</td>';
                    echo '<td class="product-thumbnail" align="center"><a href="eliminardeCarrito.php?id=' . $id_i . '"><img src="assets/img/icon/eli.png" alt="Image" height="auto" width="20"></a></td></tr>';
                    $precio = $precio + $row['price'];
                  }
                  // Cerrar la conexión
                  $conn->close();
                  ?>

                </tbody>
              </table>
            </div>
          </form>
        </div>
        <!-- Logica de comprar update -->
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Totales del carrito</h3>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong id="total" class="text-black">$<?php echo $precio ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='cheackout.php'">Pasar por la caja</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Logica de comprar update -->

          <!-- Start Footer Section -->
          <footer class="footer-section">
            <div class="container relative">

              <div class="row g-5 mb-5">
                <div class="col-lg-4">
                  <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo"><span></span></a></div>
                  <p class="mb-4">Comprando...</p>

                  <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                  </ul>
                </div>
              </div>

              <div class="border-top copyright">
                <div class="row pt-4">
                  <div class="col-lg-6">

                  </div>

                  <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- End Footer Section -->

  </main>
  <!--? Hero End -->
  <!-- JS here -->

  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/scrollIt.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/nice-select.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="assets/js/jquery.form.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/mail-script.js"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>