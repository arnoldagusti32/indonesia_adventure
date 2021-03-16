
<?php 
	$id = @$_GET['id'];
	$sql = $koneksi->query("SELECT * FROM provinsi WHERE id='$id'");
	$tampil=$sql->fetch_assoc();

 ?>
<div class="panel panel-primary">
	<div class="panel-heading">
		Ubah Data
	</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                             		<form method="post">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input class="form-control" name="nama_provinsi" value="<?php echo $tampil['nama_provinsi']; ?>" />
                                            
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
	$nama_provinsi = @$_POST['nama_provinsi'];
	$simpan = @$_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("UPDATE provinsi SET nama_provinsi='$nama_provinsi' WHERE id='$id'");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Ubah Data Provinsi Berhasil !");
					window.location.href="?page=provinsi";
				</script>
			<?php 
		}else{ ?>
			<script type="text/javascript">
				alert ("Tidak Berhasil Diubah !");
			</script>
		<?php
		}
	}
 ?>