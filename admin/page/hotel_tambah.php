<div class="panel panel-primary">
    <div class="panel-heading">
        Tambah Hotel
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Hotel</label>
                        <input class="form-control" name="nm_hotel" />

                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input class="form-control" name="kota" />

                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input class="form-control" name="provinsi" />

                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="gambar" required />
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input class="form-control" name="deskripsi" />

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
$nm_hotel = @$_POST['nm_hotel'];
$kota = @$_POST['kota'];
$provinsi = @$_POST['provinsi'];
$deskripsi = @$_POST['deskripsi'];
$nama = @$_FILES['gambar']['name'];
$lokasi = @$_FILES['gambar']['tmp_name'];
$simpan = @$_POST['simpan'];

if ($simpan) {
    move_uploaded_file($lokasi, "img/hotel/" . $nama);
    $sql = $koneksi->query("INSERT INTO hotel(nm_hotel, kota, provinsi, gambar, deskripsi) VALUES('$nm_hotel','$kota','$provinsi','$nama','$deskripsi')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=hotel";
        </script>
    <?php
    } else { ?>
        <script type="text/javascript">
            alert("Gagal Tambah Data");
        </script>
<?php
    }
}
?>