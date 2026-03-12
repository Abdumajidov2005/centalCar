<?php
require('ulanish.php');
$sql = "SELECT * FROM `menyu`";
$result = $ulanish->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>
            admin sahifa
        </h1>

        <hr>

        <h3>
            Sayt menyusi
        </h3>

        <?php
        if (isset($_GET['msg'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show w-75" role="alert">
                <strong>Holy guacamole!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <a href="addmenu.php" class="btn btn-primary float-end">Yaratish</a>

        <table class="table table-bordered">
            <thead>
                <th>T/r</th>
                <th>title</th>
                <th>Slug</th>
                <th>Izoh</th>
                <th>Amallar</th>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td>
                                <?= $row['id'] ?>
                            </td>
                            <td>
                                <a href="editmenu.php?id=<?= $row['id'] ?>" style="text-decoration:none;color:orange">
                                    <?= $row['title'] ?>
                                </a>
                            </td>
                            <td>
                                <?= $row['slug'] ?>
                            </td>
                            <td>
                                <?= $row['izoh'] ?>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="deletemenu.php?id=<?= $row['id'] ?>" style="font-size: 20px; text-decoration:none;">
                                    o'chirish
                                </a>
                            </td>
                        </tr>

                <?php }
                }
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td>slaom</td>
                    <td>slaom</td>
                    <td>slaom</td>
                    <td>slaom</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>