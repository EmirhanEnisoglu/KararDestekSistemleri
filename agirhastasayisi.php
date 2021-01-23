<?php
$baglanti=mysqli_connect("localhost","root","","2018469024");
mysqli_set_charset($baglanti, "UTF8");

if (mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu3 = mysqli_query($baglanti, "Select count(hasta_durum.durum_id) as agirHasta
From hasta_durum
Where hasta_durum.durum_id='2'");
if ($sorgu3){
	$agir_hasta_sayisi=mysqli_num_rows($sorgu3);
	if ($agir_hasta_sayisi>0){
		$sayi = mysqli_fetch_assoc($sorgu3);
		
		
		echo " " .$sayi["agirHasta"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>