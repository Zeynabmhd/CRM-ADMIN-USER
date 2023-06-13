<?php
include_once "config.php";

if (isset($_GET['logout'])) {
  unset($_SESSION['login']);
}

if (!isset($_SESSION['login'])) {
  header("location: sign-in.php");
}
?>
<!DOCTYPE html>

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

  <title>جزئیات ایمیل</title>

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

              <span class="page-title"> جزئیات ایمیل</span>

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
                      <span class="d-none d-lg-inline-block"><?= $_SESSION['login'] ?></span>
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
          <div class="content">	<!-- ====================================
	——— EMAIL WRAPPER
	===================================== -->
  <div class="email-wrapper rounded border bg-white">
    <div class="row no-gutters justify-content-center">
      <div class="col-lg-4 col-xl-3 col-xxl-2">
        <div class="email-left-column email-options p-4 p-xl-5">
          <a href="email-compose.php" class="btn btn-block btn-primary btn-pill mb-4 mb-xl-5">ساختن</a>
          <ul class="pb-2">
            <li class="d-block active mb-4">
              <a href="email-inbox.php">
                <i class="mdi mdi-download mr-2"></i> صندوق ورودی</a>
              <span class="badge badge-secondary">20</span>
            </li>
            <li class="d-block mb-4">
              <a href="#">
                <i class="mdi mdi-star-outline mr-2"></i> مورد علاقه ها</a>
              <span class="badge badge-secondary">56</span>
            </li>
            <li class="d-block mb-4">
              <a href="#">
                <i class="mdi mdi-playlist-edit mr-2"></i> پیش نویس</a>
            </li>
            <li class="d-block mb-4">
              <a href="#">
                <i class="mdi mdi-open-in-new mr-2"></i> نامه ارسال شده</a>
            </li>
            <li class="d-block mb-4">
              <a href="#">
                <i class="mdi mdi-trash-can-outline mr-2"></i> زباله ها</a>
            </li>
          </ul>
          <p class="text-dark font-weight-medium">برچسب ها</p>
          <ul>
            <li class="mt-4">
              <a href="#">
                <i class="mdi mdi-checkbox-blank-circle-outline text-primary mr-3"></i>کار</a>
            </li>
            <li class="mt-4">
              <a href="#">
                <i class="mdi mdi-checkbox-blank-circle-outline text-warning mr-3"></i>خصوصی</a>
            </li>
            <li class="mt-4">
              <a href="#">
                <i class="mdi mdi-checkbox-blank-circle-outline text-danger mr-3"></i>خانوادگی</a>
            </li>
            <li class="mt-4">
              <a href="#">
                <i class="mdi mdi-checkbox-blank-circle-outline text-success mr-3"></i>دوستان</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8 col-xl-9 col-xxl-10">
        <div class="email-right-column p-4 p-xl-5">
          <!-- Email Right Header -->
          <div class="email-right-header mb-5">
            <!-- head left option -->
            <div class="head-left-options">
              <button type="button" class="btn btn-icon btn-outline btn-rounded-circle">
                <i class="mdi mdi-refresh"></i>
              </button>
              <div class="dropdown">
                <button class="btn dropdown-toggle border rounded-pill" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">بیشتر
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start"
                  style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="#">حذف</a>
                  <a class="dropdown-item" href="#"> افزودن به مورد علاقه ها</a>
                  <a class="dropdown-item" href="#">برچسب زدن</a>
                </div>
              </div>
            </div>
            <!-- head right option -->
            <div class="head-right-options">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn border btn-pill">
                  <i class="mdi mdi-chevron-left"></i>
                </button>
                <button type="button" class="btn border btn-pill">
                  <i class="mdi mdi-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="border rounded email-details">

            <div class="email-details-header">
              <h4 class="text-dark">Introducing our new tool</h4>
            </div>

            <div class="email-details-content">
              <div class="email-details-content-header">

                <div class="media media-sm mb-lg-0">
                  <div class="media-sm-wrapper">
                    <img src="images/user/user-sm-03.jpg" alt="User Image">
                  </div>
                  <div class="media-body">
                    <h6 class="mt-0 text-dark font-weight-bold">Larissa Gebhardt</h6>
                    <span>
                      From:
                      <i class="mdi mdi-chevron-left"></i>@selena.oi
                      <i class="mdi mdi-chevron-right"></i>to me
                    </span>
                  </div>
                </div>

                <div class="email-details-content-header-right">
                  <time class="p-1 p-xl-2">Mar 18</time>

                  <a class="text-color p-1 p-xl-2" href="#">
                    <i class="mdi mdi-star-outline"></i>
                  </a>

                  <a class="text-color p-1 p-xl-2" href="#">
                    <i class="mdi mdi-attachment"></i>
                  </a>

                  <div class="btn-group p-1 p-xl-2" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-pill mdi mdi-reply"></button>
                    <button type="button" class="btn btn-pill mdi mdi-printer"></button>
                    <button type="button" class="btn btn-pill mdi mdi-trash-can-outline"></button>
                  </div>

                  <div class="dropdown">

                

                   
                  </div>


                </div>
              </div>
              <p class="pb-4">Hi Selena</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <br>
              <p>
                Perspiciatis unde omnis iste natus error sit voluptatem accusantium oloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
              </p>
              <p class="pt-4">
                <i class="fa fa-paperclip ml-2"></i>
                <span class="text-dark">4 Attachments</span>
              </p>
              <div class="email-img d-inline-block rounded overflow-hidden mt-3 mt-lg-4 mr-2 mr-md-3 mr-lg-4">
                <img src="images/products/pa1.jpg" alt="Product">
              </div>
              <div class="email-img d-inline-block rounded overflow-hidden mt-3 mt-lg-4 mr-2 mr-md-3 mr-lg-4">
                <img src="images/products/pa2.jpg" alt="Product">
              </div>
              <div class="email-img d-inline-block rounded overflow-hidden mt-3 mt-lg-4 mr-2 mr-md-3 mr-lg-4">
                <img src="images/products/pa3.jpg" alt="Product">
              </div>
              <div class="email-img d-inline-block rounded overflow-hidden mt-3 mt-lg-4 mr-2 mr-md-3 mr-lg-4">
                <img src="images/products/pa4.jpg" alt="Product">
              </div>

              <div class="email-content-footer mt-5 pb-5 px-4 pt-4 border rounded">
                <p>اینجا کلیک کنید تا
                  <a class="text-blue btn btn-primary btn-pill ml-2" href="#">پاسخ</a>
                </p>
              </div>
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
