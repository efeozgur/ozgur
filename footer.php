<?php 
    $sorgu = $baglan->query("select * from ayar");
    $sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-widgets-area with-sidebar-right">
                        <div class="widget-first widget span2 widget_text"><h3>Hakkımda</h3>
                            <div class="textwidget">
                                <?php echo $sonuc['ayar_hakkinda']; ?>
                            </div>
                        </div>

                        <div class="widget span2 widget_nav_menu">
                            <h3>Hızlı Menü</h3>

                            <div class="menu-widget-footer-container">
                                <ul id="menu-widget-footer" class="menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="accordion-style.html">About</a>
                                    </li>

                                    <li class="menu-item menu-item-type-post_type">
                                        <a href="testimonials.html">Testimonials</a>
                                    </li>

                                    <li class="menu-item menu-item-type-post_type">
                                        <a href="portfolio-3-columns.html">Portfolio</a>
                                    </li>

                                    <li class="menu-item menu-item-type-post_type">
                                        <a href="get-in-touch.html">İletişim</a>
                                    </li>

                                    <li class="menu-item menu-item-type-custom">
                                        <a href="#">Policy</a>
                                    </li>

                                    <li class="menu-item menu-item-type-custom">
                                        <a href="#">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-last widget span2 widget_nav_menu">
                            <h3>Sosyal</h3>

                            <div class="menu-socialize-container">
                                <ul id="menu-socialize" class="menu">

                                    <li class="menu-item menu-item-type-custom">
                                        <a target="_blank" href="http://www.facebook.com/<?php echo $sonuc['ayar_facebook']; ?>">Facebook</a>
                                    </li>

                                    <li class="menu-item menu-item-type-custom">
                                        <a target="_blank" href="http://www.twitter.com/<?php echo $sonuc['ayar_twitter']; ?>">Twitter</a>
                                    </li>

                                    <li class="menu-item menu-item-type-custom">
                                        <a target="_blank" href="https://plus.google.com/+<?php echo $sonuc['ayar_google']; ?>">Google</a>
                                    </li>

                                    <li class="menu-item menu-item-type-custom">
                                        <a target="_blank" href="http://www.youtube.com/c/<?php echo $sonuc['ayar_youtube']; ?>">Youtube</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer-widgets-sidebar with-sidebar-right">
                        <div  class="widget-first widget span6 yit_quick_contact">
                            <h3>İletişim</h3>

                            <form class="contact-form row" method="post" action="" enctype="multipart/form-data">

                                <div class="usermessagea"></div>
                                <fieldset>
                                    <ul>
                                        <li class="text-field with-icon span3">
                                            <label>
                                                <span class="mainlabel">İsim</span>
                                            </label>

                                            <div class="input-prepend">
                                                <span class="add-on">
                                                    <img src="images/footer/author-footer.png" alt="" title=""/></span>
                                                <input type="text" name="isim" class="with-icon required" value=""/>
                                            </div>
                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="text-field with-icon span3">
                                            <label>
                                                <span class="mainlabel">Email</span>
                                            </label>

                                            <div class="input-prepend">
                                                <span class="add-on">
                                                    <img src="images/footer/envelope-footer.png" alt="" title=""/>
                                                </span>
                                                <input type="text" name="email" class="with-icon required email-validate" value=""/>
                                            </div>
                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="textarea-field with-icon span6">
                                            <label>
                                                <span class="mainlabel">Mesajınız</span>
                                            </label>

                                            <div class="input-prepend">
                                                <span class="add-on">
                                                    <img src="images/footer/pencil-footer.png" alt="" title=""/>
                                                </span>
                                                <textarea name="mesaj" rows="8" cols="30" class="with-icon required"></textarea>
                                            </div>
                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="submit-button span6">
                                            <div style="position:absolute;left:-9999px;">
                                                <input type="text" name="email_check_2" id="email_check_2" value=""/>
                                            </div>
                                            
                                            <input type="submit" name="yit_sendemail" value="Gönder" class="sendmail alignright"/>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </fieldset>
                            </form>

                            <script type="text/javascript">
                                var messages_form_228 = {
                                    name: "Insert the name",
                                    email: "Insert a valid email",
                                    message: "Insert a message"
                                };
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- START COPYRIGHT -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="left span6">
                        <p>
                            <a href="#"><img src="images/libra-logo1.png" alt="Efe Özgür Kişisel Blog" style="position:relative; top:0px; margin: -22px 5px 0 0;"></a>&nbsp;Copyright 2016 - <strong>Efe Özgür</strong> 
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- END COPYRIGHT -->

        <div class="wrapper-border"></div>

        </div>
    <!-- END WRAPPER -->

    </div>
    <!-- END BG SHADOW -->

    <script type='text/javascript' src='js/comment-reply.min.js'></script>
    <script type='text/javascript' src='js/underscore.min.js'></script>
    <script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.js'></script>
    <script type='text/javascript' src='js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='js/media-upload.min.js'></script>
    <script type='text/javascript' src='js/jquery.clickout.min.js'></script>
    <script type='text/javascript' src='js/responsive.js'></script>
    <script type='text/javascript' src='js/mobilemenu.js'></script>
    <script type='text/javascript' src='js/jquery.superfish.js'></script>
    <script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
    <script type='text/javascript' src='js/jquery.placeholder.js'></script>
    <script type='text/javascript' src='js/contact.js'></script>
    <script type='text/javascript' src='js/jquery.tweetable.js'></script>
    <script type='text/javascript' src='js/jquery.tipsy.js'></script>
    <script type='text/javascript' src='js/jquery.cycle.min.js'></script>
    <script type='text/javascript' src='js/shortcodes.js'></script>
    <script type='text/javascript' src='js/jquery.custom.js'></script>

    </body>
    <!-- END BODY -->
    </html>