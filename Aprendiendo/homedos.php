<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
	$user_id = $_COOKIE['user_id'];
}else{
	$user_id = '';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styledos.css">

</head>
<body>

<!-- header section starts -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->


<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">Opciones rapidas</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">Me gustas y comentarios</h3>
         <p>total de me gustas : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">ver me gustas</a>
         <p>total de comentarios : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">ver comentarios</a>
         <p>guardar playlist : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">ver marcador</a>
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">Inicia sesión o Registrate</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="admin/login.php" class="option-btn">Inicia sesión</a>
            <a href="admin/register.php" class="option-btn">Registrate</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">top categorias</h3>
         <div class="flex">
            <a href="search_course.php?"><i class="fas fa-code"></i><span>development</span></a>
            <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
            <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="#"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="#"><i class="fab fa-react"></i><span>react</span></a>
            <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="#"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box tutor">
         <h3 class="title">Bienvenido</h3>
         <p>Aqui podra ver todo el contenido de aprendisaje disponible por tomar, si quiere impartir un curso registrate</p>
         <a href="admin/register.php" class="inline-btn">Registrate</a>
         <a href="admin/login.php" class="inline-btn">Inicia</a>

      </div>

   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">latest courses</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view more</a>
   </div>

</section>

<!-- courses section ends -->







<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->


 <!-- custom js file link -->

 <script src="js/scriptdos.js"></script>

 </body>
 </html>