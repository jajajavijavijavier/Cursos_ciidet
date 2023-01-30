<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta htt-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CIIDET</title>

	<!--Font cdn link -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!--css file link -->
	<link rel="stylesheet" type="text/css" href="css/styleuno.css">

 </head>
 <body>
 <!-- header section starts -->
<header class="header" id="header">




<a href="#" class="logo">CIIDET</a>
<nav class="navbar">
 		<a href="index.php#home">Inicio</a>
 		<a href="index.php#conocenos">Introducción</a>
 		<a href="index.php#contact">Contacto</a>
		 <a href="cursos.php">Cursos</a>
 	</nav>

 	<div class="icons">
 		<div class="fas fa-bars" id="menu-btn"></div>
 		<div class="fas fa-search" id="search-btn"></div>
 		<div class="fas fa-user" id="login-btn"></div>
 	</div>

 	<form action="" class="search-form">
 		<input type="search" id="search-box" placeholder="Search here...">
 		<label for="search-box" class="fas fa-search"></label>
 	</form>

 	<form action="" id="login-form" class="login-form">
 		<h3>Ingresa</h3>
 		<input type="email" placeholder="Ingresa tu correo" class="box">
 		<input type="Password" placeholder="Contraseña" class="box">
 		<p>Olvidaste tu contraseña?<a href="#"> click aqui</a></p>
 		<input type="submit" value="Entrar" class="btn">
 	</form>
 		
 </header>
 <!-- header section ends -->

 <!-- home section starts -->

<section class="login" id="login">

<div class="content">
	<h3><span>Bienvenido</span> </h3>
	<h3>Aprendizaje en <span>línea</span> </h3>
	<p>Cursos y recursos educativos  </p>
	<a  href="admin/login.php"  class="btn"> Iniciar sesión</a>
	<a  href="admin/register.php" class="btn"> Crear una cuenta</a>  <br>
	
    <a  href="homedos.php" class="btn"> Entrar sin cuenta</a>

</div>

</section>

<!-- home section ends -->
	



<!-- footer section starts -->
<section class="footer">

	<div class="box-container">

		<div class="box">
			<h3>CIIDET<i class="bi bi-card-checklist"></i></h3>
		</div>


		<div class="box">
		<p>Siguenos</p>
			<a href="" class="fab fa-facebook"></a>
			<a href="" class="fab fa-twitter"></a>
			<a href="" class="fab fa-instagram"></a>
		</div>

	</div>


	
</section>

<!-- footer section ends  -->


 <!-- custom js file link -->

 <script src="js/script.js"></script>

</body>
</html>