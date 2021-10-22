<!DOCTYPE html>
<!-- saved from url=(0026)https://ovatheme.com/meup/ -->
<html lang="en-US">
<head>
   <?php
   include("./functions/connection.php");
   include("./functions/event_pull.php");
   include("./functions/users.php");

   $connect=connection();
           controllo_utente();
           ob_start();
           $_SESSION["cookie"]=0;
?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link media="all" href="./styles/Home/autoptimize_40bd26e9bbf6e304af96ecacbcae7fb4.css" rel="stylesheet">
    <link media="only screen and (max-width: 768px)"
          href="./styles/Home/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
    <title>MeUp – Home</title>
    <style id="elementor-frontend-inline-css" type="text/css">@font-face {
        font-family: eicons;
        src: url(https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
        src: url(https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"), url(https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"), url(https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"), url(https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"), url(https://ovatheme.com/meup/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
        font-weight: 400;
        font-style: normal
    }

    .elementor-kit-5045 {
        --e-global-color-primary: #6EC1E4;
        --e-global-color-secondary: #54595F;
        --e-global-color-text: #7A7A7A;
        --e-global-color-accent: #61CE70;
        --e-global-color-179073b6: #4054B2;
        --e-global-color-3081ca33: #23A455;
        --e-global-color-74d9f750: #000;
        --e-global-color-17023710: #FFF;
        --e-global-typography-primary-font-family: "Roboto";
        --e-global-typography-primary-font-weight: 600;
        --e-global-typography-secondary-font-family: "Roboto Slab";
        --e-global-typography-secondary-font-weight: 400;
        --e-global-typography-text-font-family: "Roboto";
        --e-global-typography-text-font-weight: 400;
        --e-global-typography-accent-font-family: "Roboto";
        --e-global-typography-accent-font-weight: 500;
    }

    .elementor-section.elementor-section-boxed > .elementor-container {
        max-width: 1140px;
    }

    .elementor-widget:not(:last-child) {
        margin-bottom: 20px;
    }

    {
    }
    h1.entry-title {
        display: var(--page-title-display);
    }

    @media (max-width: 1024px) {
        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 1024px;
        }
    }

    @media (max-width: 767px) {
        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 767px;
        }
    }

    .elementor-85 .elementor-element.elementor-element-5dba6ce:not(.elementor-motion-effects-element-type-background), .elementor-85 .elementor-element.elementor-element-5dba6ce > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-image: url("https://ovatheme.com/meup/wp-content/uploads/2019/10/bg_home1.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .elementor-85 .elementor-element.elementor-element-5dba6ce > .elementor-background-overlay {
        background-color: rgba(0, 0, 0, 0.42);
        opacity: 0.73;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-5dba6ce {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: -73px;
        margin-bottom: 0px;
        padding: 242px 0px 210px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-b4a2780 {
        text-align: center;
    }

    .elementor-85 .elementor-element.elementor-element-b4a2780 .elementor-heading-title {
        color: #f6f6f6;
        font-size: 66px;
        font-weight: 900;
    }

    .elementor-85 .elementor-element.elementor-element-60dd863 {
        text-align: center;
    }

    .elementor-85 .elementor-element.elementor-element-60dd863 .elementor-heading-title {
        color: #f6f6f6;
        font-family: "Poppins", Sans-serif;
        font-size: 20px;
        font-weight: 400;
    }

    .elementor-85 .elementor-element.elementor-element-60dd863 > .elementor-widget-container {
        margin: 4px 0px 0px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-f1cd515 > .elementor-widget-container {
        margin: 58px 30px 20px 30px;
    }

    .elementor-85 .elementor-element.elementor-element-f84ec89 .el_name_event_slider {
        width: 350px;
    }

    .elementor-85 .elementor-element.elementor-element-f84ec89 .el_name_event_slider .wrap_item {
        padding: 10px 0px 10px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-f84ec89 > .elementor-widget-container {
        margin: 40px 0px 0px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-62b44c3 {
        padding: 90px 0px 90px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-0ead756:not(.elementor-motion-effects-element-type-background), .elementor-85 .elementor-element.elementor-element-0ead756 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: #f4f4fc;
    }

    .elementor-85 .elementor-element.elementor-element-0ead756 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 80px 0px 87px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-0ead756 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-1a42440 > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 0px;
    }

    .elementor-85 .elementor-element.elementor-element-3f4f898 .ova-heading {
        text-align: left;
    }

    .elementor-85 .elementor-element.elementor-element-3f4f898 > .elementor-widget-container {
        margin: 0px 0px 44px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-cf85c38 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 81px 0px 86px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-cf85c38 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-bdbf42f > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 0px;
    }

    .elementor-85 .elementor-element.elementor-element-5d12c29 .ova-heading {
        text-align: left;
    }

    .elementor-85 .elementor-element.elementor-element-5d12c29 > .elementor-widget-container {
        margin: 0px 0px 44px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-ae3d0ca > .elementor-element-populated {
        padding: 0px 20px 0px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-a0d17f3 .ova-feature {
        text-align: center;
    }

    .elementor-85 .elementor-element.elementor-element-a0d17f3 .ova-feature .ova-media .wp-media i:before {
        color: #f05537;
    }

    .elementor-85 .elementor-element.elementor-element-7481c5d > .elementor-element-populated {
        padding: 0px 10px 0px 10px;
    }

    .elementor-85 .elementor-element.elementor-element-77e9d6a .ova-feature {
        text-align: center;
    }

    .elementor-85 .elementor-element.elementor-element-77e9d6a .ova-feature .ova-media .wp-media i:before {
        color: #f05537;
    }

    .elementor-85 .elementor-element.elementor-element-6159677 > .elementor-element-populated {
        padding: 0px 0px 0px 20px;
    }

    .elementor-85 .elementor-element.elementor-element-f48b018 .ova-feature {
        text-align: center;
    }

    .elementor-85 .elementor-element.elementor-element-f48b018 .ova-feature .ova-media .wp-media i:before {
        color: #f05537;
    }

    .elementor-85 .elementor-element.elementor-element-d080087:not(.elementor-motion-effects-element-type-background), .elementor-85 .elementor-element.elementor-element-d080087 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: #f4f4fc;
    }

    .elementor-85 .elementor-element.elementor-element-d080087 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 80px 0px 0px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-d080087 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-f6b4c7f > .elementor-widget-container {
        margin: 0px 0px 44px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-aa9efd6:not(.elementor-motion-effects-element-type-background), .elementor-85 .elementor-element.elementor-element-aa9efd6 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: #f4f4fc;
    }

    .elementor-85 .elementor-element.elementor-element-aa9efd6 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 0px 35px 84px 35px;
    }

    .elementor-85 .elementor-element.elementor-element-aa9efd6 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-e66baa1 > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 0px;
    }

    .elementor-85 .elementor-element.elementor-element-9b59c93 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 81px 0px 84px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-9b59c93 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-55693fb > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 0px;
    }

    .elementor-85 .elementor-element.elementor-element-8e2c888 .ova-heading {
        text-align: left;
    }

    .elementor-85 .elementor-element.elementor-element-8e2c888 > .elementor-widget-container {
        margin: 0px 0px 44px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-79a33d2:not(.elementor-motion-effects-element-type-background), .elementor-85 .elementor-element.elementor-element-79a33d2 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-color: #f4f4fc;
    }

    .elementor-85 .elementor-element.elementor-element-79a33d2 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 60px 0px 60px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-79a33d2 > .elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-85 .elementor-element.elementor-element-065fc9b > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
        margin-bottom: 0px;
    }

    .elementor-85 .elementor-element.elementor-element-027fd72 .elementor-heading-title {
        color: #666666;
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        line-height: 1.2em;
    }

    .elementor-85 .elementor-element.elementor-element-027fd72 > .elementor-widget-container {
        margin: 0px 0px 8px 0px;
    }

    .elementor-85 .elementor-element.elementor-element-8ec8f5e .elementor-heading-title {
        color: #e86c60;
        font-size: 28px;
        line-height: 1.2em;
    }

    .elementor-85 .elementor-element.elementor-element-5fed554 > .elementor-widget-container {
        margin: 6px 0px 0px 0px;
    }

    @media (min-width: 768px) {
        .elementor-85 .elementor-element.elementor-element-065fc9b {
            width: 41.933%;
        }

        .elementor-85 .elementor-element.elementor-element-eb76285 {
            width: 58.067%;
        }
    }

    @media (max-width: 1024px) {
        .elementor-85 .elementor-element.elementor-element-5dba6ce {
            padding: 120px 0px 80px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-f1cd515 > .elementor-widget-container {
            margin: 20px 10px 10px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-f84ec89 > .elementor-widget-container {
            margin: 13px 0px 0px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-62b44c3 {
            padding: 60px 10px 60px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-0ead756 {
            padding: 60px 10px 60px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-3f4f898 > .elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-cf85c38 {
            padding: 60px 10px 60px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-5d12c29 > .elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-d080087 {
            padding: 60px 10px 0px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-f6b4c7f > .elementor-widget-container {
            margin: 0px 0px 20px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-aa9efd6 {
            padding: 0px 10px 60px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-9b59c93 {
            padding: 60px 10px 60px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-8e2c888 > .elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-79a33d2 {
            padding: 64px 10px 98px 10px;
        }
    }

    @media (max-width: 767px) {
        .elementor-85 .elementor-element.elementor-element-5dba6ce {
            padding: 120px 0px 80px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-b4a2780 .elementor-heading-title {
            font-size: 35px;
        }

        .elementor-85 .elementor-element.elementor-element-60dd863 .elementor-heading-title {
            font-size: 18px;
        }

        .elementor-85 .elementor-element.elementor-element-f84ec89 .el_name_event_slider {
            width: 340px;
        }

        .elementor-85 .elementor-element.elementor-element-f84ec89 > .elementor-widget-container {
            margin: 13px -10px 0px -10px;
        }

        .elementor-85 .elementor-element.elementor-element-62b44c3 {
            padding: 30px 10px 30px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-0ead756 {
            padding: 30px 10px 30px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-3f4f898 .ova-heading .title {
            font-size: 30px;
        }

        .elementor-85 .elementor-element.elementor-element-3f4f898 > .elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-cf85c38 {
            padding: 30px 10px 30px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-5d12c29 .ova-heading .title {
            font-size: 30px;
        }

        .elementor-85 .elementor-element.elementor-element-5d12c29 > .elementor-widget-container {
            margin: 0px 0px 30px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-ae3d0ca > .elementor-element-populated {
            padding: 0px 0px 50px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-7481c5d > .elementor-element-populated {
            padding: 0px 0px 50px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-6159677 > .elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-d080087 {
            padding: 30px 10px 0px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-f6b4c7f .ova-heading .title {
            font-size: 30px;
        }

        .elementor-85 .elementor-element.elementor-element-f6b4c7f > .elementor-widget-container {
            margin: 0px 0px 20px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-aa9efd6 {
            padding: 0px 10px 30px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-9b59c93 {
            padding: 30px 10px 30px 10px;
        }

        .elementor-85 .elementor-element.elementor-element-8e2c888 .ova-heading .title {
            font-size: 30px;
        }

        .elementor-85 .elementor-element.elementor-element-8e2c888 > .elementor-widget-container {
            margin: 0px 0px 35px 0px;
        }

        .elementor-85 .elementor-element.elementor-element-79a33d2 {
            padding: 30px 10px 80px 10px;
        }
    }

    @media (max-width: 1024px) and (min-width: 768px) {
        .elementor-85 .elementor-element.elementor-element-bd71af5 {
            width: 33.33%;
        }

        .elementor-85 .elementor-element.elementor-element-5788a97 {
            width: 33.33%;
        }

        .elementor-85 .elementor-element.elementor-element-ef35120 {
            width: 33.33%;
        }

        .elementor-85 .elementor-element.elementor-element-9b09264 {
            width: 33.33%;
        }

        .elementor-85 .elementor-element.elementor-element-a14857a {
            width: 33.33%;
        }

        .elementor-85 .elementor-element.elementor-element-daef87c {
            width: 33.33%;
        }
    }</style>
    <link rel="stylesheet" id="ova-google-fonts-css" href="./styles/Home/css" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="./styles/Home/css(1)" type="text/css" media="all">
    <script type="text/javascript" src="./styles/Home/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="./styles/Home/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="./styles/Home/v4-shims.min.js" id="font-awesome-4-shim-js"></script>

</head>
<body class="home page-template page-template-elementor_header_footer page page-id-85 theme-meup woocommerce-js elementor-default elementor-template-full-width elementor-kit-5045 elementor-page elementor-page-85 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
      data-elementor-device-mode="desktop">

<div class="ova-wrapp">
    <div class="ovaheader">
        <div data-elementor-type="wp-post" data-elementor-id="3251" class="elementor elementor-3251"
             data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-bcd1017 elementor-section-full_width ovamenu_shrink ovamenu_shrink_mobile text_dark elementor-section-height-default elementor-section-height-default"
                            data-id="bcd1017" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4eeb73d"
                                     data-id="4eeb73d" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-64ef812 elementor-widget elementor-widget-ova_logo"
                                                 data-id="64ef812" data-element_type="widget"
                                                 data-widget_type="ova_logo.default">
                                                <div class="elementor-widget-container"><a class="ova_logo"
                                                                                           href="./Home.php">
                                                    <img src="./styles/Home/Asset-9.svg"
                                                         alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                         class="desk-logo d-none d-xl-block"> <img
                                                        src="./styles/Home/Asset-9.svg"
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="mobile-logo d-block d-xl-none"> <img
                                                        src="./styles/Home/Asset-8.svg"
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="logo-fixed"> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-586548e"
                                     data-id="586548e" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-fd63fd8 elementor-view-primary-menu elementor-widget__width-auto elementor-widget elementor-widget-ova_menu"
                                                 data-id="fd63fd8" data-element_type="widget"
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
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-85 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-91 dropdown active">
                                                                        <a title="Home"
                                                                           href="./Home.php">Home</a>

                                                                    </li>
                                                                    <li id="menu-item-3316"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3316 dropdown">
                                                                        <a title="Listing"
                                                                           href="./Category.php">Category</a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
                                                                    </li>
                                                                    <li id="menu-item-251"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-251 dropdown">
                                                                        <a title="Page"
                                                                           href="./ContactUs.php">Contact</a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
                                                                    </li>
                                                                    <li id="menu-item-1463"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1463 dropdown">
                                                                        <a title="Blog"
                                                                           href="./AboutUs.php">About Us</a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
                                                                    </li>
                                                                    <?php
                                                                    if(isset($_SESSION['id'])){
                                                                    echo"<li id='menu-item-1463'
                                                                        class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1463 dropdown'>
                                                                        <a title='Blog'
                                                                           href='./chat/users.php'>Chat</a>
                                                                        <button type='button' class='dropdown-toggle'><i
                                                                                    class='arrow_carrot-down'></i></button>
                                                                    </li>";}
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="ova_closeCanvas ova_closeNav"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-79646bb elementor-widget__width-auto elementor-widget elementor-widget-ova_menu_account"
                                                 data-id="79646bb" data-element_type="widget"
                                                 data-widget_type="ova_menu_account.default">

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
                                            <div class="elementor-element elementor-element-c54af68 button-create-event elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-el_button_create_event"
                                                 data-id="c54af68" data-element_type="widget"
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
                </div>
            </div>
        </div>
    </div>



    <div data-elementor-type="wp-page" data-elementor-id="85" class="elementor elementor-85"
         data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-5dba6ce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="5dba6ce" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3bac364"
                                 data-id="3bac364" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-b4a2780 elementor-widget elementor-widget-heading"
                                             data-id="b4a2780" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2
                                                    class="elementor-heading-title elementor-size-default">Connecting
                                                the world</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-60dd863 elementor-widget elementor-widget-heading"
                                             data-id="60dd863" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2
                                                    class="elementor-heading-title elementor-size-default">Easy to
                                                search, you just enter the keyword</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-f1cd515 elementor-widget elementor-widget-el_search_form"
                                             data-id="f1cd515" data-element_type="widget"
                                             data-widget_type="el_search_form.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor_search_form">
                                                    <div class="el_search_filters wrap_form_search  type1  four_column ">
                                                        <form enctype="multipart/form-data" method="POST"

                                                              action="<?php echo $_SERVER['PHP_SELF'] ?>"
                                                              autocomplete="nope" autocorrect="off"
                                                              autocapitalize="none">
                                                            <div class="name_event field_search"><i
                                                                    class=""></i> <input
                                                                    type="text" class="form-control"
                                                                    placeholder="Enter name ..." name="nome"
                                                                    value="" autocomplete="nope" autocorrect="off"
                                                                    autocapitalize="none"></div>
                                                            <div class="categories field_search"><i
                                                                    class=""></i> <select
                                                                    name="categoria" id="cat"
                                                                    class="postform select2-hidden-accessible"
                                                                    tabindex="-1" aria-hidden="true">
                                                                <option value="" selected="selected">Select Category
                                                                </option>

                                                             <?php       $result = select_categoria($connect);
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                    $categoria = $row["nome"];
                                                          echo"      <option class='level-0' value='$categoria'>$categoria
                                                                </option>"; } ?>



                                                            </select></span><span
                                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                            <div class="el_all_time field_search"><i
                                                                    class=""></i> <select
                                                                    name="stato" tabindex="-1"
                                                                    class="select2-hidden-accessible"
                                                                    aria-hidden="true">
                                                                    <option value="" selected="selected">Select Stato
                                                                    </option>
                                                                    <?php       $result = select_stato($connect);
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                        $stato = $row["stato"];
                                                                        echo"      <option class='level-0' value='$stato'>$stato
                                                                </option>"; } ?>
                                                            </select>
                                                            </div>
                                                            <div class="el_submit_search"><input type="submit"
                                                                                                 value="Search"
                                                                                                 name="ricerca"
                                                                                                 class="second_font">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-62b44c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="62b44c3" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">

                            <?php

                            $result=select_categoria($connect);
                            while($row = mysqli_fetch_array($result)){
                                $categoria=$row["nome"];

                                $tot=select_totale_eventi_categorie($connect, $categoria);


                         echo" <div class='elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-bd71af5'
                                 data-id='bd71af5' data-element_type='column'>
                                <div class='elementor-column-wrap elementor-element-populated'>
                                    <div class='elementor-widget-wrap'>
                                        <div class='elementor-element elementor-element-1788a55 elementor-widget elementor-widget-el_category_event'
                                             data-id='1788a55' data-element_type='widget'
                                             data-widget_type='el_category_event.default'>
                                            <div class='elementor-widget-containe'><a
                                                    href='./Category.php?cat=$categoria'
                                                    class='el-event-category'>
                                                <div class='el-media'><img src='./backend/upload/$categoria.png'
                                                                           alt='$categoria'></div>
                                                <div class='content-cat'><h3 class='cate-name second_font'>$categoria</h3>
                                                    <p class='count-event'>$tot<span>Events</span></p></div>
                                            </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>";}
                             ?>
                            
                            

                    </div>
                </section>
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-0ead756 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="0ead756" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a42440"
                                 data-id="1a42440" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-3f4f898 elementor-widget elementor-widget-ova_heading"
                                             data-id="3f4f898" data-element_type="widget"
                                             data-widget_type="ova_heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-heading"><h3 class="title second_font">Upcoming
                                                    Events</h3>
                                                    <p class="sub-title ">You can choose to display featured</p> <span
                                                            class="line "></span></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-26a38fd elementor-widget elementor-widget-ova_event_slider"
                                             data-id="26a38fd" data-element_type="widget"
                                             data-settings="{&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;}"
                                             data-widget_type="ova_event_slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-event-slider">
                                                    <ul class="event_archive type6 hide_dots event-slider owl-carousel owl-loaded owl-drag"
                                                        data-options="{&quot;slideBy&quot;:&quot;1&quot;,&quot;margin&quot;:45,&quot;autoplayHoverPause&quot;:true,&quot;loop&quot;:true,&quot;autoplay&quot;:false,&quot;autoplayTimeout&quot;:3000,&quot;smartSpeed&quot;:500,&quot;nav&quot;:true,&quot;dots&quot;:true}">
                                                        <div class="owl-stage-outer">
                                                            <div class="owl-stage"
                                                                 style="transform: translate3d(-1215px, 0px, 0px); transition: all 0s ease 0s; width: 4860px;">
                                                                <div class="owl-item cloned"
                                                                     style="width: 360px; margin-right: 45px;">
                                                                    <li class="event_entry ">
                                                                        <div class="event_item type6">
                                                                            <div class="event_thumbnail">
                                                                                <div class="thumbnail_figure"><a
                                                                                        href="https://ovatheme.com/meup/event/pack-fashion-management/">
                                                                                    <img src="./styles/Home/event-bg-19-710x480.jpg"
                                                                                         alt="The Pack Fashion Management in 2020">
                                                                                </a></div>
                                                                            </div>
                                                                            <div class="event_detail"><h2
                                                                                    class="loop_title"><a
                                                                                    class="second_font"
                                                                                    href="https://ovatheme.com/meup/event/pack-fashion-management/">
                                                                                The Pack Fashion Management in 2020 </a>
                                                                            </h2>
                                                                                <div class="event-location-time">
                                                                                    <div class="event-time"><span
                                                                                            class="event-icon"><i
                                                                                            class=""></i></span>
                                                                                        <span class="time"> <span
                                                                                                class="start-time">Wed, June 23, 2021</span><span>, 8:00 am</span>&nbsp; </span>
                                                                                    </div>
                                                                                    <div class="location-rating">
                                                                                        <div class="event_location">
                                                                                            <span class="event-icon"><i
                                                                                                    class="icon_pin_alt"></i></span>
                                                                                            <a href="https://ovatheme.com/meup/event_loc/nevada/">Nevada</a><span
                                                                                                class="separator">,</span>
                                                                                            <a href="https://ovatheme.com/meup/event_loc/panaca/">Panaca</a><span
                                                                                                class="separator"></span>
                                                                                        </div>
                                                                                        <span class="event_ratting"> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-footer"><span
                                                                                        class="event-button"> <a
                                                                                        class="second_font"
                                                                                        href="https://ovatheme.com/meup/event/pack-fashion-management/">Get Ticket</a> </span><span
                                                                                        class="event_loop_price second_font">$45.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item cloned"
                                                                     style="width: 360px; margin-right: 45px;">
                                                                    <li class="event_entry ">
                                                                        <div class="event_item type6">
                                                                            <div class="event_thumbnail">
                                                                                <div class="thumbnail_figure"><a
                                                                                        href="https://ovatheme.com/meup/event/client-conference-2019/">
                                                                                    <img src="./styles/Home/ev6-710x480.jpg"
                                                                                         alt="The envato’s event  conference 2020">
                                                                                </a></div>
                                                                            </div>
                                                                            <div class="event_detail"><h2
                                                                                    class="loop_title"><a
                                                                                    class="second_font"
                                                                                    href="https://ovatheme.com/meup/event/client-conference-2019/">
                                                                                The envato’s event conference 2020 </a>
                                                                            </h2>
                                                                                <div class="event-location-time">
                                                                                    <div class="event-time"><span
                                                                                            class="event-icon"><i
                                                                                            class=""></i></span>
                                                                                        <span class="time"> <span
                                                                                                class="start-time">Wed, June 23, 2021</span><span>, 8:00 am</span>&nbsp; </span>
                                                                                    </div>
                                                                                    <div class="location-rating">
                                                                                        <div class="event_location">
                                                                                            <span class="event-icon"><i
                                                                                                    class="icon_pin_alt"></i></span>
                                                                                            <a href="https://ovatheme.com/meup/event_loc/colorado/">Colorado</a><span
                                                                                                class="separator">,</span>
                                                                                            <a href="https://ovatheme.com/meup/event_loc/lakewood/">Lakewood</a><span
                                                                                                class="separator"></span>
                                                                                        </div>
                                                                                        <span class="event_ratting"> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-footer"><span
                                                                                        class="event-button"> <a
                                                                                        class="second_font"
                                                                                        href="https://ovatheme.com/meup/event/client-conference-2019/">Get Ticket</a> </span><span
                                                                                        class="event_loop_price second_font">Free</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                                <div class="owl-item cloned"
                                                                     style="width: 360px; margin-right: 45px;">
                                                                    <li class="event_entry ">
                                                                        <div class="event_item type6">
                                                                            <div class="event_thumbnail">
                                                                                <div class="thumbnail_figure"><a
                                                                                        href="https://ovatheme.com/meup/event/protecting-your-work-online/">
                                                                                    <img src="./styles/Home/event-bg-14-710x480.jpg"
                                                                                         alt="How to protecting Your Work Online">
                                                                                </a></div>
                                                                            </div>
                                                                            <div class="event_detail"><h2
                                                                                    class="loop_title"><a
                                                                                    class="second_font"
                                                                                    href="https://ovatheme.com/meup/event/protecting-your-work-online/">
                                                                                How to protecting Your Work Online </a>
                                                                            </h2>
                                                                                <div class="event-location-time">
                                                                                    <div class="event-time"><span
                                                                                            class="event-icon"><i
                                                                                            class=""></i></span>
                                                                                        <span class="time"> <span
                                                                                                class="start-time">Thu, June 24, 2021</span><span>, 8:00 am</span>&nbsp; </span>
                                                                                    </div>
                                                                                    <div class="location-rating">
                                                                                        <div class="event_location">
                                                                                            <span class="event-icon"><i
                                                                                                    class="icon_pin_alt"></i></span>
                                                                                            <a href="https://ovatheme.com/meup/event_loc/nevada/">Nevada</a><span
                                                                                                class="separator">,</span>
                                                                                            <a href="https://ovatheme.com/meup/event_loc/pioche/">Pioche</a><span
                                                                                                class="separator"></span>
                                                                                        </div>
                                                                                        <span class="event_ratting"> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-footer"><span
                                                                                        class="event-button"> <a
                                                                                        class="second_font"
                                                                                        href="https://ovatheme.com/meup/event/protecting-your-work-online/">Get Ticket</a> </span><span
                                                                                        class="event_loop_price second_font">$15.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
















                                                            <?php      $result=select_evento_home1($connect);

                                                                // while($row = mysqli_fetch_array($result))

                                                            $valori=mysqli_fetch_array($result);
                                                            $ide=$valori['id'];
                                                            $nome=$valori['evento'];
                                                            $luogo=$valori['luogo'];
                                                            $via=$valori['via'];
                                                            $data_inizio=$valori['data_inizio'];
                                                            $data_fine=$valori['data_fine'];
                                                            $foto=$valori['immagine'];
                                                            $costo=$valori['costo'];
                                                            $sconto=$valori['sconto'];
                                                            if($sconto){
                                                                $scontosottr=($costo*$sconto)/100;
                                                                $costo_scontato=$costo-$scontosottr;}


                                                            ?>

                                                                <div class="owl-item active"
                                                                     style="width: 360px; margin-right: 45px;">
                                                                    <li class="event_entry ">
                                                                        <div class="event_item type6">
                                                                            <div class="event_thumbnail">
                                                                                <div class="thumbnail_figure"><a
                                                                                        href=<?php echo "./details.php?id=$ide"; ?>>
                                                                                    <img src='<?php echo "./backend/upload/$foto"; ?>'
                                                                                         alt='<?php echo" $nome"; ?>'>
                                                                                </a></div>
                                                                            </div>
                                                                            <div class="event_detail"><h2
                                                                                    class="loop_title"><a
                                                                                    class="second_font"
                                                                                    href=<?php echo "./details.php?id=$ide"; ?>>
                                                                                        <?php echo" $nome"; ?> </a></h2>
                                                                                <div class="event-location-time">
                                                                                    <div class="event-time"><span
                                                                                            class="event-icon"><i
                                                                                            class=""></i></span>
                                                                                        <span class="time"> <span
                                                                                                class="start-time"><?php echo" Dal $data_inizio al $data_fine"; ?></span></span>
                                                                                    </div>
                                                                                    <div class="location-rating">
                                                                                        <div class="event_location">
                                                                                            <span class="event-icon"><i
                                                                                                    class="icon_pin_alt"></i></span>
                                                                                            <?php echo" $luogo"; ?><span
                                                                                                class="separator">,</span>
                                                                                           <?php echo" $via"; ?><span
                                                                                                class="separator"></span>
                                                                                        </div>
                                                                                        <span class="event_ratting"> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-footer"><span
                                                                                        class="event-button"> <a
                                                                                        class="second_font"
                                                                                        href=<?php echo "./details.php?id=$ide"; ?>>Get Ticket</a> </span><span
                                                                                        class="event_loop_price second_font"><?php if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo";?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>

<?php
                                                                $result=select_evento_home2($connect);

                                                                // while($row = mysqli_fetch_array($result))

                                                                $valori=mysqli_fetch_array($result);
                                                                $ide=$valori['id'];
                                                                $nome=$valori['evento'];
                                                                $luogo=$valori['luogo'];
                                                                $via=$valori['via'];
                                                                $data_inizio=$valori['data_inizio'];
                                                                $data_fine=$valori['data_fine'];
                                                                $foto=$valori['immagine'];
                                                                $costo=$valori['costo'];
                                                                $sconto=$valori['sconto'];

                                                                if($sconto){
                                                                   $scontosottr=($costo*$sconto)/100;
                                                                  $costo_scontato=$costo-$scontosottr;}


                                                                ?>

                                                                <div class="owl-item active"
                                                                     style="width: 360px; margin-right: 45px;">
                                                                    <li class="event_entry ">
                                                                        <div class="event_item type6">
                                                                            <div class="event_thumbnail">
                                                                                <div class="thumbnail_figure"><a
                                                                                            href=<?php echo "./details.php?id=$ide"; ?>>
                                                                                        <img src='<?php echo "./backend/upload/$foto"; ?>'
                                                                                             alt='<?php echo" $nome"; ?>'>
                                                                                    </a></div>
                                                                            </div>
                                                                            <div class="event_detail"><h2
                                                                                        class="loop_title"><a
                                                                                            class="second_font"
                                                                                            href=<?php echo "./details.php?id=$ide"; ?>>
                                                                                        <?php echo" $nome"; ?> </a></h2>
                                                                                <div class="event-location-time">
                                                                                    <div class="event-time"><span
                                                                                                class="event-icon"><i
                                                                                                    class=""></i></span>
                                                                                        <span class="time"> <span
                                                                                                    class="start-time"><?php echo"Dal $data_inizio al $data_fine"; ?></span></span>
                                                                                    </div>
                                                                                    <div class="location-rating">
                                                                                        <div class="event_location">
                                                                                            <span class="event-icon"><i
                                                                                                        class="icon_pin_alt"></i></span>
                                                                                            <?php echo" $luogo"; ?><span
                                                                                                    class="separator">,</span>
                                                                                            <?php echo" $via"; ?><span
                                                                                                    class="separator"></span>
                                                                                        </div>
                                                                                        <span class="event_ratting"> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-footer"><span
                                                                                            class="event-button"> <a
                                                                                                class="second_font"
                                                                                                href=<?php echo "./details.php?id=$ide"; ?>>Get Ticket</a> </span><span
                                                                                            class="event_loop_price second_font"><?php if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo";?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>


                                                                <?php
                                                                $result=select_evento_home3($connect);

                                                                // while($row = mysqli_fetch_array($result))

                                                                $valori=mysqli_fetch_array($result);
                                                                $ide=$valori['id'];
                                                                $nome=$valori['evento'];
                                                                $luogo=$valori['luogo'];
                                                                $via=$valori['via'];
                                                                $data_inizio=$valori['data_inizio'];
                                                                $data_fine=$valori['data_fine'];
                                                                $foto=$valori['immagine'];
                                                                $costo=$valori['costo'];
                                                                $sconto=$valori['sconto'];

                                                                if($sconto){
                                                                    $scontosottr=($costo*$sconto)/100;
                                                                    $costo_scontato=$costo-$scontosottr;}


                                                                ?>

                                                                <div class="owl-item active"
                                                                     style="width: 360px; margin-right: 45px;">
                                                                    <li class="event_entry ">
                                                                        <div class="event_item type6">
                                                                            <div class="event_thumbnail">
                                                                                <div class="thumbnail_figure"><a
                                                                                            href=<?php echo "./details.php?id=$ide"; ?>>
                                                                                        <img src='<?php echo "./backend/upload/$foto"; ?>'
                                                                                             alt='<?php echo" $nome"; ?>'>
                                                                                    </a></div>
                                                                            </div>
                                                                            <div class="event_detail"><h2
                                                                                        class="loop_title"><a
                                                                                            class="second_font"
                                                                                            href=<?php echo "./details.php?id=$ide"; ?>>
                                                                                        <?php echo" $nome"; ?> </a></h2>
                                                                                <div class="event-location-time">
                                                                                    <div class="event-time"><span
                                                                                                class="event-icon"><i
                                                                                                    class=""></i></span>
                                                                                        <span class="time"> <span
                                                                                                    class="start-time"><?php echo"Dal $data_inizio al $data_fine"; ?></span></span>
                                                                                    </div>
                                                                                    <div class="location-rating">
                                                                                        <div class="event_location">
                                                                                            <span class="event-icon"><i
                                                                                                        class="icon_pin_alt"></i></span>
                                                                                            <?php echo" $luogo"; ?><span
                                                                                                    class="separator">,</span>
                                                                                            <?php echo" $via"; ?><span
                                                                                                    class="separator"></span>
                                                                                        </div>
                                                                                        <span class="event_ratting"> </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="meta-footer"><span
                                                                                            class="event-button"> <a
                                                                                                class="second_font"
                                                                                                href=<?php echo "./details.php?id=$ide"; ?>>Get Ticket</a> </span><span
                                                                                            class="event_loop_price second_font"><?php if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo";?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>





                                                                <div class="owl-nav">
                                                            <button type="button" role="presentation" class="owl-prev">
                                                                <i class=""></i></button>
                                                            <button type="button" role="presentation" class="owl-next">
                                                                <i class=""></i></button>
                                                        </div>
                                                        <div class="owl-dots">
                                                            <button role="button" class="owl-dot active"><span></span>
                                                            </button>
                                                            <button role="button" class="owl-dot"><span></span></button>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-cf85c38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="cf85c38" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bdbf42f"
                                 data-id="bdbf42f" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-5d12c29 elementor-widget elementor-widget-ova_heading"
                                             data-id="5d12c29" data-element_type="widget"
                                             data-widget_type="ova_heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-heading"><h3 class="title second_font">How It Work</h3>
                                                    <p class="sub-title ">You can choose to display featured</p> <span
                                                            class="line "></span></div>
                                            </div>
                                        </div>
                                        <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-35eb568 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="35eb568" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ae3d0ca"
                                                         data-id="ae3d0ca" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-a0d17f3 elementor-widget elementor-widget-ova_feature"
                                                                     data-id="a0d17f3" data-element_type="widget"
                                                                     data-widget_type="ova_feature.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ova-feature">
                                                                            <div class="ova-media">
                                                                                <div class="wp-media"><img
                                                                                        src="./styles/Home/feature_1.png"
                                                                                        alt=""></div>
                                                                            </div>
                                                                            <div class="info"><h3 class="title">Choose
                                                                                What To Do</h3>
                                                                                <p class="sub-title">Easily find your
                                                                                    event via search system with
                                                                                    multiple params.</p></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7481c5d"
                                                         data-id="7481c5d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-77e9d6a elementor-widget elementor-widget-ova_feature"
                                                                     data-id="77e9d6a" data-element_type="widget"
                                                                     data-widget_type="ova_feature.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ova-feature">
                                                                            <div class="ova-media">
                                                                                <div class="wp-media"><img
                                                                                        src="./styles/Home/feature_2.png"
                                                                                        alt=""></div>
                                                                            </div>
                                                                            <div class="info"><h3 class="title">Booking
                                                                                event that you like</h3>
                                                                                <p class="sub-title">Choose Ticket add
                                                                                    to cart. Support payment via
                                                                                    Woocommerce system.</p></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6159677"
                                                         data-id="6159677" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-f48b018 elementor-widget elementor-widget-ova_feature"
                                                                     data-id="f48b018" data-element_type="widget"
                                                                     data-widget_type="ova_feature.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ova-feature">
                                                                            <div class="ova-media">
                                                                                <div class="wp-media"><img
                                                                                        src="./styles/Home/feature_3.png"
                                                                                        alt=""></div>
                                                                            </div>
                                                                            <div class="info"><h3 class="title">Get the
                                                                                ticket to attend</h3>
                                                                                <p class="sub-title">After booking
                                                                                    successfully, You will get ticket in
                                                                                    email or download in your
                                                                                    account</p></div>
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
                    </div>
                </section>


            </div>
        </div>
    </div>
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
</div>
<script type="text/javascript" src="./styles/Home/wp-polyfill.min.js" id="wp-polyfill-js"></script>
<script type="text/javascript" src="./styles/Home/autoptimize_single_daca149c46601376ce5db68f3658323c.js"
        id="contact-form-7-js"></script>
<script type="text/javascript" src="./styles/Home/image-map-pro.min.js" id="image-map-pro-dist-js-js"></script>
<script type="text/javascript" src="./styles/Home/jquery.blockUI.min.js" id="jquery-blockui-js"></script>

<script type="text/javascript" src="./styles/Home/add-to-cart.min.js" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="./styles/Home/js.cookie.min.js" id="js-cookie-js"></script>

<script type="text/javascript" src="./styles/Home/woocommerce.min.js" id="woocommerce-js"></script>

<script type="text/javascript" src="./styles/Home/cart-fragments.min.js" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="./styles/Home/autoptimize_single_d12035cd792428533b661744dbb9ddc9.js"
        id="login-script-js"></script>
<script type="text/javascript" src="./styles/Home/core.min.js" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="./styles/Home/datepicker.min.js" id="jquery-ui-datepicker-js"></script>

<script type="text/javascript" src="./styles/Home/autoptimize_single_4b769cafd6b65a845a9f7f52ba3c6d7a.js"
        id="datepicker-lang-js"></script>
<script type="text/javascript" src="./styles/Home/tabs.min.js" id="jquery-ui-tabs-js"></script>
<script type="text/javascript" src="./styles/Home/menu.min.js" id="jquery-ui-menu-js"></script>
<script type="text/javascript" src="./styles/Home/dom-ready.min.js" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="./styles/Home/hooks.min.js" id="wp-hooks-js"></script>
<script type="text/javascript" src="./styles/Home/i18n.min.js" id="wp-i18n-js"></script>

<script type="text/javascript" src="./styles/Home/a11y.min.js" id="wp-a11y-js"></script>

<script type="text/javascript" src="./styles/Home/autocomplete.min.js" id="jquery-ui-autocomplete-js"></script>
<script type="text/javascript" src="./styles/Home/mouse.min.js" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="./styles/Home/slider.min.js" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="./styles/Home/jquery.timepicker.min.js" id="jquery-timepicker-js"></script>
<script type="text/javascript" src="./styles/Home/select2.full.min.js" id="select2-js"></script>
<script type="text/javascript"
        id="el_frontend-js-extra">var ajax_object = {"ajax_url": "https:\/\/ovatheme.com\/meup\/wp-admin\/admin-ajax.php"};</script>
<script type="text/javascript" src="./styles/Home/script.min.js" id="el_frontend-js"></script>
<script type="text/javascript" src="./styles/Home/autoptimize_single_bde3ef153ef9af42e6d47799763a7640.js"
        id="script-eventlist-elementor-js"></script>
<script type="text/javascript" src="./styles/Home/bootstrap.bundle.min.js" id="bootstrap-js"></script>
<script type="text/javascript" src="./styles/Home/autoptimize_single_f8f19ecc1b41a55f504fd1010e328e15.js"
        id="meup-script-js"></script>
<script type="text/javascript" src="./styles/Home/autoptimize_single_85c4beefac54b2cedfb6d98d753bc926.js"
        id="prettyphoto-js"></script>
<script type="text/javascript" src="./styles/Home/wp-embed.min.js" id="wp-embed-js"></script>
<script type="text/javascript" src="./styles/Home/autoptimize_single_0965b41abff22e79d7548d3890ead528.js"
        id="script-elementor-js"></script>
<script type="text/javascript" src="./styles/Home/owl.carousel.min.js" id="owl-carousel-js"></script>
<script type="text/javascript" defer=""
        src="./styles/Home/autoptimize_single_b739d72c47c93702aef206eb58857289.js"
        id="mc4wp-forms-api-js"></script>
<script type="text/javascript" src="./styles/Home/webpack.runtime.min.js"
        id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./styles/Home/frontend-modules.min.js"
        id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="./styles/Home/waypoints.min.js" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="./styles/Home/swiper.min.js" id="swiper-js"></script>
<script type="text/javascript" src="./styles/Home/share-link.min.js" id="share-link-js"></script>
<script type="text/javascript" src="./styles/Home/dialog.min.js" id="elementor-dialog-js"></script>

<script type="text/javascript" src="./styles/Home/frontend.min.js" id="elementor-frontend-js"></script>
<span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./styles/Home/preloaded-modules.min.js" id="preloaded-modules-js"></script>

<!-- super cache --><p id="a11y-speak-intro-text" class="a11y-speak-intro-text"
                       style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
                       hidden="hidden">Notifications</p>
<div id="a11y-speak-assertive" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>
<div id="a11y-speak-polite" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>
<a id="scrollUp" href="https://ovatheme.com/meup/#top" title="&lt;i class=&quot;fas fa-angle-up&quot;&gt;&lt;/i&gt;"
   style="display: none; position: fixed; z-index: 998;"><i class="fas fa-angle-up"></i></a></body>



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


header("Location: ./Category.php");
}

?>




</html>