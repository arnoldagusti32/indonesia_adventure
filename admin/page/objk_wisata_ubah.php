<?php
$id = @$_GET['id'];
$sql = $koneksi->query("SELECT * FROM objk_wisata WHERE id='$id'");
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
						<label>Nama Objek Wisata</label>
						<input class="form-control" name="objek_wisata" value="<?php echo $tampil['objek_wisata']; ?>" />

					</div>
					<div class="form-group">
						<label>Kategori</label>
						<input class="form-control" name="kategori" value="<?php echo $tampil['kategori']; ?>" />

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
$objek_wisata = @$_POST['objek_wisata'];
$kategori = @$_POST['kategori'];
$kota = @$_POST['kota'];
$provinsi = @$_POST['provinsi'];
$deskripsi = @$_POST['deskripsi'];
$nama = @$_FILES['gambar']['name'];
$lokasi = @$_FILES['gambar']['tmp_name'];
$simpan = @$_POST['simpan'];

if ($simpan) {
	move_uploaded_file($lokasi, "img/wisata/" . $nama);
	$sql = $koneksi->query("UPDATE objk_wisata SET objek_wisata='$objek_wisata', kategori='$kategori', kota='$kota', provinsi='$provinsi', gambar='$nama', deskripsi='$deskripsi' WHERE id='$id'");
	if ($sql) {
?>
		<script type="text/javascript">
			alert("Ubah Kategori Wisata Berhasil !");
			window.location.href = "?page=objk_wisata";
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