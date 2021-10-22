<!DOCTYPE html>
<!-- saved from url=(0034)https://ovatheme.com/meup/contact/ -->
<html lang="en-US">
<?php
include("./functions/connection.php");
include("./functions/event_pull.php");
session_start();
$connect=connection();

?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://ovatheme.com/meup/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link media="all" href="./styles/ContactUs/autoptimize_839c85a23fb01217a2f0fb3e094b743e.css" rel="stylesheet">
    <link media="only screen and (max-width: 768px)"
          href="./styles/ContactUs/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
    <title>Contact – MeUp – Listing Marketplace Events WordPress Theme</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="https://ovatheme.com/">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link href="https://cdn.shortpixel.ai/" rel="preconnect">
    <link rel="alternate" type="application/rss+xml" title="MeUp - Listing Marketplace Events WordPress Theme » Feed"
          href="https://ovatheme.com/meup/feed/">
    <link rel="alternate" type="application/rss+xml"
          title="MeUp - Listing Marketplace Events WordPress Theme » Comments Feed"
          href="https://ovatheme.com/meup/comments/feed/">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://ovatheme.com/meup/contact/">
    <meta property="og:site_name" content="MeUp - Listing Marketplace Events WordPress Theme">
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
    <script src="./styles/ContactUs/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
    <link rel="stylesheet" id="ova-google-fonts-css" href="./styles/ContactUs/css" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="./styles/ContactUs/css(1)" type="text/css" media="all">
    <script type="text/javascript">window._nslDOMReady = function (callback) {
        if (document.readyState === "complete" || document.readyState === "interactive") {
            callback();
        } else {
            document.addEventListener("DOMContentLoaded", callback);
        }
    };</script>
    <script type="text/javascript" src="./styles/ContactUs/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="./styles/ContactUs/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="./styles/ContactUs/v4-shims.min.js" id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="https://ovatheme.com/meup/wp-json/">
    <link rel="alternate" type="application/json" href="https://ovatheme.com/meup/wp-json/wp/v2/pages/291">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ovatheme.com/meup/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://ovatheme.com/meup/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.7.2">
    <meta name="generator" content="WooCommerce 5.5.1">
    <link rel="canonical" href="https://ovatheme.com/meup/contact/">
    <link rel="shortlink" href="https://ovatheme.com/meup/?p=291">
    <link rel="alternate" type="application/json+oembed"
          href="https://ovatheme.com/meup/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fmeup%2Fcontact%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="https://ovatheme.com/meup/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fmeup%2Fcontact%2F&amp;format=xml">
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










<body class="page-template page-template-elementor_header_footer page page-id-291 theme-meup woocommerce-js elementor-default elementor-template-full-width elementor-kit-5045 elementor-page elementor-page-291 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
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
                                                    <img src="./styles/ContactUs/Asset-8.svg"
                                                         alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                         class="desk-logo d-none d-xl-block"> <img
                                                        src="./styles/ContactUs/Asset-8.svg"
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="mobile-logo d-block d-xl-none"> <img
                                                        src="./styles/ContactUs/Asset-8.svg"
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
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-91 dropdown">
                                                                        <a title="Home"
                                                                           href="./Home.php">Home<i
                                                                                class=""></i></a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <li id="menu-item-3316"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3316 dropdown">
                                                                        <a title="Listing"
                                                                           href="./Category.php">Category<i
                                                                                class=""></i></a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <li id="menu-item-251"
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-251 dropdown">
                                                                        <a title="Page"
                                                                           href="./ContactUs.php">Contact<i
                                                                                class=""></i></a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <li id="menu-item-1463"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1463 dropdown">
                                                                        <a title="Blog"
                                                                           href="./AboutUs.php">About Us<i
                                                                                class=""></i></a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class=""></i></button>
                                                                    </li>
                                                                    <?php
                                                                    if(isset($_SESSION['id'])){
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
                                            <div class="elementor-element elementor-element-638886d elementor-widget__width-auto elementor-widget elementor-widget-ova_menu_account"
                                                 data-id="638886d" data-element_type="widget"
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
                                                </div>
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
                                                                class="second_font header_title"> Contact</h1>
                                                            <div class="ovatheme_breadcrumbs ovatheme_breadcrumbs_el">
                                                                <div id="breadcrumbs">
                                                                    <ul class="breadcrumb">
                                                                        <li>
                                                                            <a href="https://ovatheme.com/meup/">Home</a>
                                                                        </li>
                                                                        <li class="li_separator"><span
                                                                                class="separator"></span></li>
                                                                        <li>Contact</li>
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
    <div data-elementor-type="wp-post" data-elementor-id="291" class="elementor elementor-291"
         data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-dcd2521 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="dcd2521" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c09a088"
                                 data-id="c09a088" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-2e8f01c elementor-widget elementor-widget-ova_heading"
                                             data-id="2e8f01c" data-element_type="widget"
                                             data-widget_type="ova_heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-heading"><h3 class="title second_font">Contact Info</h3>
                                                    <span class="line "></span></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ee19d7b elementor-widget elementor-widget-heading"
                                             data-id="ee19d7b" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><p
                                                    class="elementor-heading-title elementor-size-default">Contattaci per qualsiasi problema o dubbio!</p></div>
                                        </div>
                                        <div class="elementor-element elementor-element-1550731 second_fond elementor-widget elementor-widget-ova_contact"
                                             data-id="1550731" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="flaticon-phone"></i></div>
                                                    <div class="address"><span><a
                                                            href="tel:+01101234567">(+011) 01234567</a></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-878c976 second_fond elementor-widget elementor-widget-ova_contact"
                                             data-id="878c976" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="flaticon-e-mail-envelope"></i></div>
                                                    <div class="address"><span><a href="mailto:meupcontact@info.com">meupcontact@info.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9405531 second_fond elementor-widget elementor-widget-ova_contact"
                                             data-id="9405531" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="flaticon-unlink"></i></div>
                                                    <div class="address"><span><a href="https://domain.com/">www.domain.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8e91dc4 second_fond elementor-widget elementor-widget-ova_contact"
                                             data-id="8e91dc4" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="flaticon-placeholder"></i></div>
                                                    <div class="address"><span>Chinatown, San Francisco, CA</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6572f17 elementor-widget elementor-widget-google_maps" data-id="6572f17" data-element_type="widget" data-widget_type="google_maps.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-custom-embed">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1576.4157842672057!2d-122.40928269138598!3d37.79398685104081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c9546ef19%3A0xe787bf9d32acfede!2s920%20Sacramento%20St%2C%20San%20Francisco%2C%20CA%2094108%2C%20Stati%20Uniti!5e0!3m2!1sit!2sit!4v1626538019393!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-179b522"
                                 data-id="179b522" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bf6f9fc elementor-widget elementor-widget-ova_heading"
                                             data-id="bf6f9fc" data-element_type="widget"
                                             data-widget_type="ova_heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-heading"><h3 class="title second_font">Get In Touch</h3>
                                                    <span class="line "></span></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d364b7f elementor-widget elementor-widget-shortcode"
                                             data-id="d364b7f" data-element_type="widget"
                                             data-widget_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div role="form"  lang="en-US"
                                                         dir="ltr">
                                                        <div class="screen-reader-response"><p role="status"
                                                                                               aria-live="polite"
                                                                                               aria-atomic="true"></p>
                                                            <ul></ul>
                                                        </div>
                                                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                                                            <div class="meup-contact-form-1">
                                                                <div class="input"><i class="fa fa-user-o"></i><input
                                                                        type="text" name="nome" value="" size="40"
                                                                        placeholder="Type your name here"></span></div>
                                                                <div class="input"><i class="fa fa-envelope-o"></i><input
                                                                        type="email" name="email" value=""
                                                                        size="40"
                                                                        placeholder="Your email"></span></div>

                                                                <div class="input"><textarea
                                                                        name="messaggio" cols="40" rows="10"
                                                                        placeholder="Your message"></textarea></span>
                                                                </div>
                                                                <input type="submit" value="Send Message" name="invio"
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
                                                            href="https://ovatheme.com/meup/contact/#"> <img
                                                            src="./styles/ContactUs/Asset-9.svg"
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
                                                                class="elementor-icon-list-text">Contact Us</span> </a>
                                                        </li>
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
                                                                href="https://ovatheme.com/meup/contact/#">San Francisco City Hall, San Francisco, CA</a></span>
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
                                                            src="./styles/ContactUs/apple-store-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
                                                            title="apple-store" alt="apple-store"></div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-059c2f8 elementor-widget elementor-widget-image"
                                                 data-id="059c2f8" data-element_type="widget"
                                                 data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image"><img
                                                            src="./styles/ContactUs/google_play-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
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
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-48367da elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                 data-id="48367da" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><span
                                                        class="elementor-heading-title elementor-size-default"><a
                                                        href="https://ovatheme.com/meup/contact/#">Terms of use</a></span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7ce4c95 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                 data-id="7ce4c95" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><span
                                                        class="elementor-heading-title elementor-size-default"><a
                                                        href="https://ovatheme.com/meup/contact/#">|</a></span></div>
                                            </div>
                                            <div class="elementor-element elementor-element-edb059b elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                 data-id="edb059b" data-element_type="widget"
                                                 data-widget_type="heading.default">
                                                <div class="elementor-widget-container"><span
                                                        class="elementor-heading-title elementor-size-default"><a
                                                        href="https://ovatheme.com/meup/contact/#">Privacy policy</a></span>
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
<script type="text/javascript">(function () {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})();</script>
<link rel="stylesheet" id="google-fonts-2-css" href="./styles/ContactUs/css(2)" type="text/css" media="all">
<script type="text/javascript" src="./styles/ContactUs/wp-polyfill.min.js" id="wp-polyfill-js"></script>
<script type="text/javascript"
        id="wp-polyfill-js-after">('fetch' in window) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>');
(document.contains) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>');
(window.DOMRect) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>');
(window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>');
(window.FormData && window.FormData.prototype.keys) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>');
(Element.prototype.matches && Element.prototype.closest) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>');
('objectFit' in document.documentElement.style) || document.write('<script src="https://ovatheme.com/meup/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>');</script>
<script type="text/javascript" id="contact-form-7-js-extra">var wpcf7 = {
    "api": {
        "root": "https:\/\/ovatheme.com\/meup\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    }, "cached": "1"
};</script>
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_6ad9165b167d54947b37f4b9de75ab39.js"
        id="contact-form-7-js"></script>
<script type="text/javascript" src="./styles/ContactUs/image-map-pro.min.js" id="image-map-pro-dist-js-js"></script>
<script type="text/javascript" src="./styles/ContactUs/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">var wc_add_to_cart_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%",
    "i18n_view_cart": "View cart",
    "cart_url": "https:\/\/ovatheme.com\/meup\/cart\/",
    "is_cart": "",
    "cart_redirect_after_add": "no"
};</script>
<script type="text/javascript" src="./styles/ContactUs/add-to-cart.min.js" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="./styles/ContactUs/js.cookie.min.js" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">var woocommerce_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%"
};</script>
<script type="text/javascript" src="./styles/ContactUs/woocommerce.min.js" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">var wc_cart_fragments_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_d71891be86889718f0e13c2f3acada41",
    "fragment_name": "wc_fragments_d71891be86889718f0e13c2f3acada41",
    "request_timeout": "5000"
};</script>
<script type="text/javascript" src="./styles/ContactUs/cart-fragments.min.js" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_d12035cd792428533b661744dbb9ddc9.js"
        id="login-script-js"></script>
<script type="text/javascript" src="./styles/ContactUs/core.min.js" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="./styles/ContactUs/datepicker.min.js" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">jQuery(document).ready(function (jQuery) {
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
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_4b769cafd6b65a845a9f7f52ba3c6d7a.js"
        id="datepicker-lang-js"></script>
<script type="text/javascript" src="./styles/ContactUs/tabs.min.js" id="jquery-ui-tabs-js"></script>
<script type="text/javascript" src="./styles/ContactUs/menu.min.js" id="jquery-ui-menu-js"></script>
<script type="text/javascript" src="./styles/ContactUs/dom-ready.min.js" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="./styles/ContactUs/hooks.min.js" id="wp-hooks-js"></script>
<script type="text/javascript" src="./styles/ContactUs/i18n.min.js" id="wp-i18n-js"></script>
<script type="text/javascript"
        id="wp-i18n-js-after">wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});</script>
<script type="text/javascript" id="wp-a11y-js-translations">(function (domain, translations) {
    var localeData = translations.locale_data[domain] || translations.locale_data.messages;
    localeData[""].domain = domain;
    wp.i18n.setLocaleData(localeData, domain);
})("default", {"locale_data": {"messages": {"": {}}}});</script>
<script type="text/javascript" src="./styles/ContactUs/a11y.min.js" id="wp-a11y-js"></script>
<script type="text/javascript" id="jquery-ui-autocomplete-js-extra">var uiAutocompleteL10n = {
    "noResults": "No results found.",
    "oneResult": "1 result found. Use up and down arrow keys to navigate.",
    "manyResults": "%d results found. Use up and down arrow keys to navigate.",
    "itemSelected": "Item selected."
};</script>
<script type="text/javascript" src="./styles/ContactUs/autocomplete.min.js" id="jquery-ui-autocomplete-js"></script>
<script type="text/javascript" src="./styles/ContactUs/mouse.min.js" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="./styles/ContactUs/slider.min.js" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="./styles/ContactUs/jquery.timepicker.min.js" id="jquery-timepicker-js"></script>
<script type="text/javascript" src="./styles/ContactUs/select2.full.min.js" id="select2-js"></script>
<script type="text/javascript"
        id="el_frontend-js-extra">var ajax_object = {"ajax_url": "https:\/\/ovatheme.com\/meup\/wp-admin\/admin-ajax.php"};</script>
<script type="text/javascript" src="./styles/ContactUs/script.min.js" id="el_frontend-js"></script>
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_bde3ef153ef9af42e6d47799763a7640.js"
        id="script-eventlist-elementor-js"></script>
<script type="text/javascript" src="./styles/ContactUs/bootstrap.bundle.min.js" id="bootstrap-js"></script>
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_f8f19ecc1b41a55f504fd1010e328e15.js"
        id="meup-script-js"></script>
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_85c4beefac54b2cedfb6d98d753bc926.js"
        id="prettyphoto-js"></script>
<script type="text/javascript" src="./styles/ContactUs/wp-embed.min.js" id="wp-embed-js"></script>
<script type="text/javascript" src="./styles/ContactUs/autoptimize_single_0965b41abff22e79d7548d3890ead528.js"
        id="script-elementor-js"></script>
<script type="text/javascript" src="./styles/ContactUs/webpack.runtime.min.js"
        id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./styles/ContactUs/frontend-modules.min.js"
        id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="./styles/ContactUs/waypoints.min.js" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="./styles/ContactUs/swiper.min.js" id="swiper-js"></script>
<script type="text/javascript" src="./styles/ContactUs/share-link.min.js" id="share-link-js"></script>
<script type="text/javascript" src="./styles/ContactUs/dialog.min.js" id="elementor-dialog-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">var elementorFrontendConfig = {
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
            "mobile": {
                "label": "Mobile",
                "value": 767,
                "direction": "max",
                "is_enabled": true,
                "default_value": 767
            },
            "mobile_extra": {
                "label": "Mobile Extra",
                "value": 880,
                "direction": "max",
                "is_enabled": false,
                "default_value": 880
            },
            "tablet": {"label": "Tablet", "value": 1024, "direction": "max", "is_enabled": true, "default_value": 1024},
            "tablet_extra": {
                "label": "Tablet Extra",
                "value": 1365,
                "direction": "max",
                "is_enabled": false,
                "default_value": 1365
            },
            "laptop": {
                "label": "Laptop",
                "value": 1620,
                "direction": "max",
                "is_enabled": false,
                "default_value": 1620
            },
            "widescreen": {
                "label": "Widescreen",
                "value": 2400,
                "direction": "min",
                "is_enabled": false,
                "default_value": 2400
            }
        }
    },
    "version": "3.3.0",
    "is_static": false,
    "experimentalFeatures": {
        "e_import_export": true,
        "landing-pages": true,
        "elements-color-picker": true,
        "admin-top-bar": true
    },
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
        "id": 291,
        "title": "Contact%20%E2%80%93%20MeUp%20%E2%80%93%20Listing%20Marketplace%20Events%20WordPress%20Theme",
        "excerpt": "",
        "featuredImage": false
    }
};</script>
<script type="text/javascript" src="./styles/ContactUs/frontend.min.js" id="elementor-frontend-js"></script>
<span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./styles/ContactUs/preloaded-modules.min.js" id="preloaded-modules-js"></script>
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

                if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                    return "Opera";
                } else if (/CriOS/.test(ua)) {
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
                if (browser === "Opera") {
                    return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera Mini/") :
                        / OPR/.test(ua) ? _getVersion(ua, " OPR/") :
                            _getVersion(ua, " OPT/");
                } else if (browser === "Chrome for iOS") {
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
        if (ua.match(new RegExp([
            'Instagram',
            'FBAV',
            'FBAN',
            'Line',
        ].join('|')))) {
            return true;
        }

        return false;
    }

    window._nslDOMReady(function () {

        window.nslRedirect = function (url) {
            var overlay = document.createElement('div');
            overlay.style.cssText = "position:fixed;z-index:1000000;left:0;top:0;width:100%;height:100%;";
            document.body.appendChild(overlay);
            window.location = url;
        };

        var targetWindow = _targetWindow || 'prefer-popup',
            lastPopup = false;


        var buttonLinks = document.querySelectorAll(' a[data-plugin="nsl"][data-action="connect"], a[data-plugin="nsl"][data-action="link"]');
        buttonLinks.forEach(function (buttonLink) {
            buttonLink.addEventListener('click', function (e) {
                if (lastPopup && !lastPopup.closed) {
                    e.preventDefault();
                    lastPopup.focus();
                } else {

                    var href = this.href,
                        success = false;
                    if (href.indexOf('?') !== -1) {
                        href += '&';
                    } else {
                        href += '?';
                    }

                    var redirectTo = this.dataset.redirect;
                    if (redirectTo === 'current') {
                        href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                    } else if (redirectTo && redirectTo !== '') {
                        href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                    }

                    if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                        targetWindow = 'prefer-same-window';
                    }

                    if (targetWindow === 'prefer-popup') {
                        lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', this.dataset.popupwidth, this.dataset.popupheight);
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
        });

        var googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
        if (googleLoginButtons.length && checkWebView() && !isAllowedWebViewForUserAgent()) {
            googleLoginButtons.forEach(function (googleLoginButton) {
                googleLoginButton.remove();
            });
        }
    });
})();</script>

<?php


if (isset($_POST["invio"])) {
    $nome = $_POST["nome"];
    $messaggio = $_POST["messaggio"];

    $email = $_POST["email"];
    $query = "INSERT into email_ricevute VALUES (NULL, '$nome', '$email', '$messaggio')";
    $dati = mysqli_query($connect, $query);
    //echo("error: " . mysqli_error($connect));

}


?>











<!-- Dynamic page generated in 1.250 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2021-07-15 10:48:28 -->

<!-- Compression = gzip --><p id="a11y-speak-intro-text" class="a11y-speak-intro-text"
                              style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
                              hidden="hidden">Notifications</p>
<div id="a11y-speak-assertive" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>
<div id="a11y-speak-polite" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>
<a id="scrollUp" href="https://ovatheme.com/meup/contact/#top"
   title="&lt;i class=&quot;fas fa-angle-up&quot;&gt;&lt;/i&gt;"
   style="display: none; position: fixed; z-index: 998;"><i class="fas fa-angle-up"></i></a></body>
</html>