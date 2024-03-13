<?php
 function yasHesapla($yil) {
 if(is_string($yil)) {
 throw new Exception("Sadece yıl bilgisi giriniz."); 
 }
 $sonuc=2024-$yil;
 return $sonuc;
 } 
 try {
 $yas=yasHesapla(1988);
 echo "<b>Yaşınız=</b>".$yas."<br>";
 $yas=yasHesapla(2007);
 echo "<b>Yaşınız=</b>".$yas."  <br>";
 $yas=yasHesapla("ikibin");
 echo "<b>Yaşınız=</b>".$yas; 
 } 
 catch(Exception $e) {
 echo "<b style='color:red'>Hata mesajı:</b> " .$e->getMessage();
 } 
 finally
 {
 echo "<br>";
 echo "<b style='background-color:orange'>
 -Yaşamınızda mutluluklar dileriz.</b>";
 }
?>
