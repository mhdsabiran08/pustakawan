<?php
function tgl_indo($date){
	// $date = $data['tanggal_diterbitkan'] = 2016-08-18 -> dari file detail.php
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
	$tahun = substr($date, 0, 4); // mengambil data tahun dari index 0 sebanyak 4 karakter -> 2016
	$bulan = substr($date, 5, 2); // mengambil data bulan dari index 5 sebanyak 2 karakter -> 08
	$tgl   = substr($date, 8, 2); // mengambil data bulan dari index 5 sebanyak 2 karakter -> 18
 
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;	//$BulanIndo[0]	
	//result = 18 $BulanIndo[8-1=7] 2016 -> 18 Agustus 2016
	return($result);
}
?>