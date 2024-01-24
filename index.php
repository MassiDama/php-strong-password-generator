<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Generatore Bootstrap</title>

    <?php
    require_once __DIR__ . "/partials/functions.php";
    ?>

</head>
<body>

<h3> Chiedimi la lunghezza della password </h3>

<form>
    <input type="number" name="lenPassword">
    <button>Invia</button>
</form>

<h1> 
    <?php echo "La password generata è: " . genPassword($lenPassword); ?>
</h1>

    
</body>
</html>