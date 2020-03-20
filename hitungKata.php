<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cara Menghitung Banyak Kata Menggunakan Javascript</title>
<style>
	.form{margin:auto; width:900px}
	.text{color:green; width:900px}
</style>
</head>

<body>
<form name="wordcount" class="form"> 
<textarea class="text" rows="12" name="wordcount2" cols="38" wrap="virtual" placeholder="silahkan masukan kalimat"></textarea><br> 
<input type="button" class="button" value="Hitung" onClick="hitung()"> <input type="text" name="wordcount3" size="20"> 
</form> 
<script type="text/javascript"> 
function hitung(){ 
    var formcontent=document.wordcount.wordcount2.value 
    isi=formcontent.split(" ") 
    document.wordcount.wordcount3.value=isi.length 
} 
</script> 
</body>
</html>