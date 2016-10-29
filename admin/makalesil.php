<?php 
	require('header.php');
	require('sidebar.php');

?>

<div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php 
                            	if (@$_GET['status']=="ok") {
                            		echo "<p style='color:green'>Kayıt Başarıyla Silindi..</p>";
                            	} else if (@$_GET['status']=="hata") {
                            		echo "<p style='color:red'>Kayıt silinmesinde hata..</p>";
                            	} else {echo "Kayıt Sil";}

                             ?>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Makale ID</th>
                                            <th>Makale Başlığı</th>
                                            <th>Makale Tarihi</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    	$sorgu = $baglan->query('select * from makale');
                                    	while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                    		extract($row);
                                    	
                                     ?>
                                        <tr>
                                            <td><?php echo $makale_id; ?></td>
                                            <td><?php echo $makale_baslik; ?></td>
                                            <td><?php echo $makale_tarih; ?></td>
                                            <td><a href="islem.php?kayitsil=<?php echo $makale_id ?>">Sil</a></td>
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>

<?php 


	require('footer.php');

 ?>