<?php
include_once "config.php";


if (isset($_SESSION['login'])) {
  header("location: index.php");
}


$message = null;
$email = null;
$password = null;
$flname = null;

function dataIsValid()
{
  global $message, $email, $db,$flname;

  if (!isset($_POST['email']) || empty($_POST['email'])) {
    $message = "ایمیل خود را وارد کنید";
    return false;
  }

  if (!isset($_POST['pass']) || empty($_POST['pass'])) {
    $message = "گذرواژه خود را وارد کنید";
    return false;
  }



  $sql = "SELECT * FROM tblusers WHERE email = '$email'";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) == 0) {
    $message = "این ایمیل هنوز ثبت نام نکرده است";
    return false;
  }

  $row = mysqli_fetch_assoc($result);
  $hashPass = $row["pass"];
  $flname = $row["flname"];

  if (!password_verify($_POST['pass'], $hashPass)) {
    $message = " اطلاعات شما باهم مطابقت ندارند ";
    return false;
  }

  return true;
}

if (isset($_POST['email'])) {

  // user data
  $email = $_POST['email'];
  $password = $_POST['pass'];

  if (dataIsValid()) {
    $_SESSION['login'] = $flname;
    header("location: index.php");
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

    <title>ورود</title>

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
        <div class="col-lg-6 col-md-10">
          <div class="card card-default mb-0">
            <div class="card-header pb-0">
              <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                <a class="w-auto pl-0" href="/index.html">
                  <img src="images/logo.png" alt="Mono">
                  <span class="brand-name text-dark">CRM</span>
                </a>
              </div>
            </div>
            <div class="card-body px-5 pb-5 pt-0">

              <h4 class="text-dark mb-6 text-center">وارد شوید.</h4>

              <form action="sign-in.php" method="post">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control input-lg" name="email" id="email" aria-describedby="emailHelp" placeholder="ایمیل" value="<?= $email ?>" >
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" class="form-control input-lg" name="pass" id="pass" placeholder="رمز عبور" value="<?= $password ?>" >
                  </div>
                  <div class="col-md-12">

                    <div class="d-flex justify-content-between mb-3">

                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">من را بخاطر بسپارید</label>
                      </div>

                      <a class="text-color" href="reset-password.php">فراموشی رمز عبور؟ </a>

                    </div>
                    <!-- <a class="text-color" href="index.php"> -->
                    <button type="submit" name="login" class="btn btn-primary btn-pill mb-4">ورود</button>
                    </a>

                    <p>حساب کاربری ندارید؟
                      <a class="text-blue" href="sign-up.php">ثبت نام</a>
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