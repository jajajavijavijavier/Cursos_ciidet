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
 		<a href="cursos.php">Cursos</a>
 		<a href="index.php#contact">Contacto</a>
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

<section class="home" id="home">

	<div class="content">
        <h3><span>Bienvenido</span> </h3>
		<h3>Aprendizaje en <span>línea</span> </h3>
		<p>Cursos y recursos educativos  </p>
		<a class="btn"> Introducción</a>
		
	</div>

</section>

<!-- home section ends -->


<!-- meet section starts -->

<section class="conocenos" id="conocenos">

	<div class="image">
		
    <img src="https://images.unsplash.com/photo-1569682535081-3e826bee049b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80 ") alt="" >
	</div>

	<div class="content">
		<h3 class="title">Introducción</h3>
		<p> un repositorio de aprendizaje es un lugar en donde se almacenan y organizan diferentes recursos educativos para que los estudiantes y educadores puedan acceder a ellos y utilizarlos en sus procesos de aprendizaje, estos recursos pueden incluir cursos en línea, videos educativos, lecturas, ejercicios, entre otros.
		</p>
		<a href="#" class="btn">Iniciar</a>
	</div>
	
</section>

<!-- meet section ends  -->

<!-- contact section starts -->
<section class="contact" id="contact">
	<h1 class="heading">Contactanos</h1>

	<div class="row">

		<div class="content">
			<h3 class="title">info</h3>

			<div class="info">
				<h3>  Dr. Gustavo Arroyo</h3>
                <h3> <i class="fas fa-envelope"></i> garroyo@ciidet.edu.mx</h3>

				<h3> Rolando Muñoz </h3>
				<h3> <i class="fas fa-envelope"></i> rolando_150691@hotmail.com </h3>
			</div>
			
		</div>
		
		<form action="">

			<input type="text" name="name" placeholder="name" class="box">
			<input type="email" name="email" placeholder="email" class="box">
			<input type="text" name="reason" placeholder="reason" class="box">
			<textarea name="" id="" cols="30" rows="10" class="box messsage" placeholder="message"></textarea>
			<a class="btn" href="mailto:garroyo@ciidet.edu.mx"> Enviar <i class="fas fa-paper-plane"> </i> </a>
			
		</form>
	</div>
	
</section>
<!-- contact section ends  -->

<!-- footer section starts -->
<section class="footer">

	<div class="box-container">

		<div class="box">
			<h3>CIIDET<i class="bi bi-card-checklist"></i></h3>
		</div>


		<div class="box">
		<p>follow us on</p>
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