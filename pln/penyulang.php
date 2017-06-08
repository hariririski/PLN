<?php
include "confg.php";
echo $query="SELECT * FROM `penyulang` INNER JOIN gardu_hubung on gardu_hubung.id_gardu_hubung=penyulang.id_gardu_hubung 
where gardu_hubung.id_gardu_hubung='".$_GET['kode_gardu_hubung']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''>Silahkan PIlih</option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_penyulang]'>$data[nama_penyulang] </option>";
}
?>