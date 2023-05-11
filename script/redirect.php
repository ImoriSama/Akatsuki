<?php

$path = "../modif/";
$files = scandir($path);

unset($files[0]);
unset($files[1]);
unset($files[2]);

foreach ($files as $value) {
    echo "<a href='../modif/".$value."'>".$value."</a><br/><br/>";
}

?>