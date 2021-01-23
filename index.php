<!DOCTYPE html>
<html>
<head>
<title>Dashboard Index</title>

<meta charset="utf-8">
<link href="style4.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#giris").click(function(){

if($("#e_posta").val()=="" || $("#sifre").val()==""){
alert("Lütfen bilgileri giriniz");
}else{

$.post("kontrol.php",
{
e_posta:$("#e_posta").val(),
sifre:$("#sifre").val()
},
function(data,status){
if(data==1){
$(location).attr("href","main.php");
}else{
alert("Kullanıcı Adınız veya Şifreniz Yanlış");
}
}
);
}

});

});
</script>
</head>
<body>
<style>
		body {
			background: url(korona.jpeg) no-repeat fixed;
			background-size: 100%;
		}
	</style>
<label class="adminLabel">Koronavirüs Dashboard Ekranı</label>
<div class="girisEkrani">
<label class="girisYazi">Giriş için bilgileri doldurunuz</label>
<input type="email" id="e_posta" placeholder="Kullanıcı Adı">
<input type="password" id="sifre" placeholder="Şifre">
<button id="giris">Giriş</button>
</div>
</body>
</html>