<?php
$baglanti=mysqli_connect("localhost","root","","2018469024");
mysqli_set_charset($baglanti, "UTF8");

if (mysqli_connect_errno($baglanti)){
	echo "Bağlantı Hatası<br />";
	echo "Hata açıklaması : " .mysqli_connect_error();
	die();
}
$sorgu2 = mysqli_query($baglanti, "SELECT COUNT(hasta.tc_no) as hastalar FROM hasta");
if ($sorgu2){
	$hasta_sayisi=mysqli_num_rows($sorgu2);
	if ($hasta_sayisi>0){
		$sayi = mysqli_fetch_assoc($sorgu2);
		
		
		echo " " .$sayi["hastalar"]. "<br />";
		
	}else{
		echo "Kayıt Yok";
	}

}else{
	echo "Sorgu Hatası";
}
mysqli_close($baglanti);

?>