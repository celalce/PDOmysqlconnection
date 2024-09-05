<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<?php
	/* ******** PDO İLE VERİTABANI BAĞLANTISININ YAPILMASI **********************

	    exec()	    :	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işleminde etkilenen kayıt sayısını bulmak için kullanılır.
	    query()	    :	MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		FETCH_ASSOC :	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
		FETCH_NUM 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
		FETCH_BOTH 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
		FETCH_OBJ 	:	Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
	*/
	
	try{
		$VeritabaniBaglantisi	=	new PDO("mysql:host=HOSTNAMEGİRİNİZ;dbname=VERİTABANIADIGİRİNİZ;charset=UTF8", "KULLANICIADINIGİRİNİZ", "SİFRESİNİGİRİNİZ");
		echo "Veritabanına Bağlantı Kuruldu<br />";
	}catch(PDOException $Hata){
		echo "Veritabanı Bağlantı Hatası<br />";
		echo "Hata Açıklaması : " . $VeritabaniBaglantisi->getMessage();// getMessage komutu hata açıklamasını verir..
		die();// bu komut : eğer hata olursa bundan sonraki kodlar çalışmayacak gereksiz işlemler olmayacak anlamında.
	}
	
	$Sorgu	=	$VeritabaniBaglantisi->query("SELECT * FROM tablonunadı");// veritabınında hangi tablo kullanacaksanız onun adını yazacaksınız.
	echo "<pre>";// daha uygun görüntü sağlaması için pre taglarını kullanırız..
	print_r($Sorgu);//dizileri yazdırmak için kullanırız.
	echo "</pre>";
	
	
	$VeritabaniBaglantisi	=	null;// veritabanı işlemler sonunda kapatılır.
	
	?>
</body>
</html>