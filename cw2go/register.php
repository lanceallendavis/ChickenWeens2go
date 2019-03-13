<?php require('./includes/mysqli_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Register - Chicken Ween's 2Go</title>
  <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
  <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="userasset/css/-Login-form-Page-BS4-.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>
<body>
  <?php include('./includes/header-guest.html'); ?>
  <div class="container-fluid">
    <div class="row mh-100vh">
      <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
        <div class="m-auto w-lg-75 w-xl-50">
          <form action="./includes/register.inc.php" method="post" enctype="multipart/form-data" style="padding-top: 127px;" >
            <input type="hidden" name="action" value="register">
            <h1 data-aos="fade-up" data-aos-duration="250" data-aos-delay="150" style="color: rgb(248,157,19);font-family: 'Black Han Sans', sans-serif;letter-spacing: 5px;">Register</h1>
            <div class="form-group"><label class="text-secondary" style="font-family: Lato, sans-serif;">Username</label><input class="form-control" type="text" name="username" required></div>
            <div class="form-group"><label class="text-secondary" style="font-family: Lato, sans-serif;">First Name</label><input class="form-control" type="text" name="firstName" required></div>
            <div class="form-group" style="font-family: Lato, sans-serif;"><label class="text-secondary">Last Name</label><input class="form-control" type="text" name="lastName" required></div>
            <div class="form-group" style="font-family: Lato, sans-serif;"><label class="text-secondary">Email</label><input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" required></div>
            <div class="form-group" style="font-family: Lato, sans-serif;"><label class="text-secondary">Address</label><input class="form-control" type="text" name="address"></div>
            <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" name="password" type="password" required=""></div>
            <div class="form-group"><label class="text-secondary">Confirm Password</label><input class="form-control" name="repeatPass" type="password" required="">
            <div class="form-group"><label class="text-secondary">Profile Image</label><input type="file" name="profileImage" id="profileImage"></div>
            <button class="btn btn-info mt-2" type="submit" data-bs-hover-animate="tada" style="background-color: rgb(220,93,66);width: 126px;">REGISTER</button></div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image: url(&quot;userasset/img/loop.gif&quot;);background-size: cover;background-position: center center;">
        <p class="ml-auto small text-dark mb-2" style="background-color: rgba(255,255,255,0);color: rgba(52,58,64,0);"><br></p>
      </div>
    </div>
  </div>
  <script src="userasset/js/jquery.min.js"></script>
  <script src="userasset/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="userasset/js/bs-animation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
  <script src="https://use.fontawesome.com/1744f3f671.js"></script>
</body>
</html>
