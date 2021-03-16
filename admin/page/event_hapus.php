<?php 
	$id = @$_GET ['id'];
	$koneksi->query("DELETE FROM event WHERE id='$id'");

 ?>


 <script type="text/javascript">
 	window.location.href="?page=event";
 </script>