<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "centalcar";

$ulanish = new mysqli($servername, $username, $password, $dbname);

if (!$ulanish) {
    echo "Serverga ulanishda xatolik" . $ulanish->error();
}
