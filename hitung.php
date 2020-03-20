<html>
<head>
<title>Belajar Javascript | Serandal</title>
<script language='javascript'>
function HitungText(){
var Teks = document.forminput.textinput.value.length;
var total = document.getElementById('hasil');
total.innerHTML = Teks + ' Karakter';
}

</script>
</head>
<body>
<center>
<form name='forminput'>
<input type='text' size='30' name='textinput' onKeyUp='HitungText()'><span align='center' id='hasil'>
0 karakter
</span>
</form>
</center>
</body>
</html>