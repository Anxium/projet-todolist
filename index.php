<?php
    include 'contenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div id="todo">
        
    </div>

    <h2>Ajouter une tâche</h2>
    <form method="POST">
        <input type="text" name="data" id="todo">
        <input type="submit" value="Ajouter" id="submit">
    </form>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>