<?php 
	$id = @$_GET ['id'];
	$koneksi->query("DELETE FROM kota WHERE id='$id'");

 ?>


 <script type="text/javascript">
 	window.location.href="?page=kota";
 </script>