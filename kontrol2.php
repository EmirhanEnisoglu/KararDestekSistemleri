
<?php



$hast_id=$_POST['hast_id'];
$sayi_id=$_POST['sayi_id'];


$conn=mysqli_connect("localhost","root","","2018469024"); 


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$sql="INSERT INTO cihaz_gonder ( hast_id , sayi_id) 
VALUES ('$hast_id','$sayi_id')";

if (mysqli_query($conn, $sql)) {
      $yükleme= "Sonuçlar veritabanına başarılı bir şekilde eklenmiştir";
} else {
      $yükleme="!!!--Hata! Sonuçlar veritabanına eklenememiştir.--!!!";
}
mysqli_close($conn);




echo "<table border='25' align='center'>";
echo "<tr height='50' align='center'>";
echo "<th>Hastane id : </th>";
echo "<td>".$hast_id."</th>";
echo "</tr>";

echo "<tr height='50' align='center'>";
echo "<th>Sayi id</th>";
echo "<td>".$sayi_id."</th>";
echo "</tr>";






?>

<html>
<body>
<link href="kon2.css"rel="stylesheet">		
<a href ="main.php" style="color:white; text-decoration: none;">
		<button class="btn1"> Ana Sayfaya Dön </button>
</body>
</html>
