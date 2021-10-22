<!DOCTYPE html>
<!-- saved from url=(0062)https://ovatheme.com/meup/event/functional-properties-of-food/ -->
<html lang="en-US">
<head>
    <?php
    include("./functions/connection.php");
    include("./functions/event_pull.php");
    session_start();
    $connect=connection();
    $ide=$_GET["id"];
    if(isset($_SESSION["id"])){
         $idu=$_SESSION["id"];
    $nomeU=$_SESSION["nome"];
    $cognomeU=$_SESSION["cognome"];
    $emailU=$_SESSION["email"];}


    ?>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>.dismissButton {
        background-color: #fff;
        border: 1px solid #dadce0;
        color: #1a73e8;
        border-radius: 4px;
        font-family: Roboto, sans-serif;
        font-size: 14px;
        height: 36px;
        cursor: pointer;
        padding: 0 24px
    }

    .dismissButton:hover {
        background-color: rgba(66, 133, 244, 0.04);
        border: 1px solid #d2e3fc
    }

    .dismissButton:focus {
        background-color: rgba(66, 133, 244, 0.12);
        border: 1px solid #d2e3fc;
        outline: 0
    }

    .dismissButton:focus:not(:focus-visible) {
        background-color: #fff;
        border: 1px solid #dadce0;
        outline: none
    }

    .dismissButton:focus-visible {
        background-color: rgba(66, 133, 244, 0.12);
        border: 1px solid #d2e3fc;
        outline: 0
    }

    .dismissButton:hover:focus {
        background-color: rgba(66, 133, 244, 0.16);
        border: 1px solid #d2e2fd
    }

    .dismissButton:hover:focus:not(:focus-visible) {
        background-color: rgba(66, 133, 244, 0.04);
        border: 1px solid #d2e3fc
    }

    .dismissButton:hover:focus-visible {
        background-color: rgba(66, 133, 244, 0.16);
        border: 1px solid #d2e2fd
    }

    .dismissButton:active {
        background-color: rgba(66, 133, 244, 0.16);
        border: 1px solid #d2e2fd;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
    }

    .dismissButton:disabled {
        background-color: #fff;
        border: 1px solid #f1f3f4;
        color: #3c4043
    }
    </style>
    <style>.gm-style .gm-style-mtc label, .gm-style .gm-style-mtc div {
        font-weight: 400
    }

    .gm-style .gm-style-mtc ul, .gm-style .gm-style-mtc li {
        box-sizing: border-box
    }
    </style>
    <style>.gm-control-active > img {
        box-sizing: content-box;
        display: none;
        left: 50%;
        pointer-events: none;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .gm-control-active > img:nth-child(1) {
        display: block
    }

    .gm-control-active:hover > img:nth-child(1), .gm-control-active:active > img:nth-child(1) {
        display: none
    }

    .gm-control-active:hover > img:nth-child(2), .gm-control-active:active > img:nth-child(3) {
        display: block
    }
    </style>
    <link type="text/css" rel="stylesheet" href="./styles/Details/css">
    <link type="text/css" rel="stylesheet" href="./styles/Details/css(1)">
    <style>.gm-ui-hover-effect {
        opacity: .6
    }

    .gm-ui-hover-effect:hover {
        opacity: 1
    }
    </style>
    <style>.gm-style .gm-style-cc a, .gm-style .gm-style-cc button, .gm-style .gm-style-cc span, .gm-style .gm-style-mtc div {
        font-size: 10px;
        box-sizing: border-box
    }
    </style>
    <style>@media print {
        .gm-style .gmnoprint, .gmnoprint {
            display: none
        }
    }

    @media screen {
        .gm-style .gmnoscreen, .gmnoscreen {
            display: none
        }
    }</style>
    <style>.gm-style-pbc {
        transition: opacity ease-in-out;
        background-color: rgba(0, 0, 0, 0.45);
        text-align: center
    }

    .gm-style-pbt {
        font-size: 22px;
        color: white;
        font-family: Roboto, Arial, sans-serif;
        position: relative;
        margin: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
    }
    </style>
    <style>.gm-style img {
        max-width: none;
    }

    .gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
    }</style>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://ovatheme.com/meup/xmlrpc.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link media="all" href="./styles/Details/autoptimize_007f99ac6144bea41a4a832b5fbb1f9e.css" rel="stylesheet">
    <link media="only screen and (max-width: 768px)"
          href="./styles/Details/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
    <title>Functional properties of food today – MeUp – Listing Marketplace Events WordPress Theme</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="https://ovatheme.com/">
    <link rel="dns-prefetch" href="https://maps.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link href="https://cdn.shortpixel.ai/" rel="preconnect">
    <link rel="alternate" type="application/rss+xml" title="MeUp - Listing Marketplace Events WordPress Theme » Feed"
          href="https://ovatheme.com/meup/feed/">
    <link rel="alternate" type="application/rss+xml"
          title="MeUp - Listing Marketplace Events WordPress Theme » Comments Feed"
          href="https://ovatheme.com/meup/comments/feed/">
    <link rel="alternate" type="application/rss+xml"
          title="MeUp - Listing Marketplace Events WordPress Theme » Functional properties of food today Comments Feed"
          href="https://ovatheme.com/meup/event/functional-properties-of-food/feed/">
    <meta property="og:title" content="Functional properties of food today">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://ovatheme.com/meup/event/functional-properties-of-food/">
    <meta property="og:site_name" content="MeUp - Listing Marketplace Events WordPress Theme">
    <meta property="og:image" content="https://ovatheme.com/meup/wp-content/uploads/2019/09/ev4.jpg">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="739">
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
    <script src="./styles/Details/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
    <link rel="stylesheet" id="ova-google-fonts-css" href="./styles/Details/css(2)" type="text/css" media="all">
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
    <script type="text/javascript" src="./styles/Details/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="./styles/Details/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://ovatheme.com/meup/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ovatheme.com/meup/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://ovatheme.com/meup/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.7.2">
    <meta name="generator" content="WooCommerce 5.3.0">
    <link rel="canonical" href="https://ovatheme.com/meup/event/functional-properties-of-food/">
    <link rel="shortlink" href="https://ovatheme.com/meup/?p=2367">
    <link rel="alternate" type="application/json+oembed"
          href="https://ovatheme.com/meup/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fmeup%2Fevent%2Ffunctional-properties-of-food%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="https://ovatheme.com/meup/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fovatheme.com%2Fmeup%2Fevent%2Ffunctional-properties-of-food%2F&amp;format=xml">
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
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/infowindow.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./styles/Details/controls.js"></script>
</head>


                                                            <?php
                                                            $result=select_evento_details($connect, $ide);

                                                                // while($row = mysqli_fetch_array($result))

                                                            $valori=mysqli_fetch_array($result);
                                                           $_SESSION["idevento"]=$ide;
                                                            $nome=$valori['evento'];
                                                            $categoria=$valori["categoria"];
                                                            $citta=$valori['luogo'];
                                                            $via=$valori['via'];
                                                            $descrizione=$valori['descrizione'];
                                                            $data_inizio=$valori['data_inizio'];
                                                            $data_fine=$valori['data_fine'];
                                                            $orario=$valori['orario'];
                                                            $orario= explode(":", $orario);
                                                            $sconto=$valori['sconto'];
                                                            $costo=$valori['costo'];
                                                            $costo_vip=$valori['costo_vip'];

                                                            if($sconto){
                                                                $scontosottr=($costo*$sconto)/100;
                                                                $costo_scontato=$costo-$scontosottr;
                                                            if($costo_vip){
                                                                $scontosottrVIP=($costo_vip*$sconto)/100;
                                                                $costo_scontato_vip=$costo_vip-$scontosottrVIP;}}





                                                            $giorno= explode("-", $data_inizio);
                                                            $result=select_immagine_principale($connect, $ide);
                                                            $valori=mysqli_fetch_array($result);
                                                            $immagineP=$valori['nome'];

                                                            if($giorno[1]=="01")
                                                                $giorno[1]="January";
                                                            if($giorno[1]=="02")
                                                                $giorno[1]="February";
                                                            if($giorno[1]=="03")
                                                                $giorno[1]="March";
                                                            if($giorno[1]=="04")
                                                                $giorno[1]="April";
                                                            if($giorno[1]=="05")
                                                                $giorno[1]="May";
                                                            if($giorno[1]=="06")
                                                                $giorno[1]="June";
                                                            if($giorno[1]=="07")
                                                                $giorno[1]="July";
                                                            if($giorno[1]=="08")
                                                                $giorno[1]="August";
                                                            if($giorno[1]=="09")
                                                                $giorno[1]="September";
                                                            if($giorno[1]=="10")
                                                                $giorno[1]="October";
                                                            if($giorno[1]=="11")
                                                                $giorno[1]="November";
                                                            if($giorno[1]=="12")
                                                                $giorno[1]="December";



                                                            ?>


<body class="event-template-default single single-event postid-2367 theme-meup woocommerce-js elementor-default elementor-kit-5045 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit"
      data-elementor-device-mode="desktop">
<div class="ova-wrapp">
    <div class="ovaheader">
        <div data-elementor-type="wp-post" data-elementor-id="1676" class="elementor elementor-1676"
             data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9ca7bf4 elementor-section-content-middle ovamenu_hide ovamenu_shrink ovamenu_shrink_mobile elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default active_fixed"
                            data-id="9ca7bf4" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-638395f elementor-hidden-phone"
                                     data-id="638395f" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-ee54e7d elementor-widget elementor-widget-el_menu_event_detail"
                                                 data-id="ee54e7d" data-element_type="widget"
                                                 data-widget_type="el_menu_event_detail.default">
                                                <div class="elementor-widget-container">
                                                    <div class="el-menu-event-detail">
                                                        <?php if(isset($_SESSION["id"])){

                                                            echo"     <div class='icon-menu'>
                                                            
                                                                <a href='./functions/insert_wishlist.php?idu=$idu&ide=$ide'
                                                               class='event-loop-favourite el-wishlist' data-id='2367'>
                                                               
                                                                <i class='fa fa-heart-o'></i> </a></div>"; }
                                                        if(isset($_GET["agg"])){
                                                            if($_GET["agg"]==1)
                                                                echo"<script>alert('elemento inserito nella wishlist')</script>";
                                                            if($_GET["agg"]==0)
                                                                echo"<script>alert('elemento già presente nella wishlist')</script>";}





                                                        ?>

                                                        <div class="content-menu-event"><h3 class="title-event-menu">
                                                           <?php echo "$nome"; ?></h3>
                                                            <p class="date-menu-event"><span class="start-time"><?php echo "Dal $data_inizio"; ?></span><span
                                                                    class="separator"> al </span><span class="end-time"><?php echo "$data_fine"; ?></span>&nbsp;</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8316635 fix-flex-start-767"
                                     data-id="8316635" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-b86d117 elementor-widget__width-auto elementor-widget elementor-widget-el_menu_event_price"
                                                 data-id="b86d117" data-element_type="widget"
                                                 data-widget_type="el_menu_event_price.default">
                                                <div class="elementor-widget-container">
                                                    <div class="el-menu-event-price">
                                                    <span class="event_loop_price second_font"><?php if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo";?></span>                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-eee095c elementor-align-right elementor-widget__width-auto booking_event_button elementor-widget elementor-widget-button"
                                                 data-id="eee095c" data-element_type="widget"
                                                 data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper"><a
                                                            href="https://ovatheme.com/meup/event/functional-properties-of-food/#"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                            class="elementor-button-icon elementor-align-icon-left"> <i
                                                            aria-hidden="true"
                                                            class="fas fa-cart-plus"></i> </span> <span
                                                            class="elementor-button-text">Booking Now</span> </span>
                                                    </a></div>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-70ebb7b elementor-section-content-middle ovamenu_hide ovamenu_shrink ovamenu_shrink_mobile footer elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default active_fixed"
                            data-id="70ebb7b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf312d6 fix-flex-start-767"
                                     data-id="bf312d6" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-ffef2df elementor-widget__width-auto elementor-widget elementor-widget-el_menu_event_price"
                                                 data-id="ffef2df" data-element_type="widget"
                                                 data-widget_type="el_menu_event_price.default">
                                                <div class="elementor-widget-container">
                                                    <div class="el-menu-event-price">
                                                        <span class="event_loop_price second_font"><?php if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo";?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f0d64d6 elementor-align-right elementor-widget__width-auto booking_event_button elementor-widget elementor-widget-button"
                                                 data-id="f0d64d6" data-element_type="widget"
                                                 data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper"><a
                                                            href=""
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button"> <span
                                                            class="elementor-button-content-wrapper"> <span
                                                            class="elementor-button-icon elementor-align-icon-left"> <i
                                                            aria-hidden="true"
                                                            class="fas fa-cart-plus"></i> </span> <span
                                                            class="elementor-button-text">Booking Now</span> </span>
                                                    </a></div>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-d4df761 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="d4df761" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8857cee"
                                     data-id="8857cee" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-109ff69 elementor-widget elementor-widget-ova_logo"
                                                 data-id="109ff69" data-element_type="widget"
                                                 data-widget_type="ova_logo.default">
                                                <div class="elementor-widget-container"><a class="ova_logo"
                                                                                           href="./Home.php">
                                                    <img src="./styles/Details/Asset-8.svg"
                                                         alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                         class="desk-logo d-none d-xl-block"> <img
                                                        src="./styles/Details/Asset-8.svg"
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="mobile-logo d-block d-xl-none"> <img
                                                        src="./styles/Details/Asset-8.svg"
                                                        alt="MeUp – Listing Marketplace Events WordPress Theme"
                                                        class="logo-fixed"> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a80f366"
                                     data-id="a80f366" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-d40c3ed elementor-view-primary-menu elementor-widget__width-auto elementor-widget elementor-widget-ova_menu"
                                                 data-id="d40c3ed" data-element_type="widget"
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
                                                                                class=""></i></button>
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
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-251">
                                                                        <a title="Page"
                                                                           href="./ContactUs.php">Contact<i
                                                                                class=""></i></a>
                                                                        <button type="button" class="dropdown-toggle"><i
                                                                                class="arrow_carrot-down"></i></button>
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
                                            <div class="elementor-element elementor-element-4f30326 elementor-widget__width-auto elementor-widget elementor-widget-ova_menu_account"
                                                 data-id="4f30326" data-element_type="widget"
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
                </div>
            </div>
        </div>
    </div>
    <article id="event_2367 "
             class="event_single post-2367 event type-event status-publish has-post-thumbnail hentry event_cat-food-drink event_tag-cafe event_tag-food event_loc-austin event_loc-texas elprice-paid eljob-for-individual taxonomy_default3-only-evening taxonomy_default4-in-room">
        <div class="event-banner">
            <div class="single-banner"
                 style="background-image: url(<?php echo "./backend/upload/$immagineP" ?>); height: 553.846px;"></div>
        </div>
        <div class="wrap_event_top">
            <div class="event_top">
                <div class="event_info">
                    <div class="date-top">
                        <div class="date-start">
                            <div class="wp-date">
                                <div class="month"><?php echo "$giorno[1]";?></div>
                                <div class="day-week"><span class="day"><?php echo "$giorno[2]";?></span> <span class="weekday">Wednesday</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-top"><h1 class="title-event-single second_font no-empty-ticket"> <?php echo "$nome"; ?></h1>
                        <div class="event_date"><i class="icon_clock_alt"></i>
                            <div class="wp-time-top"><span class="start-time"><?php echo "Dal $data_inizio"; ?></span><span
                                    class="separator"> al </span><span class="end-time"><?php echo "$data_fine"; ?></span>
                            </div>
                        </div>
                        <div class="event-address"><i class="icon_pin_alt"></i>
                            <div class="wp-address"><span class="el-address-general el-venue"><?php echo "$citta"; ?> <br> </span>
                                <span class="el-address-general el-address has_venue"> <?php echo "$via"; ?> </span>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="act_gr">
                <div class="act_booking">
                    <a href="#" id="event_booking_single_button"> Booking Now </a>
                </div>
            </div>
            </div>
        </div>
        <div class="wrap_main_content">
            <div class="main_content">
                <div class="event-content">
                    <div class="event_desc event_section_white"><h3 class="heading desc-event second_font">
                        Description</h3>
                        <div class="wrap_content" data-height="300"><p><?php echo" $descrizione"; ?></p>
                            <div class="el_show_more_desc"><a
                                    href="https://ovatheme.com/meup/event/functional-properties-of-food/#"
                                    class="btn_showmore"><i class="fas fa-angle-down"></i></a></div>
                        </div>
                    </div>
                    <div class="ticket-info event_section_white">
                        <h3 class="heading second_font">Ticket Information</h3>
                        <div class="item-info-ticket">
                            <div class="heading-ticket empty-desc" data-desc="true">
                                <div class="coupon_tool_tip">
                                    <p class="title-ticket"> Standard</p>
                                </div>
                                <div class="wp-price-status">
                                    <p class="price"><?php if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo";?></p>
                                    <span class="stattus"> Selling </span>
                                </div>
                            </div>
                            <div class="desc-ticket">
                                <div class="desc">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($costo_vip){
                      echo"  <div class='item-info-ticket'>
                            <div class='heading-ticket empty-desc' data-desc='true'>
                                <div class='coupon_tool_tip'>
                                    <p class='title-ticket'> VIP</p>
                                </div>
                                <div class='wp-price-status'>
                                    <p class='price'>"; if($sconto) echo"<del> $$costo_vip</del> $$costo_scontato_vip"; else echo"$$costo_vip"; echo"</p>
                                    <span class='stattus'> Selling </span>
                                </div>
                            </div>
                            <div class='desc-ticket'>
                                <div class='desc'>
                                    <p></p>
                                </div>
                            </div>
                        </div>";} ?>
                    </div>
                    <link href="./calendar/calendar.css" rel="stylesheet" type="text/css">


                   <?php
                   include './calendar/Calendar.php';

                   $result=select_evento_calendario($connect, $ide);
                    $valori = mysqli_fetch_array($result);


                    $nome = $valori['evento'];
                    $giorno1=$valori["giorno1"];
                    $giorno2=$valori["giorno2"];
                    $giorno3=$valori["giorno3"];
                    $giorno4=$valori["giorno4"];
                    $giorno5=$valori["giorno5"];
                    $giorno6=$valori["giorno6"];
                    $giorno7=$valori["giorno7"];
                    $giorno8=$valori["giorno8"];
                    $giorno9=$valori["giorno9"];
                    $giorno10=$valori["giorno10"];
                    $giorno11=$valori["giorno11"];
                    $giorno12=$valori["giorno12"];



                    $calendar = new Calendar($giorno1);
                   $giorno1_=strtotime($giorno1);
                    $ora=$orario[0] . ":" . $orario[1];
                    $newformat = date('Y-m-d',$giorno1_);
                    $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno1_));

                    if($giorno2) {
                        $giorno2_=strtotime($giorno2);
                        $newformat = date('Y-m-d',$giorno2_);
                        $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno2_));

                    }

                   if($giorno3) {
                       $giorno3_=strtotime($giorno3);
                       $newformat = date('Y-m-d',$giorno3_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno3_));

                   }

                   if($giorno4) {
                       $giorno4_=strtotime($giorno4);
                       $newformat = date('Y-m-d',$giorno4_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno4_));

                   }
                   if($giorno5) {
                       $giorno5_=strtotime($giorno5);
                       $newformat = date('Y-m-d',$giorno5_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno5_));

                   }
                   if($giorno6) {
                       $giorno6_=strtotime($giorno6);
                       $newformat = date('Y-m-d',$giorno6_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno6_));

                   }
                   if($giorno7) {
                       $giorno7_=strtotime($giorno7);
                       $newformat = date('Y-m-d',$giorno7_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno7_));

                   }
                   if($giorno8) {
                       $giorno8_=strtotime($giorno8);
                       $newformat = date('Y-m-d',$giorno8_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno8_));

                   }
                   if($giorno9) {
                       $giorno9_=strtotime($giorno9);
                       $newformat = date('Y-m-d',$giorno9_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno9_));

                   }
                   if($giorno10) {
                       $giorno10_=strtotime($giorno10);
                       $newformat = date('Y-m-d',$giorno10_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno10_));

                   }
                   if($giorno11) {
                       $giorno11_=strtotime($giorno11);
                       $newformat = date('Y-m-d',$giorno11_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno11_));

                   }
                   if($giorno12) {
                       $giorno12_=strtotime($giorno12);
                       $newformat = date('Y-m-d',$giorno12_);
                       $calendar->add_event($ora, $newformat, 1, "", $ide, date('Y-m-d', $giorno12_));

                   }
                    ?>
                    <div class="ticket-calendar event_section_white" id="booking_event">

                        <?=$calendar?>


                    </div>


                    <?php

                    //$result=select_immagini_galleria($connect, $ide);

                    //while($row = mysqli_fetch_array($result)){
                     //   $foto=$row["nome"];

                    //    echo"    <div><img data-lazy='./backend/upload/$foto' style='max-height: 50%;height: 50%;width: 100%'></div>"; }

                    ?>

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

                    <?php
                    $result=select_immagini_galleria($connect, $ide);
                        if((mysqli_num_rows($result)!=0)) {
                echo"    <div class='event-gallery event_section_white '>

                        <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                            <!-- Indicators -->

                            <!-- Wrapper for slides -->
                            <div class='carousel-inner'>";

                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                                    $foto=$row["nome"];
                                    if($i==0){
                                    echo "<div class='item active'>
                                    <img src='./backend/upload/$foto' alt='Los Angeles' style='width:100%;'>
                                </div>";}
                                    else{
                                        echo "<div class='item'>
                                    <img src='./backend/upload/$foto' alt='Los Angeles' style='width:100%;'>
                                </div>";
                                    }
                                    $i +=1;
                                }


                     echo"       </div>

                            <!-- Left and right controls -->
                            <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                                <span class='sr-only'>Previous</span>
                            </a>
                            <a class='right carousel-control' href='#myCarousel' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                                <span class='sr-only'>Next</span>
                            </a>
                        </div>
                    </div>"; } ?>






                    <div class="event_comments event_section_white">
                        <div class="content_comments">
                            <div id="comments" class="comments">
                                <div class="wrap_comment_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="respond" class="comment-respond"><h3 id="reply-title"
                                                                                          class="comment-reply-title"></h3>
                                                <h4 class="title-comment second_font">Add A Review</h4> <small><a
                                                        rel="nofollow" id="cancel-comment-reply-link"
                                                        href="https://ovatheme.com/meup/event/functional-properties-of-food/#respond"
                                                        style="display:none;">Cancel reply</a></small>
                                                <form action="./functions/insert_recensione.php"
                                                      method="post" id="commentform" class="comment-form" novalidate="">
                                                    <div class="wrap_comment"><label class="label_field second_font">Comment</label><textarea
                                                            class="form-control" rows="4" name="dettaglio" <?php if(!isset($idu)) echo"disabled";?>
                                                            placeholder="Your comment"></textarea></div>
                                                    <div class="wrap_rating"><label for="rating" class="second_font">Rating</label>
                                                        <fieldset class="comments-rating"><span
                                                                class="rating-container"> <input type="radio"
                                                                                                 id="rating-5"
                                                                                                 name="rating" value="5"
                                                                                                 data-value="5"> <label
                                                                class="star" for="rating-5">5</label> <input
                                                                type="radio" id="rating-4" name="rating" value="4"
                                                                data-value="4"> <label class="star"
                                                                                       for="rating-4">4</label> <input
                                                                type="radio" id="rating-3" name="rating" value="3"
                                                                data-value="3"> <label class="star"
                                                                                       for="rating-3">3</label> <input
                                                                type="radio" id="rating-2" name="rating" value="2"
                                                                data-value="2"> <label class="star"
                                                                                       for="rating-2">2</label> <input
                                                                type="radio" id="rating-1" name="rating" value="1"
                                                                data-value="1"> <label class="star"
                                                                                       for="rating-1">1</label> </span>
                                                        </fieldset>
                                                    </div>
                                                    <div class="name"><label
                                                            class="label_field second_font">Name*</label><input
                                                            type="text" name="nome" value='<?php if(isset($idu)) echo"$nomeU $cognomeU";?>'
                                                            aria-required="&#39;true&#39;" class="form-control" disabled
                                                            placeholder="Type your name here"></div>
                                                    <div class="email"><label class="label_field second_font">Your
                                                        Email*</label><input type="text" name="email" value='<?php if(isset($idu)) echo"$emailU";?>'
                                                                             aria-required="&#39;true&#39;" disabled
                                                                             class="form-control"
                                                                             placeholder="Your email"></div>
                                                    <p class="form-submit"><input name="inviaRec" type="submit"
                                                        <?php if(!isset($idu)) echo"disabled";?>
                                                                                  id="submit" class="submit"
                                                                                  value="Post Comment"> <input
                                                            type="hidden" name="comment_post_ID" value="2367"
                                                            id="comment_post_ID"> <input type="hidden"
                                                                                         name="comment_parent"
                                                                                         id="comment_parent" value="0">
                                                    </p></form><br>
                                                <?php if(!isset($idu)) echo"<p>per poter effettuare una registrazione bisogna essere loggati al sistema</p>";?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>









                </div>





                <div class="event-sidebar">
                    <div class="event-sidebar-content">
                        <div class="event_section_white"><h3 class="show_policy second_font heading"> Refund Policy</h3>
                            <span> Cancel booking before 1 day </span></div>
                        <div class="event_section_white"><h3 class="show_policy second_font heading"> Recensioni</h3>
                            <?php
                            $result=select_recensioni_details($connect, $ide);

                        while($valori = mysqli_fetch_array($result)){

                            $descrizione=$valori["descrizione"];
                            $nome=$valori["nome"];
                            $rating=$valori["rating"];
                            $cont=0;


                            echo"<table style='border: 2px solid white; border-color: white'><tr style='border: 2px solid white ; border-color: white'><td style='border: 2px solid white; border-color: white'>
                            <span><b>$nome </b> </span></td><td>";
                            while($cont<$rating){
                            echo"
                               <img src='./styles/Details/star.png'>";
                            $cont++;}
                           echo"</td></tr></table>
                            <span> $descrizione </span> <br><br>
                            ";}
                            ?>


                    </div></div>
                </div>
            </div>
            <div class="event_related_wrap">
                <div class="event_related"><h3 class="title second_font">Related Events</h3>
                    <p class="desc">May you like events</p>
                    <ul class="wrap_event owl-carousel owl-theme type6 owl-loaded owl-drag">
                        <div class='owl-stage-outer'>
                            <div class='owl-stage'
                                 style='transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 810px;'>





                        <?php
                            $result=select_evento_related($connect, $categoria);

                            while($valori = mysqli_fetch_array($result)){


                                                             $idevento=$valori['id'];
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
                                    $costo_scontato=$costo-$scontosottr;



                                }

                                                            if($ide!=$idevento){


                    echo"
               
                                <div class='owl-item active' style='width: 360px; margin-right: 45px;'>
                                    <li class='event_entry'>
                                        <div class='event_item type6'>
                                            <div class='event_thumbnail'>
                                                <div class='thumbnail_figure'><a
                                                        href='./details.php?id=$idevento'> <img
                                                        src='./backend/upload/$foto'
                                                        alt='The Food Mood Reboot in the new century'> </a></div>
                                            </div>
                                            <div class='event_detail'><h2 class='loop_title'><a class='second_font'
                                                                             href='./details.php?id=$idevento'>
                                                $nome </a></h2>
                                                <div class='event-location-time'>
                                                    <div class='event-time'><span class='event-icon'><i
                                                            class='icon_clock_alt'></i></span> <span class='time'> <span
                                                            class='start-time'>$data_inizio </span><span>/ $data_fine</span>&nbsp; </span>
                                                    </div>
                                                    <div class='location-rating'>
                                                        <div class='event_location'><span class='event-icon'><i
                                                                class='icon_pin_alt'></i></span>$luogo</a><span
                                                                class='separator'>,</span> $via</a><span
                                                                class='separator'></span></div>
                                                        <span class='event_ratting'> </span></div>
                                                </div>
                                                <div class='meta-footer'><span class='event-button'> <a
                                                        class='second_font'
                                                        href='./details.php?id=$idevento'>Get Ticket</a> </span><span
                                                                                            class='event_loop_price second_font'>"; if($sconto) echo"<del> $$costo</del> $$costo_scontato"; else echo"$$costo"; echo"</span>
                                            </div>
                                        </div>
                                    </li></div>";}} ?>

                        </div></div>

                    </ul>
                </div>
            </div>
            <script type="application/ld+json">[
                {
                    "@context": "http://schema.org",
                    "@type": "Event",
                    "image": "https://ovatheme.com/meup/wp-content/uploads/2019/09/ev4-710x480.jpg",
                    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finib us lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pu lvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed te mpor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat.",
                    "location": {
                        "@type": "Place",
                        "address": {
                            "@type": "PostalAddress",
                            "streetAddress": "11605 N Lamar Blvd, Austin, Texas, Hoa Kỳ"
                        },
                        "name": "11605 N Lamar Blvd, Austin, Texas"
                    },
                    "name": "Functional properties of food today",
                    "offers": [
                        {
                            "@type": "Offer",
                            "name": "VIP",
                            "validFrom": "21-04-2021 T 12:30 AM",
                            "availability": "http:\/\/schema.org\/InStock",
                            "url": "https:\/\/ovatheme.com\/meup\/event\/functional-properties-of-food\/",
                            "price": "20",
                            "priceCurrency": "USD"
                        }
                    ],
                    "performer": {
                        "@type": "Organization",
                        "name": "Wiliam Smith"
                    },
                    "startDate": "2021-06-23",
                    "endDate": "2022-04-19"
                }
            ]</script>
        </div>
    </article>
</div>
<div class="ovafooter">
    <div data-elementor-type="wp-post" data-elementor-id="3005" class="elementor elementor-3005"
         data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-c21ace8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c21ace8" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6ef447b"
                                 data-id="6ef447b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-3235273 elementor-widget elementor-widget-image"
                                             data-id="3235273" data-element_type="widget"
                                             data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image"><a
                                                        href="https://ovatheme.com/meup/event/functional-properties-of-food/#">
                                                    <img src="./styles/Details/Asset-9.svg"
                                                         class="attachment-full size-full" alt="" loading="lazy"> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d0f38b1 elementor-widget elementor-widget-text-editor"
                                             data-id="d0f38b1" data-element_type="widget"
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
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0bcf3f5"
                                 data-id="0bcf3f5" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-957187d elementor-widget elementor-widget-heading"
                                             data-id="957187d" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2
                                                    class="elementor-heading-title elementor-size-default">Info</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-98cada0 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                             data-id="98cada0" data-element_type="widget"
                                             data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item"><a
                                                            href="https://ovatheme.com/meup/event/functional-properties-of-food/#">
                                                        <span class="elementor-icon-list-text">About Us</span> </a></li>
                                                    <li class="elementor-icon-list-item"><a
                                                            href="./Category.php">
                                                        <span class="elementor-icon-list-text">Event</span> </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item"><a
                                                            href="./ContactUs.html">
                                                        <span class="elementor-icon-list-text">Contact Us</span> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a2266f5"
                                 data-id="a2266f5" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a98a7f2 elementor-widget elementor-widget-heading"
                                             data-id="a98a7f2" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2
                                                    class="elementor-heading-title elementor-size-default">Contact
                                                Us</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-221f985 elementor-widget elementor-widget-ova_contact"
                                             data-id="221f985" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="icon_pin_alt"></i></div>
                                                    <div class="address"><span><a
                                                            href="https://ovatheme.com/meup/event/functional-properties-of-food/#">San Francisco City Hall, San Francisco, CA</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d441a6b elementor-widget elementor-widget-ova_contact"
                                             data-id="d441a6b" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="icon_mail_alt"></i></div>
                                                    <div class="address"><span><a href="mailto:#">meupcontact@info.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-563c454 elementor-widget elementor-widget-ova_contact"
                                             data-id="563c454" data-element_type="widget"
                                             data-widget_type="ova_contact.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact">
                                                    <div class="icon"><i class="icon_mobile"></i></div>
                                                    <div class="address"><span><a
                                                            href="tel:081000000">(+011) 01234567</a></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-65105bc"
                                 data-id="65105bc" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-f209358 elementor-widget elementor-widget-heading"
                                             data-id="f209358" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><h2
                                                    class="elementor-heading-title elementor-size-default">Download
                                                APP</h2></div>
                                        </div>
                                        <div class="elementor-element elementor-element-6da477f elementor-widget elementor-widget-image"
                                             data-id="6da477f" data-element_type="widget"
                                             data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image"><img
                                                        src="./styles/Details/apple-store-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
                                                        title="apple-store" alt="apple-store"></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2301cd7 elementor-widget elementor-widget-image"
                                             data-id="2301cd7" data-element_type="widget"
                                             data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image"><img
                                                        src="./styles/Details/google_play-1-p5xxuvodl3i0xyrf15wbtg5ymuz4eoyk5w9tye8x6o.png"
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
                        class="elementor-section elementor-top-section elementor-element elementor-element-6a8229a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6a8229a" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aeb762d"
                                 data-id="aeb762d" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-46500b0 elementor-widget elementor-widget-heading"
                                             data-id="46500b0" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><span
                                                    class="elementor-heading-title elementor-size-default">© 2021 <span
                                                    style="color: #fff">ovatheme</span>. All Rights Reserved.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f657b43"
                                 data-id="f657b43" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-69769bb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                             data-id="69769bb" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><span
                                                    class="elementor-heading-title elementor-size-default"><a
                                                    href="https://ovatheme.com/meup/event/functional-properties-of-food/#">Terms of use</a></span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-14d2671 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                             data-id="14d2671" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><span
                                                    class="elementor-heading-title elementor-size-default"><a
                                                    href="https://ovatheme.com/meup/event/functional-properties-of-food/#">|</a></span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ac0b29a elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                             data-id="ac0b29a" data-element_type="widget"
                                             data-widget_type="heading.default">
                                            <div class="elementor-widget-container"><span
                                                    class="elementor-heading-title elementor-size-default"><a
                                                    href="https://ovatheme.com/meup/event/functional-properties-of-food/#">Privacy policy</a></span>
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
<script type="text/javascript">(function () {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})();</script>
<link rel="stylesheet" id="google-fonts-1-css" href="./styles/Details/css(3)" type="text/css" media="all">
<script type="text/javascript" src="./styles/Details/wp-polyfill.min.js" id="wp-polyfill-js"></script>
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
<script type="text/javascript" src="./styles/Details/autoptimize_single_daca149c46601376ce5db68f3658323c.js"
        id="contact-form-7-js"></script>
<script type="text/javascript" src="./styles/Details/image-map-pro.min.js" id="image-map-pro-dist-js-js"></script>
<script type="text/javascript" src="./styles/Details/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">var wc_add_to_cart_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%",
    "i18n_view_cart": "View cart",
    "cart_url": "https:\/\/ovatheme.com\/meup\/cart\/",
    "is_cart": "",
    "cart_redirect_after_add": "no"
};</script>
<script type="text/javascript" src="./styles/Details/add-to-cart.min.js" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="./styles/Details/js.cookie.min.js" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">var woocommerce_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%"
};</script>
<script type="text/javascript" src="./styles/Details/woocommerce.min.js" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">var wc_cart_fragments_params = {
    "ajax_url": "\/meup\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/meup\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_d71891be86889718f0e13c2f3acada41",
    "fragment_name": "wc_fragments_d71891be86889718f0e13c2f3acada41",
    "request_timeout": "5000"
};</script>
<script type="text/javascript" src="./styles/Details/cart-fragments.min.js" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_d12035cd792428533b661744dbb9ddc9.js"
        id="login-script-js"></script>
<script type="text/javascript" src="./styles/Details/core.min.js" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="./styles/Details/datepicker.min.js" id="jquery-ui-datepicker-js"></script>
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
<script type="text/javascript" src="./styles/Details/autoptimize_single_4b769cafd6b65a845a9f7f52ba3c6d7a.js"
        id="datepicker-lang-js"></script>
<script type="text/javascript" src="./styles/Details/tabs.min.js" id="jquery-ui-tabs-js"></script>
<script type="text/javascript" src="./styles/Details/menu.min.js" id="jquery-ui-menu-js"></script>
<script type="text/javascript" src="./styles/Details/dom-ready.min.js" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="./styles/Details/hooks.min.js" id="wp-hooks-js"></script>
<script type="text/javascript" src="./styles/Details/i18n.min.js" id="wp-i18n-js"></script>
<script type="text/javascript"
        id="wp-i18n-js-after">wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});</script>
<script type="text/javascript" id="wp-a11y-js-translations">(function (domain, translations) {
    var localeData = translations.locale_data[domain] || translations.locale_data.messages;
    localeData[""].domain = domain;
    wp.i18n.setLocaleData(localeData, domain);
})("default", {"locale_data": {"messages": {"": {}}}});</script>
<script type="text/javascript" src="./styles/Details/a11y.min.js" id="wp-a11y-js"></script>
<script type="text/javascript" id="jquery-ui-autocomplete-js-extra">var uiAutocompleteL10n = {
    "noResults": "No results found.",
    "oneResult": "1 result found. Use up and down arrow keys to navigate.",
    "manyResults": "%d results found. Use up and down arrow keys to navigate.",
    "itemSelected": "Item selected."
};</script>
<script type="text/javascript" src="./styles/Details/autocomplete.min.js" id="jquery-ui-autocomplete-js"></script>
<script type="text/javascript" src="./styles/Details/mouse.min.js" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="./styles/Details/slider.min.js" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="./styles/Details/jquery.timepicker.min.js" id="jquery-timepicker-js"></script>
<script type="text/javascript" src="./styles/Details/select2.full.min.js" id="select2-js"></script>
<script type="text/javascript" src="./styles/Details/slick.min.js" id="slick-script-js"></script>
<script type="text/javascript" src="./styles/Details/owl.carousel.min.js" id="owl-carousel-js"></script>
<script type="text/javascript" src="./styles/Details/moment.min.js" id="el_moment-js"></script>
<script type="text/javascript" src="./styles/Details/fullcalendar.min.js" id="el_fullcalendar-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_e6f88fcbb8ec607277fb96fc51d08f95.js"
        id="el_locale-js"></script>
<script type="text/javascript" src="./styles/Details/js" id="google-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_b3288ceb3ec27947e85dbbc430025f23.js"
        id="google-marker-js"></script>
<script type="text/javascript"
        id="el_frontend-js-extra">var ajax_object = {"ajax_url": "https:\/\/ovatheme.com\/meup\/wp-admin\/admin-ajax.php"};</script>
<script type="text/javascript" src="./styles/Details/script.min.js" id="el_frontend-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_bde3ef153ef9af42e6d47799763a7640.js"
        id="script-eventlist-elementor-js"></script>
<script type="text/javascript" src="./styles/Details/comment-reply.min.js" id="comment-reply-js"></script>
<script type="text/javascript" src="./styles/Details/bootstrap.bundle.min.js" id="bootstrap-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_f8f19ecc1b41a55f504fd1010e328e15.js"
        id="meup-script-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_85c4beefac54b2cedfb6d98d753bc926.js"
        id="prettyphoto-js"></script>
<script type="text/javascript" src="./styles/Details/wp-embed.min.js" id="wp-embed-js"></script>
<script type="text/javascript" src="./styles/Details/autoptimize_single_0965b41abff22e79d7548d3890ead528.js"
        id="script-elementor-js"></script>
<script type="text/javascript" src="./styles/Details/v4-shims.min.js" id="font-awesome-4-shim-js"></script>
<script type="text/javascript" src="./styles/Details/webpack.runtime.min.js"
        id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./styles/Details/frontend-modules.min.js"
        id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="./styles/Details/waypoints.min.js" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="./styles/Details/swiper.min.js" id="swiper-js"></script>
<script type="text/javascript" src="./styles/Details/share-link.min.js" id="share-link-js"></script>
<script type="text/javascript" src="./styles/Details/dialog.min.js" id="elementor-dialog-js"></script>
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
        "id": 2367,
        "title": "Functional%20properties%20of%20food%20today%20%E2%80%93%20MeUp%20%E2%80%93%20Listing%20Marketplace%20Events%20WordPress%20Theme",
        "excerpt": "",
        "featuredImage": "https:\/\/ovatheme.com\/meup\/wp-content\/uploads\/2019\/09\/ev4.jpg"
    }
};</script>
<script type="text/javascript" src="./styles/Details/frontend.min.js" id="elementor-frontend-js"></script>
<span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./styles/Details/preloaded-modules.min.js" id="preloaded-modules-js"></script>
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











<!-- Dynamic page generated in 1.216 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2021-06-23 16:42:01 -->

<!-- Compression = gzip --><p id="a11y-speak-intro-text" class="a11y-speak-intro-text"
                              style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
                              hidden="hidden">Notifications</p>
<div id="a11y-speak-assertive" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div>
<div id="a11y-speak-polite" class="a11y-speak-region"
     style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;"
     aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div>
<a id="scrollUp" href="https://ovatheme.com/meup/event/functional-properties-of-food/#top"
   title="&lt;i class=&quot;fas fa-angle-up&quot;&gt;&lt;/i&gt;"
   style="display: none; position: fixed; z-index: 998;"><i class="fas fa-angle-up"></i></a></body>
</html>