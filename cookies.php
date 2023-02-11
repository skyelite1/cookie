<?php
$nama = "Abdulloh";
$username = "abdul";
$tgl_lahir = "18-07-2006";

setcookie("nama", $nama, time()+3010); 
setcookie("username", $username, time()+3010); 
setcookie("tgl_lahir", $tgl_lahir, time()+3010);

// setcookie("nama", $nama, time()-3000); 
// setcookie("username", $username, time()-3000); 
// setcookie("tgl_lahir", $tgl_lahir, time()-3000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <ul>
        <li>
            <h2><?= "Nama : ".$_COOKIE['nama'] ?></h2>
        </li>
    </ul>
    <ul>
        <li>
            <h2><?= "Username : ".$_COOKIE['username'] ?></h2>
        </li>
    </ul>
    <ul>
        <li>
            <h2><?= "Tanggal Lahir :".$_COOKIE['tgl_lahir'] ?></h2>
        </li>
    </ul>
</body>
</html>