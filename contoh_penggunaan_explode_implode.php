<?php

/* 
	CONTOH PENGGUNAAN EXPLODE
*/

//contoh 1
echo "<h3>EXPLODE</h3>";
$nama="Arbi Syarifudin";
$nama_depan = explode(" ",$nama);
echo "Selamat Datang Mr. " ,$nama_depan[0]," !";
echo '<br/>';

//contoh 2
$alamat="Jl Krapyak Barat Panggungharjo Bantul DIY";
$propinsi= explode(" ",$alamat);
echo "Kota : ",$propinsi[4];
echo '<br/>';

//contoh 3
$NIP="3305 14 06 04 95 0002";
$tgl_lahir = explode (" ",$NIP);
echo "Tanggal lahir : ",$tgl_lahir[2],"-",$tgl_lahir[3],"-","19",$tgl_lahir[4];
echo '<br/>';

//contoh 4
$email="arbisyarifudin@gmail.com";
$nama_email = explode ("@",$email);
echo "ID Email : ",$nama_email[0];
echo '<br/>';

//contoh 5
$no_surat="22/APBD/DIY/2018";
$no_document = explode ("/",$no_surat);
echo "Surat no : ",$no_document[0];

echo "<br/>";
echo "<hr/>";
/* 
	CONTOH PENGGUNAAN IMPLODE
*/
echo "<h3>IMPLODE</h3>";
//contoh 1
$nama = array ("Dr","Arbi Syarifudin","S.Kom");
$nama_lengkap = implode (". ",$nama);
echo "Nama Lengkap : ",$nama_lengkap;
echo '<br/>';
//contoh 2
$alamat = array ("Jl Krapyak Barat", "No. 188", "Panggungharjo", "Bantul", "DIY");
$alamat_lengkap = implode (", ",$alamat);
echo "Alamat : ",$alamat_lengkap;
echo '<br/>';
//contoh 3
$ttl = array ("Jakarta", "06-04-1995");
$lahir = implode (", ",$ttl);
echo "Tempat/Tanggal Lahir : ",$lahir;
echo '<br/>';
//contoh 4
$email = array ("arbisyarifudin","gmail.com");
$alamat_email = implode ("@",$email);
echo "Email : ",$alamat_email;
echo '<br/>';
//contoh 5
$kantor = array ("Staff","Asisten Pribadi","SAF Management");
$jabatan = implode (" ", $kantor);
echo "Jabatan : ",$jabatan;

?>
