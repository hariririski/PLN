<?php
include "confg.php";
echo $query="SELECT * FROM `gardu_hubung` INNER JOIN gardu_induk on gardu_induk.id_gardu_induk=gardu_hubung.id_gardu_induk 
where gardu_induk.id_gardu_induk='".$_GET['kode_gardu_induk']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''>Silahkan PIlih</option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_gardu_hubung]'>$data[nama_bangunan] </option>";
}
?>