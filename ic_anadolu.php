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
  <link href="durum1.css"rel="stylesheet">
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
		<span class="dash">Hastaların Durumları</span>
		<span></span>
		</div>
		<div class="navigation">
		<i class="fas fa-home"></i>
		<span>Covid-19</span>
		<span>>Durumlar</span>
		<span></span>
		</div>
		</div> 

		<!-- Grafikler -->
		<div id="columnchart_material" style="width: 1070px; height: 320px; padding-left:30px;"></div>
		<div class="grafik">
		<div id="piechart" style="width: 520px; height: 300px; padding-left:30px; margin-top:15px;"></div>
		
		<div id="piechart2" style="width: 520px; height: 300px; padding-left:30px; margin-top:15px; "></div>
		
		</div>
		
		
		
    
	
		
		
		
		
    
		
		
		</div>
	   
	  </div> 
		
	
    
  
	
		
</body>

	<!-- Grafik 1 -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['İller', 'Ağır Hasta', 'Normal Hasta'],
          ['Ankara', 14, 3],
          ['Konya', 6, 2],
		  ['Kayseri', 1, 3],
          ['Eskişehir', 2, 2],
          ['Sivas', 3, 1],
		  ['Kırıkkale', 0, 2],
		  ['Aksaray', 2, 0],
		  ['Karaman', 2, 0],
		  ['Kırşehir', 1, 1],
		  ['Niğde', 1, 1],
		  ['Nevşehir', 1, 1],
		  ['Yozgat', 1, 1],
		  ['Çankırı', 0, 2],
        ]);

        var options = {
          chart: {
            title: 'İç Anadolu Bölgesi',
            subtitle: 'Ağır Ve Normal Hasta Sayıları',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	
	<!-- Grafik 2 -->
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['İller', 'Ağır Hasta'],
          ['Ankara',     14],
          ['Konya',      6],
          ['Kayseri',  1],
          ['Eskişehir', 2],
          ['Sivas',    3],
		  ['Kırıkkale',    0],
		  ['Aksaray',    2],
		  ['Karaman',    2],
		  ['Kırşehir',    1],
		  ['Niğde',    1],
		  ['Nevşehir',    1],
		  ['Yozgat',    1],
		  ['Çankırı',    0],
		  
        ]);

        var options = {
          title: 'İç Anadolu Bölgesi Ağır Hasta Dağılımı'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
	<!-- Grafik 3 -->
	
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['İller', 'Normal Hasta'],
          ['Ankara',     3],
          ['Konya',      2],
          ['Kayseri',  3],
          ['Eskişehir', 2],
          ['Sivas',    1],
		  ['Kırıkkale',    2],
		  ['Aksaray',    0],
		  ['Karaman',    0],
		  ['Kırşehir',    1],
		  ['Niğde',    1],
		  ['Nevşehir',    1],
		  ['Yozgat',    1],
		  ['Çankırı',    2],
        ]);

        var options = {
          title: 'İç Anadolu Bölgesi Normal Hasta Dağılımı'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>
	
	
	


</html>