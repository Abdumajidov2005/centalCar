<?php
require("ulanish.php");

if ((isset($_POST['title']))) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $izoh = $_POST['izoh'];
    $id = $_GET['id'];

    $sql = "UPDATE `menyu` SET `title`='$title', `slug`='$slug', `izoh`='$izoh' WHERE id=$id";

    $result = $ulanish->query($sql);
    if ($result) {
        header("Location:index.php?msg=Menyu yangilandi");
    } else {
        header("Location:index.php?msg=Menyu yaratishda xatolik");
    }
}
