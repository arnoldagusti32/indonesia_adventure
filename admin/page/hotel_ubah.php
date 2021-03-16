<?php
$id = @$_GET['id'];
$sql = $koneksi->query("SELECT * FROM hotel WHERE id='$id'");
$tampil = $sql->fetch_assoc();

?>
<div class="panel panel-primary">
	<div class="panel-heading">
		Ubah Data
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Hotel</label>
						<input class="form-control" name="nm_hotel" value="<?php echo $tampil['nm_hotel']; ?>" />

					</div>
					<div class="form-group">
						<label>Kota</label>
						<input class="form-control" name="kota" value="<?php echo $tampil['kota']; ?>" />

					</div>
					<div class="form-group">
						<label>Provinsi</label>
						<input class="form-control" name="provinsi" value="<?php echo $tampil['provinsi']; ?>" />

					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" class="form-control" name="gambar" value="<?php echo $tampil['gambar']; ?>" required />
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<input class="form-control" name="deskripsi" value="<?php echo $tampil['deskripsi']; ?>" />

					</div>

					<div>
						<input type="submit" name="simpan" value="ubah" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
$nm_hotel = @$_POST['nm_hotel'];
$kota = @$_POST['kota'];
$provinsi = @$_POST['provinsi'];
$deskripsi = @$_POST['deskripsi'];
$nama = @$_FILES['gambar']['name'];
$lokasi = @$_FILES['gambar']['tmp_name'];
$simpan = @$_POST['simpan'];

if ($simpan) {
	move_uploaded_file($lokasi, "img/hotel/" . $nama);
	$sql = $koneksi->query("UPDATE hotel SET nm_hotel='$nm_hotel', kota='$kota', provinsi='$provinsi', gambar='$nama', deskripsi='$deskripsi' WHERE id='$id'");
	if ($sql) {
?>
		<script type="text/javascript">
			alert("Ubah Kategori Wisata Berhasil !");
			window.location.href = "?page=hotel";
		</script>
	<?php
	} else { ?>
		<script type="text/javascript">
			alert("Tidak Berhasil Diubah !");
		</script>
<?php
	}
}
?>