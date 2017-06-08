<?php
include "confg.php";

$sql = $db->query("SELECT * FROM `area` INNER JOIN wilayah on wilayah.id_wilayah=area.id_wilayah
WHERE area.id_wilayah ='".$_GET['wilayah']."'  ");

// tampilkan data otomatis
echo "<option value=''>Silahkan PIlih</option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_area]'>$data[nama_area] </option>";
}
?>