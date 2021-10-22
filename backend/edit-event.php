<!DOCTYPE html>
<html lang="en">
    <?php
    ob_start();
    include("../functions/connection.php");

     include("../functions/event_pull.php");
    include("../functions/users.php");

    controllo_utente();


    $connect=connection();
    $idG=$_GET["id"];
    //=$idG;


?>

    <script>
        function mostra(){
            var cambia=document.getElementById("giorni");
            var bottone=document.getElementById("aggiungi");
            var bottone2=document.getElementById("nascondi");
            bottone2.style.display="block";
            bottone.style.display="none";
            cambia.style.display="block";
        }

        function nascondi(){
            var cambia=document.getElementById("giorni");
            var bottone=document.getElementById("aggiungi");
            var bottone2=document.getElementById("nascondi");
            bottone2.style.display="none";
            bottone.style.display="block";
            cambia.style.display="none";
        }


    </script>
    <head><style type="text/css">.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button[not:disabled]:hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel[not:disabled]:hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger[not:disabled]:hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}</style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel | Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/iconfonts/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- tabelle -->

    <link rel="stylesheet" href="./table_files/materialdesignicons.min.css">
    <link rel="stylesheet" href="./table_files/flag-icon.min.css">
    <link rel="stylesheet" href="./table_files/feather.css">
    <link rel="stylesheet" href="./table_files/vendor.bundle.base.css">
    <link rel="stylesheet" href="./table_files/vendor.bundle.addons.css">
    <!-- endinject -->

    <link rel="stylesheet" href="./table_files/style.css">

  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.ico" />
    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">span.im-caret {
            -webkit-animation: 1s blink step-end infinite;
            animation: 1s blink step-end infinite;
        }

        @keyframes blink {
            from, to {
                border-right-color: black;
            }
            50% {
                border-right-color: transparent;
            }
        }

        @-webkit-keyframes blink {
            from, to {
                border-right-color: black;
            }
            50% {
                border-right-color: transparent;
            }
        }

        span.im-static {
            color: grey;
        }

        div.im-colormask {
            display: inline-block;
            border-style: inset;
            border-width: 2px;
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        div.im-colormask > input {
            position: absolute;
            display: inline-block;
            background-color: transparent;
            color: transparent;
            -webkit-appearance: caret;
            -moz-appearance: caret;
            appearance: caret;
            border-style: none;
            left: 0; /*calculated*/
        }

        div.im-colormask > input:focus {
            outline: none;
        }

        div.im-colormask > input::-moz-selection{
            background: none;
        }

        div.im-colormask > input::selection{
            background: none;
        }
        div.im-colormask > input::-moz-selection{
            background: none;
        }

        div.im-colormask > div {
            color: black;
            display: inline-block;
            width: 100px; /*calculated*/
        }</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center"> <!-- dfedf0 -->
              <div class="d-flex justify-content-between align-items-center" ><br>
                  <p1 class="navbar-brand brand-logo" style="text-align: center; color: white;">MeUp</p1>
                  <!--  <div>
                      <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
                      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
                    </div> -->
              </div>
          </div>
          <div class="navbar-menu-wrapper"> <!--  style="background-color:#efebdf;"-->
              <div class="navbar-overlapped d-flex align-items-center justify-content-end justify-content-lg-start">

                  <ul class="navbar-nav navbar-nav-right">




                      <li class="nav-item dropdown">
                          <a class="nav-link language-dropdown" id="userDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                              <p style="background-color: white; color:black;border:1px solid black; padding:1px">&emsp;Option&emsp;</p><br><p></p>
                          </a>
                          <div class="dropdown-menu navbar-dropdown" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="../logout.php">  <i class="mdi mdi-logout"></i> Logout </a>
                              <a class="dropdown-item" href="../Home.php">  <i class="mdi mdi-settings"></i> Go to website </a>
                              <a class="dropdown-item" href="../UserAccount.php">  <i class="mdi mdi-account"></i> Go to your account </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown"></li><li class="nav-item dropdown"></li>

                      <li class="nav-item dropdown">
                          <a class="nav-link language-dropdown" id="userDropdown" data-toggle="dropdown" aria-expanded="false">
                              <p style="text-align:center;background-color: white; border:2px solid #0472ed;color:black;border-radius: 20px; padding:1px">&emsp;<?php echo '<b>' . $_SESSION['nome'] .  ' ' . $_SESSION['cognome'] . '&emsp;<br>&emsp;' . $_SESSION['ruolo'] .'</b>'; ?>&emsp;</p>
                          </a>

                      </li>
                  </ul>
                  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                      <span class="icon-menu"></span>
                  </button>
              </div>
          </div>
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">

        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles light"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" style='background-color : #182150' id="sidebar"><!-- dfedf0-->
          <ul class="nav">

              <li class="nav-item">
                  <a class="nav-link" href="index.php">
                      <i class="icon-layout menu-icon"></i>
                      <span class="menu-title">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item  nav-info">Shop Management</li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                      <i class="icon-stack menu-icon"></i>
                      <span class="menu-title">Eventi</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="./insert-event.php">Immissione</a></li>
                          <li class="nav-item"> <a class="nav-link" href="./view-event.php">Visualizzazione</a></li>
                          <li class="nav-item"> <a class="nav-link" href="./info-event.php">Info Eventi</a></li>
                          <li class="nav-item"> <a class="nav-link" href="./sale.php">Sconti</a></li>

                      </ul>
                  </div>
              </li>

              <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                  </ul>
              </div>
              </li>
              <li class="nav-item  nav-info">User's Management</li>
              <li class="nav-item">
              <li class="nav-item">
                  <a class="nav-link" href="./view-users.php">
                      <i class="icon-head  menu-icon"></i>
                      <span class="menu-title">Utenti</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./view-review.php">
                      <i class="icon-menu  menu-icon"></i>
                      <span class="menu-title">Review</span>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="./view-recive.php">
                      <i class="icon-mail  menu-icon"></i>
                      <span class="menu-title">Recive</span>
                  </a>
              </li>
              <!--      <li class="nav-item">
                      <a class="nav-link" href="pages/documentation/documentation.html">
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title"></span>
                      </a>
                    </li>-->
          </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">

              <div class="row">
                  <div class="col-sm-12">
                      <div class="d-sm-flex justify-content-between align-items-center mb-4">
                          <div>
                              <p class="text-small text-dark mb-1">Backend / Event</p>
                              <h4 class="font-weight-bold mb-0">Update Event</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Update event for EventPlanner's site</h4>
                      <p class="card-description">Here you can modify all details about a event </p>
                    
                      <form class="forms-sample" method="POST" enctype="multipart/form-data" action="./comp-edit-event.php">
                                       
                          <div class="form-group row">
                            <?php
                                $result=select_evento($connect, $idG);
                                
                                $idprodotto=$result['id'];
                                $codV=$result['codice'];
                                $nomeV=$result['evento'];
                              //  $fotoV=$result['foto'];
                                $costoV=$result['costo'];
                            $costoVipV=$result['costo_vip'];

                            $statoV=$result['stato'];

                            $luogoV=$result['luogo'];
                            $giornoV=$result['data_inizio'];
                            $viaV=$result['via'];
                            $datavV=$result['data_fine'];
                            $bigliettiV=$result['biglietti'];
                            $tipologiaV=$result['tipologia'];
                            $bigliettiVVip=$result['biglietti_vip'];
                            $scontoV=$result['sconto'];

                            $giornoV1=$result['giorno1'];
                            $giornoV2=$result['giorno2'];
                            $giornoV3=$result['giorno3'];
                            $giornoV4=$result['giorno4'];
                            $giornoV5=$result['giorno5'];
                            $giornoV6=$result['giorno6'];
                            $giornoV7=$result['giorno7'];
                            $giornoV8=$result['giorno8'];
                            $giornoV9=$result['giorno9'];

                            $giornoV10=$result['giorno10'];
                            $giornoV11=$result['giorno11'];
                            $giornoV12=$result['giorno12'];




                            $orarioV=$result['orario'];





                            $categoriaV=$result['categoria'];

                                $descrizione1V=$result['descrizione'];

                                $_SESSION["id_prodotto"]=$idprodotto;


                                
echo"
                              <div class='col'>
                                  <label>Codice Articolo</label>
                                  <input class='form-control' name='codiceA' value='$codV' style='border: 0.5px solid grey'>

                              </div>
     
                             <div class='col'>
                                  <label>Nome</label>
                                  <input class='form-control' name='nome' value='$nomeV' style='border: 0.5px solid grey'>
                              </div>
                              <div class='col'>
                                  <label>Costo ticket</label>
                                  <input class='form-control' data-inputmask='&#39;alias&#39;: &#39;currency&#39;' name='costo' value='$costoV' style='border: 0.5px solid grey'>
                            </div>
                            <div class='col'>
                                  <label>Costo ticket vip</label>
                                  <input class='form-control' data-inputmask='&#39;alias&#39;: &#39;currency&#39;' name='costoVip' value='$costoVipV' style='border: 0.5px solid grey'>
                            </div>
                              <div class='col'>
                                  <label>Numero biglietti</label>
                                  <input class='form-control'  name='biglietti' value='$bigliettiV' style='border: 0.5px solid grey'>
                            </div> 
                                               <div class='col'>
                                  <label>Numero biglietti Vip</label>
                                  <input class='form-control'  name='bigliettiVip' value='$bigliettiVVip' style='border: 0.5px solid grey'>
                            </div> </div>     
                          <div class='form-group row'>
                           <div class='col'>
                                  <label>Stato</label>
                                  <input class='form-control'  name='stato' value='$statoV' style='border: 0.5px solid grey'>
                            </div> 
                             <div class='col'>
                                  <label>Città</label>
                                  <input class='form-control'  name='luogo' value='$luogoV' style='border: 0.5px solid grey'>
                            </div> 
                                           <div class='col'>
                                  <label>Via</label>
                                  <input class='form-control'  name='via' value='$viaV' style='border: 0.5px solid grey'>
                            </div> 
                           <div class='col'>
                                  <label>Data Inizio</label>
                                  <input class='form-control' type='date' name='giorno' value='$giornoV' style='border: 0.5px solid grey'>
                            </div>   
                                               <div class='col'>
                                  <label>Data Fine</label>
                                  <input class='form-control' name='dataF' type='date' value='$datavV' style='border: 0.5px solid grey'>
                            </div> 
                               <div class='col'>
                                  <label>Orario</label>
                                  <input class='form-control' name='orario' type='time' value='$orarioV' style='border: 0.5px solid grey'>
                            </div>     
                                                
                            
                            
                            
                              </div>
    ";
    ?>
                              <center><br>

                                  <div class="form-group row">

                       <?php echo"        
                                       <div class='col'>
                                          <label>Giorno 1 </label>
                                          <input class='form-control' type='date' name='giorno1'  required value='$giornoV1' style='border: 0.5px solid grey'>
                                      </div>
                                       <div class='col'>
                                          <label>Giorno 2 </label>
                                          <input class='form-control' type='date' name='giorno2' value='$giornoV2' style='border: 0.5px solid grey'>
                                      </div>     
                                      <div class='col'>
                                          <label>Giorno 3 </label>
                                          <input class='form-control' type='date' name='giorno3' value='$giornoV3' style='border: 0.5px solid grey'>
                                      </div>
                                    <div class='col'>
                                          <label>Giorno 4 </label>
                                          <input class='form-control' type='date' name='giorno4' value='$giornoV4' style='border: 0.5px solid grey'>
                                      </div>
                                     <div class='col'>
                                          <label>Giorno 5 </label>
                                          <input class='form-control' type='date' name='giorno5' value='$giornoV5' style='border: 0.5px solid grey'>
                                      </div>
                                       <div class='col'>
                                          <label>Giorno 6 </label>
                                          <input class='form-control' type='date' name='giorno6' value='$giornoV6' style='border: 0.5px solid grey'>
                                      </div></div>"; ?>


                                          <?php
                                      if($giornoV7)
                                          echo"   <div style='display: block' id='giorni'>";
                                      else
                                          echo"   <div style='display: none' id='giorni'>";


echo"
        <div class='form-group row' >

                                       <div class='col'>
                                          <label>Giorno 7 </label>
                                          <input class='form-control' type='date' name='giorno7' value='$giornoV7' style='border: 0.5px solid grey'>
                                      </div>
                                       <div class='col'>
                                          <label>Giorno 8 </label>
                                          <input class='form-control' type='date' name='giorno8' value='$giornoV8' style='border: 0.5px solid grey'>
                                      </div>     
                                      <div class='col'>
                                          <label>Giorno 9 </label>
                                          <input class='form-control' type='date' name='giorno9' value='$giornoV9' style='border: 0.5px solid grey'>
                                      </div>
                                    <div class='col'>
                                          <label>Giorno 10 </label>
                                          <input class='form-control' type='date' name='giorno10' value='$giornoV10' style='border: 0.5px solid grey'>
                                      </div>
                                     <div class='col'>
                                          <label>Giorno 11 </label>
                                          <input class='form-control' type='date' name='giorno11' value='$giornoV11' style='border: 0.5px solid grey'>
                                      </div>
                                       <div class='col'>
                                          <label>Giorno 12 </label>
                                          <input class='form-control' type='date' name='giorno12' value='$giornoV12' style='border: 0.5px solid grey'>
                                      </div></div></div>"; ?>

                                      <center>
                                          <div class="form-group row" >

<?php
                                      if(!$giornoV7)
                                          echo"     <div class='col' id='aggiungi' style='display: block'>  <input type='button'  value='aggiungi giorni' onclick='mostra()'></div>";
                                      else
                                          echo"     <div class='col' id='aggiungi' style='display: none'>  <input type='button'  value='aggiungi giorni' onclick='mostra()'></div>";

                                      if($giornoV7)
                                          echo"     <div class='col' id='nascondi' style='display: block'>  <input type='button'  value='nascondi giorni' onclick='nascondi()'></div>";
                                      else
                                          echo"     <div class='col' id='nascondi' style='display: none'>  <input type='button'  value='nascondi giorni' onclick='nascondi()'></div>";
                                        echo"  </div></center>"; ?>










                                      <div class="form-group row">

                                    <div class='col'>         
                                <label><b>Genere</b></label><br>
                                          <select name='categoria'>
                                              <?php
                                         echo"<option value='$categoriaV'>$categoriaV</option>";

                                           $result=select_categoria($connect);
                                             while($row = mysqli_fetch_array($result)){
                                                 $categoria=$row["nome"];
                                                 if($categoriaV!=$categoria)

                                                 echo"<option value='$categoria'>$categoria</option>";}
                                                 ?>



                                          </select></div>


                                              <div class='col'>
                                <label><b>Tipologia</b></label><br>
                                          <select name='tipologia'>
                                              <?php
                                         echo"<option value='$tipologiaV'>$tipologiaV</option>";

                                           $result=select_tipologia($connect);
                                             while($row = mysqli_fetch_array($result)){
                                                 $tipologia=$row["nome"];
                                                 if($tipologiaV!=$tipologia)

                                                 echo"<option value='$tipologia'>$tipologia</option>";}


                             echo"
                                          </select></div>
                                             <div class='col'>         
                                <label><b>Sconto</b></label><br>
                                          <select name='sconto'>
                                         <option value='$scontoV'>$scontoV</option>";

                                           $result=select_sconto($connect);
                                             while($row = mysqli_fetch_array($result)){
                                                 $sconto=$row["codice_sconto"];
                                                 if($scontoV!=$sconto)

                                                 echo"<option value='$sconto'>$sconto</option>";}
                                                if($scontoV)
                                                      echo"<option value=''>Rimuovi sconto</option>";


                             echo"
                                          </select></div></center>
                            </center>
                          </div>"; ?>

                          <div class="form-group row" style ="padding: 40px">
                              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                              <div class="row grid-margin" style="width: 50%;">
                                  <div class="col-lg-12">
                                      <div class="card">
                                          <div class="card-body" name="descriP">
                                              <h4 class="card-title" >Descrizione Principale</h4>
                                              <div id="quillExample1"  class="quill-container ql-container ql-snow">
                                                  <?php
                                                  echo"
                                                  <textarea class='ql-editor' type='text' name='descriP'   contenteditable='true' style='width: 100%; height: 100%'>$descrizione1V</textarea>";
                                                  ?>



                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div></div>


                             <div class="form-group row" style ="padding: 40px">
                              <div class="col-lg-4 grid-margin stretch-card">
                                  <div class="card">
                                      <div class="card-body">
                                          <h4 class="card-title d-flex">Foto Principale
                                          </h4>
                                          <div class="dropify-wrapper" style='border: 0.5px solid grey'>
                                              <div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div>
                                              <div class="dropify-errors-container"><ul></ul></div>
                                                  <input type="file" class="dropify" name="fotoP"><button type="button" class="dropify-clear" required>Remove</button>
                                              <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                      </div>
                                  </div>
                              </div>
                                 <div class="col-lg-4 grid-margin stretch-card">
                                     <div class="card">
                                         <div class="card-body">
                                             <h4 class="card-title d-flex">Foto Galleria 1
                                             </h4>
                                             <div class="dropify-wrapper" style='border: 0.5px solid grey'>
                                                 <div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div>
                                                 <div class="dropify-errors-container"><ul></ul></div>
                                                 <input type="file" class="dropify" name="fotoG1"><button type="button" class="dropify-clear" required>Remove</button>
                                                 <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 grid-margin stretch-card">
                                     <div class="card">
                                         <div class="card-body">
                                             <h4 class="card-title d-flex">Foto Galleria 2
                                             </h4>
                                             <div class="dropify-wrapper" style='border: 0.5px solid grey'>
                                                 <div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div>
                                                 <div class="dropify-errors-container"><ul></ul></div>
                                                 <input type="file" class="dropify" name="fotoG2"><button type="button" class="dropify-clear" required>Remove</button>
                                                 <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                                              <div class="form-group row" style ="padding: 40px">
                                                  <div class="col-lg-4 grid-margin stretch-card">
                                                      <div class="card">
                                                          <div class="card-body">
                                                              <h4 class="card-title d-flex">Foto Galleria 3
                                                              </h4>
                                                              <div class="dropify-wrapper" style='border: 0.5px solid grey'>
                                                                  <div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div>
                                                                  <div class="dropify-errors-container"><ul></ul></div>
                                                                  <input type="file" class="dropify" name="fotoG3"><button type="button" class="dropify-clear" required>Remove</button>
                                                                  <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-4 grid-margin stretch-card">
                                                      <div class="card">
                                                          <div class="card-body">
                                                              <h4 class="card-title d-flex">Foto Galleria 4
                                                              </h4>
                                                              <div class="dropify-wrapper" style='border: 0.5px solid grey'>
                                                                  <div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div>
                                                                  <div class="dropify-errors-container"><ul></ul></div>
                                                                  <input type="file" class="dropify" name="fotoG4"><button type="button" class="dropify-clear" required>Remove</button>
                                                                  <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-4 grid-margin stretch-card">
                                                      <div class="card">
                                                          <div class="card-body">
                                                              <h4 class="card-title d-flex">Foto Galleria 5
                                                              </h4>
                                                              <div class="dropify-wrapper" style='border: 0.5px solid grey'>
                                                                  <div class="dropify-message"><span class="file-icon"></span> <p>Drag and drop a file here or click</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div>
                                                                  <div class="dropify-errors-container"><ul></ul></div>
                                                                  <input type="file" class="dropify" name="fotoG5"><button type="button" class="dropify-clear" required>Remove</button>
                                                                  <div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>

                              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                          <center><button type="sumbit" class="btn btn-danger btn-icon-text btn-lg" name="invia">

                          <i class="mdi mdi-upload btn-icon-prepend"></i>
                          Upload
                              </button></center><br><br></div><br>

                                                                <?php
                              echo"
                              
                              <input type='text' style='display:none' name='idevento' value='$idG'>";
                             // <input type='text' style='display:none' name='idtaglia' value='$id_taglia'>";
?>
                          </form>
                  </div>
              </div>
              


      </div>
    <!-- page-body-wrapper ends -->
      </div></div></div>






  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./table_files/vendor.bundle.base.js"></script>
  <script src="./table_files/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./table_files/off-canvas.js"></script>
  <script src="./table_files/hoverable-collapse.js"></script>
  <script src="./table_files/template.js"></script>
  <script src="./table_files/settings.js"></script>
  <script src="./table_files/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="./table_files/data-table.js"></script>
  <!-- End custom js for this page-->

</body>

</html>
