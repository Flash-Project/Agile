<!DOCTYPE html>
<!-- saved from url=(0063)https://ovatheme.com/meup/event_cat/food-drink/?status=upcoming -->
<html lang="en-US">
<head>
    <?php
    include("./functions/connection.php");
    include("./functions/event_pull.php");
    $connect=connection();
    include("./functions/users.php");
    controllo_utente();
    ob_start();

    if(isset($_GET["cat"]))
         setcookie("categoria", $_GET["cat"]);

    if($_SESSION["cookie"]==0){
        $_SESSION["cookie"]=1;
        header("Location: ./category.php");
         }


    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://ovatheme.com/meup/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link media="all" href="./styles/Category/autoptimize_a88d1bba01dc3d666022005f8a924d5f.css" rel="stylesheet">
    <link media="only screen and (max-width: 768px)"
          href="./styles/Category/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
    <title>Food &amp; MeUp | Categories</title>
    <script src="./styles/Category/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
    <link rel="stylesheet" id="ova-google-fonts-css" href="./styles/Category/css" type="text/css" media="all">
    <script type="text/javascript" src="./styles/Category/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="./styles/Category/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://ovatheme.com/meup/wp-json/">
    <link rel="alternate" type="application/json" href="https://ovatheme.com/meup/wp-json/wp/v2/event_cat/11">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ovatheme.com/meup/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://ovatheme.com/meup/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.7.2">
    <meta name="generator" content="WooCommerce 5.3.0">
    <noscript>
        <style>.woocommerce-product-gallery {
            opacity: 1 !important;
        }</style>
    </noscript>
    <link rel="icon"
          href="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_32,h_32/https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1-150x150.png"
          sizes="32x32">
    <link rel="icon"
          href="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_192,h_192/https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1.png"
          sizes="192x192">
    <link rel="apple-touch-icon"
          href="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_180,h_180/https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1.png">
    <meta name="msapplication-TileImage"
          content="https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1.png">
</head>
<body class="archive tax-event_cat term-food-drink term-11 theme-meup woocommerce-js elementor-default elementor-kit-5045 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
      data-elementor-device-mode="desktop">
<div class="ova-wrapp">
    <div class="ovaheader">
        <style id="elementor-post-3353">.elementor-3353 .elementor-element.elementor-element-efe09f9:not(.elementor-motion-effects-element-type-background), .elementor-3353 .elementor-element.elementor-element-efe09f9 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
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
        }</style>
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
                                                                class="second_font header_title">Search your Event
                                                        </h1>
                                                            <div class="ovatheme_breadcrumbs ovatheme_breadcrumbs_el">
                                                                <div id="breadcrumbs">
                                                                    <ul class="breadcrumb">
                                                                        <li>
                                                                            <a href="./Home.php">Home</a>
                                                                        </li>
                                                                        <li class="li_separator"><span
                                                                                class="separator"></span></li>
                                                                        <li>Event</li>
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
    </div>
    <div class="el_wrap_site">
        <div class="el_search_filters wrap_form_search  type3   ">
            <form enctype="multipart/form-data" method="POST"
             action="<?php echo $_SERVER['PHP_SELF'] ?>"
                autocomplete="nope" autocorrect="off"
                  autocapitalize="none">
                <div class="wp_form">
                    <div class="name_event field_search"><input type="text" class="form-control"
                                                                placeholder="Enter name ..." name="nome" value=""
                                                                autocomplete="nope" autocorrect="off"
                                                                autocapitalize="none"></div>
                    <div class="categories field_search"><select name="categoria" id="cat"
                                                                 class="postform select2-hidden-accessible"
                                                                 tabindex="-1" aria-hidden="true">
                        <option value="">Select Category</option>
                            <?php       $result = select_categoria($connect);
                            while ($row = mysqli_fetch_array($result)) {

                                $categoria = $row["nome"];
                                echo"      <option class='level-0' value='$categoria'>$categoria
                                                                </option>"; } ?>


                    </select></div>
                    <div class="loc_state field_search"><select name="stato" id="event_state"
                                                                class="selectpicker postform select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                        <option value="" selected="selected">States</option>

                            <?php
                            $result = select_stato($connect);
                            while ($row = mysqli_fetch_array($result)) {

                                $stato = $row["stato"];

                                echo"      <option class='level-0' value='$stato'>$stato
                                                                </option>"; } ?>
                    </select></div>

                    <div class="loc_state field_search"><select name="citta" id="event_state"
                                                                class="selectpicker postform select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                        <option value="" selected="selected">City</option>
                            <?php
                            $result = select_citta($connect);
                            while ($row = mysqli_fetch_array($result)) {

                            $citta = $row["luogo"];
                            echo"      <option class='level-0' value='$citta'>$citta
                            </option>"; } ?>
                        </select></div>




                    <div class="loc_state field_search"><input type="date" hidden></div>
                    <div class="loc_state field_search"><label for="data1">Data inizio</label><input type="date" name="dataI" id="data1" style="width: 100%; border: 1px solid #c9c9c9; border-radius: 4px"></div>
                    <div class="loc_state field_search"><label for="data2">Data Fine</label><input type="date" name="dataF" id="data2" style="width: 100%; border: 1px solid #c9c9c9; border-radius: 4px"></div>
                    <div class="loc_state field_search"><input type="date" hidden></div>




                </div>
                <div class="el_submit_search"><input type="submit" name="ricerca" value="Search" class="second_font"></div>
            </form>
        </div>
        <div id="el_main_content">
            <ul class="event_archive type6 three-column">



                <?php

                $result=select_evento_fronted($connect);


                while($row = mysqli_fetch_array($result)){
                $idevento=$row['id'];
                $codice=$row['codice'];

                //$categoria=$row['categoria'];
                $nome=$row['evento'];
               // $tipologia=$row['tipologia'];
               // $biglietti=$row['biglietti'];
                $costo=$row['costo'];
                    $citta=$row['luogo'];
                    $stato=$row['stato'];

                    $via=$row['via'];
                   // $descrizione=$valori['descrizione'];
                    $data_inizio=$row['data_inizio'];
                    $data_fine=$row['data_fine'];
                    $sconto=$row['sconto'];
                    $resImm= select_immagine_principale($connect, $idevento);
                    $valore = mysqli_fetch_array($resImm);
                    $foto=$valore['nome'];


                    if($sconto){
                        $scontosottr=($costo*$sconto)/100;
                        $costo_scontato=$costo-$scontosottr;}




               echo" <li class='event_entry '>
                    <div class='event_item type6'>
                        <div class='event_thumbnail'>
                            <div class='thumbnail_figure'><a href='./details.php?id=$idevento'>
                                <img src='./backend/upload/$foto'
                                     alt='$nome'> </a></div>
                        </div>
                        <div class='event_detail'><h2 class='loop_title'><a class='second_font'
                                                                            href='./details.php?id=$idevento'>
                            $nome</a></h2>
                            <div class='event-location-time'>
                                <div class='event-time'><span class='event-icon'><i class='icon_clock_alt'></i></span>
                                    <span class='time'> <span class='start-time'>Dal $data_inizio al $data_fine</span><span></span>&nbsp; </span>
                                </div>
                                <div class='location-rating'>
                                    <div class='event_location'><span class='event-icon'><i
                                            class='icon_pin_alt'></i></span>
                                         $stato, $citta<span
                                            class='separator'>,</span>
                                          $via<span
                                            class='separator'></span></div>
                                    <span class='event_ratting'> </span></div>
                            </div>
                            <div class='meta-footer'><span class='event-button'> <a class='second_font'
                                                                                    href='./details.php?id=$idevento'>Get Ticket</a> </span><span
                                                                                            class='event_loop_price second_font'>"; if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo"; echo"</span>
                        </div>
                    </div>
                </li>";}
                ?>

            </ul>
        </div>
    </div>
    <div class="ovafooter">
        <div data-elementor-type="wp-post" data-elementor-id="96" class="elementor elementor-96"
             data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-d1817dd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="d1817dd" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-67877f6"
                                     data-id="67877f6" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-73e6158 elementor-widget elementor-widget-image"
                                                 data-id="73e6158" data-element_type="widget"
                                                 data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"><a
                                                            href="https://ovatheme.com/meup/event_cat/food-drink/?status=upcoming#">
                                                        <img src="./styles/Category/Asset-9.svg"
                                                             class="attachment-full size-full" alt="" loading="lazy">
                                                    </a></div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-077f622 elementor-widget elementor-widget-text-editor"
                                                 data-id="077f622" data-element_type="widget"
                                                 data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix"><p><span
                                                            style="color: #cccccc;">Buy your ticket from Vivaticket! Many events in many locations await you. You just have to choose!</span>
                                                    </p></div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d160574 elementor-widget elementor-widget-ova_social"
                                                 data-id="d160574" data-element_type="widget"
                                                 data-widget_type="ova_social.default">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6a2dd97"
                                     data-id="6a2dd97" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-d715d6d elementor-widget elementor-widget-heading"
                                                 data-id="d715d6d" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><h2
                                                        class="elementor-heading-title elementor-size-default">Info</h2></div>
                                            </div>
                                            <div class="elementor-element elementor-element-4fbd6be elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                 data-id="4fbd6be" data-element_type="widget"
                                                 data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item"><a
                                                                href="./AboutUs.php">
                                                            <span class="elementor-icon-list-text">About Us</span> </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item"><a
                                                                    href="./Category.php">
                                                                <span class="elementor-icon-list-text">Events</span> </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item"><a
                                                                href="./ContactUs.php">
                                                            <span class="elementor-icon-list-text">Contact Us</span>
                                                        </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-03e63d3"
                                     data-id="03e63d3" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6adb7e4 elementor-widget elementor-widget-heading"
                                                 data-id="6adb7e4" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><h2
                                                        class="elementor-heading-title elementor-size-default">Contact
                                                    Us</h2></div>
                                            </div>
                                            <div class="elementor-element elementor-element-ff82a52 elementor-widget elementor-widget-ova_contact"
                                                 data-id="ff82a52" data-element_type="widget"
                                                 data-widget_type="ova_contact.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ova-contact">
                                                        <div class="icon"><i class="icon_pin_alt"></i></div>
                                                        <div class="address"><span><a
                                                                href="https://ovatheme.com/meup/event_cat/food-drink/?status=upcoming#">San Francisco City Hall, San Francisco, CA</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-644425e elementor-widget elementor-widget-ova_contact"
                                                 data-id="644425e" data-element_type="widget"
                                                 data-widget_type="ova_contact.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ova-contact">
                                                        <div class="icon"><i class="icon_mail_alt"></i></div>
                                                        <div class="address"><span><a
                                                                href="mailto:#">meupcontact@info.com</a></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-98d6e20 elementor-widget elementor-widget-ova_contact"
                                                 data-id="98d6e20" data-element_type="widget"
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
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-e63f1c3"
                                     data-id="e63f1c3" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-86a6f7f elementor-widget elementor-widget-heading"
                                                 data-id="86a6f7f" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><h2
                                                        class="elementor-heading-title elementor-size-default">Download
                                                    APP</h2></div>
                                            </div>
                                            <div class="elementor-element elementor-element-43a8fc4 elementor-widget elementor-widget-image"
                                                 data-id="43a8fc4" data-element_type="widget"
                                                 data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"><img
                                                            src="./styles/Category/apple-store-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
                                                            title="apple-store" alt="apple-store"></div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-059c2f8 elementor-widget elementor-widget-image"
                                                 data-id="059c2f8" data-element_type="widget"
                                                 data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"><img
                                                            src="./styles/Category/google_play-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-69a4c4a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="69a4c4a" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2b02a0a"
                                     data-id="2b02a0a" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-001ba08 elementor-widget elementor-widget-heading"
                                                 data-id="001ba08" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><span
                                                        class="elementor-heading-title elementor-size-default">© 2021 <span
                                                        style="color: #fff">ovatheme</span>. All Rights Reserved.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9e3aa36"
                                     data-id="9e3aa36" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">(function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4" id="wp-polyfill-js"></script> <script type="text/javascript" id="wp-polyfill-js-after">( 'fetch' in window ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>' );</script> <script type="text/javascript" id="contact-form-7-js-extra">var wpcf7 = {"api":{"root":"https:\/\/ovatheme.com\/meup\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_daca149c46601376ce5db68f3658323c.js?ver=5.4.1" id="contact-form-7-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/image-map-pro-wordpress/js/image-map-pro.min.js?ver=5.1.6" id="image-map-pro-dist-js-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70" id="jquery-blockui-js"></script> <script type="text/javascript" id="wc-add-to-cart-js-extra">var wc_add_to_cart_params = {"ajax_url":"\/meup\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/meup\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/ovatheme.com\/meup\/cart\/","is_cart":"","cart_redirect_after_add":"no"};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.3.0" id="wc-add-to-cart-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4" id="js-cookie-js"></script> <script type="text/javascript" id="woocommerce-js-extra">var woocommerce_params = {"ajax_url":"\/meup\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/meup\/?wc-ajax=%%endpoint%%"};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.3.0" id="woocommerce-js"></script> <script type="text/javascript" id="wc-cart-fragments-js-extra">var wc_cart_fragments_params = {"ajax_url":"\/meup\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/meup\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_d71891be86889718f0e13c2f3acada41","fragment_name":"wc_fragments_d71891be86889718f0e13c2f3acada41","request_timeout":"5000"};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.3.0" id="wc-cart-fragments-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_d12035cd792428533b661744dbb9ddc9.js?ver=5.7.2" id="login-script-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1" id="jquery-ui-datepicker-js"></script> <script type="text/javascript" id="jquery-ui-datepicker-js-after">jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_4b769cafd6b65a845a9f7f52ba3c6d7a.js?ver=5.7.2" id="datepicker-lang-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/tabs.min.js?ver=1.12.1" id="jquery-ui-tabs-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/menu.min.js?ver=1.12.1" id="jquery-ui-menu-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/dist/dom-ready.min.js?ver=eb19f7980f0268577acb5c2da5457de3" id="wp-dom-ready-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1" id="wp-hooks-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67" id="wp-i18n-js"></script> <script type="text/javascript" id="wp-i18n-js-after">wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );</script> <script type="text/javascript" id="wp-a11y-js-translations">( function( domain, translations ) {
        var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData( localeData, domain );
    } )( "default", { "locale_data": { "messages": { "": {} } } } );</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/dist/a11y.min.js?ver=5e00de7a43b31bbb9eaf685f089a3903" id="wp-a11y-js"></script> <script type="text/javascript" id="jquery-ui-autocomplete-js-extra">var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.12.1" id="jquery-ui-autocomplete-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/mouse.min.js?ver=1.12.1" id="jquery-ui-mouse-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/jquery/ui/slider.min.js?ver=1.12.1" id="jquery-ui-slider-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/eventlist/assets/libs/jquery-timepicker/jquery.timepicker.min.js?ver=5.7.2" id="jquery-timepicker-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3" id="select2-js"></script> <script type="text/javascript" id="el_frontend-js-extra">var ajax_object = {"ajax_url":"https:\/\/ovatheme.com\/meup\/wp-admin\/admin-ajax.php"};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/eventlist/assets/js/frontend/script.min.js?ver=5.7.2" id="el_frontend-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_bde3ef153ef9af42e6d47799763a7640.js?ver=5.7.2" id="script-eventlist-elementor-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/themes/meup/assets/libs/bootstrap/js/bootstrap.bundle.min.js" id="bootstrap-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_f8f19ecc1b41a55f504fd1010e328e15.js" id="meup-script-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_85c4beefac54b2cedfb6d98d753bc926.js" id="prettyphoto-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-includes/js/wp-embed.min.js?ver=5.7.2" id="wp-embed-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/cache/autoptimize/js/autoptimize_single_0965b41abff22e79d7548d3890ead528.js?ver=5.7.2" id="script-elementor-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.3" id="elementor-webpack-runtime-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.3" id="elementor-frontend-modules-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6" id="swiper-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.3" id="share-link-js"></script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1" id="elementor-dialog-js"></script> <script type="text/javascript" id="elementor-frontend-js-before">var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.3","is_static":false,"experimentalFeatures":[],"urls":{"assets":"https:\/\/ovatheme.com\/meup\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","active_breakpoints":["viewport_mobile","viewport_tablet"],"lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1583,"title":"Search%20Page%20%E2%80%93%20MeUp%20%E2%80%93%20Listing%20Marketplace%20Events%20WordPress%20Theme","excerpt":"","featuredImage":false}};</script> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.2.3" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span> <script type="text/javascript" src="https://ovatheme.com/meup/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.2.3" id="preloaded-modules-js"></script> <script type="text/javascript">(function (undefined) {var _targetWindow ="prefer-popup";
        window.NSLPopup = function (url, title, w, h) {
            var userAgent = navigator.userAgent,
                mobile = function () {
                    return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                        /\b(iP[ao]d)/.test(userAgent) ||
                        /Android/i.test(userAgent) ||
                        /Mobile/i.test(userAgent);
                },
                screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
                screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
                outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
                outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
                targetWidth = mobile() ? null : w,
                targetHeight = mobile() ? null : h,
                V = screenX < 0 ? window.screen.width + screenX : screenX,
                left = parseInt(V + (outerWidth - targetWidth) / 2, 10),
                right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
                features = [];
            if (targetWidth !== null) {
                features.push('width=' + targetWidth);
            }
            if (targetHeight !== null) {
                features.push('height=' + targetHeight);
            }
            features.push('left=' + left);
            features.push('top=' + right);
            features.push('scrollbars=1');

            var newWindow = window.open(url, title, features.join(','));

            if (window.focus) {
                newWindow.focus();
            }

            return newWindow;
        };

        var isWebView = null;

        function checkWebView() {
            if (isWebView === null) {
                function _detectOS(ua) {
                    if (/Android/.test(ua)) {
                        return "Android";
                    } else if (/iPhone|iPad|iPod/.test(ua)) {
                        return "iOS";
                    } else if (/Windows/.test(ua)) {
                        return "Windows";
                    } else if (/Mac OS X/.test(ua)) {
                        return "Mac";
                    } else if (/CrOS/.test(ua)) {
                        return "Chrome OS";
                    } else if (/Firefox/.test(ua)) {
                        return "Firefox OS";
                    }
                    return "";
                }

                function _detectBrowser(ua) {
                    var android = /Android/.test(ua);

                    if (/CriOS/.test(ua)) {
                        return "Chrome for iOS";
                    } else if (/Edge/.test(ua)) {
                        return "Edge";
                    } else if (android && /Silk\//.test(ua)) {
                        return "Silk";
                    } else if (/Chrome/.test(ua)) {
                        return "Chrome";
                    } else if (/Firefox/.test(ua)) {
                        return "Firefox";
                    } else if (android) {
                        return "AOSP";
                    } else if (/MSIE|Trident/.test(ua)) {
                        return "IE";
                    } else if (/Safari\//.test(ua)) {
                        return "Safari";
                    } else if (/AppleWebKit/.test(ua)) {
                        return "WebKit";
                    }
                    return "";
                }

                function _detectBrowserVersion(ua, browser) {
                    if (browser === "Chrome for iOS") {
                        return _getVersion(ua, "CriOS/");
                    } else if (browser === "Edge") {
                        return _getVersion(ua, "Edge/");
                    } else if (browser === "Chrome") {
                        return _getVersion(ua, "Chrome/");
                    } else if (browser === "Firefox") {
                        return _getVersion(ua, "Firefox/");
                    } else if (browser === "Silk") {
                        return _getVersion(ua, "Silk/");
                    } else if (browser === "AOSP") {
                        return _getVersion(ua, "Version/");
                    } else if (browser === "IE") {
                        return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") :
                            /MSIE/.test(ua) ? _getVersion(ua, "MSIE ")
                                :
                                _getVersion(ua, "rv:");
                    } else if (browser === "Safari") {
                        return _getVersion(ua, "Version/");
                    } else if (browser === "WebKit") {
                        return _getVersion(ua, "WebKit/");
                    }
                    return "0.0.0";
                }

                function _getVersion(ua, token) {
                    try {
                        return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
                    } catch (o_O) {
                    }
                    return "0.0.0";
                }

                function _normalizeSemverString(version) {
                    var ary = version.split(/[\._]/);
                    return (parseInt(ary[0], 10) || 0) + "." +
                        (parseInt(ary[1], 10) || 0) + "." +
                        (parseInt(ary[2], 10) || 0);
                }

                function _isWebView(ua, os, browser, version, options) {
                    switch (os + browser) {
                        case "iOSSafari":
                            return false;
                        case "iOSWebKit":
                            return _isWebView_iOS(options);
                        case "AndroidAOSP":
                            return false;
                        case "AndroidChrome":
                            return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
                    }
                    return false;
                }

                function _isWebView_iOS(options) {
                    var document = (window["document"] || {});

                    if ("WEB_VIEW" in options) {
                        return options["WEB_VIEW"];
                    }
                    return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
                }

                function _isWebView_Android(options) {
                    if ("WEB_VIEW" in options) {
                        return options["WEB_VIEW"];
                    }
                    return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
                }

                var options = {};
                var nav = window.navigator || {};
                var ua = nav.userAgent || "";
                var os = _detectOS(ua);
                var browser = _detectBrowser(ua);
                var browserVersion = _detectBrowserVersion(ua, browser);

                isWebView = _isWebView(ua, os, browser, browserVersion, options);
            }

            return isWebView;
        }

        function isAllowedWebViewForUserAgent() {
            var nav = window.navigator || {};
            var ua = nav.userAgent || "";
            if (/Instagram/.test(ua)) {
                /*Instagram WebView*/
                return true;
            } else if (/FBAV/.test(ua) || /FBAN/.test(ua)) {
                /*Facebook WebView*/
                return true;
            }

            return false;
        }

        window._nsl.push(function ($) {

            window.nslRedirect = function (url) {
                $('<div style="position:fixed;z-index:1000000;left:0;top:0;width:100%;height:100%;"></div>').appendTo('body');
                window.location = url;
            };

            var targetWindow = _targetWindow || 'prefer-popup',
                lastPopup = false;

            $(document.body).on('click', 'a[data-plugin="nsl"][data-action="connect"],a[data-plugin="nsl"][data-action="link"]', function (e) {
                if (lastPopup && !lastPopup.closed) {
                    e.preventDefault();
                    lastPopup.focus();
                } else {

                    var $target = $(this),
                        href = $target.attr('href'),
                        success = false;
                    if (href.indexOf('?') !== -1) {
                        href += '&';
                    } else {
                        href += '?';
                    }
                    var redirectTo = $target.data('redirect');
                    if (redirectTo === 'current') {
                        href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                    } else if (redirectTo && redirectTo !== '') {
                        href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                    }

                    if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                        targetWindow = 'prefer-same-window';
                    }

                    if (targetWindow === 'prefer-popup') {

                        lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', $target.data('popupwidth'), $target.data('popupheight'));
                        if (lastPopup) {
                            success = true;
                            e.preventDefault();
                        }
                    } else if (targetWindow === 'prefer-new-tab') {
                        var newTab = window.open(href + 'display=popup', '_blank');
                        if (newTab) {
                            if (window.focus) {
                                newTab.focus();
                            }
                            success = true;
                            e.preventDefault();
                        }
                    }

                    if (!success) {
                        window.location = href;
                        e.preventDefault();
                    }
                }
            });

            var googleLoginButton = $('a[data-plugin="nsl"][data-provider="google"]');
            if (googleLoginButton.length && checkWebView() && !isAllowedWebViewForUserAgent()) {
                googleLoginButton.remove();
            }
        });})();</script> </body>



<?php

 if(isset($_POST["ricerca"])){
     if(isset($_POST["nome"])){
         $nome=$_POST["nome"];
         setcookie("nome", $nome); }

     if(isset($_POST["categoria"])){
         $categoria=$_POST["categoria"];
         setcookie("categoria", $categoria);
     }

     if(isset($_POST["stato"])){
         $stato=$_POST["stato"];
         setcookie("stato", $stato);
     }


     if(isset($_POST["citta"])){
         $citta=$_POST["citta"];
         setcookie("citta", $citta);
     }

     if(isset($_POST["dataI"])){
         $dataI=$_POST["dataI"];
         setcookie("dataI", $dataI);
     }

     if(isset($_POST["dataF"])){
         $dataF=$_POST["dataF"];

         setcookie("dataF", $dataF);
     }

    echo" <script> alert( document.cookie )</script>";
     header("Location: ./Category.php");

      }  

     ?>

</html>