<?php
include __DIR__ . '/function.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="GET" action="index.php" class="d-flex justify-content-center mt-5">
                    <button type="submit">Genera</button>
                    <input type="text" name="password" id="password">
                </form>
            </div>
        </div>
        <p class="text-center mt-5">Password:
            <?php echo randomPassword(3, 2, 3, 2); ?>
        </p>
    </div>
</body>

</html>