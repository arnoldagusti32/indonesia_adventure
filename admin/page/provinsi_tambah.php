<div class="panel panel-primary">
	<div class="panel-heading">
		Tambah Data Provinsi
	</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                             		<form method="post">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input class="form-control" name="nama_provinsi" />
                                            
                                        </div>

                                        <div>
                                        	<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
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
		$sql = $koneksi->query("INSERT INTO provinsi(nama_provinsi) VALUES('$nama_provinsi')");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Disimpan");
					window.location.href="?page=provinsi";
				</script>
			<?php 
		}else{ ?>
			<script type="text/javascript">
				alert ("Data Provinsi Sudah Ada!");
			</script>
		<?php
		}
	}
 ?>