<?php
$myfile = fopen("beerslist.txt", "w") or die("Unable to open file!");
$txt = $_POST['beerList'];
fwrite($myfile, $txt);
fclose($myfile);
?>
