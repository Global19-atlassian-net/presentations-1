<?php
include 'Cipher.php';
include 'SharedKeys.php';

ob_start();
$keys = SharedKeys::Create('Conf�rence PHP Qu�bec', 3, true);
SharedKeys::Assemble($keys, true);
$out = ob_get_contents();
ob_end_clean();

echo nl2br($out);
?>
