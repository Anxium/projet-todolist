<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>A faire</h2>
    <div>
        <form action="index.php" method="post" id="todolist">
            <?php echo $todo ?>
            <input type="submit" value="Enregistrer">
        </form>
    </div>

    <h2>Archives</h2>
    <div>
        <form action="index.php" method="post" id="archives">
            <?php echo $archives ?>
        </form>
    </div>

    <h2>Ajouter une tâche</h2>
    <form method="POST">
        <input type="text" name="data" id="todo">
        <?php echo $dataErr ?>
        <input type="submit" value="Ajouter" id="submit">
        <?php echo $message ?>
    </form>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>