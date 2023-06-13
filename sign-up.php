<?php
include_once "config.php";

if (isset($_SESSION['login'])) {
  header("location: index.php");
}

$message = null;
$flname = null;
$phone = null;
$email = null;
$password = null;
$confpassword = null;

function dataIsValid()
{
  global $message, $email, $db;
  if (!isset($_POST['flname']) || empty($_POST['flname'])) {
    $message = "نام و نام خانوادگی خود را وارد کنید";
    return false;
  }
  if (!isset($_POST['email']) || empty($_POST['email'])) {
    $message = "ایمیل خود را وارد کنید";
    return false;
  }
  if (!isset($_POST['phone']) || empty($_POST['phone'])) {
    $message = "شماره همراه خود را وارد کنید";
    return false;
  }
  if (!isset($_POST['pass']) || empty($_POST['pass'])) {
    $message = "گذرواژه خود را وارد کنید";
    return false;
  }
  if ($_POST['pass'] != $_POST['confpassword']) {
    $message = "گذرواژه شما با تکرار آن مطابقت ندارد";
    return false;
  }
  if (!isset($_POST['acceptRules'])) {
    $message = "شما قوانین را تایید نکرده اید";
    return false;
  }

  $sql = "SELECT * FROM tblusers WHERE email = '$email'";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) > 0) {
    $message = "این ایمیل قبلا ثبت نام کرده است";
    return false;
  }
  return true;
}

if (isset($_POST['email'])) {

  // user data
  $flname = $_POST['flname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $confpassword = $_POST['confpassword'];

  if (dataIsValid()) {
    $hashPass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tblusers (flname,phone,email,pass) VALUES
    ('$flname', '$phone', '$email','$hashPass')";

    if (mysqli_query($db, $sql)) {
      $message = "عملیات ثبت نام با موفقیت انجام شد";

      //clear all inputs
      $flname = null;
      $phone = null;
      $email = null;
      $password = null;
      $confpassword = null;
      
    } else {
      $message = "مشکلی در هنگام عملیات ثبت نام پیش آمده لطفا دوباره تلاش کنید";
    }
  }
}


?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ثبت نام</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />

    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="css/style.css" />




    <!-- FAVICON -->
    <link href="images/favicon.png" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="plugins/nprogress/nprogress.js"></script>
    <style>
   body{
     font-family: "Vazir";
}
</style>
  </head>

</head>

<body class="bg-light-gray" id="body">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="d-flex flex-column justify-content-between">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-5 col-md-10 ">
          <div class="card card-default mb-0">
            <div class="card-header pb-0">
              <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                <a class="w-auto pl-0" href="/index.php">
                  <img src="images/logo.png" alt="Mono">
                  <span class="brand-name text-dark">CRM</span>
                </a>
              </div>
            </div>
            <div class="card-body px-5 pb-5 pt-0">
              <h4 class="text-dark text-center mb-5">ثبت نام</h4>
              <form action="" method="post">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" name="flname" id="name" aria-describedby="nameHelp" placeholder="نام و نام خانوادگی" value="<?= $flname ?>">
                  </div>
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" name="email" id="email" aria-describedby="emailHelp" placeholder="ایمیل" value="<?= $email ?>">
                  </div>
                  <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" name="phone" id="phone" aria-describedby="nameHelp" placeholder="تلفن همراه" <?= $phone ?>>
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" name="pass" id="password" placeholder="رمز عبور" value="<?= $password ?>">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" name="confpassword" id="cpassword" placeholder="تایید رمز عبور" value="<?= $confpassword ?>">
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">

                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" name="acceptRules" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">من با شرایط و ضوابط موافقم</label>
                      </div>

                    </div>

                    <button type="submit" name="btnadd" class="btn btn-primary btn-pill mb-4">ثبت نام</button>

                    <p>از قبل حساب کاربری دارید؟
                      <a class="text-blue" href="sign-in.php">ورود</a>
                    </p>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if ($message) {
    echo '<script>alert("' . $message . '")</script>';
  }
  ?>

</body>

</html>