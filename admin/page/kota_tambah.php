<div class="panel panel-primary">
	<div class="panel-heading">
		Tambah Data Kota
	</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                             		<form method="post">
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input class="form-control" name="nama_kota" />
                                        </div>
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
	$nama_kota = @$_POST['nama_kota'];
	$nama_provinsi= @$_POST['nama_provinsi'];
	$simpan = @$_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("INSERT INTO kota(nama_kota,nama_provinsi) VALUES('$nama_kota','$nama_provinsi')");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Disimpan");
					window.location.href="?page=kota";
				</script>
			<?php 
		}else{ ?>
			<script type="text/javascript">
				alert ("Data kota Sudah Ada!");
			</script>
		<?php
		}
	}
 ?>