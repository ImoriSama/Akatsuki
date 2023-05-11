<?php

if(($_POST["username"] =="sio1") && ($_POST["pass"] =="stecharles")){
    header("Location:/aka/Akatsuki/script/redirect.php");
} else {
    header("Location:pageadmin.php");
}

?>