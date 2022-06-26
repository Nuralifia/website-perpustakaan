<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="pilihan.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>
</head>
<body>

<p>Pilihan :</p>

<a href="AdminLTE/index.html"><button class="btn">Halaman Admin</button></a>
<div></div>
<a href="indexajax.html"><button class="btn">Nama Peminjaman Siswa</button></a>
<div></div>
<a href=""><button class="btn">Petugas Perpustakaan</button></a>

</body>
</html>
