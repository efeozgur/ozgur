<?php require('admin/config/vt.php'); 
    $sorgu = $baglan->query('select * from ayar');
    $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
    <!--[if IE 6]>
    <html id="ie6" class="ie"lang="en-US">
    <![endif]-->
    <!--[if IE 7]>
    <html id="ie7"  class="ie"lang="en-US">
    <![endif]-->
    <!--[if IE 8]>
    <html id="ie8"  class="ie"lang="en-US">
    <![endif]-->
    <!--[if IE 9]>
    <html id="ie9"  class="ie"lang="en-US">
    <![endif]-->
    <!--[if gt IE 9]>
    <html class="ie"lang="en-US">
    <![endif]-->

    <!-- This doesn't work but i prefer to leave it here... maybe in the future the MS will support it... i hope... -->
    <!--[if IE 10]>
    <html id="ie10"  class="ie"lang="en-US">
    <![endif]-->


    <!--[if !IE]>
    <html lang="en-US">
    <![endif]-->

    <!-- START HEAD -->
    <head>
        <meta charset="utf-8" />

        <!-- this line will appear only if the website is visited with an iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />


        <meta name="description" content="<?php echo $sonuc['ayar_meta_desc']; ?>">
        <meta name="keywords" content="<?php echo $sonuc['ayar_meta_keywords']; ?>">
        <meta name="author" content="<?php echo $sonuc['ayar_meta_author']; ?>">

        <title><?php echo $sonuc['ayar_baslik']; ?></title>

        <!-- RESET STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <!-- BOOTSTRAP STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
        <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />

        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- [favicon] end -->

        <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
        <!-- For iPad3 with retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />


        <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
        <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Playfair+Display%7COpen+Sans+Condensed%3A300%7COpen+Sans%7CShadows+Into+Light%7CMuli%7CDroid+Sans%7CArbutus+Slab%7CAbel&#038;ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='polaroid-slider-css'  href='sliders/polaroid/css/polaroid.css' type='text/css' media='all' />
        <link rel='stylesheet' id='ahortcodes-css'  href='css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-css'  href='css/contact_form.css' type='text/css' media='all' />
        <link rel='stylesheet' id='blog-libra-big-css'  href='blog/libra-small/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />

        <style type="text/css">
            body { background-color: #ffffff; background-image: url('images/bg-pattern.png'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
        </style>

        <script type='text/javascript' src='js/jquery/jquery.js'></script>


    </head>
    <!-- END HEAD -->
    <!-- START BODY -->
    <body class="page no_js responsive stretched">

    <!-- START BG SHADOW -->
    <div class="bg-shadow">

    <!-- START WRAPPER -->
        <div id="wrapper" class="container group">

            <!-- START TOP BAR -->
            <div id="topbar">
                <div class="container">
                    <div class="row">
                        <div id="nav" class="span12 light">

                            <!-- START MAIN NAVIGATION -->

                            <ul id="menu-menu" class="level-1">
                                <li>
                                    <a href="index.php">ANASAYFA</a>                                    
                                </li>
                             
                                
                            </ul>
                            <!-- END MAIN NAVIGATION -->

                            <!-- START TOPBAR LOGIN -->

                            <div id="topbar_login" class="not_logged_in">

                                <a class="topbar_login" href="#">
                                    Giriş Yap <span class="sf-sub-indicator"></span>
                                </a>

                                <div id="fast-login" class="access-info-box">
                                    <form action="admin/islem.php" method="post" name="loginform">

                                        <div class="form">
                                            <p>
                                                <label>
                                                    Kullanıcı Adınız<br/>
                                                    <input type="text" tabindex="10" size="20" value="" name="username" class="input-text" />
                                                </label>
                                            </p>

                                            <p>
                                                <label>
                                                    Şifreniz<br/>
                                                    <input type="password" tabindex="20" size="20" value="" name="password" class="input-text" />
                                                </label>
                                            </p>

                                            

                                            <p class="align-right">
                                                <input type="submit" name="girisbtn" tabindex="100" value="Giriş" name="wp-submit" class="input-submit" />
                                                <input type="hidden" value="index.html" name="redirect_to" />
                                                <input type="hidden" value="1" name="testcookie" />
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END TOPBAR LOGIN -->
                        </div>
                    </div>
                </div>
            </div>
             <!-- END TOP BAR -->

        <!-- START HEADER -->
        <div id="header" class="group margin-bottom">

            <div class="group container">
                <div class="row" id="logo-headersidebar-container">
                    <!-- START LOGO -->
                    <div id="logo" class="span6 group">
                        <a id="logo-img" href="index.php" title="efe özgür">
                            <img src="images/libra-logo1.png" title="Efe Özgür" alt="efe özgür" />
                        </a>
                        <p id='tagline'>Efe Özgür'ün kişisel blogu</p>
                    </div>
                    <!-- END LOGO -->

                    <!-- START HEADER SIDEBAR -->
                    <div id="header-sidebar" class="span6 group">


                        <div class="widget-last widget widget_text">
                            <div class="textwidget">
                                <div class="socials-default-small facebook-small default">
                                    <a target="_blank" href="http://www.facebook.com/<?php echo $sonuc['ayar_facebook'];?> " class="socials-default-small default facebook" >facebook</a>
                                </div>

                                <div class="socials-default-small skype-small default">
                                    <a target="_blank" href="http://www.twitter.com/<?php echo $sonuc['ayar_twitter']; ?>" class="socials-default-small default twitter" >skype</a>
                                </div>

                                <div class="socials-default-small linkedin-small default">
                                    <a target="_blank" href="https://plus.google.com/+<?php echo $sonuc['ayar_google']; ?>" class="socials-default-small default google" >google</a>
                                </div>

                                <div class="socials-default-small twitter-small default">
                                    <a target="_blank" href="http://www.youtube.com/c/<?php echo $sonuc['ayar_youtube']; ?>" class="socials-default-small default youtube" >youtube</a>
                                </div>
                             </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
