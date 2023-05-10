<?php

if(($_POST["username"] =="sio1") && ($_POST["pass"] =="stecharles")){
    header("Location:/aka/Akatsuki/modif");
} else {
    header("Location:pageadmin.php");
}

?>