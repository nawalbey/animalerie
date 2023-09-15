<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="./model/action.php">

        <input type="type" name="type" placeholder="type de l'animal" require><br><br>

        <input type="race" name="race" placeholder="race de l'animal" require><br><br>

        <input type="nom" name="nom" placeholder="nom de l'animal" require><br><br>

        <div class="flexy">
            <input type="submit" class="inscription submit" name="submit" value="submit">
        </div>
    </form>
</body>

</html>