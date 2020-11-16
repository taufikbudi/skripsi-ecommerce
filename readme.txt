Cara Instalasi
1. Ekstrak terlebih dahulu file shafiyyahfashion.zip
2. Copy ke folder xampp/htdocs
3. Jalankan xampp
4. Buat database dengan nama "olshop", kemudian import database olshop.sql yang ada di dalam folder database pada folder
   shafiyyahfashion ini.
5. Setting file koneksi.php yang terletak pada folder lib.
   $host = "localhost";
   $username = "root";		
   $password = "";		
   $database_name = "olshop";	
6.Buka browser dan jalankan webnya dengan perintah 
	localhost/shafiyyahfashion 		---> akses frontend
	localhost/shafiyyahfashion/adminpages	---> untuk akses admin
		username & pass = admin