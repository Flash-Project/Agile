<!DOCTYPE html>

<html lang="en-US">
<?php
include("./functions/users.php");
include("./functions/connection.php");
$connection=connection();
ob_start();
if((isset($_GET["ide"]))&&(isset($_GET["day"]))){
    $idevento=$_GET['ide'];
    $giorno = $_GET['day'];
    $ok=1;
}
else
    $ok=0;
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link media="all" href="./styles/SignIn/autoptimize_224ad2d8e14cfcb250673944079506cd.css" rel="stylesheet">
    <link media="only screen and (max-width: 768px)"
          href="./styles/SignIn/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
    <title>Sign In – MeUp</title>
    <meta name="robots" content="max-image-preview:large">
    <script src="./styles/SignIn/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
    <link rel="stylesheet" id="ova-google-fonts-css" href="./styles/SignIn/css" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="./styles/SignIn/css(1)" type="text/css" media="all">
    <script type="text/javascript" src="./styles/SignIn/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="./styles/SignIn/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="./styles/SignIn/v4-shims.min.js" id="font-awesome-4-shim-js"></script>
</head>
<body class="page-template page-template-elementor_header_footer page page-id-332 theme-meup woocommerce-js elementor-default elementor-template-full-width elementor-kit-5045 elementor-page elementor-page-332 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
      data-elementor-device-mode="desktop">
<div class="ova-wrapp">
    <div class="ovaheader">
        <style id="elementor-post-202">.elementor-202 .elementor-element.elementor-element-efe09f9:not(.elementor-motion-effects-element-type-background), .elementor-202 .elementor-element.elementor-element-efe09f9 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #ffffff;
        }

        .elementor-202 .elementor-element.elementor-element-efe09f9 {
            box-shadow: 0px 0px 7px 1px rgba(71, 71, 71, 0.4);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 15px 0px 15px;
        }

        .elementor-202 .elementor-element.elementor-element-efe09f9 > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-202 .elementor-element.elementor-element-78535e2.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-202 .elementor-element.elementor-element-78535e2.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-202 .elementor-element.elementor-element-78535e2 > .elementor-element-populated {
            padding: 0px 0px 0px 10px;
        }

        .elementor-202 .elementor-element.elementor-element-719abbc .ova_logo img.desk-logo {
            width: 109px;
            height: 40px;
        }

        .elementor-202 .elementor-element.elementor-element-719abbc .ova_logo img.mobile-logo {
            width: 109px;
            height: 40px;
        }

        .elementor-202 .elementor-element.elementor-element-719abbc .ova_logo img.logo-fixed {
            width: 109px;
            height: 40px;
        }

        .elementor-bc-flex-widget .elementor-202 .elementor-element.elementor-element-ab905b4.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-202 .elementor-element.elementor-element-ab905b4.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-202 .elementor-element.elementor-element-ab905b4.elementor-column > .elementor-column-wrap > .elementor-widget-wrap {
            justify-content: flex-end;
        }

        .elementor-202 .elementor-element.elementor-element-ab905b4 > .elementor-element-populated {
            padding: 0px 10px 0px 0px;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu {
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li > a {
            padding: 25px 0px 25px 0px;
            color: #22213f;
            font-size: 14px;
            text-transform: capitalize;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li > a:hover {
            color: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li.active > a {
            color: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav .dropdown-menu {
            min-width: 11rem;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li a {
            padding: 10px 15px 10px 15px;
            font-size: 14px;
            text-transform: capitalize;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li > a:hover {
            color: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li.active > a {
            color: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li {
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: rgba(204, 204, 204, 0.28);
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li:last-child {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #ffffff;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .dropdown button.dropdown-toggle {
            margin: 6px 0px 0px 0px;
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav li a {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: rgba(255, 255, 255, 0.06);
        }

        .elementor-202 .elementor-element.elementor-element-a079a4f {
            width: auto;
            max-width: auto;
            align-self: center;
        }

        .elementor-202 .elementor-element.elementor-element-638886d .ova-menu-acount .login a,
        .elementor-202 .elementor-element.elementor-element-638886d .ova-menu-acount .register a,
        .elementor-202 .elementor-element.elementor-element-638886d .ova-menu-acount .my-account a {
            color: #22213f;
        }

        .elementor-202 .elementor-element.elementor-element-638886d .ova-menu-acount .login a:hover,
        .elementor-202 .elementor-element.elementor-element-638886d .ova-menu-acount .register a:hover,
        .elementor-202 .elementor-element.elementor-element-638886d .ova-menu-acount .my-account a:hover {
            color: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-638886d > .elementor-widget-container {
            margin: 0px 0px 0px 40px;
        }

        .elementor-202 .elementor-element.elementor-element-638886d {
            width: auto;
            max-width: auto;
            align-self: center;
        }

        .elementor-202 .elementor-element.elementor-element-31f6cea a.elementor-button, .elementor-202 .elementor-element.elementor-element-31f6cea .elementor-button {
            font-size: 14px;
            font-weight: 500;
            fill: #ffffff;
            color: #ffffff;
            background-color: #e86c60;
            border-radius: 5px 5px 5px 5px;
            padding: 10px 25px 10px 30px;
        }

        .elementor-202 .elementor-element.elementor-element-31f6cea a.elementor-button:hover, .elementor-202 .elementor-element.elementor-element-31f6cea .elementor-button:hover, .elementor-202 .elementor-element.elementor-element-31f6cea a.elementor-button:focus, .elementor-202 .elementor-element.elementor-element-31f6cea .elementor-button:focus {
            color: #e86c60;
            background-color: #ffffff;
        }

        .elementor-202 .elementor-element.elementor-element-31f6cea a.elementor-button:hover svg, .elementor-202 .elementor-element.elementor-element-31f6cea .elementor-button:hover svg, .elementor-202 .elementor-element.elementor-element-31f6cea a.elementor-button:focus svg, .elementor-202 .elementor-element.elementor-element-31f6cea .elementor-button:focus svg {
            fill: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-31f6cea .elementor-button {
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #e86c60;
        }

        .elementor-202 .elementor-element.elementor-element-31f6cea > .elementor-widget-container {
            margin: 0px 0px 0px 30px;
        }

        .elementor-202 .elementor-element.elementor-element-31f6cea {
            width: auto;
            max-width: auto;
            align-self: center;
        }

        .elementor-202 .elementor-element.elementor-element-3dea19e {
            margin-top: 0px;
            margin-bottom: 65px;
        }

        .elementor-202 .elementor-element.elementor-element-1bbdec0 > .elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .cover_color {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .header_title {
            color: #ffffff;
            padding: 90px 0px 17px 0px;
            font-family: "Asap", Sans-serif;
            font-size: 36px;
            font-weight: 700;
            line-height: 1.2em;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb li {
            color: #ffffff;
            font-family: "Asap", Sans-serif;
            font-size: 20px;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb li a {
            color: #ffffff;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb a {
            color: #ffffff;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb .separator {
            color: #ffffff;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs {
            padding: 0px 0px 96px 0px;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 {
            text-align: center;
        }

        .elementor-202 .elementor-element.elementor-element-bc8aeb3 > .elementor-widget-container {
            background-image: url("https://ovatheme.com/meup/wp-content/uploads/2019/06/bg_top_heading.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (min-width: 768px) {
            .elementor-202 .elementor-element.elementor-element-78535e2 {
                width: 20.86%;
            }

            .elementor-202 .elementor-element.elementor-element-ab905b4 {
                width: 79.14%;
            }
        }

        @media (max-width: 1024px) and (min-width: 768px) {
            .elementor-202 .elementor-element.elementor-element-78535e2 {
                width: 30%;
            }

            .elementor-202 .elementor-element.elementor-element-ab905b4 {
                width: 70%;
            }
        }

        @media (max-width: 1024px) {
            .elementor-202 .elementor-element.elementor-element-efe09f9 {
                padding: 15px 10px 15px 10px;
            }

            .elementor-202 .elementor-element.elementor-element-78535e2 > .elementor-element-populated {
                padding: 0px 0px 0px 10px;
            }

            .elementor-202 .elementor-element.elementor-element-ab905b4 > .elementor-element-populated {
                padding: 0px 10px 0px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu > li > a {
                padding: 10px 0px 10px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu {
                padding: 0px 0px 0px 15px;
            }

            .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav ul.menu .dropdown-menu li a {
                padding: 10px 0px 10px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-a079a4f .ova_nav li a {
                border-width: 0px 0px 1px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-a079a4f > .elementor-widget-container {
                margin: 0px 30px 0px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-638886d > .elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }
        }

        @media (max-width: 767px) {
            .elementor-202 .elementor-element.elementor-element-78535e2 {
                width: 40%;
            }

            .elementor-202 .elementor-element.elementor-element-ab905b4 {
                width: 60%;
            }

            .elementor-202 .elementor-element.elementor-element-a079a4f > .elementor-widget-container {
                margin: 0px 15px 0px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-638886d > .elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .header_title {
                padding: 30px 10px 0px 10px;
                font-size: 30px;
            }

            .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs ul.breadcrumb li {
                font-size: 16px;
            }

            .elementor-202 .elementor-element.elementor-element-bc8aeb3 .ova_header_el .ovatheme_breadcrumbs {
                padding: 0px 10px 30px 10px;
            }
        }</style>
        <div data-elementor-type="wp-post" data-elementor-id="202" class="elementor elementor-202"
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
                                                    <img src="./styles/SignIn/Asset-8.svg"
                                                         alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                         class="desk-logo d-none d-xl-block"> <img
                                                        src="./styles/SignIn/Asset-8.svg"
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="mobile-logo d-block d-xl-none"> <img
                                                        src="./styles/SignIn/Asset-8.svg"
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
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-91 ">
                                                                        <a title="Home"
                                                                           href="./Home.php">Home</a>
                                                                        <!-- <button type="button" class="dropdown-toggle"><i
                                                                                 class=""></i></button>
                                                                         <ul role="menu" class=" dropdown-menu"></ul> -->
                                                                    </li>
                                                                    <li id="menu-item-3316"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3316 dropdown">
                                                                        <a title="Listing"
                                                                           href="./Category.php">Category<i
                                                                                    class=""></i></a></li>

                                                                    <li id="menu-item-251"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-251 dropdown">
                                                                        <a title="Page"
                                                                           href="./ContactUs.php">Contact<i
                                                                                class=""></i></a>
                                                                    </li>
                                                                    <li id="menu-item-1463"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1463 dropdown">
                                                                        <a title="Blog"
                                                                           href="./AboutUs.php">About Us<i
                                                                                class=""></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="ova_closeCanvas ova_closeNav"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-638886d elementor-widget__width-auto elementor-widget elementor-widget-ova_menu_account"
                                                 data-id="638886d" data-element_type="widget"
                                                 data-widget_type="ova_menu_account.default">
                                                <div class="elementor-widget-container" style=" border: 1px solid black">
                                                    <div class="ova-menu-acount"><span class="login"> <a
                                                            href="./login.php">&emsp; Login </a> </span> <span
                                                            class="slash">|</span> <span class="register"> <a
                                                            href="./Register.php"> Register&emsp; </a> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-31f6cea button-create-event elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-el_button_create_event"
                                                 data-id="31f6cea" data-element_type="widget"
                                                 data-widget_type="el_button_create_event.default">
                                                <div class="elementor-widget-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="show_mask_header mask_header_shrink" style="position: relative; height: 0;"></div>
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
                                                         style="background: url(  )">
                                                        <div class="cover_color"></div>
                                                        <div class="ova_header_el "><h1
                                                                class="second_font header_title"> Sign In</h1>
                                                            <div class="ovatheme_breadcrumbs ovatheme_breadcrumbs_el">
                                                                <div id="breadcrumbs">
                                                                    <ul class="breadcrumb">
                                                                        <li>
                                                                            <a href="https://ovatheme.com/meup/">Home</a>
                                                                        </li>
                                                                        <li class="li_separator">&emsp;|&emsp;</li>
                                                                        <li>Sign In</li>
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
    <div data-elementor-type="wp-post" data-elementor-id="332" class="elementor elementor-332"
         data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e297020 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e297020" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-200ba185"
                                 data-id="200ba185" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-c490005 elementor-widget elementor-widget-shortcode"
                                             data-id="c490005" data-element_type="widget"
                                             data-widget_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="ova-login-form-container"><h3 class="title">Sign In</h3>
                                                        <div class="login-form-container">
                                                            <form name="loginform" id="loginform"
                                                             action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><p class="login-username"><label
                                                                    for="user_login">Email</label> <input type="text"
                                                                                                             name="email"
                                                                                                             id="user_login"
                                                                                                             class="input"
                                                                                                             value=""
                                                                                                             size="20">
                                                            </p>
                                                                <p class="login-password"><label for="user_pass">Password</label>
                                                                    <input type="password" name="password" id="user_pass"
                                                                           class="input" value="" size="20"></p>

                                                                <p class="login-submit"><input type="submit"
                                                                                               name="invia"
                                                                                               id="wp-submit"
                                                                                               class="button button-primary"
                                                                                               value="Log In">
                                                                </p>

                                                            </form>
                                                        </div>
                                                        <a href="./Register.php"
                                                           class="forgot-password"> Register </a>
                                                        <?php
                                                        if(isset($_GET["err"]))
                                                  echo"     <br><br> <p style='color:red'>Credenziali errate!</p>";
                                                       ?>
                                                       <!-- <span class="slash">|</span> -->
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
                                                            href="https://ovatheme.com/meup/member-login/#"> <img
                                                            src="./styles/SignIn/Asset-9.svg"
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
                                                <div class="elementor-widget-container"></div>
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
                                                                href="./AboutUs.php"> <span
                                                                class="elementor-icon-list-text">About Us</span> </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item"><a
                                                                href="./Category.php"> <span
                                                                class="elementor-icon-list-text">Events</span>
                                                        </a></li>
                                                        <li class="elementor-icon-list-item"><a
                                                                href="./ContactUs.php"> <span
                                                                class="elementor-icon-list-text">Contact Us</span>
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
                                                                href="https://ovatheme.com/meup/member-login/#">San Francisco City Hall, San Francisco, CA</a></span>
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
                                                                href="mailto:#">meupcontact@domain.com</a></span></div>
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
                                                            src="./styles/SignIn/apple-store-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
                                                            title="apple-store" alt="apple-store"></div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-059c2f8 elementor-widget elementor-widget-image"
                                                 data-id="059c2f8" data-element_type="widget"
                                                 data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"><img
                                                            src="./styles/SignIn/google_play-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
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
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="a11y-speak-assertive" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>
<div id="a11y-speak-polite" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>
<a id="scrollUp" href="https://ovatheme.com/meup/member-login/#top"
   title="&lt;i class=&quot;fas fa-angle-up&quot;&gt;&lt;/i&gt;"
   style="display: none; position: fixed; z-index: 998;"><i class="fas fa-angle-up"></i></a></body>
<?php

if(isset($_POST['invia'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = login($connection,$email,$password);





        if($res){

        $id = $_SESSION['id'];
        $sql = mysqli_query($connection, "UPDATE utente SET status = 'Online Now' WHERE id='$id'") or die();

        if((isset($_GET["ide"]))){
            header("Location: ./checkout.php?ide=$idevento&day=$giorno");

        }

        elseif($res['ruolo']!="Cliente"){
            header("location: ./backend/index.php");
        }
        else{
            header("location: ./Home.php");
    }
    }
        else
            header("location: ./login.php?err=1.php");








}


?>

</html>