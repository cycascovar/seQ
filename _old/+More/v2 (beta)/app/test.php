<?php
$str = 'This is an encoded string';
echo base64_encode($str);

echo'<br>';

$str2 = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
echo base64_decode($str2);

?>