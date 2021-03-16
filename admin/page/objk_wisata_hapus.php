<?php 
	$id = @$_GET ['id'];
	$koneksi->query("DELETE FROM objk_wisata WHERE id='$id'");

 ?>


 <script type="text/javascript">
 	window.location.href="?page=objk_wisata";
 </script>