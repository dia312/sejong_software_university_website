<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
    
  <head>
    <title>세종대학교 소프트웨어융합대학</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="C:/xampp/htdocs/css/bootstrap.css">
    <link rel="stylesheet" href="C:/xampp/htdocs/css/animate.css">
    <link rel="stylesheet" href="C:/xampp/htdocs/css/owl.carousel.min.css">

    <link rel="stylesheet" href="C:/xampp/htdocs/css/magnific-popup.css">


    <link rel="stylesheet" href="C:/xampp/htdocs/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="C:/xampp/htdocs/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:/xampp/htdocs/fonts/flaticons/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="C:/xampp/htdocs/css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="C:/xampp/htdocs/index.html">BURN YOUNG</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="C:/xampp/htdocs/index.html">Home</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="C:/xampp/htdocs/services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">소개</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">학장 인사말</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">비전 및 목적</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">학생회 및 동아리</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">강의실 / 연구실 찾기 </a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/contact.html">찾아오시는 길</a>

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="C:/xampp/htdocs/services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">교육</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">입학안내</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">교과 과정</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">장학 안내
                    <a class="dropdown-item" href="C:/xampp/htdocs/services.html">교환학생</a>
                    <a class="dropdown-item" href="C:/xampp/htdocs/services.html">ABEEK</a>
                    <a class="dropdown-item" href="C:/xampp/htdocs/services.html">졸업생 진로</a>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="C:/xampp/htdocs/services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">대학활동</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">연구</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">학생 활동</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">동문 소식</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="C:/xampp/htdocs/services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">열린마당</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">공지사항</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">민원 게시판</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">자유 게시판</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">공모전 안내</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">공모전 후기</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">선배들의 이모저모</a>
                  <a class="dropdown-item" href="C:/xampp/htdocs/services.html">전공 알짜개념</a>
                </div>
              </li>
              
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="#">LOGIN</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    

<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>

