<?php require_once('Connections/coneccion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO usuarios (usuario, password, nombre, tipo_usuario) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['usuario'], "text"),
                      GetSQLValueString(md5($_POST['password']), "text"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['tipo_usuario'], "int"));

  mysql_select_db($database_coneccion, $coneccion);
  $Result1 = mysql_query($insertSQL, $coneccion) or die(mysql_error());

  $insertGoTo = "login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
  <meta content="A different and fun way to raise funds. Register for free, create a donation link and start receiving funds" name="description">
  <meta content="Fundraising ; Raise funds for schools ; Beneficial causes" name="keywords">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Favicons -->
  <link href="assets/img/android-icon-72x72.png" rel="icon">
  <link href="assets/img/apple-icon-57x57.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/register.css" rel="stylesheet">

	<!--  <style>
	font {
    display: none;
</style>-->
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

       <!--<h1 class="logo"><a href="index.html">Multi</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/CB Fundraising Logo Dorado.png" alt="logotipo" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="getstarted scrollto" href="index.php">Home</a></li>
          <li><a class="getstarted scrollto" href="login.php">Log in</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Welcome!</h1>
          <h6>Discover the new way to raise funds easy and fun</h6>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<!-- ======= Form ======= -->

<section class="section">
    <div class="container me-md-auto text-center">

        <div class="me-md-auto text-center" >
          <h1 class= "titulo" >Sign up free</h1>
        </div>
          
        <div class="me-md-auto text-center">
             <h6 class="info">Enter your details and start fundraising in minutes</h6>
            <p class="info">Data with an asterisk (*) are required </p>
        </div>

      
          <form action="<?php echo $editFormAction; ?>" name="form" method="POST">
              <div class="row">
                  <div class="form-group col-md-3">
                      <label class="titulo" for="nombre">*Name</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="write your name" required=>
                  </div>
                  
      
                  <div class="form-group col-md-3">
                      <label class="titulo" for="correo">*e-mail</label>
                      <input type="text"  class="form-control"  id="e-mail" name="usuario" placeholder="Write a valid email" required=>
                  </div>
                  
                 <div class="form-group col-md-3">
                      <label class="titulo" for="Contraseña">*Password</label>
                      <input type="password" class="form-control" id="Contraseña" name="password" placeholder="write your password" required=>
                 </div>

                 <div class="form-group col-md-3">
                    <label class="titulo" for="User">User*</label><br>
                    <select class="select form-control"  name="tipo_usuario" id="user" required>
                    <option selected>Select the type of user</option>
                    <option value="1">Administrator</option>
                    <option value="2">Distributor</option>
                    <option value="3">Donor</option>
                  </select>
                   
               </div>

            </div>

      
              <div class="form-group col-md-11 me-md-auto text-center align-items-center" >
                  <input class="boton" type="submit" name="submit" value="Sign up">
      
              </div>
              <input type="hidden" name="MM_insert" value="form">
          </form>

          
          
        </div>
    
  </section>

  
 
<!-- ======= FormEnd ======= -->
 
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CB Fundraising</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
        Power by <a href="https://consulfinhn.site/">Consulfinhn</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

</body>

</html>

