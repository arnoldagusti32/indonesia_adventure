<div class="row">
	<div class="col-md-12">
		<!-- Advanced Tables -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<font size="+2">Data Kota</font>
			</div>
			<a href="?page=kota&aksi=tambah" class="btn btn-primary" style="margin-top:25px">Tambah Data</a>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kota</th>
								<th>Nama Provinsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<?php
						$no_urut = 1;
						$sql = $koneksi->query("SELECT * FROM kota");
						while ($data = $sql->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo $no_urut++; ?></td>
								<td><?php echo $data["nama_kota"]; ?></td>
								<td><?php echo $data["nama_provinsi"]; ?></td>
								<td>
									<a href="?page=kota&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
									<a onclick="return confirm('Anda yakin menghapus data ini')" href="?page=kota&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php } ?>
						<tbody>
				</div>
			</div>
		</div>
	</div>
</div>