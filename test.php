<?php 

$simple_string = "2"; 
echo "Original String: " . $simple_string; echo "<br>";

$ciphering = "AES-128-CTR"; 

$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

$encryption_iv = '2345678910111211'; 

$encryption_key = "DE"; 

$encryption = openssl_encrypt($simple_string, $ciphering, 
			$encryption_key, $options, $encryption_iv); 
echo "Encrypted String: " . $encryption . "\n"; 
echo "<br>";

// $decryption_iv = '2345678910111211'; 

// $decryption_key = "DE"; 

// $decryption=openssl_decrypt ($encryption, $ciphering, 
// 		$decryption_key, $options, $decryption_iv); 

// echo "Decrypted String: " . $decryption; 
// echo "<br>";

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/Agrocraft/detest.php">lol</a>
</body>
</html>
