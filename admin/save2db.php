<?php
require("ulanish.php");

if ((isset($_POST['title']))) {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $slug = htmlspecialchars($_POST['slug'], ENT_QUOTES);
    $izoh = htmlspecialchars($_POST['izoh'], ENT_QUOTES);

    $sql = "INSERT INTO `menyu`(`title`, `slug`, `izoh`) VALUES ('$title','$slug','$izoh')";

    $result = $ulanish->query($sql);
    if ($result) {
        header("Location:index.php?msg=Yangi menyu yaratildi");
    } else {
        header("Location:index.php?msg=Yangi menyu yaratishda xatolik");
    }
}
