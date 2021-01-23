<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Covid-19 Takip Ekranı</title>
  <meta charset="utf-8">
  <meta name="description" content="E-Ticaret Sistemi">
  <meta nam="keyword" content="E-Ticaret Sistemi">
  <link href="hastane1.css"rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div class="sidebar">
    <div class="title">
      <a href="#"><strong>Covid19 </strong>Takip</a>
    </div>
    <div class="status">
      <img src="https://scontent.ftzx1-1.fna.fbcdn.net/v/t1.0-9/69447257_10214574454378624_6974867768755617792_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=_vjBdJn0YE0AX8sLJ7p&_nc_ht=scontent.ftzx1-1.fna&oh=5dbb4150624022e19693a4415a783d7c&oe=601E4AB4">
      <div class="info">
        <span>Hoşgeldiniz</span>
        <span><strong>Yönetici Aktif</strong></span>
      </div>
    </div>
    
    
	
	
	
	
    <div class="dash">
	<a href ="main.php" style="color:white; text-decoration: none;">
	<i class="fas fa-home"></i> 
	<span>Kontrol Paneli</span>
    </div></a>

    <div class="layout">
	<a href ="hastaneler.php" style="color:white; text-decoration: none;">	
	<i class="fas fa-hospital"></i>
	<span>Hastaneler</span>	
    </div></a>
    
	<div class="widgets">
	<a href ="hastalar.php" style="color:white; text-decoration: none;">	
      <i class="fas fa-procedures"></i>	
	<span>Hastalar</span>
    </div></a>
    
	<div class="charts">
	<a href ="durum.php" style="color:white; text-decoration: none;">	
      <i class="fas fa-plus-square"></i>	
	<span>Hastaların Durumları</span>	
    </div></a>
    
	<div class="uielements">
	<a href ="cihaz.php" style="color:white; text-decoration: none;">	
     <i class="fas fa-laptop-medical"></i>	
	<span>Gönderilecek Cihazlar</span>	
    </div></a>
	
	<div class="cihazGonder">
	<a href ="cihazGonder.php" style="color:white; text-decoration: none;">	
     <i class="fas fa-share-square"></i>	
	<span>Cihaz Gönderme</span>	
    </div></a>
	
	<div class="cikis">
	<a href ="index.php" style="color:white; text-decoration: none;">	
     <i class="fas fa-sign-out-alt"></i>	
	<span>Çıkış</span>	
    </div></a>
    
    
  </div>
    <div class="content">
	   <div class="header">
	   <i class="fas fa-align-justify"></i>
	   <div class="not">
	   
	   
	   </div>
	   <div class="headerinfo">
	   <img src="https://scontent.ftzx1-1.fna.fbcdn.net/v/t1.0-9/69447257_10214574454378624_6974867768755617792_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=_vjBdJn0YE0AX8sLJ7p&_nc_ht=scontent.ftzx1-1.fna&oh=5dbb4150624022e19693a4415a783d7c&oe=601E4AB4">
    <span>Yönetici</span>	
</div>

       
	   </div>

	   <div class="main">
	   <div class="nav">
	   <div>
	   <span class="dash">Hastaneler</span>
	   <span></span>
	   </div>
	   <div class="navigation">
	   <i class="fas fa-home"></i>
	   <span>Covid-19</span>
	   <span>>Hastaneler</span>
	   <span></span>
	   </div>
	   </div>  
	   
	   <div align="center">

      <table border="2" >


            <tr style="font-weight: bold;"style="font-weight: bold;">
                
                <th>Hastane Adı</th>
                <th>İl Adı</th>
                
            </tr>

            <?php


            $sorgu = $baglanti->query("SELECT hastane.hastane_ad, iller.il_ad FROM iller,hastane WHERE hastane.il_id=iller.il_id limit 120,20
 "); // Müşteriler tablosundaki tüm verileri çekiyoruz.

            while ($sonuc = $sorgu->fetch_assoc()) {

                $hastane_ad = $sonuc['hastane_ad']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
                $il_ad = $sonuc['il_ad'];
                


// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 

                ?>

                <tr>
                    <td><?php echo $hastane_ad;?></td>
                    <td><?php echo $il_ad;?></td>
                    

                </tr>

            <?php } ?>

</table>

</div>
		
		<a href ="hastaneler.php" style="color:white; text-decoration: none;">
		<button class="btn1"> < </button>
		<a href ="hastaneler.php" style="color:white; text-decoration: none;">
		<button class="btn2"> 1 </button>
		<a href ="hastaneler2.php" style="color:white; text-decoration: none;">
		<button class="btn3"> 2 </button>
		<a href ="hastaneler3.php" style="color:white; text-decoration: none;">
		<button class="btn4"> 3 </button>
		<a href ="hastaneler4.php" style="color:white; text-decoration: none;">
		<button class="btn5"> 4 </button>
		<a href ="hastaneler5.php" style="color:white; text-decoration: none;">
		<button class="btn6"> 5 </button>
		<a href ="hastaneler6.php" style="color:white; text-decoration: none;">
		<button class="btn7"> 6 </button>
		<a href ="hastaneler7.php" style="color:white; text-decoration: none;">
		<button class="btn8"> 7 </button>
		<a href ="hastaneler7.php" style="color:white; text-decoration: none;">
		<button class="btn8"> > </button>
		<a href ="hastaneler7.php" style="color:white; text-decoration: none;">
		
		
</body>

</html>
      
     