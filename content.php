<?php 


require('fonksiyonlar.php');
    $msorgu = $baglan->query("select * from makale order by makale_tarih desc");
    
?>
        <div id="primary" class="sidebar-right">
            <div class="container group">
                <div class="row">
                <!-- START CONTENT -->
                <div id="content-blog" class="span9 content group">

                    
<?php 
    while($row=$msorgu->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        
?>
                    <div class="post type-post status-publish format-standard category-design category-themes tag-cleam tag-corporate tag-minimal group blog-libra-small row">
                        <div class="date-comments span1">
                            <p class="date">
                            <?php 
                                 $tarih = explode("-",$makale_tarih);
                            ?>
                            
                                <span style="color: #black; font-weight:bolder" class="month"><?php  echo substr(tarihbul($tarih[1]),0,4); ?></span>
                                <span style="color:#193654" class="day"><?php echo substr($tarih[2],0,2); ?></span>
                                <span style="color: lightseagreen; font-weight:bolder" class="year"><?php echo $tarih[0]; ?></span>

                            </p>

                        </div>

                        <!-- post featured & title -->

                        <div class="thumbnail span4">
                            <img width="380" height="100" src="<?php echo $makale_resim; ?>" class="attachment-blog_libra_small wp-post-image" alt="23"/>

                        </div>

                        <!-- post title -->
                        <div class="span4">

                            <h2 class="post-title">
                                <a href="blog-detail.hmtl">
                                    <?php echo $makale_baslik; ?>
                                </a>
                            </h2>

                            <div class="the-content">
                                <p>
                                    <?php echo $makale_icerik;  ?>
                                </p>

                                <p>
                                    <a href="blog-detail.hmtl" class="not-btn more-link">
                                        Devamını oku
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
<?php }?>




<!--Sayfalama burada olacak-->

<div class="general-pagination group">
                                        <a href="#" class="selected">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>


                                    </div>

<!--Sayfalama burada olacak-->


                </div>
                <!-- END CONTENT -->


                    <!-- START SIDEBAR -->
<?php require('sidebar.php'); ?>
                    <!-- END SIDEBAR -->
                </div>
            </div>
        </div>