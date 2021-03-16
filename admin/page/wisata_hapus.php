<?php 
	$id = @$_GET ['id'];
	$koneksi->query("DELETE FROM wisata WHERE id='$id'");

 ?>


 <script type="text/javascript">
 	window.location.href="?page=wisata";
 </script>