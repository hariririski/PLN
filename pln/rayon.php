<?php
include "confg.php";
echo $query="SELECT * FROM `rayon` INNER JOIN area on rayon.id_area=area.id_area
 WHERE rayon.id_area='".$_GET['kode_area']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''>Silahkan PIlih</option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_rayon]'>$data[nama_rayon] </option>";
}
?>