<?php

$path = "../modif/";
$files = scandir($path);

unset($files[0]);
unset($files[1]);
unset($files[2]);

?>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<center><h1 class="marg-150">Voici la page Admin</h1>

<table>
    <tr>
<?php

foreach ($files as $value) {
    echo "<td><a href='../modif/".$value."' class='marg-both-50'>".$value."</a></td>";
}

?>
</tr>
</table>
</center>