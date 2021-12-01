<?php 
	
	$api_secret = "2101550429:AAEe6aR3mi79VMZ61oPk6F-xSV9w5NCwBDI";
	$chatId = "788337313";

	$msg 	= "
*Pemberitahuan*
 
Penyewaan telah melebihi radius yang telah ditentukan, berikut informasi detail yang dapat disampaikan :

📝 Informasi Peminjaman
 - Kode Transaksi : 
-  Tanggal Peminjaman : 
-  Lama Sewa :
-  Batas Radius : 


👤 Identitas
Informasi mengenai identitas penyewa 
-  NIK : 
-  SIM :
-  Nama : 
-  Telp : 
-  Alamat : 
-  J.Kelamin : 


🚗 Kendaraan
Informasi kendaraan yang sedang disewa
-  Kode Mesin : 
-  Plat Nomor : 
-  Merek : 


📍 Keterangan
Keterangan yang dapat disampaikan melalui informasi ini yaitu *keluar radius* yang telah ditentukan : 

Posisi latitude :
Posisi longitude :
Jarak keluar radius : 

	";

	$url = "https://api.telegram.org/bot" . $api_secret . "/sendMessage?parse_mode=markdown&chat_id=" . $chatId;
	$url = $url . "&text=" . urlencode($msg);
	$ch = curl_init();
	$optArray = array(
		CURLOPT_URL => $url,
	    CURLOPT_RETURNTRANSFER => true
	);
	curl_setopt_array($ch, $optArray);

	$result = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);


	echo $result;

?>