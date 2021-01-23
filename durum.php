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
	   
	   <div class="boxes">
	   
	    <a href ="marmara.php" style="color:white; text-decoration: none;" > 
		<div class="box1" >	
		<span>Marmara Bölgesi </span>
		</a> </div>
		
		<a href ="ege.php" style="color:white; text-decoration: none;" >
		<div class="box2" > 	
		<span>Ege Bölgesi </span>
		</a> </div>
		
		<a href ="akdeniz.php" style="color:white; text-decoration: none;">	
		<div class="box3" >
		<span>Akdeniz Bölgesi </span>
		</a></div>
		
		<a href ="karadeniz.php" style="color:white; text-decoration: none;"> 
		<div class="box4" >
		<span>Karadeniz Bölgesi </span>
		</a></div>
		
		<a href ="ic_anadolu.php" style="color:white; text-decoration: none;">	
		<div class="box5" >
		<span>İç Anadolu Bölgesi </span>
		</a></div>
		
		<a href ="dogu_anadolu.php" style="color:white; text-decoration: none;"> 
		<div class="box6" >
		<span>Doğu Anadolu Bölgesi </span>
		</a></div>
		
		<a href ="guney_dogu_anadolu.php" style="color:white; text-decoration: none;"> 
		<div class="box7" >
		<span>Güney Doğu Anadolu Bölgesi </span>
		</a></div>
		
		

		</div>
		
		<!-- Grafikler -->
		<div class="durum_grafik">
		
		<div id="piechart_3d" style="width: 515px; height: 250px; padding-left:72px; margin-top:20px;"></div>
		
		<div id="piechart_3d-2" style="width: 515px; height: 250px; padding-left:72px; margin-top:20px;"></div>
		
		</div>
		
		<div class="durum_grafik2">
		
		<div id="columnchart_material" style="width: 515px; height: 300px; padding-left:72px; margin-top:40px; "></div>
		<div id="columnchart_material-1" style="width: 515px; height: 300px; padding-left:72px; margin-top:40px; "></div>
		
		</div>
	   
	   
	   </div>
	  </div>
	  
     
		
	
		
		
</body>

<!-- Grafik 1 -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Yaş Aralığı', 'Sayısı'],
          ['0-18 Yaş',     25],
          ['18-45 Yaş',      69],
          ['45-65 Yaş',  58],
          ['65 Yaş ve Üstü', 24]
          
        ]);

        var options = {
          title: 'Yaşlara Göre Ağır Hasta Dağılımı',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
	
	
	
<!-- Grafik 2 -->	
	<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Yaş Aralığı', 'Sayısı'],
          ['0-18 Yaş',     26],
          ['18-45 Yaş',      44],
          ['45-65 Yaş',  31],
          ['65 Yaş ve Üstü', 28]
          
        ]);

        var options = {
          title: 'Yaşlara Göre Normal Hasta Dağılımı',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d-2'));
        chart.draw(data, options);
      }
    </script>
	
<!-- Grafik 3 -->	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['İller', 'Hasta Sayısı' ],
          ['İstanbul', 17],
          ['Ankara', 14],
		  ['İzmir', 14],
          ['Antalya', 7],
          ['Konya', 6],
		  
        ]);

        var options = {
          chart: {
            title: 'Ağır Hasta Sayısı En Fazla Olan 5 İl',
            subtitle: 'Ağır Hasta Sayısı',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	
	<!-- Grafik 4 -->	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['İller', 'Hasta Sayısı' ],
          ['Siirt', 1],
          ['Balıkesir', 1],
		  ['Ağrı', 1],
          ['Tokat', 1],
          ['Niğde', 1],
		  
        ]);

        var options = {
          chart: {
            title: 'Ağır Hasta Sayısı En Az Olan 5 İl',
            subtitle: 'Ağır Hasta Sayısı',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material-1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	
  
</html>
      
     