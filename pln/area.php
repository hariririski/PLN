<?php
include "confg.php";
	if($_GET['kode_wilayah']!='semua'){
	echo $query="SELECT * FROM `area` INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah
	 WHERE area.id_wilayah='".$_GET['kode_wilayah']."'";
	$sql = $db->query("$query");

	echo "<option value=''>Silahkan PIlih</option>";
		while($data = $sql->fetch_array()){
		echo "<option value='$data[id_area]'>$data[nama_area] </option>";
	}
}else{
	echo "<option value=''>Silahkan PIlih</option>";
	echo "<option value='semua'>semua</option>";
}
?>
