<?php include("admin/include/baglan.php");
include("admin/include/fonksiyonlar.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="TR"/>
    <meta name="language" content="TR"/>

    <title>
        <?= $ayar['site_title'] ?>
    </title>
    <meta name="description" content="<?= $ayar['site_description'] ?>">
    <meta name="keywords" content="<?= $ayar['site_meta'] ?>">
    <meta http-equiv="reply-to" content="<?= $ayar['site_mail'] ?>">
    <style type="text/css" media="screen">
        <!--
        @import url(wp-content/themes/istanbul/style.css);
        -->
    </style>

    <script type="text/javascript" src="wp-content/themes/istanbul/js/jquery.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/js/foto-slayt.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/js/contentslider.js"></script>


    <style type="text/css">
        #fancybox-close {
            right: -15px;
            top: -15px
        }

        div#fancybox-content {
            border-color: #FFFFFF
        }

        div#fancybox-title {
            background-color: #FFFFFF
        }

        div#fancybox-outer {
            background-color: #FFFFFF
        }

        div#fancybox-title-inside {
            color: #333333
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="code.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' id='contact-form-7-css'
          href='wp-content/plugins/contact-form-7/includes/css/stylesf3df.css?ver=3.7.2' type='text/css' media='all'/>
    <link rel='stylesheet' id='fancybox-css'
          href='wp-content/plugins/fancybox-for-wordpress/fancybox/fancyboxcd70.css?ver=3.8.3' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='wp-pagenavi-css' href='wp-content/plugins/wp-pagenavi/pagenavi-css44fd.css?ver=2.70'
          type='text/css' media='all'/>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery3e5a.js?ver=1.10.2'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
    <script type='text/javascript'
            src='wp-content/plugins/fancybox-for-wordpress/fancybox/jquery.fancyboxc412.js?ver=1.3.4'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 3.8.3"/>

    <!-- Fancybox for WordPress v3.0.2 -->
    <script type="text/javascript">
        jQuery(function () {

            jQuery.fn.getTitle = function () { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
                var arr = jQuery("a.fancybox");
                jQuery.each(arr, function () {
                    var title = jQuery(this).children("img").attr("title");
                    jQuery(this).attr('title', title);
                })
            }

            // Supported file extensions
            var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter(function () {
                return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href'))
            });

            thumbnails.addClass("fancybox").attr("rel", "fancybox").getTitle();
            jQuery("a.fancybox").fancybox({
                'cyclic': false,
                'autoScale': true,
                'padding': 10,
                'opacity': true,
                'speedIn': 500,
                'speedOut': 500,
                'changeSpeed': 300,
                'overlayShow': true,
                'overlayOpacity': "0.3",
                'overlayColor': "#666666",
                'titleShow': true,
                'titlePosition': 'inside',
                'enableEscapeButton': true,
                'showCloseButton': true,
                'showNavArrows': true,
                'hideOnOverlayClick': true,
                'hideOnContentClick': false,
                'width': 847,
                'height': 417,
                'transitionIn': "fade",
                'transitionOut': "fade",
                'centerOnScroll': true
            });


        })
    </script>
    <!-- END Fancybox for WordPress -->

    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/cufon-yui.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/scripts.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/s.font.js"></script>
    <script type="text/javascript" src="wp-content/themes/istanbul/cfn/g.font.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger scrolling-navbar navbar-custom">
        <a class="navbar-brand" href="#"><strong></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item ">
                    <a class="nav-link" href="#">Bağış<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Üyeler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Teşkilat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Duyurular</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="admin" class="nav-link"><i class="fas fa-cog"></i></a>
                </li>
            </ul>
        </div>
    </nav>

</header>
<!--Main Navigation-->
<div id="header">
<div class="row">
    <div class="col-md-6">
        <div class="logo"><a href="sayfa-anasayfa"><img
                        src="wp-content/themes/istanbul/i/<?= $ayar['site_logo'] ?>"/></a></div>
    </div>
    <nav class="navbar navbar-expand-lg color(white)  ">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link text-dark" href="sayfa-anasayfa">ANASAYFA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KURUMSAL
                    </a>
                    <?php $sayfaSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 ORDER BY sira ASC");
                    if (!mysql_affected_rows()){
                    }else{
                    ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php while ($sayfaSonuc = mysql_fetch_object($sayfaSorgu)) { ?>
                            <a class="dropdown-item"
                               href="sayfalar-<?php echo $sayfaSonuc->seo; ?>"><?php echo $sayfaSonuc->adi; ?></a>
                        <?php }
                        } ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="sayfa-faliyetler">FAALİYETLER</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="sayfa-haberler">HABERLER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="sayfa-iletisim">İLETİŞİM</a>
                </li>
            </ul>

        </div>
    </nav>
</div>
</div>
<hr>
<div class="container">

    <div class="tmz"></div>

    <div id="wrap">

        <?php include('if.php'); ?>
        <hr class="mt-2 mb-3">
        <div class="slider">
            <div class="slide-track">
                <?php $destekSorgu = mysql_query("SELECT * FROM destekleyenler WHERE durum = 1 ORDER BY id DESC");
                while ($destekSonuc = mysql_fetch_object($destekSorgu)) { ?>
                    <!-- destekleyenler-->
                    <div class="slide">
                        <a href="<?php echo $destekSonuc->aciklama; ?>" target="_blank"><img
                                    src="wp-content/uploads/destek/kucuk/<?php echo $destekSonuc->resim; ?>"
                                    alt="<?php echo $destekSonuc->adi; ?>" border="0"/>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                    <div id="footer">

                        <div class="fsol">
                            <p>
                                <?= $ayar['firma_adres'] ?>
                            </p>
                            <p>
                                Tel : <?= $ayar['firma_telefon']; ?> / Faks : <?= $ayar['firma_fax']; ?>
                            </p>
                            <p>
                                <?= $ayar['firma_email'] ?>
                            </p>
                        </div>
                        <style type="text/css">
                            input[type=text]::-webkit-input-placeholder {
                                color: #999999;
                            }

                            input[type=text]:-moz-placeholder {
                                color: #999999;
                            }

                            input[type=text]:focus {
                                box-shadow: 0 1px 0 #2392f3 inset, 0 -1px 0 #2392f3 inset, 1px 0 0 #2392f3 inset, -1px 0 0 #2392f3 inset, 0 0 4px rgba(35, 146, 243, 0.5);
                                outline: none;
                                background: #ffffff;
                            }
                        </style>
                        <script type="text/javascript">
                            $(function () {
                                $("#bulten").click(function () {
                                    var ebulten = $("#ebulten").val();

                                    if (ebulten == "") {
                                        alert("E-Mail Boş Olamaz.!!");
                                    } else {
                                        $.ajax({
                                            type: "post",
                                            url: "bulten.php",
                                            data: {'ebulten': ebulten},
                                            success: function (c) {
                                                alert(c);
                                                document.forms["newsletterForm"].reset();
                                            }

                                        });
                                    }
                                    return false;
                                });

                            });
                        </script>
                        <div class="ebulten">
                            <form action="#" method="post" name="newsletterForm">
                                <input type="text" class="ebul" name="ebulten" id="ebulten"
                                       placeholder="Bizi Takip Edin"/>
                                <input type="button" class="ebulbuton"
                                       style="width:50px;background:#30A5D0;color:#FFF;height:26px; border:none;"
                                       name="egonder" id="bulten" value="Ekle"/>
                            </form>
                        </div>
                        <div class="fsag">
                            <a href="<?= $ayar['facebook'] ?>" target="_blank"><img
                                        src="wp-content/themes/istanbul/i/f1.png" alt=""/>
                            </a>
                            <a href="<?= $ayar['twitter'] ?>" target="_blank"><img
                                        src="wp-content/themes/istanbul/i/f2.png" alt=""/>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>


</html>