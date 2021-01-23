<?php
$baglanti=mysqli_connect("localhost","root","","2018469024");
mysqli_set_charset($baglanti, "UTF8");

if (mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu = mysqli_query($baglanti, "SELECT COUNT(hastane.hastane_id) as hastane FROM hastane");
if ($sorgu){
	$hastane_sayisi=mysqli_num_rows($sorgu);
	if ($hastane_sayisi>0){
		$sayi = mysqli_fetch_assoc($sorgu);
		
		
		echo " Toplam Hastane Sayısı:" .$sayi["hastane"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>