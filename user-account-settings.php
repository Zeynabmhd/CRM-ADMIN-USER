
<?php
include_once "config.php";

if (isset($_GET['logout'])) {
  unset($_SESSION['login']);
}

if (!isset($_SESSION['login'])) {
  header("location: sign-in.php");
}
?><!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>تنظیمات حساب کاربری</title>

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


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    

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
                

                
                  <li
                   class="active"
                   >
                    <a class="sidenav-item-link" href="index.php">
                      <i class="mdi mdi-briefcase-account-outline"></i>
                      <span class="nav-text">داشبورد کسب و کار</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="analytics.php">
                      <i class="mdi mdi-chart-line"></i>
                      <span class="nav-text">داشبورد تجزیه و تحلیل</span>
                    </a>
                  </li>
                

                

                
                  <li class="section-title">
                    برنامه ها
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="chat.php">
                      <i class="mdi mdi-wechat"></i>
                      <span class="nav-text">گفت و گو</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="contacts.php">
                      <i class="mdi mdi-phone"></i>
                      <span class="nav-text">مخاطب</span>
                    </a>
                  </li>
                

                

                
                  <li
                   >
                    <a class="sidenav-item-link" href="team.php">
                      <i class="mdi mdi-account-group"></i>
                      <span class="nav-text">تیم</span>
                    </a>
                  </li>
                

                

                
   
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                      aria-expanded="false" aria-controls="email">
                      <i class="mdi mdi-email"></i>
                      <span class="nav-text">پست الکترونیک</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="email"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="email-inbox.php">
                                <span class="nav-text">صندوق ورودی</span>
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="email-details.php">
                                <span class="nav-text">جزئیات </span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
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
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                      aria-expanded="false" aria-controls="users">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">کاربر</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="users"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile.php">
                                <span class="nav-text">پروفایل کاربر</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
     
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile-settings.php">
                                <span class="nav-text">تنظیمات پروفایل کاربر</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-account-settings.php">
                                <span class="nav-text">تنظیمات حساب کاربری</span>
                                
                              </a>
                            </li>
       
                        

                        
                        
                          
                            <li >
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
                    <a href="user-account-settings.php" data-toggle="tooltip" title="Profile settings"><i class="mdi mdi-settings"></i></a></li>
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

              <span class="page-title">  تنظیمات حساب</span>

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
                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
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
                          <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                            aria-selected="true">همه </a>
                       
                         <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
                            aria-selected="false">پیام ها </a>
                          <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
                            aria-selected="false">سایر </a>
                        
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
                                  <span class="title mb-0">   احمد سهرابی</span>
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
                                    <time>6  ساعت پیش</time>...
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
                          <span>  اخرین بروزرسانی 3 دقیقه قبل</span>
                          <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?= $_SESSION['login'] ?>  </span>
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
                        <a class="dropdown-link-item" href="?logout=1"> <i class="mdi mdi-logout"></i>  خروج </a>
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
          <div class="content"><!-- Card Profile -->
<div class="card card-default card-profile">

  <div class="card-header-bg" style="background-image:url(assets/img/user/user-bg-01.jpg)"></div>

  <div class="card-body card-profile-body">

    <div class="profile-avata">
      <img class="rounded-circle" src="images/user/user-man.jpg" alt="Avata Image">
      <a class="h5 d-block mt-3 mb-2" href="#"><?= $_SESSION['login'] ?>  </a>
    </div>

    <ul class="nav nav-profile-follow">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="h5 d-block">1503</span>
          <span class="text-color d-block">دوستان</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="h5 d-block">2905</span>
          <span class="text-color d-block">دنبال کنندگان</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="h5 d-block">1200</span>
          <span class="text-color d-block">دنبال شوندگان</span>
        </a>
      </li>

    </ul>

    <div class="profile-button">
      <a class="btn btn-primary btn-pill" href="reset-password.html"> بازیابی رمز عبور</a>
    </div>


  </div>

  <div class="card-footer card-profile-footer">
    <ul class="nav nav-border-top justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="user-profile.php">پروفایل</a>
 
      <li class="nav-item">
        <a class="nav-link active" href="user-profile-settings.php">تنظیمات</a>
      </li>

    </ul>
  </div>

</div>

<div class="row">
  <div class="col-xl-3">
    <!-- Settings -->
    <div class="card card-default">
      <div class="card-header">
        <h2>تنظیمات</h2>
      </div>

      <div class="card-body pt-0">

        <ul class="nav nav-settings">
          <li class="nav-item">
            <a class="nav-link" href="user-profile-settings.php">
              <i class="mdi mdi-account-outline mr-1"></i> پروفایل
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="user-account-settings.php">
              <i class="mdi mdi-settings-outline mr-1"></i> تنظیمات حساب کاربری
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="user-notify-settings.php">
              <i class="mdi mdi-bell-outline mr-1"></i> اعلان ها
            </a>
          </li>
        </ul>

      </div>

    </div>
  </div>
  <div class="col-xl-9">
    <!-- Account Settings -->
    <div class="card card-default">
      <div class="card-header">
        <h2 class="mb-5">تنظیمات حساب کاربری</h2>

      </div>

      <div class="card-body">

        <form>
          <div class="row mb-2">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="firstName"> نام</label>
                <input type="text" class="form-control" id="firstName" >
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="lastName">نام خانوادگی</label>
                <input type="text" class="form-control" id="lastName">
              </div>
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="userName">نام کاربری</label>
            <input type="text" class="form-control" id="userName">
          </div>

          <div class="form-group mb-4">
            <label for="email">ایمیل</label>
            <input type="email" class="form-control" id="email">
          </div>

          <div class="form-group mb-4">
            <label for="newPassword">رمز عبور جدید</label>
            <input type="password" class="form-control" id="newPassword">
          </div>

          <div class="form-group mb-4">
            <label for="conPassword">تایید رمز عبور</label>
            <input type="password" class="form-control" id="conPassword">
          </div>

          <div class="d-flex justify-content-end mt-6">
            <button type="submit" class="btn btn-primary mb-2 btn-pill">بروز رسانی پروفایل</button>
          </div>

        </form>
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
                &copy; <span id="copy-year"></span> Copyright <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >mdm</a>.
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
    
                    <!-- Card Offcanvas -->
                    <div class="card card-offcanvas" id="contact-off" >
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

                    
                    <script src="js/mono.js"></script>
                    <script src="js/chart.js"></script>
                    <script src="js/map.js"></script>
                    <script src="js/custom.js"></script>

                    


                    <!--  -->


  </body>
</html>
