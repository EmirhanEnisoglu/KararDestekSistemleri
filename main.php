<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Covid-19 Takip Ekranı</title>
  <meta charset="utf-8">
  <meta name="description" content="E-Ticaret Sistemi">
  <meta nam="keyword" content="E-Ticaret Sistemi">
  <link href="maincss2.css"rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
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
	   <span class="dash">Kontrol Paneli</span>
	   <span></span>
	   </div>
	   <div class="navigation">
	   <i class="fas fa-home"></i>
	   <span>Covid-19</span>
	   <span>>Kontrol Paneli</span>
	   <span></span>
	   </div>
	   </div> 
	   
	   <div class="boxes">
		<div id="box1" class="box">
		Toplam Hastane Sayısı 
		</div>
		
		
		<div id="box2" class="box">
		Toplam Hasta Sayısı 
		</div>
		
		
		<div id="box3" class="box">
		Ağır Hasta Sayısı
		</div>
		</div>
       

	   
	   <div id="chart_div" style="500px; height: 600px; padding-left:5px; margin-top:25px;"></div>
	   
	   
	   
	   
        
     
         </div>
    </div>
       

	  
</body>



<script>
$(document) .ready(function() {
	$.post ("hastanesayisi.php",
	function(data,status) {
		$("#box1").html("Toplam Hastane Sayısı:"+data);
	}) ;
$.post ("hastasayisi.php",
	function(data,status) {
		$("#box2").html("Toplam Hasta Sayısı:"+data);
	}) ;
	$.post ("agirhastasayisi.php",
	function(data,status) {
		$("#box3").html("Ağır Hasta Sayısı:"+data);
	}) ;
	
}) ;





</script>

<script type='text/javascript' src='https://www.google.com/jsapi'></script>
        <script type='text/javascript'>
            google.load('visualization', '1', {'packages': ['geochart']});
            google.setOnLoadCallback(drawRegionsMap);
            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                        ['Şehir', 'Ağır Hasta','Normal Hasta'],
                        ['istanbul', 17 ,13],
						['edirne', 1 ,2],
						['tekirdağ', 3, 5],
						['kırklareli', 1, 1],
						['çanakkale', 4, 0],
						['kocaeli', 5, 1],
						['düzce', 5, 1],
						['yalova', 2, 0],
						['sakarya', 1, 1],
						['bilecik', 1, 1],
						['bursa', 3, 1],
						['balıkesir', 1, 1],
						['izmir', 14, 13],
						['manisa', 2, 2],
						['aydın', 1, 0],
						['denizli', 2, 0],
						['muğla', 3, 3],
						['afyon', 1, 1],
						['uşak', 2, 1],
						['kütahya', 2, 0],
						['ankara', 14, 3],
						['konya', 6, 2],
						['kayseri', 1, 3],
						['eskişehir', 2, 2],
						['sivas', 3, 1],
						['kırıkkale', 0, 2],
						['aksaray', 2, 0],
						['karaman', 2, 0],
						['kırşehir', 1, 1],
						['niğde', 1, 1],
						['nevşehir', 1, 1],
						['yozgat', 1, 1],
						['çankırı', 0, 2],
						['adana', 3, 5],
						['antalya', 7, 3],
						['içel', 6, 1],
						['hatay', 2, 4],
						['kahramanmaraş', 3, 1],
						['osmaniye', 2, 0],
						['isparta', 0, 1],
						['burdur', 1, 1],
						['karabük', 2, 0],
						['amasya', 4, 1],
						['artvin', 0, 3],
						['bartın', 2, 0],
						['bayburt', 2, 1],
						['bolu', 2, 0],
						['gümüşhane', 0, 2],
						['samsun', 3, 1],
						['trabzon', 2, 1],
						['sinop', 0, 2],
						['zonguldak', 2, 2],
						['tokat', 1, 1],
						['rize', 3, 1],
						['ordu', 1, 1],
						['çorum', 0, 2],
						['kastamonu', 0, 2],
						['giresun', 1, 1],
						['hakkari', 1, 0],
						['van', 1, 1],
						['iğdır', 0, 2],
						['ardahan', 1, 1],
						['kars', 1, 1],
						['ağrı', 1, 0],
						['bitlis', 0, 1],
						['muş', 2, 1],
						['bingöl', 0, 1],
						['erzurum', 2, 0],
						['tunceli', 0, 2],
						['malatya', 1, 1],
						['erzincan', 1, 1],
						['elazığ', 3, 1],
						['gaziantep', 2, 2],
						['diyarbakır', 2, 0],
						['şanlıurfa', 4, 2],
						['batman', 1, 1],
						['adıyaman', 0, 2],
						['siirt', 1, 1],
						['mardin', 0, 2],
						['kilis', 1, 1],
						['şırnak', 1, 2],
						
                        ]);
                        var options = {};
                var opts = {
                    region: 'TR',
                    displayMode: 'regions',
                    resolution: 'provinces',
					colorAxis: {colors: [ '#21385b']},
					datalessRegionColor: '#d0cfd4',
					backgroundColor: 'transparent' ,
                };

                var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
                chart.draw(data, opts);
            }
            ;
        </script>


</html>
      
     