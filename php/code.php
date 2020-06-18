<?php
include 'var.php';

//simpanBuku
if ($_POST['Submit'] == "Simpan Buku") {
?>
<script type="text/javascript">
alert('Data Buku Berhasil Disimpan');
document.location = '../homeadmin.php?page=buku';
</script>
<?php
}

//simpanMember
if ($_POST['Submit'] == "Simpan Member") {
?>
<script type="text/javascript">
alert('Data Member Berhasil Disimpan');
document.location = '../homeadmin.php?page=member';
</script>
<?php
}

//simpanPustakawan
if ($_POST['Submit'] == "Simpan Pustakawan") {
?>
<script type="text/javascript">
alert('Data Pustakawan Berhasil Disimpan');
document.location = '../homeadmin.php?page=pustakawan';
</script>
<?php
}

//daftarIndex
if ($_POST['Submit'] == "Sign Up") {
?>
<script type="text/javascript">
alert('Anda Berhasil Daftar, Selamat Datang <?=$user?>');
document.location = '../homeuser.php';
</script>
<?php
}

//login
if ($_POST['Submit'] == "Login") {
$email = $_POST['emailLogin'];
$password = $_POST['passwordLogin'];
if($email == "Admin@admin.com" && $password == "Admin"){
?>
<script type="text/javascript">
alert('Selamat Datang <?=$nama?>');
document.location = '../homeadmin.php';
</script>
<?php
}else if ($email == "Admin@admin.com" && $password != "Admin") {
	?>
<script type="text/javascript">
alert('Data admin tidak sesuai');
document.location = '../index.php';
</script>
	<?php
}else{
	?>
	<script type="text/javascript">
alert('Selamat Datang <?=$user?>');
document.location = '../homeuser.php';
</script>
<?php
}
}
?>