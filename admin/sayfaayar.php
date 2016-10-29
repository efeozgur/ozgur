<?php

/**
 * @author Özgür
 * @copyright 2016
 */

require('header.php');
require('sidebar.php');

$sorgu=$baglan->query("select * from ayar");
$sonuc = $sorgu->fetch(PDO::FETCH_ASSOC);

?>
<div class="col-md-6">
<div class="panel panel-info">
                        <div class="panel-heading">
                           SAYFA GENEL AYARLARI
                        </div>
                        <div class="panel-body">
                            <form role="form" action="islem.php" method="POST">
                             <label style="margin: 0; color:green">Başlık Ayarları</label> <hr />       
                                <div class="form-group">   
                                    <label>Sayfa Logosu Linki</label>                                        
                                    <input  name="ayar_logo" placeholder="Sayfa Logosu Linki " class="form-control" type="text" value="<?php echo $sonuc['ayar_logo']; ?>" >                                          
                                </div>
                                <div class="form-group"> 
                                    <label>Sayfa Başlığı</label>                                        
                                    <input  name="ayar_baslik" placeholder="Sayfa Logosu Linki " class="form-control" type="text" value="<?php echo $sonuc['ayar_baslik']; ?>" >                                          
                                </div>    
                                <label style="margin: 0; color:green">Sosyal Ayarlar</label> <hr />                                
                                <div class="form-group">  
                                    <label>Facebook</label>                                         
                                    <input name="ayar_facebook" placeholder="Facebook Adresiniz. Örn: efe.c.ozgur" class="form-control" type="text" value="<?php echo $sonuc['ayar_facebook']; ?>">                                          
                                </div>                                  
                                <div class="form-group">  
                                    <label>Twitter</label>                                         
                                    <input name="ayar_twitter" placeholder="Twitter Adresiniz. Örn: efe.c.ozgur" class="form-control" type="text" value="<?php echo $sonuc['ayar_twitter']; ?>">                                          
                                </div>  
                                <div class="form-group"> 
                                <label>Google++</label>                                          
                                    <input name="ayar_google" placeholder="Google++ Adresiniz. Örn: efe.c.ozgur" class="form-control" type="text" value="<?php echo $sonuc['ayar_google'];?>">                                          
                                </div>      
                                <div class="form-group">  
                                <label>Youtube</label>                                         
                                    <input name="ayar_youtube" placeholder="Youtube Adresiniz. Örn: efe.c.ozgur" class="form-control" type="text" value="<?php echo $sonuc['ayar_youtube']; ?>">                                          
                                </div>                                                                                               
                                <div class="form-group">  
                                <label>Email Adresiniz</label>                                         
                                    <input name="ayar_email" placeholder="Youtube Adresiniz. Örn: efeozgur@efeozgur.com" class="form-control" type="text" value="<?php echo $sonuc['ayar_email']; ?>">                                          
                                </div> 
                                <label style="margin: 0; color:green">Meta Ayarları</label> <hr />
                                <div class="form-group">  
                                <label>Meta Açıklama</label>                                         
                                    <input name="ayar_meta_desc" placeholder="Sitenin meta açıklamasını giriniz" class="form-control" type="text" value="<?php echo $sonuc['ayar_meta_desc']; ?>">                                          
                                </div>                                 
                                <div class="form-group">  
                                <label>Meta Anahtarları</label>                                         
                                    <input name="ayar_meta_keywords" placeholder="Aralara virgül koyarak anahtar giriniz" class="form-control" type="text" value="<?php echo $sonuc['ayar_meta_keywords']; ?>">                                          
                                </div>   
                                <div class="form-group">  
                                <label>Meta Author</label>                                         
                                    <input name="ayar_meta_author" placeholder="Site sahibini giriniz" class="form-control" type="text" value="<?php echo $sonuc['ayar_meta_author']; ?>">                                          
                                </div>   
                                <label style="margin: 0; color:green">Açıklama Ayarları</label> <hr />
                                <div class="form-group">  
                                <label>Site Sahibi Hakkında</label>                                         
                                    <input name="ayar_hakkinda" placeholder="Site sahibi hakkında bölümü" class="form-control" type="text" value="<?php echo $sonuc['ayar_hakkinda']; ?>">                                          
                                </div>                                                                                            
                                <div class="form-group">  
                                <label>Footer Bilgisi</label>                                         
                                    <input name="ayar_footer" placeholder="Footer alanında gösterilecek yazı" class="form-control" type="text" value="<?php echo $sonuc['ayar_footer']; ?>">                                          
                                </div>                                 
                                
                                        <input type="submit" name="btnduzenle" class="btn btn-info" value="Değişiklikleri Kaydet">

                                    </form>
                            </div>
                        </div>

</div>

<div class="col-md-6">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            Kayıt Durumu
                        </div>
                        <div class="panel-body">
                            <?php 
                                if($_GET['status']=="ok"){
                                    echo "<p style='color:green'>Değişiklikler başarıyla kaydedildi</p>";
                                } else if($_GET['status']=="hata"){
                                    echo "<p style='color:red'>Kaydedilecek bir değişiklik yok</p>";
                                } else echo "Kaydın durumunu buradan takip edebilirsiniz";
                            
                            ?>
                        </div>

                    </div>
<div class="panel panel-success">
                        <div class="panel-heading">
                            Primary Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
</div>


<?php

require('footer.php');

?>