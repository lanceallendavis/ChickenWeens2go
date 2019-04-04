<?php
include('./includes/session-user.php');
require_once('./includes/mysqli_connect.php');
$userID = $_SESSION['user']['ID'];
$select_edit_query = "SELECT * FROM users WHERE ID = $userID";
$select_results = mysqli_query($db_connect, $select_edit_query);
$select = mysqli_fetch_array($select_results, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="userasset/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="userasset/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="userasset/css/Pretty-Footer.css">
    <link rel="shortcut icon" href="userasset/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="userasset/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="userasset/css/Profile-Edit-Form.css">
</head>

<body>
 <?php include('./includes/header-user.html'); ?>
    <div class="container profile profile-view" id="profile" style="padding-top: 90px;padding-bottom: 67px;">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form action='includes/edit-user.php' method='post' enctype='multipart/form-data'>
            <input type="hidden" name="id" value="<?php echo $_SESSION['user']['ID']; ?>">
            <div class="form-row profile-row">
                <div class="col-sm-3">
                            <img src="./images/user-images/<?php echo $select['profile_photo']; ?>" style="width:130px; height: 150px;">
                    <input type="file" class="form-control" name="profileImage" style="font-family: Lato, sans-serif;font-size: 18px; height:50px; width: 130px;"></div>
                <div class="col-md-8">
                    <h1 style="font-family: 'Black Han Sans', sans-serif;color: rgb(248,157,19);letter-spacing: 6px;">Edit Profile </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="font-family: Lato, sans-serif;">Firstname </label><input class="form-control" type="text" value="<?php echo $select['first_name']; ?>"  name="firstName"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="font-family: Lato, sans-serif;">Lastname </label><input class="form-control" type="text" value="<?php echo $select['last_name']; ?>"  name="lastName"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" autocomplete="off" required="" value="<?php echo $_SESSION['user']['email']; ?>" name="email"></div>
                    <div class="form-group"><label style="font-family: Lato, sans-serif;">Address</label><input class="form-control" autocomplete="off" required="" value="<?php echo $select['address']; ?>" name="address"></div>
                     <hr>
                     <div class="form-group"><label>Old-Password</label><input class="form-control" type="password" name="oldPassword" required=""  autocomplete="off"></div>
                     <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>New Password </label><input class="form-control" type="password" name="newPassword" autocomplete="off"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label style="font-family: Lato, sans-serif;">Confirm Password</label><input class="form-control" type="password" name="confirmPass" autocomplete="off" ></div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  <footer style="margin-top: 3px;background-color: rgb(27,18,15);">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#"><img src="userasset/img/sojubtry.png" style="width: 226px;height: 87px;"></a></h3>

                <p class="company-name"
                    style="font-family: Lato, sans-serif;">Chicken Ween's 2go © 2019 </p>
            </div> <div class="col-md-4 footer-about">
                <h4 style="font-family: Roboto, sans-serif;">About the company</h4>
                <p style="font-family: Lato, sans-serif;"> Chicken Ween's 2go was establish last March 2017, that specialize in flavored chicken wings. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/chickenweens2go/?hl=en"><i class="fa fa-instagram" ></i></a></div>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p style="font-family: Lato, sans-serif;"><span class="new-line-span" style="font-family: Roboto, sans-serif;">Califonia Garden Square</span> Mandaluyong City</p>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </footer>
    <script src="userasset/js/jquery.min.js"></script>
    <script src="userasset/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="userasset/js/creative.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="userasset/js/Subscribe-window.js"></script>
</body>

</html>
