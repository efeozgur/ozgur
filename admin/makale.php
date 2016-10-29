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
<div class="col-md-12">
<div class="panel panel-info">
                        <div class="panel-heading">
                           SAYFA GENEL AYARLARI
                        </div>
                        <div class="panel-body">
                            <form role="form" action="islem.php" method="POST">
                             <label style="margin: 0; color:green">Makale Girişi</label> <hr />       
                                <div class="form-group">   
                                    <label>Makale Başlığı</label>                                        
                                    <input  name="makale_baslik" required="" placeholder="Başlık" class="form-control" type="text" >                                          
                                </div>
                                <div class="form-group"> 
                                    <label>Makale İçeriği</label>                                        
                                    <textarea name="makale_icerik" class="ckeditor" style="height: 350px;"></textarea>                    
                                </div>    
                                
                                <div class="form-group">   
                                    <label>Makale Resim Yolu</label>                                        
                                    <input  name="makale_resim" placeholder="http://" class="form-control" type="text" >                                          
                                </div>                                
                                <div class="form-group">   
                                    <label>Makale Yazarı</label>                                        
                                    <input  name="makale_yazar" placeholder="Efe Özgür" class="form-control" type="text" >                                          
                                </div> 
                                <div class="form-group">   
                                    <label>Makale Etiketleri</label>                                        
                                    <input  name="makale_etiket" placeholder="php, css, vb." class="form-control" type="text" >                                          
                                </div>                                                                 
                                        <input type="submit" name="btnmakalekaydet" class="btn btn-info" value="Değişiklikleri Kaydet">

                                    </form>
                            </div>
                        </div>

</div>


<?php

require('footer.php');

?>