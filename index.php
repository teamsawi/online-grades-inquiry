<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Grade Inquiry </title>
<link rel="icon" href="root/img/neust.png" type="image/x-icon">
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/flexslider.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
</head>
  <?php
     include('admin/config.php');
     ?>
<body>
<div class="container">
  <header class="sixteen columns alpha omega"> <a href="index.php"><img class="brand" src="img/logo.png" alt=""></a>
    <nav class="main-nav sixteen columns">
      <ul class="ten columns alpha">
        <li><a href="index.php">Home</a></li>
        <li><a href="student.php">Student</a></li>
         <li><a href="faculty.php">Faculty</a></li>
          <li><a href="#">Help</a></li>
    
      </ul>
    </nav>
  </header>
  <section class="sixteen columns feature">
    <div class="flexslider">
      <ul class="slides">
        <li> <img src="img/1.png" alt=""> </li>
        <li> <img src="img/2.png" alt=""> </li>
      </ul>
    </div>
    <!--Close Flexslider Div-->
  </section>
 

 
  </div>
  <br>
  <footer class="row">
    <div class="eight columns omega">
      <p>&copy;2017 <a href="#">Thesis Purposes Only</a> | Design by <a href="#">#TeamSawi</a></p>
    </div>
    <nav class="eight columns alpha">
      <ul>
    <li><a href="index.php">Home</a></li>
        <li><a href="student.php">Student</a></li>
         <li><a href="Faculty.php">Faculty</a></li>
          <li><a href="#">Help</a></li>
      </ul>
    </nav>
  </footer>
</div>
<!--Close Container Div-->
<!--Grab JS Files-->
<script src="js/jquery.js" ></script>
<script src="js/jquery.flexslider.js" ></script>
<script>
$(window)
    .load(function () {
    $('.flexslider')
        .flexslider({
        animation: "slide"
    });
});
</script>
</body>
</html>
