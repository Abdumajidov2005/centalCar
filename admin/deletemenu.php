<?php
require("ulanish.php");

if ((isset($_GET['id']))) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `menyu` WHERE id=$id";

    $result = $ulanish->query($sql);
    if ($result) {
        header("Location:index.php?msg=Menyu o'chirildi");
    } else {
        header("Location:index.php?msg=Menyu o'chirishda xatolik");
    }
}
