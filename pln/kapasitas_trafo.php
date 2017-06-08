<?php
include "confg.php";
echo $query="SELECT * FROM kapasitas_trafo INNER JOIN jenis_trafo on kapasitas_trafo.id_jenis_trafo=jenis_trafo.id_jenis_trafo
 WHERE kapasitas_trafo.id_jenis_trafo='".$_GET['jenis_trafo']."'";
$sql = $db->query("$query");

echo "<option value=''>Silahkan PIlih</option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_kapasitas_trafo]'>$data[nama_kapasitas_trafo] </option>";
}
?>