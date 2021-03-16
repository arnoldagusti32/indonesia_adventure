<?php 
	$id = @$_GET ['id'];
	$koneksi->query("DELETE FROM hotel WHERE id='$id'");

 ?>


 <script type="text/javascript">
 	window.location.href="?page=hotel";
 </script>