<?php
include('class.php');
$aes = new AES('Secret key', 'Secret iv');

$encrypted_string = $aes->encrypt('Hey!');
echo $encrypted_string;

$decrypted_string = $aes->decrypt($encrypted_string);
echo $decrypted_string;

?>