<?php

require('ulanish.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `menyu` WHERE id=$id";
    $result = $ulanish->query($sql);
    $row = $result->fetch_assoc();
}
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
    <h1 class="container">
        sayt menusini tahrirlash
    </h1>

    <form action="update.php?id=<?=$id; ?>" method="POST" class="form container lh-lg">
        <div>
            <label for="title">title </label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $row['title']; ?>">
        </div>
        <div>
            <label for="slug">slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="<?= $row['slug']; ?>">
        </div>
        <div>
            <label for="izoh">izoh</label>
            <input type="text" class="form-control" name="izoh" id="izoh" value="<?= $row['izoh']; ?>">
        </div>

        <input type="submit" value="OK" class="btn btn-primary" />
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>