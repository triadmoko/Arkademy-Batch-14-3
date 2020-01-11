<?php 

// syarat validasi username 
// diawali huruf kecil , _ , min5 max12

 function validasiusername($username) {
    return preg_match('/^[A-Z]{1}[a-zA-Z0-9\_]{4,11}$/i',$username) ;
     }
     // Cara menggunakan fungsi validasi username
     if (validasiusername("Aadak_")) {
         echo "Username Is Valid= TRUE" ;
     } else {
         echo "Username Is Invalid = FALSE" ;
     }
 function validasipassword($password){
 	return preg_match('/^[A-Z0-9#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]{1}[A-Z0-9]{5}[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]{1}$/i',$password);     
 }
// syarat validasi password
 // 7 digit  
echo "\n <br>";
     //  cara menggunakan funsi validasi password
      if (validasipassword("HHKA1K+")) {
         echo "password Is Valid = TRUE" ;
     } else {
         echo "password Is Invalid = FALSE" ;
     }

 
 ?>
<!--  <!DOCTYPE html>
 <html>
 <head>
 	<title>Validasi</title>
 </head>
 <body>

 	<label>username : </label>
 	<input type="text" name="username"><br>
 	<label>password</label>
 	<input type="text" name="password">
 
 </body>
 </html> -->