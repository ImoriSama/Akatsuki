<?php

$path = "../modif/";
$files = scandir($path);
if ($files !='.') {
 foreach ($files as $value) {
    echo "<a href='../modif/".$value."'>".$value."</a><br/><br/>";
}  
}

?>