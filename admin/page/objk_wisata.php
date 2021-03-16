<div class="row">
	<div class="col-md-12">
		<!-- Advanced Tables -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<font size="+2">Objek Wisata</font>
			</div>
			<a href="?page=objk_wisata&aksi=tambah" class="btn btn-primary" style="margin-top:25px">Tambah Data</a>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Objek Wisata</th>
								<th>Kategori</th>
								<th>Kota</th>
								<th>Provinsi</th>
								<th>Gambar</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<?php
						$sql = $koneksi->query("SELECT * FROM objk_wisata");
						while ($data = $sql->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $data["objek_wisata"]; ?></td>
								<td><?php echo $data["kategori"]; ?></td>
								<td><?php echo $data["kota"]; ?></td>
								<td><?php echo $data["provinsi"]; ?></td>
								<td><img src="img/wisata/<?php echo $data["gambar"]; ?>" wight="200px" height="168px"></td>
								<td><?php echo $data["deskripsi"]; ?></td>
								<td>
									<a href="?page=objk_wisata&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
									<a onclick="return confirm('Anda yakin menghapus data ini')" href="?page=objk_wisata&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php } ?>
						<tbody>
				</div>
			</div>
		</div>
	</div>
</div>