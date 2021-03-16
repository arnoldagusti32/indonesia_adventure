
<?php 
	$id = @$_GET['id'];
	$sql = $koneksi->query("SELECT * FROM wisata WHERE id='$id'");
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
                                            <label>Kategori Wisata</label>
                                            <input class="form-control" name="wisata" value="<?php echo $tampil['wisata']; ?>" />
                                            
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
	$wisata = @$_POST['wisata'];
	$simpan = @$_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("UPDATE wisata SET wisata='$wisata' WHERE id='$id'");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Ubah Kategori Wisata Berhasil !");
					window.location.href="?page=wisata";
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