<?php

/**
 * @author Özgür
 * @copyright 2016
 */
require('config/vt.php');

if(@$_POST['btnduzenle']){
    $id =0; 
    $sorgu=$baglan->prepare("update ayar set ayar_logo=?, ayar_baslik=?, ayar_facebook=?, ayar_twitter=?, ayar_google=?, ayar_youtube=?, ayar_email=?, ayar_meta_desc=?, ayar_meta_keywords=?, ayar_meta_author=?, ayar_hakkinda=?, ayar_footer=? where ayar_id=$id");
    $sorgu->execute(array($_POST['ayar_logo'], $_POST['ayar_baslik'], $_POST['ayar_facebook'], $_POST['ayar_twitter'], $_POST['ayar_google'], $_POST['ayar_youtube'], $_POST['ayar_email'], $_POST['ayar_meta_desc'], $_POST['ayar_meta_keywords'], $_POST['ayar_meta_author'], $_POST['ayar_hakkinda'], $_POST['ayar_footer']));
    if($sorgu->rowCount()){
        header("Location:sayfaayar.php?status=ok");
    } else  header("Location:sayfaayar.php?status=hata");
}

if(@$_POST['btnmakalekaydet']){
    $kaydet = $baglan->prepare('insert into makale (makale_baslik, makale_icerik, makale_resim, makale_yazar, makale_etiket) values (?,?,?,?,?)');
    $kaydet->execute(array($_POST['makale_baslik'], $_POST['makale_icerik'], $_POST['makale_resim'], $_POST['makale_yazar'], $_POST['makale_etiket']));
    if($kaydet->rowCount()){
        header("Location:makale.php?status=ok");
    } else header("Location:makale.php?status=ok");
}


if ($_POST['girisbtn']) {
    $usersorgu = $baglan->query("select * from user");
    $userim = $usersorgu->fetch(PDO::FETCH_ASSOC);

    if (($userim['username']==$_POST['username']) && ($userim['password']==$_POST['password'])) {
        session_start();
        $_SESSION['username'] = $userim['username'];
        $_SESSION['password'] = $userim['password'];
        header('Location:index.php?kdurum=kok');
    } else header('Location:../index.php');
    
}

?>