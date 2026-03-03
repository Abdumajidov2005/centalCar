<?php
require("ulanish.php");

if ((isset($_POST['title']))) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $izoh = $_POST['izoh'];

    $sql = "INSERT INTO `menyu`(`title`, `slug`, `izoh`) VALUES ('$title','$slug','$izoh')";

    $result = $ulanish->query($sql);
    if ($result) {
        echo "Jadvalga yozildi";
    } else {
        echo "xatolik yuz  berdi";
    }
}
