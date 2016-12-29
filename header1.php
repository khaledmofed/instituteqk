<?
	ob_start();
	session_start();
    require ("include/db.class.php");
    require ("include/config.php");
    require ("include/function.php");
	
	$institute_id = '1';
	

?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
   <head>
      <!-- meta -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="generator" content="" />
      <!-- title -->
      <title><?= $site_name ?></title>
      <!-- favicon -->
      <link href="<?= $site_url ?>/frontend/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
      <!-- blog category -->
      <link rel="stylesheet" href="<?= $site_url ?>/frontend/css/blog-category.css" type="text/css" />
      <!-- pagebuilder css -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/com_sppagebuilder/assets/css/sppagebuilder.css" type="text/css" />
      <!-- revolution slider css -->
      <link rel="stylesheet" href="<?= $site_url ?>/media/com_uniterevolution2/assets/rs-plugin/css/settings.css" type="text/css" />
      <link rel="stylesheet" href="<?= $site_url ?>/media/com_uniterevolution2/assets/rs-plugin/css/dynamic-captions.css" type="text/css" />
      <link rel="stylesheet" href="<?= $site_url ?>/media/com_uniterevolution2/assets/rs-plugin/css/static-captions.css" type="text/css" />
      <!-- countdown css  -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/sp_countdown/assets/css/sp_countdown.css" type="text/css" />
      <!-- donation -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/com_cmdonation/assets/css/pure-min.css" type="text/css" />
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/com_cmdonation/assets/css/pure-responsive-min.css" type="text/css" />
      <!-- accordion css -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/lan_k2accordion/frontend/css/styles.css" type="text/css" />
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/lan_k2accordion/frontend/css/responsive.css" type="text/css" />
      <!-- vertical tab css -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/lan_vertical_tab/frontend/css/styles.css" type="text/css" />
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/lan_vertical_tab/frontend/css/responsive.css" type="text/css" />
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/news_show_sp2/assets/css/news_show_sp2.css" type="text/css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= $site_url ?>/frontend/css/bootstrap.min.css" type="text/css" />
	  <link rel="stylesheet" href="<?= $site_url ?>/frontend/css/bootstrap-rtl.min.css">
      <!-- font awesome-->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <!-- font droid arabic kufi-->
      <link rel="stylesheet" href="http://openfontlibrary.org/face/droid-arabic-kufi">
      <!-- main style css -->
      <link rel="stylesheet" href="<?= $site_url ?>/style.css" type="text/css" />
      <!-- preset css -->
      <link rel="stylesheet" href="<?= $site_url ?>/frontend/css/presets/preset1.css" type="text/css" class="preset" />
      <!-- newsletter css -->
      <link rel="stylesheet" href="<?= $site_url ?>/media/com_acymailing/css/module_defaultc032.css" type="text/css" />
      <!-- photo gallery css -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/sp_simple_gallery/scripts/slimbox.css" type="text/css" />
      <!-- twitter css -->
      <link rel="stylesheet" href="<?= $site_url ?>/assets/plugin/sp_tweet/assets/css/sp_tweet.default.css" type="text/css" />

<!-----------khaled css ------------->
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet"  href="css/hover.css"/>
<!-- Custom CSS -->
<link href="khaled/css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet"  href="khaled/css/hover.css"/>
<link rel="stylesheet" href="khaled/css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="khaled/css/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="khaled/css/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="khaled/css/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="khaled/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="khaled/css/nivostyle.css" type="text/css" media="screen" />
    <link href="khaled/css/bootstrap-rtl.css" rel="stylesheet">
    <link href="khaled/css/style.css" rel="stylesheet">
<link rel="stylesheet"  href="khaled/css/font.css"/>

       
      <style>
	  #sp-header, #sp-bottom {
  		background: #<?= $navbar_color ?> !important;
	  }
	  .sp-megamenu-parent .sp-dropdown .sp-dropdown-inner {
  		background: #<?= $navbar_dropdown_color ?> !important;
	  }
	  #sp-bottom {
		background: #<?= $footer_color ?> !important;	  
	 }
	 #sp-footer {
		background: #<?= $footer_bottom_color ?> !important;	  
	 }
	 #lan_countdown.sppb-section{
    	background-color: #<?= $slidebar_color ?> !important;
	}
	.sp-page-title {
	  background: #<?= $breadcrumb_color ?> !important;
	}
	.sp-megamenu-parent .sp-dropdown li.sp-menu-item >a:hover {
 	 background: #<?= $navbar_dropdown_color_hover ?> !important;
	}
	.sp-megamenu-parent .sp-dropdown li.sp-menu-item >a {
 	 background: #<?= $navbar_dropdown_color_font ?> !important;
	}
	div.lan_vertical_timeline .nav-tabs>li .cbp_tmlabel h3, a {
		color: #<?= $font_link_color ?> !important;
	}
	.countdown { background: #<?= $countdown_bg_color ?> !important; }
.nav > li > a{    padding: 11px 10px !important;}
	  
.dropdown-submenu {
    position: relative;
        direction: ltr;
}

.dropdown-submenu>.dropdown-menu {
      background: #bc7026;
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

.navbar-default .navbar-nav > li > a:hover{    color: #fff;
    background-color: #a11e61;}
    .dropdown-menu > li > a{color: #fff;
    padding: 6px 20px;
    font-weight: bold;}
    .navbar-nav > li > .dropdown-menu{    background: #a11e61;}
    </style>
   </head>

<body>
<nav class="navbar navbar-default" style="   border-top: 5px solid #a01b63 ;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="khaled/img/11.png"></a>
    </div>
    <ul class="nav navbar-nav">
    <div style="      padding-left: 15px;
    font-size: 15px;
    color: #888;
    text-align: left;"> الاثنين جمادي الثانية 1437 _ 14 مارس 2016 <i class="fa fa-calendar" aria-hidden="true"></i></div>
      <li class=""><a href="#">الرئيسية</a></li>

            <li class="dropdown">
            <a id="dLabel" data-toggle="dropdown" data-target="#" href="/page.html">
                ادارات المعاهد<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="page">إدارة الشؤون التعليمية</a> </li>
              <li> <a href="page">قسم شؤون معاهد المعلمات</a> </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">المعاهد</a>
                <ul class="dropdown-menu">
                     <li><a href="institute">معهد الغرب</a></li>
          <li><a href="institute">معهد الشمال</a></li>
          <li><a href="institute">معهد الجنوب</a></li>
          <li><a href="institute">معهد نورين</a></li>
                </ul>
              </li>
            </ul>
        </li>

   <li class="dropdown">
            <a id="dLabel" data-toggle="dropdown" data-target="#" href="/page.html">
                الدبلومات والبرامج<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
      <li> <a href="diploma.php">الدبلومات</a> </li>
      <li> <a href="programs.php">البرامج</a> </li>
      <li> <a href="competitions.php">المسابقات</a> </li>

         
            </ul>
        </li>
      
 <li class="dropdown">
            <a id="dLabel" data-toggle="dropdown" data-target="#" href="/page.html">
                الخمدات الالكترونية<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
         <li> <a href="page">الإدارة (الشؤون التعليمية)</a> </li>
      <li> <a href="page">المعاهد</a> </li>
      <li> <a href="page">خدمات  الموظفين</a> </li>
      <li> <a href="page">خدمات الطلاب</a> </li>
      <li> <a href="page">اتصالات ادارية</a> </li>
      <li> <a href="page">التوظيف والتطوع</a> </li>
            </ul>
        </li>
  <li class="dropdown">
            <a id="dLabel" data-toggle="dropdown" data-target="#" href="/page.html">
                مكتبة الملفات<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li> <a href="library.php">المكتبة الإدارية</a> </li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">الأخبار والمقالات</a>
                <ul class="dropdown-menu">
          <li><a href="blog">الأخبار</a></li>
          <li><a href="blog">الأحداث</a></li>
          <li><a href="blog">مشاريع التخرج</a></li>
          <li><a href="blog">المقالات</a></li>
          <li><a href="blog">دليلك إلى المعاهد</a></li>

                </ul>
              </li>
      <li> <a href="library.php">المكتبة  التعليمية والتربوية</a> </li>
      <li> <a href="library.php">المكتبة العامة</a> </li>
      <li> <a href="library.php">البحوث والدراسات</a> </li>
      <li> <a href="library.php">تنزيل المقررات</a> </li>

            </ul>
        </li>
<li class="dropdown">
            <a id="dLabel" data-toggle="dropdown" data-target="#" href="/page.html">
                اتصل بنا<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
      <li> <a href="page">أرقام التواصل</a> </li>
      <li> <a href="page">الموقع الجغرافي</a> </li>
      <li> <a href="page">المراسلة</a> </li>
      <li> <a href="page">الدعم والتبرع</a> </li>


         
            </ul>
        </li>
<li class="dropdown">
            <a id="dLabel" data-toggle="dropdown" data-target="#" href="/page.html">
                عن المعاهد<span class="caret"></span>
            </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="margin-right: -30px;">
      <li> <a href="page">تعريف يإدارة المعاهد وتأسيسها</a> </li>
      <li> <a href="page">الرؤية والرسالة والأهداف</a> </li>
      <li> <a href="page">الهيكل الإداري</a> </li>
      <li> <a href="page">اللوائح</a> </li>   
            </ul>
        </li>
      

    </ul>
  </div>
</nav>

     
