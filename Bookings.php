<!DOCTYPE html>
<!-- saved from url=(0059)https://ovatheme.com/meup/member-account/?vendor=mybookings -->
<html lang="en-US">
<head>
    <?php
    include("./functions/connection.php");
    $connect=connection();
    include("./functions/users.php");
    include("./functions/event_pull.php");
    controllo_utente();
    if(!isset($_SESSION["nome"])){
        header("location: ../login.php");}
    $idU=$_SESSION["id"];
    ?>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link href="https://gmpg.org/xfn/11" rel="profile">
    <link href="https://ovatheme.com/meup/xmlrpc.php" rel="pingback">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="./styles/UserAccountBookings/autoptimize_14800de29b58526341fd82eab9388722.css" media="all"
          rel="stylesheet">
    <link href="./styles/UserAccountBookings/autoptimize_541e2ced151704f4ff1844c6de47ec02.css"
          media="only screen and (max-width: 768px)" rel="stylesheet">
    <title>Member Account – MeUp – Listing Marketplace Events WordPress Theme</title>
    <meta content="max-image-preview:large" name="robots">
    <link href="https://ovatheme.com/" rel="dns-prefetch">
    <link href="https://maps.googleapis.com/" rel="dns-prefetch">
    <link href="https://fonts.googleapis.com/" rel="dns-prefetch">
    <link href="https://s.w.org/" rel="dns-prefetch">
    <link href="https://cdn.shortpixel.ai/" rel="preconnect">
    <link href="https://ovatheme.com/meup/feed/" rel="alternate" title="MeUp - Listing Marketplace Events WordPress Theme » Feed"
          type="application/rss+xml">
    <link href="https://ovatheme.com/meup/comments/feed/" rel="alternate"
          title="MeUp - Listing Marketplace Events WordPress Theme » Comments Feed"
          type="application/rss+xml">
    <meta content="Member Account" property="og:title">
    <meta content="article" property="og:type">
    <meta content="https://ovatheme.com/meup/member-account/" property="og:url">
    <meta content="MeUp - Listing Marketplace Events WordPress Theme" property="og:site_name">
    <script type="text/javascript">var map_range_radius = 50;
    var map_range_radius_min = 0;
    var map_range_radius_max = 100;</script>
    <script type="text/javascript">window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
        "svgExt": ".svg",
        "source": {"concatemoji": "https:\/\/ovatheme.com\/meup\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"}
    };
    !function (e, a, t) {
        var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode;
            p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }

        for (o = Array("flag", "emoji"), t.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
            if (!p || !p.fillText) return !1;
            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case"flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                case"emoji":
                    return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
            t.DOMReady = !0
        }, t.supports.everything || (n = function () {
            t.readyCallback()
        }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
            "complete" === a.readyState && t.readyCallback()
        })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
    }(window, document, window._wpemojiSettings);</script>
    <script defer="" src="./styles/UserAccountBookings/wp-emoji-release.min.js" type="text/javascript"></script>
    <link href="./styles/UserAccountBookings/dashicons.min.css" id="dashicons-css" media="all" rel="stylesheet"
          type="text/css">
    <link href="./styles/UserAccountBookings/css" id="ova-google-fonts-css" media="all" rel="stylesheet"
          type="text/css">
    <link href="./styles/UserAccountBookings/css(1)" id="google-fonts-1-css" media="all" rel="stylesheet"
          type="text/css">
    <script type="text/javascript">(function (a, d) {
        if (a._nsl === d) {
            a._nsl = [];
            var c = function () {
                if (a.jQuery === d) setTimeout(c, 33); else {
                    for (var b = 0; b < a._nsl.length; b++) a._nsl[b].call(a, a.jQuery);
                    a._nsl = {
                        push: function (b) {
                            b.call(a, a.jQuery)
                        }
                    }
                }
            };
            c()
        }
    })(window);</script>
    <script id="jquery-core-js" src="./styles/UserAccountBookings/jquery.min.js" type="text/javascript"></script>
    <script id="jquery-migrate-js" src="./styles/UserAccountBookings/jquery-migrate.min.js"
            type="text/javascript"></script>
    <script id="font-awesome-4-shim-js" src="./styles/UserAccountBookings/v4-shims.min.js"
            type="text/javascript"></script>
    <script id="utils-js-extra" type="text/javascript">var userSettings = {
        "url": "\/meup\/",
        "uid": "820",
        "time": "1625167837",
        "secure": "1"
    };</script>
    <script id="utils-js" src="./styles/UserAccountBookings/utils.min.js" type="text/javascript"></script>
    <script id="moxiejs-js" src="./styles/UserAccountBookings/moxie.min.js" type="text/javascript"></script>
    <script id="plupload-js" src="./styles/UserAccountBookings/plupload.min.js" type="text/javascript"></script>
    <!--[if lt IE 8]>
    <script type='text/javascript' src='https://ovatheme.com/meup/wp-includes/js/json2.min.js?ver=2015-05-03'
            id='json2-js'></script> <![endif]-->
    <link href="https://ovatheme.com/meup/wp-json/" rel="https://api.w.org/">
    <link href="https://ovatheme.com/meup/wp-json/wp/v2/pages/407" rel="alternate" type="application/json">
    <link href="https://ovatheme.com/meup/xmlrpc.php?rsd" rel="EditURI" title="RSD" type="application/rsd+xml">
    <link href="https://ovatheme.com/meup/wp-includes/wlwmanifest.xml" rel="wlwmanifest"
          type="application/wlwmanifest+xml">
    <meta content="WordPress 5.7.2" name="generator">
    <meta content="WooCommerce 5.3.0" name="generator">
    <link href="https://ovatheme.com/meup/member-account/" rel="canonical">
    <link href="https://ovatheme.com/meup/?p=407" rel="shortlink">
    <link href="https://ovatheme.com/meup/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fmeup%2Fmember-account%2F" rel="alternate"
          type="application/json+oembed">
    <link href="https://ovatheme.com/meup/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fmeup%2Fmember-account%2F&amp;format=xml" rel="alternate"
          type="text/xml+oembed">
    <noscript>
        <style>.woocommerce-product-gallery {
            opacity: 1 !important;
        }</style>
    </noscript>
    <link href="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_32,h_32/https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1-150x150.png"
          rel="icon"
          sizes="32x32">
    <link href="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_192,h_192/https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1.png"
          rel="icon"
          sizes="192x192">
    <link href="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_180,h_180/https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1.png"
          rel="apple-touch-icon">
    <meta content="https://ovatheme.com/meup/wp-content/uploads/2019/06/cropped-favicon1-1.png"
          name="msapplication-TileImage">
    <style id="iris-css">.iris-picker {
        display: block;
        position: relative
    }

    .iris-picker, .iris-picker * {
        -moz-box-sizing: content-box;
        -webkit-box-sizing: content-box;
        box-sizing: content-box
    }

    input + .iris-picker {
        margin-top: 4px
    }

    .iris-error {
        background-color: #ffafaf
    }

    .iris-border {
        border-radius: 3px;
        border: 1px solid #aaa;
        width: 200px;
        background-color: #fff
    }

    .iris-picker-inner {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0
    }

    .iris-border .iris-picker-inner {
        top: 10px;
        right: 10px;
        left: 10px;
        bottom: 10px
    }

    .iris-picker .iris-square-inner {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0
    }

    .iris-picker .iris-square, .iris-picker .iris-slider, .iris-picker .iris-square-inner, .iris-picker .iris-palette {
        border-radius: 3px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, .4);
        height: 100%;
        width: 12.5%;
        float: left;
        margin-right: 5%
    }

    .iris-only-strip .iris-slider {
        width: 100%
    }

    .iris-picker .iris-square {
        width: 76%;
        margin-right: 10%;
        position: relative
    }

    .iris-only-strip .iris-square {
        display: none
    }

    .iris-picker .iris-square-inner {
        width: auto;
        margin: 0
    }

    .iris-ie-9 .iris-square, .iris-ie-9 .iris-slider, .iris-ie-9 .iris-square-inner, .iris-ie-9 .iris-palette {
        box-shadow: none;
        border-radius: 0
    }

    .iris-ie-9 .iris-square, .iris-ie-9 .iris-slider, .iris-ie-9 .iris-palette {
        outline: 1px solid rgba(0, 0, 0, .1)
    }

    .iris-ie-lt9 .iris-square, .iris-ie-lt9 .iris-slider, .iris-ie-lt9 .iris-square-inner, .iris-ie-lt9 .iris-palette {
        outline: 1px solid #aaa
    }

    .iris-ie-lt9 .iris-square .ui-slider-handle {
        outline: 1px solid #aaa;
        background-color: #fff;
        -ms-filter: "alpha(Opacity=30)"
    }

    .iris-ie-lt9 .iris-square .iris-square-handle {
        background: 0 0;
        border: 3px solid #fff;
        -ms-filter: "alpha(Opacity=50)"
    }

    .iris-picker .iris-strip {
        margin-right: 0;
        position: relative
    }

    .iris-picker .iris-strip .ui-slider-handle {
        position: absolute;
        background: 0 0;
        margin: 0;
        right: -3px;
        left: -3px;
        border: 4px solid #aaa;
        border-width: 4px 3px;
        width: auto;
        height: 6px;
        border-radius: 4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        opacity: .9;
        z-index: 5;
        cursor: ns-resize
    }

    .iris-strip-horiz .iris-strip .ui-slider-handle {
        right: auto;
        left: auto;
        bottom: -3px;
        top: -3px;
        height: auto;
        width: 6px;
        cursor: ew-resize
    }

    .iris-strip .ui-slider-handle:before {
        content: " ";
        position: absolute;
        left: -2px;
        right: -2px;
        top: -3px;
        bottom: -3px;
        border: 2px solid #fff;
        border-radius: 3px
    }

    .iris-picker .iris-slider-offset {
        position: absolute;
        top: 11px;
        left: 0;
        right: 0;
        bottom: -3px;
        width: auto;
        height: auto;
        background: transparent;
        border: 0;
        border-radius: 0
    }

    .iris-strip-horiz .iris-slider-offset {
        top: 0;
        bottom: 0;
        right: 11px;
        left: -3px
    }

    .iris-picker .iris-square-handle {
        background: transparent;
        border: 5px solid #aaa;
        border-radius: 50%;
        border-color: rgba(128, 128, 128, .5);
        box-shadow: none;
        width: 12px;
        height: 12px;
        position: absolute;
        left: -10px;
        top: -10px;
        cursor: move;
        opacity: 1;
        z-index: 10
    }

    .iris-picker .ui-state-focus .iris-square-handle {
        opacity: .8
    }

    .iris-picker .iris-square-handle:hover {
        border-color: #999
    }

    .iris-picker .iris-square-value:focus .iris-square-handle {
        box-shadow: 0 0 2px rgba(0, 0, 0, .75);
        opacity: .8
    }

    .iris-picker .iris-square-handle:hover::after {
        border-color: #fff
    }

    .iris-picker .iris-square-handle::after {
        position: absolute;
        bottom: -4px;
        right: -4px;
        left: -4px;
        top: -4px;
        border: 3px solid #f9f9f9;
        border-color: rgba(255, 255, 255, .8);
        border-radius: 50%;
        content: " "
    }

    .iris-picker .iris-square-value {
        width: 8px;
        height: 8px;
        position: absolute
    }

    .iris-ie-lt9 .iris-square-value, .iris-mozilla .iris-square-value {
        width: 1px;
        height: 1px
    }

    .iris-palette-container {
        position: absolute;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 0
    }

    .iris-border .iris-palette-container {
        left: 10px;
        bottom: 10px
    }

    .iris-picker .iris-palette {
        margin: 0;
        cursor: pointer
    }

    .iris-square-handle, .ui-slider-handle {
        border: 0;
        outline: 0
    }</style>
    <script charset="UTF-8" src="./styles/UserAccountBookings/common.js" type="text/javascript"></script>
    <script charset="UTF-8" src="./styles/UserAccountBookings/util.js" type="text/javascript"></script>
</head>
<body class="page-template page-template-elementor_header_footer page page-id-407 logged-in theme-meup woocommerce-js elementor-default elementor-template-full-width elementor-kit-5045 elementor-page elementor-page-407 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
      data-elementor-device-mode="desktop">
<div class="ova-wrapp">
    <div class="ovaheader">
        <div class="elementor elementor-127" data-elementor-id="127" data-elementor-settings="[]"
             data-elementor-type="wp-post">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-e7b0919 elementor-section-full_width ovamenu_shrink ovamenu_shrink_mobile elementor-section-height-default elementor-section-height-default"
                            data-element_type="section" data-id="e7b0919"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c7b8610"
                                     data-element_type="column" data-id="c7b8610">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-0bb7e25 elementor-widget elementor-widget-ova_logo"
                                                 data-element_type="widget" data-id="0bb7e25"
                                                 data-widget_type="ova_logo.default">
                                                <div class="elementor-widget-container"><a class="ova_logo"
                                                                                           href="./Home.php">
                                                    <img alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                         class="desk-logo d-none d-xl-block"
                                                         src="./styles/UserAccountBookings/Asset-8.svg"> <img
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="mobile-logo d-block d-xl-none"
                                                        src="./styles/UserAccountBookings/Asset-8.svg"> <img
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="logo-fixed"
                                                        src="./styles/UserAccountBookings/Asset-8.svg"> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6ad53c8"
                                     data-element_type="column" data-id="6ad53c8">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-717d424 elementor-view-primary-menu elementor-widget__width-auto elementor-widget elementor-widget-ova_menu"
                                                 data-element_type="widget" data-id="717d424"
                                                 data-widget_type="ova_menu.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ova_menu_clasic">
                                                        <div class="ova_wrap_nav row NavBtn_right NavBtn_right_m">
                                                            <button class="ova_openNav" type="button"><i
                                                                    class="fas fa-bars"></i></button>
                                                            <div class="ova_nav canvas_left canvas_bg_gray"><a
                                                                    class="ova_closeNav" href="javascript:void(0)"><i
                                                                    class="fas fa-times"></i></a>
                                                                <ul class="menu sub_menu_dir_right"
                                                                    id="menu-primary-menu">
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-91 dropdown"
                                                                        id="menu-item-91">
                                                                        <a href="./Home.php"
                                                                           title="Home">Home<i
                                                                                class=""></i></a>
                                                                        <button class="dropdown-toggle" type="button"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3316 dropdown"
                                                                        id="menu-item-3316">
                                                                        <a href="./Category.php"
                                                                           title="Listing">Category<i
                                                                                class=""></i></a>
                                                                        <button class="dropdown-toggle" type="button"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-251 dropdown"
                                                                        id="menu-item-251">
                                                                        <a href="./ContactUs.php"
                                                                           title="Page">Contact<i
                                                                                class=""></i></a>
                                                                        <button class="dropdown-toggle" type="button"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1463 dropdown"
                                                                        id="menu-item-1463">
                                                                        <a href="./AboutUs.php"
                                                                           title="Blog">About Us<i
                                                                                class=""></i></a>
                                                                        <button class="dropdown-toggle" type="button"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <?php
                                                                    if(isset($_SESSION['nome'])){
                                                                        echo"<li id='menu-item-1463'
                                                                        class='menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-has-children menu-item-1463'>
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
                                            <div class="elementor-element elementor-element-0595743 elementor-widget__width-auto elementor-widget elementor-widget-ova_menu_account"
                                                 data-element_type="widget" data-id="0595743"
                                                 data-widget_type="ova_menu_account.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ova-menu-acount"><span class="my-account"> <a
                                                            href="UserAccount.php"> My account </a> </span>
                                                    </div>
                                                </div>
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
    <div class="elementor elementor-407" data-elementor-id="407" data-elementor-settings="[]"
         data-elementor-type="wp-post">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-13fb3fb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-element_type="section" data-id="13fb3fb">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c3b70d0"
                                 data-element_type="column" data-id="c3b70d0">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-03677ba elementor-widget elementor-widget-shortcode"
                                             data-element_type="widget" data-id="03677ba"
                                             data-widget_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="vendor_wrap">
                                                        <div class="vendor_sidebar">
                                                            <div class="vendor_user_profile">
                                                                <div class="wrap_image" style="border:1px solid gray; padding: 12% 6%; font-size: 30px; position: center;border-color: #e86c60"><?php echo '<b>' . strtoupper($_SESSION['nome'][0]) . "</b><b> " . strtoupper($_SESSION['cognome'][0]) . '</b>'; ?></div>
                                                                <div><p class="display_name">Customer Mr</p> <a
                                                                            class="edit_profile"
                                                                            href="./UserAccount.php"> Edit Profile </a></div>
                                                            </div>
                                                            <div class="el_vendor_mobile_menu"><a
                                                                    href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                                                            </div>
                                                            <ul class="dashboard_nav">
                                                                <li class="menu_vendor_mybookings active"><a
                                                                            href="./Bookings.php">
                                                                        <i class="icon_archive"></i>My Bookings </a></li>
                                                                <li class="menu_vendor_mywishlist"><a
                                                                            href="./Wishlist.php">
                                                                        <i class="icon_heart"></i>My WishList </a></li>
                                                                <li class="menu_vendor_myprofile "><a
                                                                            href="./UserAccount.php">
                                                                        <i class="icon_profile"></i>My Profile </a></li>
                                                                <li class="menu_vendor_logout"><a
                                                                            href="./logout.php">
                                                                        <i class="icon_lock-open"></i> Logout </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="contents">
															<h3 class="vendor_heading"> My Bookings</h3>
                                                            <div class="table-list-booking">
                                                                <div class="el-notify"><p class="success status"></p>
                                                                    <p class="error status"></p></div>
                                                                <table>
                                                                    <thead class="event_head">
                                                                    <tr>
                                                                        <td class="id">Codice evento</td>
                                                                        <td>Event</td>
                                                                        <td>Calendar Date</td>
                                                                        <td>Total</td>
                                                                        <td>Ticket Standard</td>
                                                                        <td>Ticket Vip</td>
                                                                        <td>Action</td>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody class="event_body">

                                                                    <?php
                                                                    $result=select_ordine_utente($connect, $idU);

                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                    $ide=$row["id_evento"];
                                                                        $ido=$row["id_ordine"];

                                                                        $codice=$row["codice_evento"];
                                                                    $costo=$row["costo"];

                                                                    $nome=$row["nome_evento"];
                                                                    $data=$row["data"];
                                                                    $biglietti=$row["biglietti"];
                                                                    $biglietti_vip=$row["biglietti_vip"];

                                                              echo"      <tr class='booking_8200'>
                                                                        <td class='id' data-colname='ID'>$codice</td>
                                                                        <td data-colname='Event'><a
                                                                                href='./Details.php?id=$ide'
                                                                                target='_blank'> $nome </a></td>
                                                                        <td data-colname='Calendar Date'>$data
                                                                        </td>
                                                                        <td data-colname='Total'>$$costo</td>
                                                                        <td data-colname='Ticket Type'> $biglietti<br></td>
                                                                       <td data-colname='Ticket Type'>$biglietti_vip<br></td>
                                                                            
                                                                       
                                                                        <td>
                                                                            <div class='wp-button-my-booking'>
                                                                                <div class='button-sendmail'>
                                                                                    <div class='submit-load-more sendmail'>
                                                                                        <div class='load-more'>
                                                                                            <div class='lds-spinner'>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                  <a href='./Details.php?id=$ide' <button class='button'
																							data-id-booking='8200'
																							
																							data-nonce='2d21a7ca7d'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							
																					</button></a>
                                                                                </div>
                                                                               <div class='wp-button-my-booking'>
                                                                                <div class='button-sendmail'>
                                                                                    <div class='submit-load-more sendmail'>
                                                                                        <div class='load-more'>
                                                                                            <div class='lds-spinner'>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                                <div></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><br>
                                                                                    <a href='./backend/ticket.php?id=$ido' target='_blank' <button 
                                                                                            data-id-booking='8200' class='button'
                                                                                            data-nonce='950116dcaf'>
                                                                                        Ticket</a>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr> ";}


                                                                    ?><!-- FINO QUA GLI EVENTI -->




                                                                    <!-- IMPAGINAZIONE
                                                                    <tr>
                                                                        <td colspan="8">
                                                                            <nav class="el-pagination">
                                                                                <ul class="page-numbers">
                                                                                    <li><span aria-current="page"
                                                                                              class="page-numbers current">1</span>
                                                                                    </li>
                                                                                    <li><a class="page-numbers"
                                                                                           href="https://ovatheme.com/meup/member-account/page/2/?vendor=mybookings">2</a>
                                                                                    </li>
                                                                                    <li><a class="next page-numbers"
                                                                                           href="https://ovatheme.com/meup/member-account/page/2/?vendor=mybookings">Next</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </nav>
                                                                        </td>
                                                                    </tr>

                                                                    IMPAGINAZIONE -->



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
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="ovafooter">
        <div class="elementor elementor-3560" data-elementor-id="3560" data-elementor-settings="[]"
             data-elementor-type="wp-post">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9d25f4c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-element_type="section" data-id="9d25f4c"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0abaa21"
                                     data-element_type="column" data-id="0abaa21">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-b069d24 elementor-widget elementor-widget-heading"
                                                 data-element_type="widget" data-id="b069d24"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><span
                                                        class="elementor-heading-title elementor-size-default">© 2019 <span
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
<script id="tmpl-media-frame" type="text/html">
    <div class="media-frame-title" id="media-frame-title"></div>
    <h2 class="media-frame-menu-heading">Actions</h2>
    <button type="button" class="button button-link media-frame-menu-toggle" aria-expanded="false">
        Menu <span class="dashicons dashicons-arrow-down" aria-hidden="true"></span>
    </button>
    <div class="media-frame-menu"></div>
    <div class="media-frame-tab-panel">
        <div class="media-frame-router"></div>
        <div class="media-frame-content"></div>
    </div>
    <h2 class="media-frame-actions-heading screen-reader-text">
        Selected media actions </h2>
    <div class="media-frame-toolbar"></div>
    <div class="media-frame-uploader"></div></script>
<script id="tmpl-media-modal" type="text/html">
    <div tabindex="0" class="media-modal wp-core-ui" role="dialog" aria-labelledby="media-frame-title">
        <# if ( data.hasCloseButton ) { #>
        <button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Close dialog</span></span>
        </button>
        <# } #>
        <div class="media-modal-content" role="document"></div>
    </div>
    <div class="media-modal-backdrop"></div></script>
<script id="tmpl-uploader-window" type="text/html">
    <div class="uploader-window-content">
        <div class="uploader-editor-title">Drop files to upload</div>
    </div></script>
<script id="tmpl-uploader-editor" type="text/html">
    <div class="uploader-editor-content">
        <div class="uploader-editor-title">Drop files to upload</div>
    </div></script>
<script id="tmpl-uploader-inline"
        type="text/html"><# var messageClass = data.message ? 'has-upload-message' : 'no-upload-message'; #>
<# if ( data.canClose ) { #>
<button class="close dashicons dashicons-no"><span class="screen-reader-text">Close uploader</span></button>
<# } #>
<div class="uploader-inline-content {{ messageClass }}">
    <# if ( data.message ) { #>
    <h2 class="upload-message">{{ data.message }}</h2>
    <# } #>
    <div class="upload-ui">
        <h2 class="upload-instructions drop-instructions">Drop files to upload</h2>
        <p class="upload-instructions drop-instructions">or</p>
        <button type="button" class="browser button button-hero" aria-labelledby="post-upload-info">Select Files
        </button>
    </div>

    <div class="upload-inline-status"></div>

    <div class="post-upload-ui" id="post-upload-info">

        <p class="max-upload-size">
            Maximum upload file size: 32 MB. </p>

        <# if ( data.suggestedWidth && data.suggestedHeight ) { #>
        <p class="suggested-dimensions">
            Suggested image dimensions: {{data.suggestedWidth}} by {{data.suggestedHeight}} pixels. </p>
        <# } #>

    </div>
</div></script>
<script id="tmpl-media-library-view-switcher" type="text/html"><a
        href="https://ovatheme.com/meup/wp-admin/upload.php?mode=list" class="view-list">
    <span class="screen-reader-text">List view</span>
</a>
<a href="https://ovatheme.com/meup/wp-admin/upload.php?mode=grid" class="view-grid current" aria-current="page">
    <span class="screen-reader-text">Grid view</span>
</a></script>
<script id="tmpl-uploader-status" type="text/html"><h2>Uploading</h2>
<button type="button" class="button-link upload-dismiss-errors"><span class="screen-reader-text">Dismiss Errors</span>
</button>

<div class="media-progress-bar">
    <div></div>
</div>
<div class="upload-details">
			<span class="upload-count">
				<span class="upload-index"></span> / <span class="upload-total"></span>
			</span>
    <span class="upload-detail-separator">&ndash;</span>
    <span class="upload-filename"></span>
</div>
<div class="upload-errors"></div></script>
<script id="tmpl-uploader-status-error" type="text/html"><span
        class="upload-error-filename">{{{ data.filename }}}</span>
<span class="upload-error-message">{{ data.message }}</span></script>
<script id="tmpl-edit-attachment-frame" type="text/html">
    <div class="edit-media-header">
        <button class="left dashicons"
        <# if ( ! data.hasPrevious ) { #> disabled<# } #>><span
            class="screen-reader-text">Edit previous media item</span></button>
        <button class="right dashicons"
        <# if ( ! data.hasNext ) { #> disabled<# } #>><span
            class="screen-reader-text">Edit next media item</span></button>
        <button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Close dialog</span></span>
        </button>
    </div>
    <div class="media-frame-title"></div>
    <div class="media-frame-content"></div></script>
<script id="tmpl-attachment-details-two-column" type="text/html">
    <div class="attachment-media-view {{ data.orientation }}">
        <h2 class="screen-reader-text">Attachment Preview</h2>
        <div class="thumbnail thumbnail-{{ data.type }}">
            <# if ( data.uploading ) { #>
            <div class="media-progress-bar">
                <div></div>
            </div>
            <# } else if ( data.sizes && data.sizes.large ) { #>
            <img class="details-image" src="{{ data.sizes.large.url }}" draggable="false" alt=""/>
            <# } else if ( data.sizes && data.sizes.full ) { #>
            <img class="details-image" src="{{ data.sizes.full.url }}" draggable="false" alt=""/>
            <# } else if ( -1 === jQuery.inArray( data.type, [ 'audio', 'video' ] ) ) { #>
            <img class="details-image icon" src="{{ data.icon }}" draggable="false" alt=""/>
            <# } #>

            <# if ( 'audio' === data.type ) { #>
            <div class="wp-media-wrapper wp-audio">
                <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
                    <source type="{{ data.mime }}" src="{{ data.url }}"/>
                </audio>
            </div>
            <# } else if ( 'video' === data.type ) {
            var w_rule = '';
            if ( data.width ) {
            w_rule = 'width: ' + data.width + 'px;';
            } else if ( wp.media.view.settings.contentWidth ) {
            w_rule = 'width: ' + wp.media.view.settings.contentWidth + 'px;';
            }
            #>
            <div style="{{ w_rule }}" class="wp-media-wrapper wp-video">
                <video controls="controls" class="wp-video-shortcode" preload="metadata"
                <# if ( data.width ) { #>width="{{ data.width }}"<# } #>
                <# if ( data.height ) { #>height="{{ data.height }}"<# } #>
                <# if ( data.image && data.image.src !== data.icon ) { #>poster="{{ data.image.src }}"<# } #>>
                <source type="{{ data.mime }}" src="{{ data.url }}"/>
                </video>
            </div>
            <# } #>

            <div class="attachment-actions">
                <# if ( 'image' === data.type && ! data.uploading && data.sizes && data.can.save ) { #>
                <button type="button" class="button edit-attachment">Edit Image</button>
                <# } else if ( 'pdf' === data.subtype && data.sizes ) { #>
                <p>Document Preview</p>
                <# } #>
            </div>
        </div>
    </div>
    <div class="attachment-info">
			<span class="settings-save-status" role="status">
				<span class="spinner"></span>
				<span class="saved">Saved.</span>
			</span>
        <div class="details">
            <h2 class="screen-reader-text">Details</h2>
            <div class="uploaded"><strong>Uploaded on:</strong> {{ data.dateFormatted }}</div>
            <div class="uploaded-by">
                <strong>Uploaded by:</strong>
                <# if ( data.authorLink ) { #>
                <a href="{{ data.authorLink }}">{{ data.authorName }}</a>
                <# } else { #>
                {{ data.authorName }}
                <# } #>
            </div>
            <# if ( data.uploadedToTitle ) { #>
            <div class="uploaded-to">
                <strong>Uploaded to:</strong>
                <# if ( data.uploadedToLink ) { #>
                <a href="{{ data.uploadedToLink }}">{{ data.uploadedToTitle }}</a>
                <# } else { #>
                {{ data.uploadedToTitle }}
                <# } #>
            </div>
            <# } #>
            <div class="filename"><strong>File name:</strong> {{ data.filename }}</div>
            <div class="file-type"><strong>File type:</strong> {{ data.mime }}</div>
            <div class="file-size"><strong>File size:</strong> {{ data.filesizeHumanReadable }}</div>
            <# if ( 'image' === data.type && ! data.uploading ) { #>
            <# if ( data.width && data.height ) { #>
            <div class="dimensions"><strong>Dimensions:</strong>
                {{ data.width }} by {{ data.height }} pixels
            </div>
            <# } #>

            <# if ( data.originalImageURL && data.originalImageName ) { #>
            Original image: <a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a>
            <# } #>
            <# } #>

            <# if ( data.fileLength && data.fileLengthHumanReadable ) { #>
            <div class="file-length"><strong>Length:</strong>
                <span aria-hidden="true">{{ data.fileLength }}</span>
                <span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span>
            </div>
            <# } #>

            <# if ( 'audio' === data.type && data.meta.bitrate ) { #>
            <div class="bitrate">
                <strong>Bitrate:</strong> {{ Math.round( data.meta.bitrate / 1000 ) }}kb/s
                <# if ( data.meta.bitrate_mode ) { #>
                {{ ' ' + data.meta.bitrate_mode.toUpperCase() }}
                <# } #>
            </div>
            <# } #>

            <# if ( data.mediaStates ) { #>
            <div class="media-states"><strong>Used as:</strong> {{ data.mediaStates }}</div>
            <# } #>

            <div class="compat-meta">
                <# if ( data.compat && data.compat.meta ) { #>
                {{{ data.compat.meta }}}
                <# } #>
            </div>
        </div>

        <div class="settings">
            <# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
            <# if ( 'image' === data.type ) { #>
            <span class="setting has-description" data-setting="alt">
						<label for="attachment-details-two-column-alt-text" class="name">Alternative Text</label>
						<input type="text" id="attachment-details-two-column-alt-text" value="{{ data.alt }}"
                               aria-describedby="alt-text-description" {{ maybeReadOnly }}/>
					</span>
            <p class="description" id="alt-text-description"><a
                    href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener">Describe
                the purpose of the image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty
                if the image is purely decorative.</p>
            <# } #>
            <span class="setting" data-setting="title">
					<label for="attachment-details-two-column-title" class="name">Title</label>
					<input type="text" id="attachment-details-two-column-title" value="{{ data.title }}" {{
                           maybeReadOnly }}/>
				</span>
            <# if ( 'audio' === data.type ) { #>
            <span class="setting" data-setting="artist">
					<label for="attachment-details-two-column-artist" class="name">Artist</label>
					<input type="text" id="attachment-details-two-column-artist"
                           value="{{ data.artist || data.meta.artist || '' }}"/>
				</span>
            <span class="setting" data-setting="album">
					<label for="attachment-details-two-column-album" class="name">Album</label>
					<input type="text" id="attachment-details-two-column-album"
                           value="{{ data.album || data.meta.album || '' }}"/>
				</span>
            <# } #>
            <span class="setting" data-setting="caption">
					<label for="attachment-details-two-column-caption" class="name">Caption</label>
					<textarea id="attachment-details-two-column-caption" {{ maybeReadOnly
                              }}>{{ data.caption }}</textarea>
				</span>
            <span class="setting" data-setting="description">
					<label for="attachment-details-two-column-description" class="name">Description</label>
					<textarea id="attachment-details-two-column-description" {{ maybeReadOnly
                              }}>{{ data.description }}</textarea>
				</span>
            <span class="setting" data-setting="url">
					<label for="attachment-details-two-column-copy-link" class="name">File URL:</label>
					<input type="text" class="attachment-details-copy-link" id="attachment-details-two-column-copy-link"
                           value="{{ data.url }}" readonly/>
					<span class="copy-to-clipboard-container">
						<button type="button" class="button button-small copy-attachment-url"
                                data-clipboard-target="#attachment-details-two-column-copy-link">Copy URL to clipboard</button>
						<span class="success hidden" aria-hidden="true">Copied!</span>
					</span>
				</span>
            <div class="attachment-compat"></div>
        </div>

        <div class="actions">
            <# if ( data.link ) { #>
            <a class="view-attachment" href="{{ data.link }}">View attachment page</a>
            <# } #>
            <# if ( data.can.save ) { #>
            <# if ( data.link ) { #>
            <span class="links-separator">|</span>
            <# } #>
            <a href="{{ data.editLink }}">Edit more details</a>
            <# } #>
            <# if ( ! data.uploading && data.can.remove ) { #>
            <# if ( data.link || data.can.save ) { #>
            <span class="links-separator">|</span>
            <# } #>
            <button type="button" class="button-link delete-attachment">Delete permanently</button>
            <# } #>
        </div>
    </div></script>
<script id="tmpl-attachment" type="text/html">
    <div class="attachment-preview js--select-attachment type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}">
        <div class="thumbnail">
            <# if ( data.uploading ) { #>
            <div class="media-progress-bar">
                <div style="width: {{ data.percent }}%"></div>
            </div>
            <# } else if ( 'image' === data.type && data.size && data.size.url ) { #>
            <div class="centered">
                <img src="{{ data.size.url }}" draggable="false" alt=""/>
            </div>
            <# } else { #>
            <div class="centered">
                <# if ( data.image && data.image.src && data.image.src !== data.icon ) { #>
                <img src="{{ data.image.src }}" class="thumbnail" draggable="false" alt=""/>
                <# } else if ( data.sizes && data.sizes.medium ) { #>
                <img src="{{ data.sizes.medium.url }}" class="thumbnail" draggable="false" alt=""/>
                <# } else { #>
                <img src="{{ data.icon }}" class="icon" draggable="false" alt=""/>
                <# } #>
            </div>
            <div class="filename">
                <div>{{ data.filename }}</div>
            </div>
            <# } #>
        </div>
        <# if ( data.buttons.close ) { #>
        <button type="button" class="button-link attachment-close media-modal-icon"><span class="screen-reader-text">Remove</span>
        </button>
        <# } #>
    </div>
    <# if ( data.buttons.check ) { #>
    <button type="button" class="check" tabindex="-1"><span class="media-modal-icon"></span><span
            class="screen-reader-text">Deselect</span></button>
    <# } #>
    <#
    var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly';
    if ( data.describe ) {
    if ( 'image' === data.type ) { #>
    <input type="text" value="{{ data.caption }}" class="describe" data-setting="caption"
           aria-label="Caption"
           placeholder="Caption&hellip;" {{ maybeReadOnly }}/>
    <# } else { #>
    <input type="text" value="{{ data.title }}" class="describe" data-setting="title"
    <# if ( 'video' === data.type ) { #>
    aria-label="Video title"
    placeholder="Video title&hellip;"
    <# } else if ( 'audio' === data.type ) { #>
    aria-label="Audio title"
    placeholder="Audio title&hellip;"
    <# } else { #>
    aria-label="Media title"
    placeholder="Media title&hellip;"
    <# } #> {{ maybeReadOnly }} />
    <# }
    } #></script>
<script id="tmpl-attachment-details" type="text/html"><h2>
    Attachment Details <span class="settings-save-status" role="status">
				<span class="spinner"></span>
				<span class="saved">Saved.</span>
			</span>
</h2>
<div class="attachment-info">

    <# if ( 'audio' === data.type ) { #>
    <div class="wp-media-wrapper wp-audio">
        <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
            <source type="{{ data.mime }}" src="{{ data.url }}"/>
        </audio>
    </div>
    <# } else if ( 'video' === data.type ) {
    var w_rule = '';
    if ( data.width ) {
    w_rule = 'width: ' + data.width + 'px;';
    } else if ( wp.media.view.settings.contentWidth ) {
    w_rule = 'width: ' + wp.media.view.settings.contentWidth + 'px;';
    }
    #>
    <div style="{{ w_rule }}" class="wp-media-wrapper wp-video">
        <video controls="controls" class="wp-video-shortcode" preload="metadata"
        <# if ( data.width ) { #>width="{{ data.width }}"<# } #>
        <# if ( data.height ) { #>height="{{ data.height }}"<# } #>
        <# if ( data.image && data.image.src !== data.icon ) { #>poster="{{ data.image.src }}"<# } #>>
        <source type="{{ data.mime }}" src="{{ data.url }}"/>
        </video>
    </div>
    <# } else { #>
    <div class="thumbnail thumbnail-{{ data.type }}">
        <# if ( data.uploading ) { #>
        <div class="media-progress-bar">
            <div></div>
        </div>
        <# } else if ( 'image' === data.type && data.size && data.size.url ) { #>
        <img src="{{ data.size.url }}" draggable="false" alt=""/>
        <# } else { #>
        <img src="{{ data.icon }}" class="icon" draggable="false" alt=""/>
        <# } #>
    </div>
    <# } #>

    <div class="details">
        <div class="filename">{{ data.filename }}</div>
        <div class="uploaded">{{ data.dateFormatted }}</div>

        <div class="file-size">{{ data.filesizeHumanReadable }}</div>
        <# if ( 'image' === data.type && ! data.uploading ) { #>
        <# if ( data.width && data.height ) { #>
        <div class="dimensions">
            {{ data.width }} by {{ data.height }} pixels
        </div>
        <# } #>

        <# if ( data.originalImageURL && data.originalImageName ) { #>
        Original image: <a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a>
        <# } #>

        <# if ( data.can.save && data.sizes ) { #>
        <a class="edit-attachment" href="{{ data.editLink }}&amp;image-editor" target="_blank">Edit Image</a>
        <# } #>
        <# } #>

        <# if ( data.fileLength && data.fileLengthHumanReadable ) { #>
        <div class="file-length">Length: <span aria-hidden="true">{{ data.fileLength }}</span>
            <span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span>
        </div>
        <# } #>

        <# if ( data.mediaStates ) { #>
        <div class="media-states"><strong>Used as:</strong> {{ data.mediaStates }}</div>
        <# } #>

        <# if ( ! data.uploading && data.can.remove ) { #>
        <button type="button" class="button-link delete-attachment">Delete permanently</button>
        <# } #>

        <div class="compat-meta">
            <# if ( data.compat && data.compat.meta ) { #>
            {{{ data.compat.meta }}}
            <# } #>
        </div>
    </div>
</div>
<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
<# if ( 'image' === data.type ) { #>
<span class="setting has-description" data-setting="alt">
				<label for="attachment-details-alt-text" class="name">Alt Text</label>
				<input type="text" id="attachment-details-alt-text" value="{{ data.alt }}"
                       aria-describedby="alt-text-description" {{ maybeReadOnly }}/>
			</span>
<p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree"
                                                    target="_blank" rel="noopener">Describe the purpose of the
    image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty if the image is purely
    decorative.</p>
<# } #>
<span class="setting" data-setting="title">
			<label for="attachment-details-title" class="name">Title</label>
			<input type="text" id="attachment-details-title" value="{{ data.title }}" {{ maybeReadOnly }}/>
		</span>
<# if ( 'audio' === data.type ) { #>
<span class="setting" data-setting="artist">
			<label for="attachment-details-artist" class="name">Artist</label>
			<input type="text" id="attachment-details-artist" value="{{ data.artist || data.meta.artist || '' }}"/>
		</span>
<span class="setting" data-setting="album">
			<label for="attachment-details-album" class="name">Album</label>
			<input type="text" id="attachment-details-album" value="{{ data.album || data.meta.album || '' }}"/>
		</span>
<# } #>
<span class="setting" data-setting="caption">
			<label for="attachment-details-caption" class="name">Caption</label>
			<textarea id="attachment-details-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea>
		</span>
<span class="setting" data-setting="description">
			<label for="attachment-details-description" class="name">Description</label>
			<textarea id="attachment-details-description" {{ maybeReadOnly }}>{{ data.description }}</textarea>
		</span>
<span class="setting" data-setting="url">
			<label for="attachment-details-copy-link" class="name">File URL:</label>
			<input type="text" class="attachment-details-copy-link" id="attachment-details-copy-link"
                   value="{{ data.url }}" readonly/>
			<div class="copy-to-clipboard-container">
				<button type="button" class="button button-small copy-attachment-url"
                        data-clipboard-target="#attachment-details-copy-link">Copy URL to clipboard</button>
				<span class="success hidden" aria-hidden="true">Copied!</span>
			</div>
		</span></script>
<script id="tmpl-media-selection" type="text/html">
    <div class="selection-info">
        <span class="count"></span>
        <# if ( data.editable ) { #>
        <button type="button" class="button-link edit-selection">Edit Selection</button>
        <# } #>
        <# if ( data.clearable ) { #>
        <button type="button" class="button-link clear-selection">Clear</button>
        <# } #>
    </div>
    <div class="selection-view"></div></script>
<script id="tmpl-attachment-display-settings" type="text/html"><h2>Attachment Display Settings</h2>

<# if ( 'image' === data.type ) { #>
<span class="setting align">
				<label for="attachment-display-settings-alignment" class="name">Alignment</label>
				<select id="attachment-display-settings-alignment" class="alignment"
                        data-setting="align"
					<# if ( data.userSettings ) { #>
						data-user-setting="align"
					<# } #>>

					<option value="left">
						Left					</option>
					<option value="center">
						Center					</option>
					<option value="right">
						Right					</option>
					<option value="none" selected>
						None					</option>
    </select>
			</span>
<# } #>

<span class="setting">
			<label for="attachment-display-settings-link-to" class="name">
				<# if ( data.model.canEmbed ) { #>
					Embed or Link				<# } else { #>
					Link To				<# } #>
			</label>
			<select id="attachment-display-settings-link-to" class="link-to"
                    data-setting="link"
				<# if ( data.userSettings && ! data.model.canEmbed ) { #>
					data-user-setting="urlbutton"
				<# } #>>

			<# if ( data.model.canEmbed ) { #>
				<option value="embed" selected>
					Embed Media Player				</option>
				<option value="file">
			<# } else { #>
				<option value="none" selected>
					None				</option>
				<option value="file">
			<# } #>
				<# if ( data.model.canEmbed ) { #>
					Link to Media File				<# } else { #>
					Media File				<# } #>
				</option>
				<option value="post">
				<# if ( data.model.canEmbed ) { #>
					Link to Attachment Page				<# } else { #>
					Attachment Page				<# } #>
				</option>
			<# if ( 'image' === data.type ) { #>
				<option value="custom">
					Custom URL				</option>
			<# } #>
    </select>
		</span>
<span class="setting">
			<label for="attachment-display-settings-link-to-custom" class="name">URL</label>
			<input type="text" id="attachment-display-settings-link-to-custom" class="link-to-custom"
                   data-setting="linkUrl"/>
		</span>

<# if ( 'undefined' !== typeof data.sizes ) { #>
<span class="setting">
				<label for="attachment-display-settings-size" class="name">Size</label>
				<select id="attachment-display-settings-size" class="size" name="size"
                        data-setting="size"
					<# if ( data.userSettings ) { #>
						data-user-setting="imgsize"
					<# } #>>
											<#
						var size = data.sizes['thumbnail'];
						if ( size ) { #>
							<option value="thumbnail">
								Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['medium'];
						if ( size ) { #>
							<option value="medium">
								Medium &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['large'];
						if ( size ) { #>
							<option value="large">
								Large &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
											<#
						var size = data.sizes['full'];
						if ( size ) { #>
							<option value="full" selected='selected'>
								Full Size &ndash; {{ size.width }} &times; {{ size.height }}
							</option>
						<# } #>
    </select>
			</span>
<# } #></script>
<script id="tmpl-gallery-settings" type="text/html"><h2>Gallery Settings</h2>

<span class="setting">
			<label for="gallery-settings-link-to" class="name">Link To</label>
			<select id="gallery-settings-link-to" class="link-to"
                    data-setting="link"
				<# if ( data.userSettings ) { #>
					data-user-setting="urlbutton"
				<# } #>>

				<option value="post" <# if ( ! wp.media.galleryDefaults.link || 'post' === wp.media.galleryDefaults.link ) {
					#>selected="selected"<# }
				#>>
					Attachment Page                </option>
    <option value="file" <# if ( 'file' === wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
					Media File                </option>
    <option value="none" <# if ( 'none' === wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>>
					None                </option>
    </select>
		</span>

<span class="setting">
			<label for="gallery-settings-columns" class="name select-label-inline">Columns</label>
			<select id="gallery-settings-columns" class="columns" name="columns"
                    data-setting="columns">
									<option value="1" <#
						if ( 1 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						1                    </option>
                <option value="2" <#
						if ( 2 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						2                    </option>
                <option value="3" <#
						if ( 3 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						3                    </option>
                <option value="4" <#
						if ( 4 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						4                    </option>
                <option value="5" <#
						if ( 5 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						5                    </option>
                <option value="6" <#
						if ( 6 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						6                    </option>
                <option value="7" <#
						if ( 7 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						7                    </option>
                <option value="8" <#
						if ( 8 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						8                    </option>
                <option value="9" <#
						if ( 9 == wp.media.galleryDefaults.columns ) { #>selected="selected"<# }
					#>>
						9                    </option>
							</select>
		</span>

<span class="setting">
			<input type="checkbox" id="gallery-settings-random-order" data-setting="_orderbyRandom"/>
			<label for="gallery-settings-random-order" class="checkbox-label-inline">Random Order</label>
		</span>

<span class="setting size">
			<label for="gallery-settings-size" class="name">Size</label>
			<select id="gallery-settings-size" class="size" name="size"
                    data-setting="size"
				<# if ( data.userSettings ) { #>
					data-user-setting="imgsize"
				<# } #>
				>
									<option value="thumbnail">
						Thumbnail					</option>
									<option value="medium">
						Medium					</option>
									<option value="large">
						Large					</option>
									<option value="full">
						Full Size					</option>
    </select>
		</span></script>
<script id="tmpl-playlist-settings" type="text/html"><h2>Playlist Settings</h2>

<# var emptyModel = _.isEmpty( data.model ),
isVideo = 'video' === data.controller.get('library').props.get('type'); #>

<span class="setting">
			<input type="checkbox" id="playlist-settings-show-list" data-setting="tracklist" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<label for="playlist-settings-show-list" class="checkbox-label-inline">
				<# if ( isVideo ) { #>
				Show Video List				<# } else { #>
				Show Tracklist				<# } #>
			</label>
		</span>

<# if ( ! isVideo ) { #>
<span class="setting">
			<input type="checkbox" id="playlist-settings-show-artist" data-setting="artists" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<label for="playlist-settings-show-artist" class="checkbox-label-inline">
				Show Artist Name in Tracklist			</label>
		</span>
<# } #>

<span class="setting">
			<input type="checkbox" id="playlist-settings-show-images" data-setting="images" <# if ( emptyModel ) { #>
				checked="checked"
			<# } #> />
			<label for="playlist-settings-show-images" class="checkbox-label-inline">
				Show Images			</label>
		</span></script>
<script id="tmpl-embed-link-settings" type="text/html"><span class="setting link-text">
			<label for="embed-link-settings-link-text" class="name">Link Text</label>
			<input type="text" id="embed-link-settings-link-text" class="alignment" data-setting="linkText"/>
		</span>
<div class="embed-container" style="display: none;">
    <div class="embed-preview"></div>
</div></script>
<script id="tmpl-embed-image-settings" type="text/html">
    <div class="wp-clearfix">
        <div class="thumbnail">
            <img src="{{ data.model.url }}" draggable="false" alt=""/>
        </div>
    </div>

    <span class="setting alt-text has-description">
			<label for="embed-image-settings-alt-text" class="name">Alternative Text</label>
			<input type="text" id="embed-image-settings-alt-text" data-setting="alt"
                   aria-describedby="alt-text-description"/>
		</span>
    <p class="description" id="alt-text-description"><a href="https://www.w3.org/WAI/tutorials/images/decision-tree"
                                                        target="_blank" rel="noopener">Describe the purpose of the image<span
            class="screen-reader-text"> (opens in a new tab)</span></a>. Leave empty if the image is purely decorative.
    </p>

    <span class="setting caption">
				<label for="embed-image-settings-caption" class="name">Caption</label>
				<textarea id="embed-image-settings-caption" data-setting="caption"></textarea>
			</span>

    <fieldset class="setting-group">
        <legend class="name">Align</legend>
        <span class="setting align">
				<span class="button-group button-large" data-setting="align">
					<button class="button" value="left">
						Left					</button>
					<button class="button" value="center">
						Center					</button>
					<button class="button" value="right">
						Right					</button>
					<button class="button active" value="none">
						None					</button>
				</span>
			</span>
    </fieldset>

    <fieldset class="setting-group">
        <legend class="name">Link To</legend>
        <span class="setting link-to">
				<span class="button-group button-large" data-setting="link">
					<button class="button" value="file">
						Image URL					</button>
					<button class="button" value="custom">
						Custom URL					</button>
					<button class="button active" value="none">
						None					</button>
				</span>
			</span>
        <span class="setting">
				<label for="embed-image-settings-link-to-custom" class="name">URL</label>
				<input type="text" id="embed-image-settings-link-to-custom" class="link-to-custom"
                       data-setting="linkUrl"/>
			</span>
    </fieldset></script>
<script id="tmpl-image-details" type="text/html">
    <div class="media-embed">
        <div class="embed-media-settings">
            <div class="column-settings">
					<span class="setting alt-text has-description">
						<label for="image-details-alt-text" class="name">Alternative Text</label>
						<input type="text" id="image-details-alt-text" data-setting="alt" value="{{ data.model.alt }}"
                               aria-describedby="alt-text-description"/>
					</span>
                <p class="description" id="alt-text-description"><a
                        href="https://www.w3.org/WAI/tutorials/images/decision-tree" target="_blank" rel="noopener">Describe
                    the purpose of the image<span class="screen-reader-text"> (opens in a new tab)</span></a>. Leave
                    empty if the image is purely decorative.</p>

                <span class="setting caption">
							<label for="image-details-caption" class="name">Caption</label>
							<textarea id="image-details-caption"
                                      data-setting="caption">{{ data.model.caption }}</textarea>
						</span>

                <h2>Display Settings</h2>
                <fieldset class="setting-group">
                    <legend class="legend-inline">Align</legend>
                    <span class="setting align">
							<span class="button-group button-large" data-setting="align">
								<button class="button" value="left">
									Left								</button>
								<button class="button" value="center">
									Center								</button>
								<button class="button" value="right">
									Right								</button>
								<button class="button active" value="none">
									None								</button>
							</span>
						</span>
                </fieldset>

                <# if ( data.attachment ) { #>
                <# if ( 'undefined' !== typeof data.attachment.sizes ) { #>
                <span class="setting size">
								<label for="image-details-size" class="name">Size</label>
								<select id="image-details-size" class="size" name="size"
                                        data-setting="size"
									<# if ( data.userSettings ) { #>
										data-user-setting="imgsize"
									<# } #>>
																			<#
										var size = data.sizes['thumbnail'];
										if ( size ) { #>
											<option value="thumbnail">
												Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['medium'];
										if ( size ) { #>
											<option value="medium">
												Medium &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['large'];
										if ( size ) { #>
											<option value="large">
												Large &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																			<#
										var size = data.sizes['full'];
										if ( size ) { #>
											<option value="full">
												Full Size &ndash; {{ size.width }} &times; {{ size.height }}
											</option>
										<# } #>
																		<option value="custom">
										Custom Size									</option>
                    </select>
							</span>
                <# } #>
                <div class="custom-size wp-clearfix<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>">
								<span class="custom-size-setting">
									<label for="image-details-size-width">Width</label>
									<input type="number" id="image-details-size-width"
                                           aria-describedby="image-size-desc" data-setting="customWidth" step="1"
                                           value="{{ data.model.customWidth }}"/>
								</span>
                    <span class="sep" aria-hidden="true">&times;</span>
                    <span class="custom-size-setting">
									<label for="image-details-size-height">Height</label>
									<input type="number" id="image-details-size-height"
                                           aria-describedby="image-size-desc" data-setting="customHeight" step="1"
                                           value="{{ data.model.customHeight }}"/>
								</span>
                    <p id="image-size-desc" class="description">Image size in pixels</p>
                </div>
                <# } #>

                <span class="setting link-to">
						<label for="image-details-link-to" class="name">Link To</label>
						<select id="image-details-link-to" data-setting="link">
						<# if ( data.attachment ) { #>
							<option value="file">
								Media File							</option>
							<option value="post">
								Attachment Page							</option>
						<# } else { #>
							<option value="file">
								Image URL							</option>
						<# } #>
							<option value="custom">
								Custom URL							</option>
							<option value="none">
								None							</option>
						</select>
					</span>
                <span class="setting">
						<label for="image-details-link-to-custom" class="name">URL</label>
						<input type="text" id="image-details-link-to-custom" class="link-to-custom"
                               data-setting="linkUrl"/>
					</span>

                <div class="advanced-section">
                    <h2>
                        <button type="button" class="button-link advanced-toggle">Advanced Options</button>
                    </h2>
                    <div class="advanced-settings hidden">
                        <div class="advanced-image">
								<span class="setting title-text">
									<label for="image-details-title-attribute"
                                           class="name">Image Title Attribute</label>
									<input type="text" id="image-details-title-attribute" data-setting="title"
                                           value="{{ data.model.title }}"/>
								</span>
                            <span class="setting extra-classes">
									<label for="image-details-css-class" class="name">Image CSS Class</label>
									<input type="text" id="image-details-css-class" data-setting="extraClasses"
                                           value="{{ data.model.extraClasses }}"/>
								</span>
                        </div>
                        <div class="advanced-link">
								<span class="setting link-target">
									<input type="checkbox" id="image-details-link-target" data-setting="linkTargetBlank"
                                           value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"<# } #>>
									<label for="image-details-link-target"
                                           class="checkbox-label">Open link in a new tab</label>
								</span>
                            <span class="setting link-rel">
									<label for="image-details-link-rel" class="name">Link Rel</label>
									<input type="text" id="image-details-link-rel" data-setting="linkRel"
                                           value="{{ data.model.linkRel }}"/>
								</span>
                            <span class="setting link-class-name">
									<label for="image-details-link-css-class" class="name">Link CSS Class</label>
									<input type="text" id="image-details-link-css-class" data-setting="linkClassName"
                                           value="{{ data.model.linkClassName }}"/>
								</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-image">
                <div class="image">
                    <img src="{{ data.model.url }}" draggable="false" alt=""/>
                    <# if ( data.attachment && window.imageEdit ) { #>
                    <div class="actions">
                        <input type="button" class="edit-attachment button" value="Edit Original"/>
                        <input type="button" class="replace-attachment button" value="Replace"/>
                    </div>
                    <# } #>
                </div>
            </div>
        </div>
    </div></script>
<script id="tmpl-image-editor" type="text/html">
    <div id="media-head-{{ data.id }}"></div>
    <div id="image-editor-{{ data.id }}"></div></script>
<script id="tmpl-audio-details" type="text/html"><# var ext, html5types = {
mp3: wp.media.view.settings.embedMimes.mp3,
ogg: wp.media.view.settings.embedMimes.ogg
}; #>

<div class="media-embed media-embed-details">
    <div class="embed-media-settings embed-audio-settings">
        <audio style="visibility: hidden"
               controls
               class="wp-audio-shortcode"
               width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}"
               preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}"
        <#
        if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
        #> autoplay<#
        }
        if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
        #> loop<#
        }
        #>
        >
        <# if ( ! _.isEmpty( data.model.src ) ) { #>
        <source src="{{ data.model.src }}"
                type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}"/>
        <# } #>

        <# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
        <source src="{{ data.model.mp3 }}" type="{{ wp.media.view.settings.embedMimes[ 'mp3' ] }}"/>
        <# } #>
        <# if ( ! _.isEmpty( data.model.ogg ) ) { #>
        <source src="{{ data.model.ogg }}" type="{{ wp.media.view.settings.embedMimes[ 'ogg' ] }}"/>
        <# } #>
        <# if ( ! _.isEmpty( data.model.flac ) ) { #>
        <source src="{{ data.model.flac }}" type="{{ wp.media.view.settings.embedMimes[ 'flac' ] }}"/>
        <# } #>
        <# if ( ! _.isEmpty( data.model.m4a ) ) { #>
        <source src="{{ data.model.m4a }}" type="{{ wp.media.view.settings.embedMimes[ 'm4a' ] }}"/>
        <# } #>
        <# if ( ! _.isEmpty( data.model.wav ) ) { #>
        <source src="{{ data.model.wav }}" type="{{ wp.media.view.settings.embedMimes[ 'wav' ] }}"/>
        <# } #>
        </audio>

        <# if ( ! _.isEmpty( data.model.src ) ) {
        ext = data.model.src.split('.').pop();
        if ( html5types[ ext ] ) {
        delete html5types[ ext ];
        }
        #>
        <span class="setting">
					<label for="audio-details-source" class="name">URL</label>
					<input type="text" id="audio-details-source" readonly data-setting="src"
                           value="{{ data.model.src }}"/>
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
        <# } #>
        <# if ( ! _.isEmpty( data.model.mp3 ) ) {
        if ( ! _.isUndefined( html5types.mp3 ) ) {
        delete html5types.mp3;
        }
        #>
        <span class="setting">
					<label for="audio-details-mp3-source" class="name">MP3</label>
					<input type="text" id="audio-details-mp3-source" readonly data-setting="mp3"
                           value="{{ data.model.mp3 }}"/>
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
        <# } #>
        <# if ( ! _.isEmpty( data.model.ogg ) ) {
        if ( ! _.isUndefined( html5types.ogg ) ) {
        delete html5types.ogg;
        }
        #>
        <span class="setting">
					<label for="audio-details-ogg-source" class="name">OGG</label>
					<input type="text" id="audio-details-ogg-source" readonly data-setting="ogg"
                           value="{{ data.model.ogg }}"/>
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
        <# } #>
        <# if ( ! _.isEmpty( data.model.flac ) ) {
        if ( ! _.isUndefined( html5types.flac ) ) {
        delete html5types.flac;
        }
        #>
        <span class="setting">
					<label for="audio-details-flac-source" class="name">FLAC</label>
					<input type="text" id="audio-details-flac-source" readonly data-setting="flac"
                           value="{{ data.model.flac }}"/>
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
        <# } #>
        <# if ( ! _.isEmpty( data.model.m4a ) ) {
        if ( ! _.isUndefined( html5types.m4a ) ) {
        delete html5types.m4a;
        }
        #>
        <span class="setting">
					<label for="audio-details-m4a-source" class="name">M4A</label>
					<input type="text" id="audio-details-m4a-source" readonly data-setting="m4a"
                           value="{{ data.model.m4a }}"/>
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
        <# } #>
        <# if ( ! _.isEmpty( data.model.wav ) ) {
        if ( ! _.isUndefined( html5types.wav ) ) {
        delete html5types.wav;
        }
        #>
        <span class="setting">
					<label for="audio-details-wav-source" class="name">WAV</label>
					<input type="text" id="audio-details-wav-source" readonly data-setting="wav"
                           value="{{ data.model.wav }}"/>
					<button type="button" class="button-link remove-setting">Remove audio source</button>
				</span>
        <# } #>

        <# if ( ! _.isEmpty( html5types ) ) { #>
        <fieldset class="setting-group">
            <legend class="name">Add alternate sources for maximum HTML5 playback</legend>
            <span class="setting">
						<span class="button-large">
						<# _.each( html5types, function (mime, type) { #>
							<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
						<# } ) #>
						</span>
					</span>
        </fieldset>
        <# } #>

        <fieldset class="setting-group">
            <legend class="name">Preload</legend>
            <span class="setting preload">
						<span class="button-group button-large" data-setting="preload">
							<button class="button" value="auto">Auto</button>
							<button class="button" value="metadata">Metadata</button>
							<button class="button active" value="none">None</button>
						</span>
					</span>
        </fieldset>

        <span class="setting-group">
					<span class="setting checkbox-setting autoplay">
						<input type="checkbox" id="audio-details-autoplay" data-setting="autoplay"/>
						<label for="audio-details-autoplay" class="checkbox-label">Autoplay</label>
					</span>

					<span class="setting checkbox-setting">
						<input type="checkbox" id="audio-details-loop" data-setting="loop"/>
						<label for="audio-details-loop" class="checkbox-label">Loop</label>
					</span>
				</span>
    </div>
</div></script>
<script id="tmpl-video-details" type="text/html"><# var ext, html5types = {
mp4: wp.media.view.settings.embedMimes.mp4,
ogv: wp.media.view.settings.embedMimes.ogv,
webm: wp.media.view.settings.embedMimes.webm
}; #>

<div class="media-embed media-embed-details">
    <div class="embed-media-settings embed-video-settings">
        <div class="wp-video-holder">
            <#
            var w = ! data.model.width || data.model.width > 640 ? 640 : data.model.width,
            h = ! data.model.height ? 360 : data.model.height;

            if ( data.model.width && w !== data.model.width ) {
            h = Math.ceil( ( h * w ) / data.model.width );
            }
            #>

            <# var w_rule = '', classes = [],
            w, h, settings = wp.media.view.settings,
            isYouTube = isVimeo = false;

            if ( ! _.isEmpty( data.model.src ) ) {
            isYouTube = data.model.src.match(/youtube|youtu\.be/);
            isVimeo = -1 !== data.model.src.indexOf('vimeo');
            }

            if ( settings.contentWidth && data.model.width >= settings.contentWidth ) {
            w = settings.contentWidth;
            } else {
            w = data.model.width;
            }

            if ( w !== data.model.width ) {
            h = Math.ceil( ( data.model.height * w ) / data.model.width );
            } else {
            h = data.model.height;
            }

            if ( w ) {
            w_rule = 'width: ' + w + 'px; ';
            }

            if ( isYouTube ) {
            classes.push( 'youtube-video' );
            }

            if ( isVimeo ) {
            classes.push( 'vimeo-video' );
            }

            #>
            <div style="{{ w_rule }}" class="wp-video">
                <video controls
                       class="wp-video-shortcode {{ classes.join( ' ' ) }}"
                <# if ( w ) { #>width="{{ w }}"<# } #>
                <# if ( h ) { #>height="{{ h }}"<# } #>
                <#
                if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) {
                #> poster="{{ data.model.poster }}"<#
                } #>
                preload ="{{ _.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload }}"
                <#
                if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) {
                #> autoplay<#
                }
                if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) {
                #> loop<#
                }
                #>
                >
                <# if ( ! _.isEmpty( data.model.src ) ) {
                if ( isYouTube ) { #>
                <source src="{{ data.model.src }}" type="video/youtube"/>
                <# } else if ( isVimeo ) { #>
                <source src="{{ data.model.src }}" type="video/vimeo"/>
                <# } else { #>
                <source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}"/>
                <# }
                } #>

                <# if ( data.model.mp4 ) { #>
                <source src="{{ data.model.mp4 }}" type="{{ settings.embedMimes[ 'mp4' ] }}"/>
                <# } #>
                <# if ( data.model.m4v ) { #>
                <source src="{{ data.model.m4v }}" type="{{ settings.embedMimes[ 'm4v' ] }}"/>
                <# } #>
                <# if ( data.model.webm ) { #>
                <source src="{{ data.model.webm }}" type="{{ settings.embedMimes[ 'webm' ] }}"/>
                <# } #>
                <# if ( data.model.ogv ) { #>
                <source src="{{ data.model.ogv }}" type="{{ settings.embedMimes[ 'ogv' ] }}"/>
                <# } #>
                <# if ( data.model.flv ) { #>
                <source src="{{ data.model.flv }}" type="{{ settings.embedMimes[ 'flv' ] }}"/>
                <# } #>
                {{{ data.model.content }}}
                </video>
            </div>

            <# if ( ! _.isEmpty( data.model.src ) ) {
            ext = data.model.src.split('.').pop();
            if ( html5types[ ext ] ) {
            delete html5types[ ext ];
            }
            #>
            <span class="setting">
					<label for="video-details-source" class="name">URL</label>
					<input type="text" id="video-details-source" readonly data-setting="src"
                           value="{{ data.model.src }}"/>
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
            <# } #>
            <# if ( ! _.isEmpty( data.model.mp4 ) ) {
            if ( ! _.isUndefined( html5types.mp4 ) ) {
            delete html5types.mp4;
            }
            #>
            <span class="setting">
					<label for="video-details-mp4-source" class="name">MP4</label>
					<input type="text" id="video-details-mp4-source" readonly data-setting="mp4"
                           value="{{ data.model.mp4 }}"/>
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
            <# } #>
            <# if ( ! _.isEmpty( data.model.m4v ) ) {
            if ( ! _.isUndefined( html5types.m4v ) ) {
            delete html5types.m4v;
            }
            #>
            <span class="setting">
					<label for="video-details-m4v-source" class="name">M4V</label>
					<input type="text" id="video-details-m4v-source" readonly data-setting="m4v"
                           value="{{ data.model.m4v }}"/>
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
            <# } #>
            <# if ( ! _.isEmpty( data.model.webm ) ) {
            if ( ! _.isUndefined( html5types.webm ) ) {
            delete html5types.webm;
            }
            #>
            <span class="setting">
					<label for="video-details-webm-source" class="name">WEBM</label>
					<input type="text" id="video-details-webm-source" readonly data-setting="webm"
                           value="{{ data.model.webm }}"/>
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
            <# } #>
            <# if ( ! _.isEmpty( data.model.ogv ) ) {
            if ( ! _.isUndefined( html5types.ogv ) ) {
            delete html5types.ogv;
            }
            #>
            <span class="setting">
					<label for="video-details-ogv-source" class="name">OGV</label>
					<input type="text" id="video-details-ogv-source" readonly data-setting="ogv"
                           value="{{ data.model.ogv }}"/>
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
            <# } #>
            <# if ( ! _.isEmpty( data.model.flv ) ) {
            if ( ! _.isUndefined( html5types.flv ) ) {
            delete html5types.flv;
            }
            #>
            <span class="setting">
					<label for="video-details-flv-source" class="name">FLV</label>
					<input type="text" id="video-details-flv-source" readonly data-setting="flv"
                           value="{{ data.model.flv }}"/>
					<button type="button" class="button-link remove-setting">Remove video source</button>
				</span>
            <# } #>
        </div>

        <# if ( ! _.isEmpty( html5types ) ) { #>
        <fieldset class="setting-group">
            <legend class="name">Add alternate sources for maximum HTML5 playback</legend>
            <span class="setting">
						<span class="button-large">
						<# _.each( html5types, function (mime, type) { #>
							<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
						<# } ) #>
						</span>
					</span>
        </fieldset>
        <# } #>

        <# if ( ! _.isEmpty( data.model.poster ) ) { #>
        <span class="setting">
					<label for="video-details-poster-image" class="name">Poster Image</label>
					<input type="text" id="video-details-poster-image" readonly data-setting="poster"
                           value="{{ data.model.poster }}"/>
					<button type="button" class="button-link remove-setting">Remove poster image</button>
				</span>
        <# } #>

        <fieldset class="setting-group">
            <legend class="name">Preload</legend>
            <span class="setting preload">
						<span class="button-group button-large" data-setting="preload">
							<button class="button" value="auto">Auto</button>
							<button class="button" value="metadata">Metadata</button>
							<button class="button active" value="none">None</button>
						</span>
					</span>
        </fieldset>

        <span class="setting-group">
					<span class="setting checkbox-setting autoplay">
						<input type="checkbox" id="video-details-autoplay" data-setting="autoplay"/>
						<label for="video-details-autoplay" class="checkbox-label">Autoplay</label>
					</span>

					<span class="setting checkbox-setting">
						<input type="checkbox" id="video-details-loop" data-setting="loop"/>
						<label for="video-details-loop" class="checkbox-label">Loop</label>
					</span>
				</span>

        <span class="setting" data-setting="content">
					<#
					var content = '';
					if ( ! _.isEmpty( data.model.content ) ) {
						var tracks = jQuery( data.model.content ).filter( 'track' );
						_.each( tracks.toArray(), function( track, index ) {
							content += track.outerHTML; #>
						<label for="video-details-track-{{ index }}" class="name">Tracks (subtitles, captions, descriptions, chapters, or metadata)</label>
						<input class="content-track" type="text" id="video-details-track-{{ index }}"
                               aria-describedby="video-details-track-desc-{{ index }}" value="{{ track.outerHTML }}"/>
						<span class="description" id="video-details-track-desc-{{ index }}">
						The srclang, label, and kind values can be edited to set the video track language and kind.						</span>
						<button type="button"
                                class="button-link remove-setting remove-track">Remove video track</button><br/>
						<# } ); #>
					<# } else { #>
					<span class="name">Tracks (subtitles, captions, descriptions, chapters, or metadata)</span><br/>
					<em>There are no associated subtitles.</em>
					<# } #>
					<textarea class="hidden content-setting">{{ content }}</textarea>
				</span>
    </div>
</div></script>
<script id="tmpl-editor-gallery" type="text/html"><# if ( data.attachments.length ) { #>
<div class="gallery gallery-columns-{{ data.columns }}">
    <# _.each( data.attachments, function( attachment, index ) { #>
    <dl class="gallery-item">
        <dt class="gallery-icon">
            <# if ( attachment.thumbnail ) { #>
            <img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}"
                 height="{{ attachment.thumbnail.height }}" alt="{{ attachment.alt }}"/>
            <# } else { #>
            <img src="{{ attachment.url }}" alt="{{ attachment.alt }}"/>
            <# } #>
        </dt>
        <# if ( attachment.caption ) { #>
        <dd class="wp-caption-text gallery-caption">
            {{{ data.verifyHTML( attachment.caption ) }}}
        </dd>
        <# } #>
    </dl>
    <# if ( index % data.columns === data.columns - 1 ) { #>
    <br style="clear: both;">
    <# } #>
    <# } ); #>
</div>
<# } else { #>
<div class="wpview-error">
    <div class="dashicons dashicons-format-gallery"></div>
    <p>No items found.</p>
</div>
<# } #></script>
<script id="tmpl-crop-content" type="text/html"><img class="crop-image" src="{{ data.url }}"
                                                     alt="Image crop area preview. Requires mouse interaction.">
<div class="upload-errors"></div></script>
<script id="tmpl-site-icon-preview" type="text/html"><h2>Preview</h2>
<strong aria-hidden="true">As a browser icon</strong>
<div class="favicon-preview">
    <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_182/https://ovatheme.com/meup/wp-admin/images/browser.png"
         class="browser-preview" width="182" height="" alt=""/>

    <div class="favicon">
        <img id="preview-favicon" src="{{ data.url }}" alt="Preview as a browser icon"/>
    </div>
    <span class="browser-title" aria-hidden="true"><# print( 'MeUp &#8211; Listing Marketplace Events WordPress Theme' ) #></span>
</div>

<strong aria-hidden="true">As an app icon</strong>
<div class="app-icon-preview">
    <img id="preview-app-icon" src="{{ data.url }}" alt="Preview as an app icon"/>
</div></script>
<script type="text/javascript">(function () {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})();</script>
<script id="wp-polyfill-js" src="./styles/UserAccountBookings/wp-polyfill.min.js" type="text/javascript"></script>
<script id="wp-polyfill-js-after"
        type="text/javascript">('fetch' in window) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>');
(document.contains) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>');
(window.DOMRect) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>');
(window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>');
(window.FormData && window.FormData.prototype.keys) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>');
(Element.prototype.matches && Element.prototype.closest) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>');
('objectFit' in document.documentElement.style) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>');</script>
<script id="contact-form-7-js-extra" type="text/javascript">var wpcf7 = {
    "api": {
        "root": "https:\/\/ovatheme.com\/meup\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    }, "cached": "1"
};</script>
<script id="contact-form-7-js" src="./styles/UserAccountBookings/autoptimize_single_daca149c46601376ce5db68f3658323c.js"
        type="text/javascript"></script>
<script id="image-map-pro-dist-js-js" src="./styles/UserAccountBookings/image-map-pro.min.js"
        type="text/javascript"></script>
<script id="jquery-blockui-js" src="./styles/UserAccountBookings/jquery.blockUI.min.js" type="text/javascript"></script>
<script id="wc-add-to-cart-js-extra" type="text/javascript">var wc_add_to_cart_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%",
    "i18n_view_cart": "View cart",
    "cart_url": "https:\/\/ovatheme.com\/meup\/cart\/",
    "is_cart": "",
    "cart_redirect_after_add": "no"
};</script>
<script id="wc-add-to-cart-js" src="./styles/UserAccountBookings/add-to-cart.min.js" type="text/javascript"></script>
<script id="js-cookie-js" src="./styles/UserAccountBookings/js.cookie.min.js" type="text/javascript"></script>
<script id="woocommerce-js-extra" type="text/javascript">var woocommerce_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%"
};</script>
<script id="woocommerce-js" src="./styles/UserAccountBookings/woocommerce.min.js" type="text/javascript"></script>
<script id="wc-cart-fragments-js-extra" type="text/javascript">var wc_cart_fragments_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_d71891be86889718f0e13c2f3acada41",
    "fragment_name": "wc_fragments_d71891be86889718f0e13c2f3acada41",
    "request_timeout": "5000"
};</script>
<script id="wc-cart-fragments-js" src="./styles/UserAccountBookings/cart-fragments.min.js"
        type="text/javascript"></script>
<script id="login-script-js" src="./styles/UserAccountBookings/autoptimize_single_d12035cd792428533b661744dbb9ddc9.js"
        type="text/javascript"></script>
<script id="underscore-js" src="./styles/UserAccountBookings/underscore.min.js" type="text/javascript"></script>
<script id="shortcode-js" src="./styles/UserAccountBookings/shortcode.min.js" type="text/javascript"></script>
<script id="backbone-js" src="./styles/UserAccountBookings/backbone.min.js" type="text/javascript"></script>
<script id="wp-util-js-extra"
        type="text/javascript">var _wpUtilSettings = {"ajax": {"url": "\/meup\/wp-admin\/admin-ajax.php"}};</script>
<script id="wp-util-js" src="./styles/UserAccountBookings/wp-util.min.js" type="text/javascript"></script>
<script id="wp-backbone-js" src="./styles/UserAccountBookings/wp-backbone.min.js" type="text/javascript"></script>
<script id="media-models-js-extra" type="text/javascript">var _wpMediaModelsL10n = {
    "settings": {
        "ajaxurl": "\/meup\/wp-admin\/admin-ajax.php",
        "post": {"id": 0}
    }
};</script>
<script id="media-models-js" src="./styles/UserAccountBookings/media-models.min.js" type="text/javascript"></script>
<script id="wp-plupload-js-extra" type="text/javascript">var pluploadL10n = {
    "queue_limit_exceeded": "You have attempted to queue too many files.",
    "file_exceeds_size_limit": "%s exceeds the maximum upload size for this site.",
    "zero_byte_file": "This file is empty. Please try another.",
    "invalid_filetype": "Sorry, this file type is not permitted for security reasons.",
    "not_an_image": "This file is not an image. Please try another.",
    "image_memory_exceeded": "Memory exceeded. Please try another smaller file.",
    "image_dimensions_exceeded": "This is larger than the maximum size. Please try another.",
    "default_error": "An error occurred in the upload. Please try again later.",
    "missing_upload_url": "There was a configuration error. Please contact the server administrator.",
    "upload_limit_exceeded": "You may only upload 1 file.",
    "http_error": "Unexpected response from the server. The file may have been uploaded successfully. Check in the Media Library or reload the page.",
    "http_error_image": "Post-processing of the image failed likely because the server is busy or does not have enough resources. Uploading a smaller image may help. Suggested maximum size is 2500 pixels.",
    "upload_failed": "Upload failed.",
    "big_upload_failed": "Please try uploading this file with the %1$sbrowser uploader%2$s.",
    "big_upload_queued": "%s exceeds the maximum upload size for the multi-file uploader when used in your browser.",
    "io_error": "IO error.",
    "security_error": "Security error.",
    "file_cancelled": "File canceled.",
    "upload_stopped": "Upload stopped.",
    "dismiss": "Dismiss",
    "crunching": "Crunching\u2026",
    "deleted": "moved to the Trash.",
    "error_uploading": "\u201c%s\u201d has failed to upload.",
    "unsupported_image": "This image cannot be displayed in a web browser. For best results convert it to JPEG before uploading."
};
var _wpPluploadSettings = {
    "defaults": {
        "file_data_name": "async-upload",
        "url": "\/meup\/wp-admin\/async-upload.php",
        "filters": {
            "max_file_size": "33554432b",
            "mime_types": [{"extensions": "jpg,jpeg,jpe,gif,png,bmp,tif,tiff,ico"}]
        },
        "heic_upload_error": true,
        "multipart_params": {"action": "upload-attachment", "_wpnonce": "12b13f6a80"}
    }, "browser": {"mobile": false, "supported": true}, "limitExceeded": false
};</script>
<script id="wp-plupload-js" src="./styles/UserAccountBookings/wp-plupload.min.js" type="text/javascript"></script>
<script id="jquery-ui-core-js" src="./styles/UserAccountBookings/core.min.js" type="text/javascript"></script>
<script id="jquery-ui-mouse-js" src="./styles/UserAccountBookings/mouse.min.js" type="text/javascript"></script>
<script id="jquery-ui-sortable-js" src="./styles/UserAccountBookings/sortable.min.js" type="text/javascript"></script>
<script id="mediaelement-core-js-before" type="text/javascript">var mejsL10n = {
    "language": "en", "strings": {
        "mejs.download-file": "Download File",
        "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
        "mejs.fullscreen": "Fullscreen",
        "mejs.play": "Play",
        "mejs.pause": "Pause",
        "mejs.time-slider": "Time Slider",
        "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
        "mejs.live-broadcast": "Live Broadcast",
        "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
        "mejs.unmute": "Unmute",
        "mejs.mute": "Mute",
        "mejs.volume-slider": "Volume Slider",
        "mejs.video-player": "Video Player",
        "mejs.audio-player": "Audio Player",
        "mejs.captions-subtitles": "Captions\/Subtitles",
        "mejs.captions-chapters": "Chapters",
        "mejs.none": "None",
        "mejs.afrikaans": "Afrikaans",
        "mejs.albanian": "Albanian",
        "mejs.arabic": "Arabic",
        "mejs.belarusian": "Belarusian",
        "mejs.bulgarian": "Bulgarian",
        "mejs.catalan": "Catalan",
        "mejs.chinese": "Chinese",
        "mejs.chinese-simplified": "Chinese (Simplified)",
        "mejs.chinese-traditional": "Chinese (Traditional)",
        "mejs.croatian": "Croatian",
        "mejs.czech": "Czech",
        "mejs.danish": "Danish",
        "mejs.dutch": "Dutch",
        "mejs.english": "English",
        "mejs.estonian": "Estonian",
        "mejs.filipino": "Filipino",
        "mejs.finnish": "Finnish",
        "mejs.french": "French",
        "mejs.galician": "Galician",
        "mejs.german": "German",
        "mejs.greek": "Greek",
        "mejs.haitian-creole": "Haitian Creole",
        "mejs.hebrew": "Hebrew",
        "mejs.hindi": "Hindi",
        "mejs.hungarian": "Hungarian",
        "mejs.icelandic": "Icelandic",
        "mejs.indonesian": "Indonesian",
        "mejs.irish": "Irish",
        "mejs.italian": "Italian",
        "mejs.japanese": "Japanese",
        "mejs.korean": "Korean",
        "mejs.latvian": "Latvian",
        "mejs.lithuanian": "Lithuanian",
        "mejs.macedonian": "Macedonian",
        "mejs.malay": "Malay",
        "mejs.maltese": "Maltese",
        "mejs.norwegian": "Norwegian",
        "mejs.persian": "Persian",
        "mejs.polish": "Polish",
        "mejs.portuguese": "Portuguese",
        "mejs.romanian": "Romanian",
        "mejs.russian": "Russian",
        "mejs.serbian": "Serbian",
        "mejs.slovak": "Slovak",
        "mejs.slovenian": "Slovenian",
        "mejs.spanish": "Spanish",
        "mejs.swahili": "Swahili",
        "mejs.swedish": "Swedish",
        "mejs.tagalog": "Tagalog",
        "mejs.thai": "Thai",
        "mejs.turkish": "Turkish",
        "mejs.ukrainian": "Ukrainian",
        "mejs.vietnamese": "Vietnamese",
        "mejs.welsh": "Welsh",
        "mejs.yiddish": "Yiddish"
    }
};</script>
<script id="mediaelement-core-js" src="./styles/UserAccountBookings/mediaelement-and-player.min.js"
        type="text/javascript"></script>
<script id="mediaelement-migrate-js" src="./styles/UserAccountBookings/mediaelement-migrate.min.js"
        type="text/javascript"></script>
<script id="mediaelement-js-extra" type="text/javascript">var _wpmejsSettings = {
    "pluginPath": "\/meup\/wp-includes\/js\/mediaelement\/",
    "classPrefix": "mejs-",
    "stretching": "responsive"
};</script>
<script id="wp-mediaelement-js" src="./styles/UserAccountBookings/wp-mediaelement.min.js"
        type="text/javascript"></script>
<script id="wp-api-request-js-extra" type="text/javascript">var wpApiSettings = {
    "root": "https:\/\/ovatheme.com\/meup\/wp-json\/",
    "nonce": "c9993dcbb0",
    "versionString": "wp\/v2\/"
};</script>
<script id="wp-api-request-js" src="./styles/UserAccountBookings/api-request.min.js" type="text/javascript"></script>
<script id="wp-dom-ready-js" src="./styles/UserAccountBookings/dom-ready.min.js" type="text/javascript"></script>
<script id="wp-hooks-js" src="./styles/UserAccountBookings/hooks.min.js" type="text/javascript"></script>
<script id="wp-i18n-js" src="./styles/UserAccountBookings/i18n.min.js" type="text/javascript"></script>
<script id="wp-i18n-js-after"
        type="text/javascript">wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});</script>
<script id="wp-a11y-js-translations" type="text/javascript">(function (domain, translations) {
    var localeData = translations.locale_data[domain] || translations.locale_data.messages;
    localeData[""].domain = domain;
    wp.i18n.setLocaleData(localeData, domain);
})("default", {"locale_data": {"messages": {"": {}}}});</script>
<script id="wp-a11y-js" src="./styles/UserAccountBookings/a11y.min.js" type="text/javascript"></script>
<script id="clipboard-js" src="./styles/UserAccountBookings/clipboard.min.js" type="text/javascript"></script>
<script id="media-views-js-extra" type="text/javascript">var _wpMediaViewsL10n = {
    "mediaFrameDefaultTitle": "Media",
    "url": "URL",
    "addMedia": "Add media",
    "search": "Search",
    "select": "Select",
    "cancel": "Cancel",
    "update": "Update",
    "replace": "Replace",
    "remove": "Remove",
    "back": "Back",
    "selected": "%d selected",
    "dragInfo": "Drag and drop to reorder media files.",
    "uploadFilesTitle": "Upload files",
    "uploadImagesTitle": "Upload images",
    "mediaLibraryTitle": "Media Library",
    "insertMediaTitle": "Add media",
    "createNewGallery": "Create a new gallery",
    "createNewPlaylist": "Create a new playlist",
    "createNewVideoPlaylist": "Create a new video playlist",
    "returnToLibrary": "\u2190 Go to library",
    "allMediaItems": "All media items",
    "allDates": "All dates",
    "noItemsFound": "No items found.",
    "insertIntoPost": "Insert into post",
    "unattached": "Unattached",
    "mine": "Mine",
    "trash": "Trash",
    "uploadedToThisPost": "Uploaded to this post",
    "warnDelete": "You are about to permanently delete this item from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.",
    "warnBulkDelete": "You are about to permanently delete these items from your site.\nThis action cannot be undone.\n 'Cancel' to stop, 'OK' to delete.",
    "warnBulkTrash": "You are about to trash these items.\n  'Cancel' to stop, 'OK' to delete.",
    "bulkSelect": "Bulk select",
    "trashSelected": "Move to Trash",
    "restoreSelected": "Restore from Trash",
    "deletePermanently": "Delete permanently",
    "apply": "Apply",
    "filterByDate": "Filter by date",
    "filterByType": "Filter by type",
    "searchLabel": "Search",
    "searchMediaLabel": "Search media",
    "searchMediaPlaceholder": "Search media items...",
    "mediaFound": "Number of media items found: %d",
    "mediaFoundHasMoreResults": "Number of media items displayed: %d. Scroll the page for more results.",
    "noMedia": "No media items found.",
    "noMediaTryNewSearch": "No media items found. Try a different search.",
    "attachmentDetails": "Attachment details",
    "insertFromUrlTitle": "Insert from URL",
    "setFeaturedImageTitle": "Featured image",
    "setFeaturedImage": "Set featured image",
    "createGalleryTitle": "Create gallery",
    "editGalleryTitle": "Edit gallery",
    "cancelGalleryTitle": "\u2190 Cancel gallery",
    "insertGallery": "Insert gallery",
    "updateGallery": "Update gallery",
    "addToGallery": "Add to gallery",
    "addToGalleryTitle": "Add to gallery",
    "reverseOrder": "Reverse order",
    "imageDetailsTitle": "Image details",
    "imageReplaceTitle": "Replace image",
    "imageDetailsCancel": "Cancel edit",
    "editImage": "Edit image",
    "chooseImage": "Choose image",
    "selectAndCrop": "Select and crop",
    "skipCropping": "Skip cropping",
    "cropImage": "Crop image",
    "cropYourImage": "Crop your image",
    "cropping": "Cropping\u2026",
    "suggestedDimensions": "Suggested image dimensions: %1$s by %2$s pixels.",
    "cropError": "There has been an error cropping your image.",
    "audioDetailsTitle": "Audio details",
    "audioReplaceTitle": "Replace audio",
    "audioAddSourceTitle": "Add audio source",
    "audioDetailsCancel": "Cancel edit",
    "videoDetailsTitle": "Video details",
    "videoReplaceTitle": "Replace video",
    "videoAddSourceTitle": "Add video source",
    "videoDetailsCancel": "Cancel edit",
    "videoSelectPosterImageTitle": "Select poster image",
    "videoAddTrackTitle": "Add subtitles",
    "playlistDragInfo": "Drag and drop to reorder tracks.",
    "createPlaylistTitle": "Create audio playlist",
    "editPlaylistTitle": "Edit audio playlist",
    "cancelPlaylistTitle": "\u2190 Cancel audio playlist",
    "insertPlaylist": "Insert audio playlist",
    "updatePlaylist": "Update audio playlist",
    "addToPlaylist": "Add to audio playlist",
    "addToPlaylistTitle": "Add to Audio Playlist",
    "videoPlaylistDragInfo": "Drag and drop to reorder videos.",
    "createVideoPlaylistTitle": "Create video playlist",
    "editVideoPlaylistTitle": "Edit video playlist",
    "cancelVideoPlaylistTitle": "\u2190 Cancel video playlist",
    "insertVideoPlaylist": "Insert video playlist",
    "updateVideoPlaylist": "Update video playlist",
    "addToVideoPlaylist": "Add to video playlist",
    "addToVideoPlaylistTitle": "Add to video Playlist",
    "filterAttachments": "Filter media",
    "attachmentsList": "Media list",
    "settings": {
        "tabs": [],
        "tabUrl": "https:\/\/ovatheme.com\/meup\/wp-admin\/media-upload.php?chromeless=1",
        "mimeTypes": {
            "image": "Images",
            "audio": "Audio",
            "video": "Video",
            "application\/msword,application\/vnd.openxmlformats-officedocument.wordprocessingml.document,application\/vnd.ms-word.document.macroEnabled.12,application\/vnd.ms-word.template.macroEnabled.12,application\/vnd.oasis.opendocument.text,application\/vnd.apple.pages,application\/pdf,application\/vnd.ms-xpsdocument,application\/oxps,application\/rtf,application\/wordperfect,application\/octet-stream": "Documents",
            "application\/vnd.apple.numbers,application\/vnd.oasis.opendocument.spreadsheet,application\/vnd.ms-excel,application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application\/vnd.ms-excel.sheet.macroEnabled.12,application\/vnd.ms-excel.sheet.binary.macroEnabled.12": "Spreadsheets",
            "application\/x-gzip,application\/rar,application\/x-tar,application\/zip,application\/x-7z-compressed": "Archives",
            "avatar": "Avatar"
        },
        "captions": true,
        "nonce": {"sendToEditor": "d06329dc1d"},
        "post": {"id": 0},
        "defaultProps": {"link": "none", "align": "", "size": ""},
        "attachmentCounts": {"audio": 1, "video": 1},
        "oEmbedProxyUrl": "https:\/\/ovatheme.com\/meup\/wp-json\/oembed\/1.0\/proxy",
        "embedExts": ["mp3", "ogg", "flac", "m4a", "wav", "mp4", "m4v", "webm", "ogv", "flv"],
        "embedMimes": [],
        "contentWidth": null,
        "months": [{"year": "2021", "month": "7", "text": "July 2021"}, {
            "year": "2021",
            "month": "6",
            "text": "June 2021"
        }, {"year": "2021", "month": "5", "text": "May 2021"}, {
            "year": "2021",
            "month": "4",
            "text": "April 2021"
        }, {"year": "2020", "month": "4", "text": "April 2020"}, {
            "year": "2019",
            "month": "10",
            "text": "October 2019"
        }, {"year": "2019", "month": "9", "text": "September 2019"}, {
            "year": "2019",
            "month": "8",
            "text": "August 2019"
        }, {"year": "2019", "month": "7", "text": "July 2019"}, {"year": "2019", "month": "6", "text": "June 2019"}],
        "mediaTrash": 0
    }
};</script>
<script id="media-views-js-translations" type="text/javascript">(function (domain, translations) {
    var localeData = translations.locale_data[domain] || translations.locale_data.messages;
    localeData[""].domain = domain;
    wp.i18n.setLocaleData(localeData, domain);
})("default", {"locale_data": {"messages": {"": {}}}});</script>
<script id="media-views-js" src="./styles/UserAccountBookings/media-views.min.js" type="text/javascript"></script>
<script id="media-editor-js-translations" type="text/javascript">(function (domain, translations) {
    var localeData = translations.locale_data[domain] || translations.locale_data.messages;
    localeData[""].domain = domain;
    wp.i18n.setLocaleData(localeData, domain);
})("default", {"locale_data": {"messages": {"": {}}}});</script>
<script id="media-editor-js" src="./styles/UserAccountBookings/media-editor.min.js" type="text/javascript"></script>
<script id="media-audiovideo-js" src="./styles/UserAccountBookings/media-audiovideo.min.js"
        type="text/javascript"></script>
<script id="jquery-ui-draggable-js" src="./styles/UserAccountBookings/draggable.min.js" type="text/javascript"></script>
<script id="jquery-ui-slider-js" src="./styles/UserAccountBookings/slider.min.js" type="text/javascript"></script>
<script id="jquery-touch-punch-js" src="./styles/UserAccountBookings/autoptimize_single_4cc86d1003c45134d6838f13e3885db1.js"
        type="text/javascript"></script>
<script id="iris-js" src="./styles/UserAccountBookings/iris.min.js" type="text/javascript"></script>
<script id="wp-color-picker-js-extra" type="text/javascript">var wpColorPickerL10n = {
    "clear": "Clear",
    "defaultString": "Default",
    "pick": "Select Color",
    "current": "Current Color"
};</script>
<script id="wp-color-picker-js" src="./styles/UserAccountBookings/color-picker.min.js" type="text/javascript"></script>
<script id="google-js" src="./styles/UserAccountBookings/js" type="text/javascript"></script>
<script id="google-marker-js" src="./styles/UserAccountBookings/autoptimize_single_b3288ceb3ec27947e85dbbc430025f23.js"
        type="text/javascript"></script>
<script id="tooltip-js" src="./styles/UserAccountBookings/tooltip.min.js" type="text/javascript"></script>
<script id="el_validate-js" src="./styles/UserAccountBookings/jquery.validate.min.js" type="text/javascript"></script>
<script id="el_flot-js" src="./styles/UserAccountBookings/autoptimize_single_89bc8ea971e99653717fa69a73d70bb4.js"
        type="text/javascript"></script>
<script id="el_flot_pie-js" src="./styles/UserAccountBookings/autoptimize_single_62dbbef98865feaa20a7f936c56ab931.js"
        type="text/javascript"></script>
<script id="el_flot_resize-js" src="./styles/UserAccountBookings/autoptimize_single_826b0d2739932ac103bf420dbadd048e.js"
        type="text/javascript"></script>
<script id="el_flot_stack-js" src="./styles/UserAccountBookings/autoptimize_single_76945205e6094cc16871aef9b27606d7.js"
        type="text/javascript"></script>
<script id="el_flot_time-js" src="./styles/UserAccountBookings/autoptimize_single_6a49d955cbc76f5c2fecce8a185f6291.js"
        type="text/javascript"></script>
<script id="jquery-ui-datepicker-js" src="./styles/UserAccountBookings/datepicker.min.js"
        type="text/javascript"></script>
<script id="jquery-ui-datepicker-js-after" type="text/javascript">jQuery(document).ready(function (jQuery) {
    jQuery.datepicker.setDefaults({
        "closeText": "Close",
        "currentText": "Today",
        "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        "nextText": "Next",
        "prevText": "Previous",
        "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
        "dateFormat": "MM d, yy",
        "firstDay": 1,
        "isRTL": false
    });
});</script>
<script id="datepicker-lang-js" src="./styles/UserAccountBookings/autoptimize_single_4b769cafd6b65a845a9f7f52ba3c6d7a.js"
        type="text/javascript"></script>
<script id="jquery-ui-tabs-js" src="./styles/UserAccountBookings/tabs.min.js" type="text/javascript"></script>
<script id="jquery-ui-menu-js" src="./styles/UserAccountBookings/menu.min.js" type="text/javascript"></script>
<script id="jquery-ui-autocomplete-js-extra" type="text/javascript">var uiAutocompleteL10n = {
    "noResults": "No results found.",
    "oneResult": "1 result found. Use up and down arrow keys to navigate.",
    "manyResults": "%d results found. Use up and down arrow keys to navigate.",
    "itemSelected": "Item selected."
};</script>
<script id="jquery-ui-autocomplete-js" src="./styles/UserAccountBookings/autocomplete.min.js"
        type="text/javascript"></script>
<script id="jquery-timepicker-js" src="./styles/UserAccountBookings/jquery.timepicker.min.js"
        type="text/javascript"></script>
<script id="el_script_admin-js" src="./styles/UserAccountBookings/admin.min.js" type="text/javascript"></script>
<script id="select2-js" src="./styles/UserAccountBookings/select2.full.min.js" type="text/javascript"></script>
<script id="el_frontend-js-extra"
        type="text/javascript">var ajax_object = {"ajax_url": "https:\/\/ovatheme.com\/meup\/wp-admin\/admin-ajax.php"};</script>
<script id="el_frontend-js" src="./styles/UserAccountBookings/script.min.js" type="text/javascript"></script>
<script id="script-eventlist-elementor-js" src="./styles/UserAccountBookings/autoptimize_single_bde3ef153ef9af42e6d47799763a7640.js"
        type="text/javascript"></script>
<script id="bootstrap-js" src="./styles/UserAccountBookings/bootstrap.bundle.min.js" type="text/javascript"></script>
<script id="meup-script-js" src="./styles/UserAccountBookings/autoptimize_single_f8f19ecc1b41a55f504fd1010e328e15.js"
        type="text/javascript"></script>
<script id="prettyphoto-js" src="./styles/UserAccountBookings/autoptimize_single_85c4beefac54b2cedfb6d98d753bc926.js"
        type="text/javascript"></script>
<script id="wp-embed-js" src="./styles/UserAccountBookings/wp-embed.min.js" type="text/javascript"></script>
<script id="script-elementor-js" src="./styles/UserAccountBookings/autoptimize_single_0965b41abff22e79d7548d3890ead528.js"
        type="text/javascript"></script>
<script id="elementor-webpack-runtime-js" src="./styles/UserAccountBookings/webpack.runtime.min.js"
        type="text/javascript"></script>
<script id="elementor-frontend-modules-js" src="./styles/UserAccountBookings/frontend-modules.min.js"
        type="text/javascript"></script>
<script id="elementor-waypoints-js" src="./styles/UserAccountBookings/waypoints.min.js" type="text/javascript"></script>
<script id="swiper-js" src="./styles/UserAccountBookings/swiper.min.js" type="text/javascript"></script>
<script id="share-link-js" src="./styles/UserAccountBookings/share-link.min.js" type="text/javascript"></script>
<script id="elementor-dialog-js" src="./styles/UserAccountBookings/dialog.min.js" type="text/javascript"></script>
<script id="elementor-frontend-js-before" type="text/javascript">var elementorFrontendConfig = {
    "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
    "i18n": {
        "shareOnFacebook": "Share on Facebook",
        "shareOnTwitter": "Share on Twitter",
        "pinIt": "Pin it",
        "download": "Download",
        "downloadImage": "Download image",
        "fullscreen": "Fullscreen",
        "zoom": "Zoom",
        "share": "Share",
        "playVideo": "Play Video",
        "previous": "Previous",
        "next": "Next",
        "close": "Close"
    },
    "is_rtl": false,
    "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
    "responsive": {
        "breakpoints": {
            "mobile": {"label": "Mobile", "value": 767, "direction": "max", "is_enabled": true},
            "mobile_extra": {"label": "Mobile Extra", "value": 880, "direction": "max", "is_enabled": false},
            "tablet": {"label": "Tablet", "value": 1024, "direction": "max", "is_enabled": true},
            "tablet_extra": {"label": "Tablet Extra", "value": 1365, "direction": "max", "is_enabled": false},
            "laptop": {"label": "Laptop", "value": 1620, "direction": "max", "is_enabled": false},
            "widescreen": {"label": "Widescreen", "value": 2400, "direction": "min", "is_enabled": false}
        }
    },
    "version": "3.2.3",
    "is_static": false,
    "experimentalFeatures": [],
    "urls": {"assets": "https:\/\/ovatheme.com\/meup\/wp-content\/plugins\/elementor\/assets\/"},
    "settings": {"page": [], "editorPreferences": []},
    "kit": {
        "global_image_lightbox": "yes",
        "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
        "lightbox_enable_counter": "yes",
        "lightbox_enable_fullscreen": "yes",
        "lightbox_enable_zoom": "yes",
        "lightbox_enable_share": "yes",
        "lightbox_title_src": "title",
        "lightbox_description_src": "description"
    },
    "post": {
        "id": 407,
        "title": "Member%20Account%20%E2%80%93%20MeUp%20%E2%80%93%20Listing%20Marketplace%20Events%20WordPress%20Theme",
        "excerpt": "",
        "featuredImage": false
    },
    "user": {"roles": ["subscriber"]}
};</script>
<script id="elementor-frontend-js" src="./styles/UserAccountBookings/frontend.min.js" type="text/javascript"></script>
<span class="elementor-screen-only" id="elementor-device-mode"></span>
<script id="preloaded-modules-js" src="./styles/UserAccountBookings/preloaded-modules.min.js"
        type="text/javascript"></script>
<script type="text/javascript">(function (undefined) {
    var _targetWindow = "prefer-popup";
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
    });
})();</script>
<p class="a11y-speak-intro-text" hidden="hidden"
   id="a11y-speak-intro-text"
   style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;">Notifications</p>
<div aria-atomic="true" aria-live="assertive"
     aria-relevant="additions text"
     class="a11y-speak-region" id="a11y-speak-assertive" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"></div>
<div aria-atomic="true" aria-live="polite"
     aria-relevant="additions text"
     class="a11y-speak-region" id="a11y-speak-polite" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"></div>
<a href="https://ovatheme.com/meup/member-account/?vendor=mybookings#top" id="scrollUp"
   style="display: none; position: fixed; z-index: 998;"
   title="&lt;i class=&quot;fas fa-angle-up&quot;&gt;&lt;/i&gt;"><i class="fas fa-angle-up"></i></a></body>
</html>