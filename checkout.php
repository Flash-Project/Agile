<!DOCTYPE html>
<html lang="en">
        <?php

            include("./functions/users.php");
        include("./functions/connection.php");
      /*include("./functions/product_pull.php");
      include("./functions/connection.php");
        include("./functions/commons_push.php");*/



      $connect=connection();
        controllo_utente();

        if(isset($_SESSION['fine_ordine'])){
            if(($_SESSION['fine_ordine']==1)){

        $_COOKIE['idindirizzo']=null;
        unset($_COOKIE['idconsegna']);
        unset($_COOKIE['idspedizione']);
        unset($_COOKIE['cond_indirizzo']);

        unset($_SESSION['carta_proprietario']);
        unset($_SESSION['carta_numero']);
        unset($_SESSION['carta_data']);
        unset($_SESSION['carta_cvv']);
        $_SESSION['indirizzo_nome']=null;
        unset($_SESSION['indirizzo_email']);
        unset($_SESSION['indirizzo_via']);
        unset($_SESSION['indirizzo_cap']);
        unset($_SESSION['indirizzo_stato']);
        unset($_SESSION['indirizzo_citta']);
            unset($_SESSION['ticket']);
            unset($_SESSION['ticketV']);
            unset($_SESSION["costo_totale"]);

        setcookie('cond_indirizzo','',time()-315360000);
        setcookie('idspedizione','',time()-315360000);
        setcookie('cond_consegna','',time()-315360000);
            $_SESSION['fine_ordine']=0;}}



        if(isset($_SESSION['indirizzo_nome'])){
        $_SESSION['indirizzo_email']=str_replace("&ap;", "'", $_SESSION['indirizzo_email']);
        $_SESSION['indirizzo_via']=str_replace("&ap;", "'", $_SESSION['indirizzo_via']);
        $_SESSION['indirizzo_stato']=str_replace("&ap;", "'", $_SESSION['indirizzo_stato']);
        $_SESSION['indirizzo_citta']=str_replace("&ap;", "'", $_SESSION['indirizzo_citta']);}


        unset($_COOKIE['idindirizzo']);
        unset($_COOKIE['idspedizione']);
        unset($_COOKIE['idconsegna']);



        unset($_SESSION['carta_proprietario']);
        unset($_SESSION['carta_numero']);
        unset($_SESSION['carta_data']);
        unset($_SESSION['carta_cvv']);

        if(isset($_GET["ide"])){

        $idevento=$_GET['ide'];
        $giorno = $_GET['day'];

            $_SESSION["idevento"]=$idevento;
            $_SESSION["giorno"]=$giorno;}

        if(!isset($_SESSION["nome"])){
            header("Location: ./login.php?ide=$idevento&day=$giorno");

        }


        $idevento=$_SESSION["idevento"];
        $giorno=$_SESSION["giorno"];


        $query="SELECT codice, nome, costo, orario, costo_vip, sc.percentuale_sconto as sconto from evento e left join sconto sc on (e.id_sconto=sc.id) where e.id=$idevento";
        $dati=mysqli_query($connect, $query);
        $valori=mysqli_fetch_array($dati);
        $costoP=$valori["costo"];
        $costo=$valori["costo"];
        $costoV=$valori["costo_vip"];
        $sconto=$valori["sconto"];



        if($sconto){
            $scontosottr=($costo*$sconto)/100;
            $costo=$costo-$scontosottr;
            $costoP=$costo;
            $scontosottrVIP=($costoV*$sconto)/100;
            $costoV=$costoV-$scontosottrVIP;}

        $codice=$valori["codice"];
        $_SESSION["codice"]=$codice;

        $nome=$valori["nome"];
        $_SESSION["nomeE"]=$nome;
        $orario=$valori["orario"];
        $_SESSION["orario"]=$orario;





        //$id=$_SESSION["id"];
      /*
        $result=select_indirizzo_utente($connect, $id);*/

        //echo"<script>alert($a);</script>";

      ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Varkala E-commerce Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
      <link media="all" href="./styles/Home/autoptimize_40bd26e9bbf6e304af96ecacbcae7fb4.css" rel="stylesheet">
      <link media="only screen and (max-width: 768px)"
            href="./styles/Home/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
      <link href="./style.css" rel="stylesheet" type="text/css" />
    <!-- Custom font-->
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <!-- Swiper-->
    <link rel="stylesheet" href="vendor/swiper/css/swiper.min.css">
    <!-- AOS - AnimationOnScroll-->
    <link rel="stylesheet" href="vendor/aos/aos.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


  </head>
  <body>
  <style>
      .elementor-3353 .elementor-element.elementor-element-efe09f9:not(.elementor-motion-effects-element-type-background), .elementor-3353 .elementor-element.elementor-element-efe09f9 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
          background-color: #ffffff;
      }

      .elementor-3353 .elementor-element.elementor-element-efe09f9 {
          box-shadow: 0px 0px 7px 1px rgba(71, 71, 71, 0.4);
          transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
          padding: 0px 15px 0px 15px;
      }

      .elementor-3353 .elementor-element.elementor-element-efe09f9 > .elementor-background-overlay {
          transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
      }

      .elementor-bc-flex-widget .elementor-3353 .elementor-element.elementor-element-78535e2.elementor-column .elementor-column-wrap {
          align-items: center;
      }

      .elementor-3353 .elementor-element.elementor-element-78535e2.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap {
          align-content: center;
          align-items: center;
      }

      .elementor-3353 .elementor-element.elementor-element-78535e2 > .elementor-element-populated {
          padding: 0px 0px 0px 10px;
      }

      .elementor-3353 .elementor-element.elementor-element-719abbc .ova_logo img.desk-logo {
          width: 109px;
          height: 40px;
      }

      .elementor-3353 .elementor-element.elementor-element-719abbc .ova_logo img.mobile-logo {
          width: 109px;
          height: 40px;
      }

      .elementor-3353 .elementor-element.elementor-element-719abbc .ova_logo img.logo-fixed {
          width: 109px;
          height: 40px;
      }

      .elementor-bc-flex-widget .elementor-3353 .elementor-element.elementor-element-ab905b4.elementor-column .elementor-column-wrap {
          align-items: center;
      }

      .elementor-3353 .elementor-element.elementor-element-ab905b4.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap {
          align-content: center;
          align-items: center;
      }

      .elementor-3353 .elementor-element.elementor-element-ab905b4.elementor-column > .elementor-column-wrap > .elementor-widget-wrap {
          justify-content: flex-end;
      }

      .elementor-3353 .elementor-element.elementor-element-ab905b4 > .elementor-element-populated {
          padding: 0px 10px 0px 0px;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu {
          flex-direction: row;
          justify-content: center;
          align-items: center;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li > a {
          padding: 25px 0px 25px 0px;
          color: #22213f;
          font-size: 14px;
          text-transform: capitalize;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li > a:hover {
          color: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li.active > a {
          color: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav .dropdown-menu {
          min-width: 11rem;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li a {
          padding: 10px 15px 10px 15px;
          font-size: 14px;
          text-transform: capitalize;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li > a:hover {
          color: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li.active > a {
          color: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu {
          border-radius: 0px 0px 0px 0px;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li {
          border-style: solid;
          border-width: 0px 0px 1px 0px;
          border-color: rgba(204, 204, 204, 0.28);
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li:last-child {
          border-style: solid;
          border-width: 0px 0px 0px 0px;
          border-color: #ffffff;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .dropdown button.dropdown-toggle {
          margin: 6px 0px 0px 0px;
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav li a {
          border-style: solid;
          border-width: 0px 0px 0px 0px;
          border-color: rgba(255, 255, 255, 0.06);
      }

      .elementor-3353 .elementor-element.elementor-element-a079a4f {
          width: auto;
          max-width: auto;
          align-self: center;
      }

      .elementor-3353 .elementor-element.elementor-element-638886d .ova-menu-acount .login a,
      .elementor-3353 .elementor-element.elementor-element-638886d .ova-menu-acount .register a,
      .elementor-3353 .elementor-element.elementor-element-638886d .ova-menu-acount .my-account a {
          color: #22213f;
      }

      .elementor-3353 .elementor-element.elementor-element-638886d .ova-menu-acount .login a:hover,
      .elementor-3353 .elementor-element.elementor-element-638886d .ova-menu-acount .register a:hover,
      .elementor-3353 .elementor-element.elementor-element-638886d .ova-menu-acount .my-account a:hover {
          color: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-638886d > .elementor-widget-container {
          margin: 0px 0px 0px 40px;
      }

      .elementor-3353 .elementor-element.elementor-element-638886d {
          width: auto;
          max-width: auto;
          align-self: center;
      }

      .elementor-3353 .elementor-element.elementor-element-31f6cea a.elementor-button, .elementor-3353 .elementor-element.elementor-element-31f6cea .elementor-button {
          font-size: 14px;
          font-weight: 500;
          fill: #ffffff;
          color: #ffffff;
          background-color: #e86c60;
          border-radius: 5px 5px 5px 5px;
          padding: 10px 25px 10px 30px;
      }

      .elementor-3353 .elementor-element.elementor-element-31f6cea a.elementor-button:hover, .elementor-3353 .elementor-element.elementor-element-31f6cea .elementor-button:hover, .elementor-3353 .elementor-element.elementor-element-31f6cea a.elementor-button:focus, .elementor-3353 .elementor-element.elementor-element-31f6cea .elementor-button:focus {
          color: #e86c60;
          background-color: #ffffff;
      }

      .elementor-3353 .elementor-element.elementor-element-31f6cea a.elementor-button:hover svg, .elementor-3353 .elementor-element.elementor-element-31f6cea .elementor-button:hover svg, .elementor-3353 .elementor-element.elementor-element-31f6cea a.elementor-button:focus svg, .elementor-3353 .elementor-element.elementor-element-31f6cea .elementor-button:focus svg {
          fill: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-31f6cea .elementor-button {
          border-style: solid;
          border-width: 1px 1px 1px 1px;
          border-color: #e86c60;
      }

      .elementor-3353 .elementor-element.elementor-element-31f6cea > .elementor-widget-container {
          margin: 0px 0px 0px 30px;
      }

      .elementor-3353 .elementor-element.elementor-element-31f6cea {
          width: auto;
          max-width: auto;
          align-self: center;
      }

      .elementor-3353 .elementor-element.elementor-element-3dea19e {
          z-index: 0;
      }

      .elementor-3353 .elementor-element.elementor-element-1bbdec0 > .elementor-element-populated {
          padding: 0px 0px 0px 0px;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .cover_color {
          background-color: rgba(0, 0, 0, 0.5);
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .header_title {
          color: #ffffff;
          padding: 90px 0px 17px 0px;
          font-family: "Asap", Sans-serif;
          font-size: 36px;
          font-weight: 700;
          line-height: 1.2em;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb li {
          color: #ffffff;
          font-family: "Asap", Sans-serif;
          font-size: 20px;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb li a {
          color: #ffffff;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb a {
          color: #ffffff;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb .separator {
          color: #ffffff;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs {
          padding: 0px 0px 210px 0px;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 {
          text-align: center;
      }

      .elementor-3353 .elementor-element.elementor-element-bc8aeb3 > .elementor-widget-container {
          background-image: url("https://ovatheme.com/meup/wp-content/uploads/2019/06/bg_top_heading.jpg");
          background-position: center center;
          background-repeat: no-repeat;
          background-size: cover;
      }

      @media (min-width: 768px) {
          .elementor-3353 .elementor-element.elementor-element-78535e2 {
              width: 20.86%;
          }

          .elementor-3353 .elementor-element.elementor-element-ab905b4 {
              width: 79.14%;
          }
      }

      @media (max-width: 1024px) and (min-width: 768px) {
          .elementor-3353 .elementor-element.elementor-element-78535e2 {
              width: 30%;
          }

          .elementor-3353 .elementor-element.elementor-element-ab905b4 {
              width: 70%;
          }
      }

      @media (max-width: 1024px) {
          .elementor-3353 .elementor-element.elementor-element-efe09f9 {
              padding: 15px 10px 15px 10px;
          }

          .elementor-3353 .elementor-element.elementor-element-78535e2 > .elementor-element-populated {
              padding: 0px 0px 0px 10px;
          }

          .elementor-3353 .elementor-element.elementor-element-ab905b4 > .elementor-element-populated {
              padding: 0px 10px 0px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li > a {
              padding: 10px 0px 10px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu {
              padding: 0px 0px 0px 15px;
          }

          .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li a {
              padding: 10px 0px 10px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-a079a4f .ova_nav li a {
              border-width: 0px 0px 1px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-a079a4f > .elementor-widget-container {
              margin: 0px 30px 0px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-638886d > .elementor-widget-container {
              margin: 0px 0px 0px 0px;
          }
      }

      @media (max-width: 767px) {
          .elementor-3353 .elementor-element.elementor-element-78535e2 {
              width: 40%;
          }

          .elementor-3353 .elementor-element.elementor-element-ab905b4 {
              width: 60%;
          }

          .elementor-3353 .elementor-element.elementor-element-a079a4f > .elementor-widget-container {
              margin: 0px 15px 0px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-638886d > .elementor-widget-container {
              margin: 0px 0px 0px 0px;
          }

          .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .header_title {
              padding: 30px 10px 0px 10px;
              font-size: 30px;
          }

          .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb li {
              font-size: 16px;
          }

          .elementor-3353 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs {
              padding: 0px 10px 30px 10px;
          }
      }
  </style>
    <!-- navbar-->
    <div data-elementor-type="wp-post" data-elementor-id="3353" class="elementor elementor-3353"
         data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-efe09f9 elementor-section-full_width ovamenu_shrink ovamenu_shrink_mobile elementor-section-height-default elementor-section-height-default"
                        data-id="efe09f9" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78535e2"
                                 data-id="78535e2" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-719abbc elementor-widget elementor-widget-ova_logo"
                                             data-id="719abbc" data-element_type="widget"
                                             data-widget_type="ova_logo.default">
                                            <div class="elementor-widget-container"><a class="ova_logo"
                                                                                       href="./Home.php">
                                                    <img src="./styles/Category/Asset-8.svg"
                                                         alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                         class="desk-logo d-none d-xl-block"> <img
                                                            src="./styles/Category/Asset-8.svg"
                                                            alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                            class="mobile-logo d-block d-xl-none"> <img
                                                            src="./styles/Category/Asset-8.svg"
                                                            alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                            class="logo-fixed"> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ab905b4"
                                 data-id="ab905b4" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a079a4f elementor-view-primary-menu elementor-widget__width-auto elementor-widget elementor-widget-ova_menu"
                                             data-id="a079a4f" data-element_type="widget"
                                             data-widget_type="ova_menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova_menu_clasic">
                                                    <div class="ova_wrap_nav row NavBtn_right NavBtn_right_m">
                                                        <button class="ova_openNav" type="button"><i
                                                                    class="fas fa-bars"></i></button>
                                                        <div class="ova_nav canvas_left canvas_bg_gray"><a
                                                                    href="javascript:void(0)" class="ova_closeNav"><i
                                                                        class="fas fa-times"></i></a>
                                                            <ul id="menu-primary-menu"
                                                                class="menu sub_menu_dir_right">
                                                                <li id="menu-item-91"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-91">
                                                                    <a title="Home"
                                                                       href="./Home.php">Home<i
                                                                                class=""></i></a>
                                                                    <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
                                                                </li>
                                                                <li id="menu-item-3316"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3316">
                                                                    <a title="Listing"
                                                                       href="./Category.php">Category<i
                                                                                class=""></i></a>
                                                                    <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
                                                                </li>
                                                                <li id="menu-item-251"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-251">
                                                                    <a title="Page"
                                                                       href="./ContactUs.php">Contact<i
                                                                                class=""></i></a>
                                                                    <button type="button" class="dropdown-toggle"><i
                                                                                class=""></i></button>
                                                                </li>
                                                                <li id="menu-item-1463"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-has-children menu-item-1463">
                                                                    <a title="Blog"
                                                                       href="./AboutUs.php">About Us<i
                                                                                class=""></i></a>
                                                                    <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
                                                                </li>
                                                                <?php
                                                                if(isset($_SESSION['id'])){
                                                                    echo"<li id='menu-item-1463'
                                                                        class='menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-has-children menu-item-1463 dropdown'>
                                                                        <a title='Blog'
                                                                           href='./chat/users.php'>Chat</a>
                                                                        <button type='button' class='dropdown-toggle'><i
                                                                                    class=''></i></button>
                                                                    </li>";}
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="ova_closeCanvas ova_closeNav"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="elementor-element elementor-element-31f6cea button-create-event elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-el_button_create_event"
                                             data-id="31f6cea" data-element_type="widget"
                                             data-widget_type="el_button_create_event.default">

                                            <?php

                                            if(isset($_SESSION['ruolo']) && ($_SESSION["ruolo"] == "Cliente")){
                                                echo"<div class='elementor-widget-container' style=' border: 1px solid white'>
                                                    <div class='ova-menu-acount'><span class='login'> <a
                                                            href='./UserAccount.php'>&emsp; Account &emsp;</a> </span>
                                                    </div>
                                                </div>";

                                            }

                                            elseif(isset($_SESSION['ruolo']) && ($_SESSION["ruolo"] == "Proprietario" || $_SESSION["ruolo"] == "Amministratore")){

                                                echo"<div class='elementor-widget-container' style=' border: 1px solid white'>
                                                    <div class='ova-menu-acount'><span class='login'> <a
                                                            href='./UserAccount.php'>&emsp; User Account </a> </span> <span
                                                            class='slash'>|</span> <span class='register'> <a
                                                            href='./backend/'> Backend&emsp; </a> </span>
                                                    </div>
                                                </div>";
                                            }


                                            else{
                                                echo"<div class='elementor-widget-container' style=' border: 1px solid white'>
                                                    <div class='ova-menu-acount'><span class='login'> <a
                                                            href='./login.php'>&emsp; Login </a> </span> <span
                                                            class='slash'>|</span> <span class='register'> <a
                                                            href='./Register.php'> Register&emsp; </a> </span>
                                                    </div>
                                                </div>";

                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="show_mask_header mask_header_shrink" style="position: relative; height: 0px;"></div>
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-3dea19e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="3dea19e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1bbdec0"
                                 data-id="1bbdec0" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bc8aeb3 elementor-widget elementor-widget-ova_header"
                                             data-id="bc8aeb3" data-element_type="widget"
                                             data-widget_type="ova_header.default">
                                            <div class="elementor-widget-container">
                                                <div class="wrap_ova_header bg_feature_img center "
                                                     style="background: url( https://ovatheme.com/meup/wp-content/uploads/2019/06/e10.jpg )">
                                                    <div class="cover_color"></div>
                                                    <div class="ova_header_el "><h1
                                                                class="second_font header_title">Booking
                                                        </h1>
                                                        <div class="ovatheme_breadcrumbs ovatheme_breadcrumbs_el">
                                                            <div id="breadcrumbs">
                                                                <ul class="breadcrumb">
                                                                    <li>
                                                                        <a href="https://ovatheme.com/meup/">Home</a>
                                                                    </li>
                                                                    <li class="li_separator"><span
                                                                                class="separator"></span></li>
                                                                    <li>Event</li>
                                                                    <li class="li_separator"><span
                                                                                class="separator"></span></li>
                                                                    <li>Booking</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </header>
    <!-- Hero Section-->
    <!-- Checkout-->
  <br><br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="custom-nav nav nav-pills mb-5">
              <li class="nav-item w-25"><a class="nav-link text-sm active" href="checkout.php">Address</a></li>
              <li class="nav-item w-25"><a class="nav-link text-sm <?php if(!isset($_COOKIE['idspedizione'])){ echo'disabled';}  ?>" href="checkout2.php">Delivery Method</a></li>
              <li class="nav-item w-25"><a class="nav-link text-sm <?php if(!isset($_COOKIE['idconsegna'])){ echo'disabled';}  ?>" href="checkout3.php">Payment Method </a></li>
              <li class="nav-item w-25"><a class="nav-link text-sm <?php if(!isset($_COOKIE['idconsegna'])){ echo'disabled';}  ?>" href="checkout4.php">Checkout Confirmed</a></li>
            </ul>
       <form method='POST' enctype='multipart/form-data' action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <!-- Invoice Address-->




           <div class="d-block" id="addToCartAlert">
               <div class="mb-4 mb-lg-5 alert alert-success" id="alert" role="alert" style="background-color:#ff0000;display:none">
                   <div class="d-flex align-items-center pr-3">
                       <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3">
                           <use xlink:href="#delete-circle-1"> </use>
                       </svg>
                       <p class="mb-0">Immetti un indirizzo di fatturazione! <br class="d-inline-block d-lg-none"></p>
                   </div>
                   <button class="close close-absolute close-centered opacity-10 text-inherit" type="button" data-dismiss="alert" aria-label="Close">
                       <svg class="svg-icon w-2rem h-2rem">
                           <use xlink:href="#close-1"> </use>
                       </svg>
                   </button>
               </div>
           </div>



           <div class="d-block" id="addToCartAlert">
               <div class="mb-4 mb-lg-5 alert alert-success" id="alert1" role="alert" style="background-color:#ff0000;display:none">
                   <div class="d-flex align-items-center pr-3">
                       <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3">
                           <use xlink:href="#delete-circle-1"> </use>
                       </svg>
                       <p class="mb-0">Indirizzo di fatturazzione esistente! <br class="d-inline-block d-lg-none"></p>
                   </div>
                   <button class="close close-absolute close-centered opacity-10 text-inherit" type="button" data-dismiss="alert" aria-label="Close">
                       <svg class="svg-icon w-2rem h-2rem">
                           <use xlink:href="#close-1"> </use>
                       </svg>
                   </button>
               </div>
           </div>

              <h3 class="mb-4">Ticket</h3>
           <div id="accordion" role="tablist">
                    <div class="card border-0 shadow mb-3">
                        <div class="card-header accordion-header" id="headingTwo" role="tab"><a class="accordion-link" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" onclick="prendi(0,0)">Ticket's info</a></div>
                        <div class="collapse show" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                            <div class="card-body py-5">
                                <div class="row">
                                    <div class="container" style="padding: 0 30%">
                                        <table style="border: 0px white">
                                            <tr style="border: 0px white">
                                                <td style="border: 0px white">Default Ticket</td>
                                                <td style="border: 0px white">(Num)</td>
                                                <td style="border: 0px white"><input type="number" name="ticket" class="input" style="max-width: 80px;" min="0" max="" <?php if(isset($_SESSION["ticket"])){ $ticket=$_SESSION["ticket"]; echo"value='$ticket'>";  } else echo "value='1'>";?> </td>
                                                <td style="border: 0px white"><?php echo"$$costo"; ?></td>
                                                <td style="border: 0px white">(1)</td>



                                            </tr>
                                            <?php
                                            if($costoV){

                                            echo"<tr style='border: 0px white'>
                                                <td style='border: 0px white'>VIP Ticket</td>
                                                <td style='border: 0px white'>(Num)</td>
                                                <td style='border: 0px white'><input type='number' name='ticketV' class='input' style='max-width: 80px;' min='0' max='' "; if(isset($_SESSION['ticketV'])){ $ticketV=$_SESSION['ticketV']; echo"value='$ticketV'>";  } else echo "value='0'>"; echo"</td>
                                               <td style='border: 0px white'>$$costoV</td>
                                                <td style='border: 0px white'>(1)</td>

                                            </tr>";} ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

              <h3 class="mb-4"> Invoice address                    </h3>

                <div id="accordion" role="tablist">
                    <div class="card border-0 shadow mb-3">
                        <div class="card-header accordion-header" id="headingOne" role="tab"><a class="accordion-link" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="prendi(0,0)">New invoice address</a></div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                            <div class="card-body py-5">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="fullname_invoice">Full Name</label>
                                        <input class="form-control" type="text" name="fullname" placeholder="Joe Black" id="fullname_invoice"  pattern="[A-Za-z ]{0,}" <?php if(isset($_SESSION['indirizzo_nome'])){ $indirizzo=$_SESSION['indirizzo_nome']; echo" value='$indirizzo'";}?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="emailaddress_invoice">Email Address</label>
                                        <input class="form-control" type="text" name="email" placeholder="joe.black@gmail.com" id="emailaddress_invoice" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$" value="<?php if(isset($_SESSION['indirizzo_email'])){echo $_SESSION['indirizzo_email'];} ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="street_invoice">Street</label>
                                        <input class="form-control" type="text" name="via" placeholder="123 Main St." id="street_invoice" "[A-Za-z0-9.' ]{0,}" value="<?php if(isset($_SESSION['indirizzo_via'])){echo $_SESSION['indirizzo_via'];} ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="city_invoice">City</label>
                                        <input class="form-control" type="text" name="citta" placeholder="City" id="city_invoice"  pattern="[A-Za-z' ]{0,}" value="<?php if(isset($_SESSION['indirizzo_citta'])){echo $_SESSION['indirizzo_citta'];} ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="zip_invoice">ZIP</label>
                                        <input class="form-control" type="text" name="cap" placeholder="Postal code" id="zip_invoice" pattern="[0-9]{5}" value="<?php if(isset($_SESSION['indirizzo_cap'])){echo $_SESSION['indirizzo_cap'];} ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="state_invoice">State</label>
                                        <input class="form-control" type="text" name="stato" placeholder="State" id="state_invoice"  pattern="[A-Za-z' ]{0,}" value="<?php if(isset($_SESSION['indirizzo_stato'])){echo $_SESSION['indirizzo_stato'];} ?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
              <!-- /Shipping Address-->
           <div class="mb-5 d-flex justify-content-between flex-column flex-lg-row">
               <a class="btn btn-link text-muted" href="cart.php?err=0">
                   <i class="fa fa-angle-left mr-2"></i>
                   Back
               </a>
               <button class="btn btn-dark" type="submit" name="invia">
                   Choose delivery method
                   <i class="fa fa-angle-right ml-2"></i>
               </button>
           </div>

            </form>
          </div>

            <?php

             /*     $result=carrello_accesso($connect,$_SESSION['id']);
            $idC=$_SESSION['id'];
                   $tot_prodotti=0;
                  $num_prodotti=0;
            while($row = mysqli_fetch_array($result)){

                $idP=$row["prodotto"];

                $costo=$row["costo"];
                $resultimm=select_immaginiP_detail($connect, $idP);
                $quantita=$row["quantita"];
                $sconto=$row['percentuale_sconto'];
                if($sconto) {
                    $perc=($costo*$sconto)/100;
                    $prezzoscontato=$costo-$perc;
                    $tot_prodotto=$quantita*$prezzoscontato;
                        $tot_prodotti+=$tot_prodotto;
                        $num_prodotti++;}
                     else  {
                        $tot_prodotto=$quantita*$costo;
                        $tot_prodotti+=$tot_prodotto;
                        $num_prodotti++;}}


                  $iva=($tot_prodotti*22)/100;
                    $totale_iva=$tot_prodotti+$iva;*/
            ?>


          <div class="col-lg-4">
            <div class="card mb-5">
              <div class="card-header">
                <h6 class="mb-0">Order Summary</h6>
              </div>
              <div class="card-body py-4">
                <p class="text-muted text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
               <table class="table card-text" style="border-color:white">
                  <tr style="border-color:white">
                    <th style="border-color:white" class="py-4">Order Subtotal </th>
                    <td style="border-color:white" class="py-4 text-right text-muted"><?php if(isset($_SESSION["costo_totale"])){ $costoP=$_SESSION["costo_totale"]; echo "$$costoP"; } else echo "$$costoP"; ?></td>
                  </tr>
                  <tr style="border-color:white">
                    <th style="border-color:white" class="py-4">Shipping and handling</th>
                    <td style="border-color:white" class="py-4 text-right text-muted"> <?php if(isset($_COOKIE['idspedizione']) && isset($_COOKIE['idspedizione'])){ if($_COOKIE['idspedizione']=="express"){ echo"$0"; } else{ echo"$5"; }} else {echo"$0";}?></td>
                  </tr>
                  <tr style="border-color:white">
                    <th style="border-color:white" class="py-4">Tax</th>
                    <td style="border-color:white" class="py-4 text-right text-muted"><?php echo "$5"; ?></td>
                  </tr>
                  <tr style="border-color:white">
                    <th style="border-color:white" class="pt-4">Total</th>
                    <td style="border-color:white" class="pt-4 text-right h3 font-weight-normal"><?php if(isset($_COOKIE['idspedizione'])){ if($_COOKIE['idspedizione']=='express'){ } else{ $costoP+=5; } } $costoP+=5; echo "$$costoP"; ?> </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Sidebar Cart Modal-->
    <div class="modal fade modal-right" id="sidebarCart" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content sidebar-cart-content">
          <div class="modal-header border-0">
            <button class="close modal-close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 sidebar-cart-body">
            <!-- Empty cart snippet-->
            <!-- In case of empty cart - display this snippet + remove .d-none-->
            <div class="d-none text-center mb-5">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light mb-4 text-muted">
                <use xlink:href="#retail-bag-1"> </use>
              </svg>
              <p>Your cart is empty </p>
            </div>
            <!-- Empty cart snippet end-->
            <div class="sidebar-cart-product-wrapper custom-scrollbar">
              <!-- cart item-->
              <div class="navbar-cart-product">
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product">
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product">
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product">
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product">
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product">
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer sidebar-cart-footer shadow">
            <div class="w-100">
              <h5 class="mb-4">Subtotal: <span class="float-right">$465.32</span></h5><a class="btn btn-outline-dark btn-block mb-3" href="cart.html">View cart</a><a class="btn btn-dark btn-block" href="checkout.html">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar Modal Right-->
    <div class="modal fade modal-right" id="sidebarRight" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button class="close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 pb-5">
            <div>
              <h5 class="mb-5" data-aos="zoom-in" data-aos-delay="50">Varkala</h5>
              <ul class="nav flex-column mb-5">
                <li class="nav-item active"><a class="nav-link pl-0" href="#">Home </a></li>
                <li class="nav-item"><a class="nav-link pl-0" href="#">Link</a></li>
                <li class="nav-item"><a class="nav-link pl-0 disabled" href="#">Disabled</a></li>
                <li class="nav-item dropdown"><a class="nav-link pl-0 dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-target="#sidebarSubmenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">Dropdown link</a>
                  <div class="collapse" id="sidebarSubmenu">
                    <ul class="nav flex-column ml-3">
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Another action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Something else here                </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="list-inline mb-4">
                <li class="list-inline-item mr-2"><i class="fab fa-facebook-f"> </i></li>
                <li class="list-inline-item mr-2"><i class="fab fa-twitter"> </i></li>
                <li class="list-inline-item mr-2">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
              </ul>
              <p class="text-sm text-muted mb-0">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal    -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button class="close close-absolute" type="button" data-dismiss="modal" aria-label="Close">
            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body p-5">
            <ul class="nav list-inline" role="tablist">
              <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab" href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin" aria-controls="loginModalTabLogin" aria-selected="true">Login</a></li>
              <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab" href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister" aria-controls="loginModalTabRegister" aria-selected="false">Register</a></li>
            </ul>
            <hr class="mb-3">
            <div class="tab-content">
              <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel" aria-labelledby="loginModalLinkLogin">
                <form action="customer-orders.html" method="get">
                  <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="text">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label class="form-label" for="loginPassword"> Password</label>
                      </div>
                      <div class="col-auto"><a class="form-text small" href="#">Forgot password?</a></div>
                    </div>
                    <input class="form-control" name="loginPassword" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="loginRemember" type="checkbox">
                      <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">Remember me for 30 days</span></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                </div>
              </div>
              <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel" aria-labelledby="loginModalLinkRegister">
                <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.                                            </p>
                <form action="customer-orders.html" method="get">
                  <div class="form-group">
                    <label class="form-label" for="registerName">Name</label>
                    <input class="form-control" id="registerName" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerEmail">Email</label>
                    <input class="form-control" id="registerEmail" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerPassword">Password</label>
                    <input class="form-control" id="registerPassword" type="password">
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="far fa-user mr-2"></i>Register                       </button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR CONNECT WITH">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google                                      </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer>
        <!-- Services block-->
        <!-- Main block - menus, subscribe form--><hr><br>

        <div class="container" style="max-height: 40%">
            <div class="d-block" id="addToCartAlert" >
                <div class="mb-4 mb-lg-5 alert alert-success" id="alert" role="alert" style="display:none;">
                    <div class="d-flex align-items-center pr-3">
                        <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3">
                            <use xlink:href="#checked-circle-1"> </use>
                        </svg>
                        <p class="mb-0">Registrazione effettuata! rimarrai aggiornato sulle nostre notizie <br class="d-inline-block d-lg-none"></p>
                    </div>
                    <button class="close close-absolute close-centered opacity-10 text-inherit" type="button" data-dismiss="alert" aria-label="Close">
                        <svg class="svg-icon w-2rem h-2rem">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>
                </div>
            </div></div><br>


        <div class="ovafooter">

            <div data-elementor-type="wp-post" data-elementor-id="1030" class="elementor elementor-1030"
                 data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-9a37ba9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9a37ba9" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-410f0f2"
                                         data-id="410f0f2" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-d61e021 elementor-widget elementor-widget-image"
                                                     data-id="d61e021" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image"><a href="https://ovatheme.com/meup/#">
                                                                <img src="./styles/Home/Asset-9.svg"
                                                                     class="attachment-full size-full" alt="" loading="lazy">
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9d80b81 elementor-widget elementor-widget-text-editor"
                                                     data-id="9d80b81" data-element_type="widget"
                                                     data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><p><span
                                                                        style="color: #cccccc;">Buy your ticket from Vivaticket! Many events in many locations await you. You just have to choose!</span>
                                                            </p></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8f9e958 elementor-widget elementor-widget-ova_social"
                                                     data-id="8f9e958" data-element_type="widget"
                                                     data-widget_type="ova_social.default">
                                                    <div class="elementor-widget-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-53fb2e8"
                                         data-id="53fb2e8" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-37d33bd elementor-widget elementor-widget-heading"
                                                     data-id="37d33bd" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2
                                                                class="elementor-heading-title elementor-size-default">Info</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-7382674 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                     data-id="7382674" data-element_type="widget"
                                                     data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item"><a
                                                                        href="./AboutUs.html"> <span
                                                                            class="elementor-icon-list-text">About Us</span> </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item"><a
                                                                        href="./Category.php"> <span
                                                                            class="elementor-icon-list-text">Events</span>
                                                                </a></li>
                                                            <li class="elementor-icon-list-item"><a
                                                                        href="./ContactUs.html"> <span
                                                                            class="elementor-icon-list-text">Contact Us</span>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b6c5c66"
                                         data-id="b6c5c66" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ce13c59 elementor-widget elementor-widget-heading"
                                                     data-id="ce13c59" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2
                                                                class="elementor-heading-title elementor-size-default">Contact
                                                            Us</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-16802b5 elementor-widget elementor-widget-ova_contact"
                                                     data-id="16802b5" data-element_type="widget"
                                                     data-widget_type="ova_contact.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="ova-contact">
                                                            <div class="icon"><i class="icon_pin_alt"></i></div>
                                                            <div class="address"><span><a
                                                                            href="https://ovatheme.com/meup/#">San Francisco City Hall, San Francisco, CA</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-96868ab elementor-widget elementor-widget-ova_contact"
                                                     data-id="96868ab" data-element_type="widget"
                                                     data-widget_type="ova_contact.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="ova-contact">
                                                            <div class="icon"><i class="icon_mail_alt"></i></div>
                                                            <div class="address"><span><a
                                                                            href="mailto:#">meupcontact@info.com</a></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f7be147 elementor-widget elementor-widget-ova_contact"
                                                     data-id="f7be147" data-element_type="widget"
                                                     data-widget_type="ova_contact.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="ova-contact">
                                                            <div class="icon"><i class="icon_mobile"></i></div>
                                                            <div class="address"><span><a href="tel:081000000">(+011) 01234567</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a1c0393"
                                         data-id="a1c0393" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-6d8d347 elementor-widget elementor-widget-heading"
                                                     data-id="6d8d347" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><h2
                                                                class="elementor-heading-title elementor-size-default">Download
                                                            APP</h2></div>
                                                </div>
                                                <div class="elementor-element elementor-element-c43bc2a elementor-widget elementor-widget-image"
                                                     data-id="c43bc2a" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image"><img
                                                                    src="./styles/Home/apple-store-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
                                                                    title="apple-store" alt="apple-store"></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e324d70 elementor-widget elementor-widget-image"
                                                     data-id="e324d70" data-element_type="widget"
                                                     data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image"><img
                                                                    src="./styles/Home/google_play-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
                                                                    title="google_play" alt="google_play"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-c378d2f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="c378d2f" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cacad94"
                                         data-id="cacad94" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-f37729f elementor-widget elementor-widget-heading"
                                                     data-id="f37729f" data-element_type="widget"
                                                     data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"><span
                                                                class="elementor-heading-title elementor-size-default">© 2021 <span
                                                                    style="color: #fff">ovatheme</span>. All Rights Reserved.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-54da00d"
                                         data-id="54da00d" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
        <!-- Copyright section of the footer-->

    </footer>

       <?php

        if(isset($_POST["invia"])){

            $_SESSION["ticket"]=$_POST['ticket'];
            $_SESSION["ticketV"]=$_POST['ticketV'];

            $costoT=$costo*$_SESSION["ticket"];
            $costoTV=$costoV*$_SESSION["ticketV"];
            $costoTot=$costoT+$costoTV;


            $_SESSION["costo_totale"]=$costoTot;

            if($_COOKIE['cond_indirizzo'] == 0){

                if (empty($_POST['fullname']) or
                    empty($_POST['email']) or
                    empty($_POST['via']) or
                    empty($_POST['cap']) or
                    empty($_POST['stato']) or
                    empty($_POST['citta']) ){

                        echo"<script>
                                document.getElementById('alert').style.display = 'block';
                             </script>";}

                else{
                    $id=$_SESSION["id"];
                    $fullname=$_POST['fullname'];
                    $email=$_POST['email'];
                    $via=$_POST['via'];
                    $via=str_replace("'", "&ap;", $via);
                    $cap=$_POST['cap'];
                    $stato=$_POST['stato'];
                    $stato=str_replace("'", "&ap;", $stato);
                    $citta=$_POST['citta'];
                    $citta=str_replace("'", "&ap;", $citta);




                    $_SESSION['indirizzo_nome']=$fullname;
                    $_SESSION['indirizzo_email']=$email;
                    $_SESSION['indirizzo_via']=$via;
                    $_SESSION['indirizzo_cap']=$cap;
                    $_SESSION['indirizzo_stato']=$stato;
                    $_SESSION['indirizzo_citta']=$citta;

                    echo"<script>document.location.href = './checkout2.php';</script>";

                }
                }
            else{

                echo"<script>document.location.href = './checkout2.php';</script>";

            }




         }
      ?>
    <script>

        document.body.className += "js";

        var spinner = document.querySelector('.input');
        var buttonUp = document.querySelector('.up');
        var buttonDown = document.querySelector('.down');

        buttonUp.onclick = function() {
            var value = parseInt(spinner.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            spinner.value = value;
        };

        buttonDown.onclick = function() {
            var value = parseInt(spinner.value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            spinner.value = value;
        };

        function prendi(id,stato){
            document.cookie = "idindirizzo = " + id;
            document.cookie = "cond_indirizzo = " + stato;
        }

    </script>
    <!-- /Footer end-->
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/orion-svg-sprite.svg');
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/varkala-clothes.svg');
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/img/shape/blob-sprite.svg');

    </script>
    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="vendor/swiper/js/swiper.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- AOS - AnimationOnScroll-->
    <script src="vendor/aos/aos.js"></script>
    <!-- Custom Scrollbar-->
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom-scrollbar-init.js"></script>
    <!-- Smooth scroll-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      function forr(tipo){
          document.cookie = tipo + " = " + tipo;
          window.location.href = "./category-sidebar.php";
      }
    </script>
    <!-- Main Theme files-->
    <script src="js/sliders-init.js"></script>
    <script src="js/theme.js"></script>
    <?php



    ?>
  </body>
</html>