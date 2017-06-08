<?php
include "confg.php";
echo $query="SELECT * FROM `gardu_induk` INNER JOIN rayon WHERE gardu_induk.id_rayon='".$_GET['kode_rayon']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''>Silahkan PIlih</option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_gardu_induk]'>$data[id_gardu_induk] </option>";
}
?>