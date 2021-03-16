<?php 
	$id = @$_GET ['id'];
	$koneksi->query("DELETE FROM provinsi WHERE id='$id'");

 ?>


 <script type="text/javascript">
 	window.location.href="?page=provinsi";
 </script>