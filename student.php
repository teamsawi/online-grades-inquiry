<!DOCTYPE html>
<html lang="en">
<head><title>Student Grade Inquiry </title>
<link rel="icon" href="root/img/neust.png" type="image/x-icon">
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/flexslider.css" rel="stylesheet" type="text/css">
<!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie-style.css"><![endif]-->
<meta name="viewport" content="width=device-width; initial-scale=1.0">
</head>
<body>
<div class="container">
  <header class="sixteen columns alpha omega"> <a href="index.php"><img class="brand" src="img/logo.png" alt=""></a>
    <nav class="main-nav sixteen columns">
      <ul class="ten columns alpha">
            <li><a href="index.php">Home</a></li>
        <li><a href="student.php">Student</a></li>
         <li><a href="Faculty.php">Faculty</a></li>
          <li><a href="#">Help</a></li>
      </ul>

      <!--Close Social Div-->
    </nav>
  </header>
  <div class="sixteen columns">
    <div class="h-border">
      <div class="heading">
        <h1 style="color: #062a96;">Student Log - In</h1>
      </div>
      <!--Close "Heading" Div-->
    </div>
    <!--Close H-border Div-->
  </div>
  <section class="row contact">
    <div class="sixteen columns">
      <form class="clearfix" action="sloginscript.php" method="get">
        <table border="1">
          <tr>
          <td><input type="text" class="small-text" placeholder="2016100111" name="un" required/> 
            <input type="Submit" style="margin-left: 10px;" value="Proceed" class="btn green"></td>
         </tr>
        </table>
   
      
       
      </form>
    
      </div>
  </section>
  <div class="clear"></div>
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
