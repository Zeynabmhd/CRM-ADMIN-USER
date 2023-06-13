<?php
include_once "config.php";

if (isset($_GET['logout'])) {
  unset($_SESSION['login']);
}

if (!isset($_SESSION['login'])) {
  header("location: sign-in.php");
}


// add product
$message = null;
$target_dir = "uploads/";

function dataIsValid()
{
  global $message;
  if (!isset($_POST['name']) || empty($_POST['name'])) {
    $message = "لطفا نام محصول را وارد کنید";
    return false;
  }
  if (!isset($_POST['price']) || empty($_POST['price'])) {
    $message = "لطفا قیمت محصول را وارد کنید";
    return false;
  }
  if (!isset($_POST['num']) || empty($_POST['num'])) {
    $message = "لطفا تعداد محصول را وارد کنید";
    return false;
  }
  if (!isset($_POST['cat']) || $_POST['cat'] == "0") {

    $message = "لطفا دسته بندی محصول را وارد کنید";
    return false;
  }
  if (!isset($_FILES['photo'])) {
    $message = "لطفا عکس محصول را وارد کنید";
    return false;
  }
  return true;
}

if (isset($_POST['save'])) {

  if (dataIsValid()) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $num = $_POST['num'];
    $cat = $_POST['cat'];
    $file = $_FILES['photo'];
    // مشکل حل شد
    $filePath =   $target_dir . time() . $file['name'];
    move_uploaded_file($file['tmp_name'], $filePath);
    $add = mysqli_query($db, "INSERT INTO tblproducts (`name` ,`price` ,`photo` ,`num` ,`cat`) VALUES ('$name', '$price', '$filePath', '$num', '$cat')");
    if ($add) {
      $message = "محصول با موفقیت اضافه شد";
    } else {
      $message = "عملیات اضافه کردن محصول با خطا مواجه شد";
    }
  }
}

// edit product
function editDataIsValid()
{
  global $message;
  if (!isset($_POST['name']) || empty($_POST['name'])) {
    $message = "لطفا نام محصول را وارد کنید";
    return false;
  }
  if (!isset($_POST['price']) || empty($_POST['price'])) {
    $message = "لطفا قیمت محصول را وارد کنید";
    return false;
  }
  if (!isset($_POST['num']) || empty($_POST['num'])) {
    $message = "لطفا تعداد محصول را وارد کنید";
    return false;
  }
  if (!isset($_POST['cat']) || $_POST['cat'] == "0") {

    $message = "لطفا دسته بندی محصول را وارد کنید";
    return false;
  }

  return true;
}

if (isset($_POST['edit'])) {

  if (editDataIsValid()) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $num = $_POST['num'];
    $cat = $_POST['cat'];
    $id = $_POST['id'];

    if (!isset($_FILES['photo']) || $_FILES['photo']['size'] == 0) {
      $sql = "UPDATE tblproducts SET name='$name', price='$price' , num = '$num', cat = '$cat'  WHERE id='$id' ";
    } else {
      $file = $_FILES['photo'];
      $filePath =   $target_dir . time() . $file['full_path'];
      move_uploaded_file($file['tmp_name'], $filePath);
      $sql = "UPDATE tblproducts SET name='$name', price='$price' , num = '$num', cat = '$cat' , photo= '$filePath'  WHERE id=1 ";
    }

    $edit = mysqli_query($db, $sql);
    if ($edit) {
      $message = "محصول با موفقیت ویرایش شد";
    } else {
      $message = "عملیات ویرایش محصول با خطا مواجه شد";
    }
  }
}

//delete product
if (isset($_GET['delete'])) {
  $productID = $_GET['delete'];


  // حذف محصول با آیدی ۱۰
  $sql = "DELETE FROM tblproducts WHERE id='$productID'";

  if ($db->query($sql) === TRUE) {
    $message = "محصول مورد نظر با موفقیت حذف شد";
  } else {
    $message = "مشکلی در عملیات حذف محصول پیش آمد";
  }
}




// get all products
$query = mysqli_query($db, "select * from  tblproducts");


?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr ">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>داشبورد کسب و کار</title>

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link href="plugins/toaster/toastr.min.css" rel="stylesheet" />
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


<body class="navbar-fixed sidebar-fixed" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>


  <div id="toaster"></div>


  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">


    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    <aside class="left-sidebar sidebar-dark" id="left-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="/index.php">
            <img src="images/logo.png" alt="Mono">
            <span class="brand-name">CRM</span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">



            <li class="active">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-briefcase-account-outline"></i>
                <span class="nav-text">داشبورد کسب و کار</span>
              </a>
            </li>





            <li>
              <a class="sidenav-item-link" href="analytics.php">
                <i class="mdi mdi-chart-line"></i>
                <span class="nav-text">داشبورد تجزیه و تحلیل</span>
              </a>
            </li>





            <li class="section-title">
              برنامه ها
            </li>





            <li>
              <a class="sidenav-item-link" href="chat.php">
                <i class="mdi mdi-wechat"></i>
                <span class="nav-text">گفت و گو</span>
              </a>
            </li>





            <li>
              <a class="sidenav-item-link" href="contacts.php">
                <i class="mdi mdi-phone"></i>
                <span class="nav-text">مخاطب</span>
              </a>
            </li>





            <li>
              <a class="sidenav-item-link" href="team.php">
                <i class="mdi mdi-account-group"></i>
                <span class="nav-text">تیم</span>
              </a>
            </li>









            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email" aria-expanded="false" aria-controls="email">
                <i class="mdi mdi-email"></i>
                <span class="nav-text">پست الکترونیک</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="email" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="sidenav-item-link" href="email-inbox.php">
                      <span class="nav-text">صندوق ورودی</span>
                    </a>
                  </li>






                  <li>
                    <a class="sidenav-item-link" href="email-details.php">
                      <span class="nav-text">جزئیات </span>

                    </a>
                  </li>






                  <li>
                    <a class="sidenav-item-link" href="email-compose.php">
                      <span class="nav-text">نوشتن </span>

                    </a>
                  </li>




                </div>
              </ul>
            </li>


            <li class="section-title">
              صفحه
            </li>





            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users" aria-expanded="false" aria-controls="users">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">کاربر</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="users" data-parent="#sidebar-menu">
                <div class="sub-menu">



                  <li>
                    <a class="sidenav-item-link" href="user-profile.php">
                      <span class="nav-text">پروفایل کاربر</span>

                    </a>
                  </li>




                  <li>
                    <a class="sidenav-item-link" href="user-profile-settings.php">
                      <span class="nav-text">تنظیمات پروفایل کاربر</span>

                    </a>
                  </li>






                  <li>
                    <a class="sidenav-item-link" href="user-account-settings.php">
                      <span class="nav-text">تنظیمات حساب کاربری</span>

                    </a>
                  </li>



                  <li>
                    <a class="sidenav-item-link" href="user-notify-settings.php">
                      <span class="nav-text">تنظیمات اعلان های کاربر</span>

                    </a>
                  </li>




                </div>
              </ul>
            </li>


          </ul>

        </div>

        <div class="sidebar-footer">
          <div class="sidebar-footer-content">
            <ul class="d-flex">
              <li>
                <a href="user-account-settings.php" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </aside>



    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>

          <span class="page-title">داشبورد کسب و کار</span>

          <div class="navbar-right ">

            <!-- search form -->
            <div class="search-form">
              <form action="index.php" method="get">
                <div class="input-group input-group-sm" id="input-group-search">
                  <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="جستجو..." />
                  <div class="input-group-append">
                    <button class="btn" type="button">/</button>
                  </div>
                </div>
              </form>
              <ul class="dropdown-menu dropdown-menu-search">

                <li class="nav-item">
                  <a class="nav-link" href="index.php">Morbi leo risus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Dapibus ac facilisis in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Porta ac consectetur ac</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Vestibulum at eros</a>
                </li>

              </ul>

            </div>

            <ul class="nav navbar-nav">
              <!-- Offcanvas -->
              <li class="custom-dropdown">
                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:">
                  <i class="mdi mdi-contacts icon"></i>
                </a>
              </li>
              <li class="custom-dropdown">
                <button class="notify-toggler custom-dropdown-toggler">
                  <i class="mdi mdi-bell-outline icon"></i>
                  <span class="badge badge-xs rounded-circle">21</span>
                </button>
                <div class="dropdown-notify">

                  <header>
                    <div class="nav nav-underline" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home" aria-selected="true">همه </a>

                      <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile" aria-selected="false">پیام ها </a>
                      <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact" aria-selected="false">سایر </a>

                    </div>
                  </header>

                  <div class="" data-simplebar style="height: 325px;">
                    <div class="tab-content" id="myTabContent">

                      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.php">
                              <img src="images/user/user-sm-02.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0"> احمد سهرابی</span>
                              <span class="discribe"> سلام لیست سفارشات چک شد.</span>
                              <span class="time">
                                <time> به تازگی</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 bg-light mb-0">
                          <div class="media-sm-wrapper bg-primary">
                            <a href="user-profile.php">
                              <i class="mdi mdi-calendar-check-outline"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">آپدیت محصولات</span>
                              <span class="discribe">30/3/1402 </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.php">
                              <img src="images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">سلاله سادات فهیمی </span>
                              <span class="discribe">سلام لطفا ایمیل چک شود.</span>
                              <span class="time">
                                <time>1 ساعت پیش </time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info-dark">
                            <a href="user-profile.php">
                              <i class="mdi mdi-account-multiple-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">اضافه کردن درخواست</span>
                              <span class="discribe">محمد را به عنوان مخاطب خود اضافه کنید.</span>
                              <div class="buttons">
                                <a href="#" class="btn btn-sm btn-success shadow-none text-white">قبول</a>
                                <a href="#" class="btn btn-sm shadow-none">حذف</a>
                              </div>
                              <span class="time">
                                <time>6 ساعت پیش</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>

                      <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.php">
                              <img src="images/user/user-sm-01.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">هلما اسلام پور </span>
                              <span class="discribe">اسلایدر های عید نوروز بارگذاری شد.</span>
                              <span class="time">
                                <time>15 دقیقه پیش</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.php">
                              <img src="images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">سلاله سادات فهیمی </span>
                              <span class="discribe">لطفا ایمیل چک شود.</span>
                              <span class="time">
                                <time>1 ساعت پیش</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm bg-warning-10 p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.php">
                              <img src="images/user/user-sm-02.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">احمد سهرابی</span>
                              <span class="discribe"> سلام لیست سفارشات چک شد</span>
                              <span class="time">
                                <time> به تازگی</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.php">
                              <img src="images/user/user-sm-04.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">حامد فرزانگان</span>
                              <span class="discribe"> حساب های مالی فروردین ماه بسته شد.</span>
                              <span class="time">
                                <time> به تازگی</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                        <div class="media media-sm p-4 bg-light mb-0">
                          <div class="media-sm-wrapper bg-primary">
                            <a href="user-profile.php">
                              <i class="mdi mdi-calendar-check-outline"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">اپدیت محصولات</span>
                              <span class="discribe">30/3/1402</span>

                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info-dark">
                            <a href="user-profile.php">
                              <i class="mdi mdi-account-multiple-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0">اضافه کردن درخواست</span>
                              <span class="discribe">اکبر صفوی را به عنوان مخاطب اضافه کنید.</span>
                              <div class="buttons">
                                <a href="#" class="btn btn-sm btn-success shadow-none text-white">قبول</a>
                                <a href="#" class="btn btn-sm shadow-none">حذف</a>
                              </div>
                              <span class="time">
                                <time>6 hrs ago</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm p-4 mb-0">
                          <div class="media-sm-wrapper bg-info">
                            <a href="user-profile.php">
                              <i class="mdi mdi-playlist-check"></i>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.php">
                              <span class="title mb-0"> کار تکمیل شد</span>
                              <span class="discribe"> کار در طی دو ماه گذشته تکیل شد.</span>
                              <span class="time">
                                <time> 2 ساعت پیش</time>...
                              </span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <footer class="border-top dropdown-notify-footer">
                    <div class="d-flex justify-content-between align-items-center py-2 px-4">
                      <span> اخرین بروزرسانی 3 دقیقه قبل</span>
                      <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                    </div>
                  </footer>
                </div>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                  <span class="d-none d-lg-inline-block"> <?= $_SESSION['login'] ?> </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a class="dropdown-link-item" href="user-profile.php">
                      <i class="mdi mdi-account-outline"></i>
                      <span class="nav-text">پروفایل من</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-link-item" href="email-inbox.php">
                      <i class="mdi mdi-email-outline"></i>
                      <span class="nav-text">پیام ها</span>
                      <span class="badge badge-pill badge-primary">24</span>
                    </a>
                  </li>

                  <li>
                    <a class="dropdown-link-item" href="user-account-settings.php">
                      <i class="mdi mdi-settings"></i>
                      <span class="nav-text">تنظیمات حساب کاربری </span>
                    </a>
                  </li>

                  <li class="dropdown-footer">
                    <a class="dropdown-link-item" href="?logout=1"> <i class="mdi mdi-logout"></i> خروج </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>

      <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
      <div class="content-wrapper">
        <div class="content">
          <!-- Top Statistics -->
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>&ensp;&ensp;&ensp;&ensp;&ensp;$18,699</h2>
                  <div class="dropdown">
                    <div class="sub-title">
                      <span class="mr-1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;فروش امسال</span> |
                      <span class="mx-1">45%</span>
                      <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-1"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;$14,500</h2>
                  <div class="dropdown">
                    <div class="sub-title">
                      <span class="mr-1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;هزینه سال جاری</span> |
                      <span class="mx-1">50%</span>
                      <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;$4199</h2>
                  <div class="dropdown">
                    <div class="sub-title">
                      <span class="mr-1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;سود امسال</span> |
                      <span class="mx-1">20%</span>
                      <i class="mdi mdi-arrow-down-bold text-danger"></i>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default card-mini">
                <div class="card-header">
                  <h2>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;$20,199</h2>
                  <div class="dropdown">
                    <div class="sub-title">
                      <span class="mr-1">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;درآمد امسال</span> |
                      <span class="mx-1">35%</span>
                      <i class="mdi mdi-arrow-up-bold text-success"></i>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div>
                      <div id="spline-area-4"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xl-8">
              <!-- Income and Express -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>درآمد و هزینه</h2>


                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <div id="mixed-chart-1"></div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xl-4">
              <!-- Current Users  -->
              <div class="card card-default">
                <div class="card-header">
                  <h2>کاربران فعلی</h2>
                  <span>به موقع</span>
                </div>
                <div class="card-body">
                  <div id="barchartlg2"></div>
                </div>

              </div>
            </div>
          </div>



          <!-- Table Product -->
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header">
                  <h2>موجودی محصولات</h2>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-contact"> اضافه کردن محصول
                  </button>
                </div>
                <div class="card-body">

                  <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                      <tr>
                        <th></th>
                        <th>نام محصول</th>
                        <th>دسته بندی محصول</th>
                        <th>شناسه</th>
                        <th>تعداد</th>
                        <th>قیمت</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                          <td class="py-0">
                            <img src="<?= $row['photo'] ?>" alt="Product Image">
                          </td>
                          <td> <?php echo $row['name']; ?></td>
                          <td><?php echo $row['cat']; ?> </td>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['num']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                          <td>
                            <div class="dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="?delete=<?= $row['id'] ?>">حذف</a>
                                <button class="dropdown-item edit" data-id="<?= $row['id'] ?>" data-cat="<?= $row['cat'] ?>" data-num="<?= $row['num'] ?>" data-price="<?= $row['price'] ?>" data-name="<?= $row['name'] ?>" data-toggle="modal" data-target="#modal-edit-contact">ویرایش</button>

                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php    }    ?>
                    </tbody>
                  </table>

                </div>


              </div>

            </div>
          </div>


          <!-- Add mahsol Button  -->
          <div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <form action="index.php" method="post" enctype="multipart/form-data">
                  <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ایجاد محصول جدید</h5>
                  </div>
                  <div class="modal-body px-4">
                    <label> تصویر محصول :</label> <input type="file" name="photo" class="form-control"><br>
                    <!-- <div class="form-group row mb-6">
                              
                               <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label"> تصویر محصول</label>
                               <div class="col-sm-8 col-lg-10">  
                                <div class="custom-file mb-1">
                                  <input type="file" name="photo"class="custom-file-input" id="coverImage" required>
                                  <label class="custom-file-label" for="coverImage">انتخاب فایل ...</label>
                                  <div class="invalid-feedback">بازخورد فایل سفارشی نامعتبر</div>
                                </div> 
                               </div>  
                            </div> -->

                    <div class="row mb-2">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="name">نام محصول</label>
                          <input type="text" name="name" class="form-control" id="text">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                          <label for="num">تعداد</label>
                          <input type="text" name="num" class="form-control" id="text">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                          <label for="price">قیمت</label>
                          <input type="text" name="price" class="form-control" id="text">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                          <label for="category">دسته بندی</label>
                          <select class="custom-select tm-select-accounts" id="category" name="cat">
                            <option selected value="0">دسته را انتخاب کنید</option>
                            <option value="کالای دیجیتال">کالای دیجیتال</option>
                            <option value="مد و پوشاک">مد و پوشاک</option>
                            <option value="موبایل">موبایل</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="modal-footer px-4">
                    <button type="button" class="btn btn-smoke btn-pill" data-dismiss="modal">انصراف</button>
                    <button type="submit" name="save" class="btn btn-primary btn-pill"> ذخیره محصول</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modal-edit-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <form action="index.php" method="post" enctype="multipart/form-data">
                  <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ویرایش محصول</h5>
                  </div>
                  <div class="modal-body px-4">
                    <label> تصویر محصول :</label> <input type="file" name="photo" class="form-control"><br>
                    <div class="row mb-2">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="name">نام محصول</label>
                          <input type="text" name="name" class="form-control" id="editProductName">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                          <label for="num">تعداد</label>
                          <input type="text" name="num" class="form-control" id="editProductNum">
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                          <label for="price">قیمت</label>
                          <input type="text" name="price" class="form-control" id="editProductPrice">
                        </div>
                      </div>

                      <input type="text" name="id" class="form-control" id="editProductID" style="display: none;" >

                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                          <label for="category">دسته بندی</label>
                          <select class="custom-select tm-select-accounts" id="editProductCat" name="cat">
                            <option selected value="0">دسته را انتخاب کنید</option>
                            <option value="کالای دیجیتال">کالای دیجیتال</option>
                            <option value="مد و پوشاک">مد و پوشاک</option>
                            <option value="موبایل">موبایل</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="modal-footer px-4">
                    <button type="button" class="btn btn-smoke btn-pill" data-dismiss="modal">انصراف</button>
                    <button type="submit" name="edit" class="btn btn-primary btn-pill"> ذخیره محصول</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!--list moshtarian-->
          <div class="col-xl-12">
            <div class="card card-default">
              <div class="card-header align-items-center">
                <h2 class="">لیست مشتریان</h2>
              </div>
              <div class="card-body">
                <div class="tab-content">

                  <table id="product-sale" class="table table-product " style="width:100%">
                    <thead>
                      <tr>
                        <th>شناسه</th>
                        <th>نام و نام خانوادگی</th>
                        <th>کد ملی</th>
                        <th>تلفن همراه</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1401100</td>
                        <td>ضحا محمدی</td>
                        <td>1250895068</td>
                        <td>09152456058</td>
                      </tr>

                      <tr>
                        <td>1401103</td>
                        <td>سجاد دولتی </td>
                        <td>1261234089</td>
                        <td>09138596878</td>
                      </tr>

                      <tr>
                        <td>1402100</td>
                        <td>علی قیومی</td>
                        <td>1261333054</td>
                        <td>09334882828</td>
                      </tr>

                      <tr>
                        <td>1401100</td>
                        <td>فاطمه سالم </td>
                        <td>1286666995</td>
                        <td>09351550252</td>
                      </tr>

                      <tr>
                        <td>1401100</td>
                        <td>ضحا محمدی</td>
                        <td>1250895068</td>
                        <td>09152456058</td>
                      </tr>

                      <tr>
                        <td>1402100</td>
                        <td>علی قیومی</td>
                        <td>1261333054</td>
                        <td>09334882828</td>
                      </tr>

                      <tr>
                        <td>1401100</td>
                        <td>فاطمه سالم </td>
                        <td>1286666995</td>
                        <td>09351550252</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p>
        &copy; <span id="copy-year"></span> Copyright <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">mdm</a>.
      </p>
    </div>
    <script>
      var d = new Date();
      var year = d.getFullYear();
      document.getElementById("copy-year").innerHTML = year;
    </script>
  </footer>
  </div>
  </div>
  </div>

  <!-- Card Offcanvas -->
  <div class="card card-offcanvas" id="contact-off">
    <div class="card-header">
      <h2>مخاطبین</h2>
      <a href="#" class="btn btn-primary btn-pill px-4"> اضافه کردن</a>
    </div>
    <div class="card-body">

      <div class="mb-4">
        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="جستجو در مخاطبین...">
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-01.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title">فهیمه موسوی</span>
            <span class="discribe">طراح</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-02.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title"> علی کویری</span>
            <span>توسعه دهنده</span>
          </a>
        </div>
      </div>

     

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-04.jpg" alt="User Image">
          </a>

        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title"> حسن صالحی</span>
            <span>عکاس</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-05.jpg" alt="User Image">
            <span class="active bg-danger"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title"> هانیه کیا</span>
            <span>طراح مد</span>
          </a>
        </div>
      </div>

      <div class="media media-sm">
        <div class="media-sm-wrapper">
          <a href="user-profile.php">
            <img src="images/user/user-sm-06.jpg" alt="User Image">
            <span class="active bg-primary"></span>
          </a>
        </div>
        <div class="media-body">
          <a href="user-profile.php">
            <span class="title"> الهام علیزاده</span>
            <span>عکاس</span>
          </a>
        </div>
      </div>

    </div>
  </div>




  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/simplebar/simplebar.min.js"></script>
  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



  <script src="plugins/apexcharts/apexcharts.js"></script>



  <script src="plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>



  <script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>



  <script src="plugins/daterangepicker/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <script>
    jQuery(document).ready(function() {
      jQuery('input[name="dateRange"]').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
          cancelLabel: 'Clear'
        }
      });
      jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
      });
      jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
        jQuery(this).val('');
      });
    });
  </script>



  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



  <script src="plugins/toaster/toastr.min.js"></script>



  <script src="js/mono.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/map.js"></script>
  <script src="js/custom.js"></script>




  <?php
  if ($message) {
    echo '<script>alert("' . $message . '")</script>';
  }
  ?>

  <script>
    let editBtns = document.querySelectorAll('.edit');
    let editProductID = document.querySelector('#editProductID');
    let editProductName = document.querySelector('#editProductName');
    let editProductNum = document.querySelector('#editProductNum');
    let editProductCat = document.querySelector('#editProductCat');
    let editProductPrice = document.querySelector('#editProductPrice');

    editBtns.forEach(editBtn => {
      editBtn.addEventListener('click', () => {
        editProductID.value = editBtn.dataset.id
        editProductName.value = editBtn.dataset.name
        editProductPrice.value = editBtn.dataset.price
        editProductNum.value = editBtn.dataset.num
        let catID;
        if (editBtn.dataset.cat == "کالای دیجیتال") {
          catID = 1;
        } else if (editBtn.dataset.cat == "مد و پوشاک") {
          catID = 2
        } else {
          catID = 3
        }
        editProductCat.selectedIndex = catID
      })
    })
  </script>


</body>

</html>