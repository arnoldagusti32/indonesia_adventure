<div class="panel panel-primary">
	<div class="panel-heading">
		Tambah Kategori Wisata
	</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                             		<form method="post">
                                        <div class="form-group">
                                            <label>Kategori Wisata</label>
                                            <input class="form-control" name="wisata" />
                                            
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
	$wisata = @$_POST['wisata'];
	$simpan = @$_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("INSERT INTO wisata(wisata) VALUES('$wisata')");
		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Disimpan");
					window.location.href="?page=wisata";
				</script>
			<?php 
		}else{ ?>
			<script type="text/javascript">
				alert ("Kategori Wisata Sudah Ada!");
			</script>
		<?php
		}
	}
 ?>