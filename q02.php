<?php
class Telebe {
 
  public $ad;
  public $soyad;
 
  public function qarsila()
  {
  echo "Salam $this->ad $this->soyad !.";

  }
  public function qeydiyyataAl()
  {
    echo self::qarsila();
    return $this;

  }

  public function melumatlandir()
  {
    echo "Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" ;
  }
  
}


 
$telebe01 = new Telebe();
$telebe01 -> ad = "Memmed";
$telebe01 -> soyad = "Hesenov";
 $telebe01 -> qeydiyyataAl() -> melumatlandir();
/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
/**
* 
*/

?>