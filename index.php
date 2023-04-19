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
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>

<body class="bg-info  ">
    <div class="container position-relative">
        <div class="container border ms_position w-50">

            <div class="row">
                <div class="col">
                    <h1 class="text-center mt-5 text-success">Strong Password Generator</h1>
                    <h3 class="text-center mt-3 text-success">Inserisci un numero per iniziare </h3>

                    <form method="GET" action="index.php" class="d-flex justify-content-center mt-5">
                        <button type="submit">Genera</button>
                        <input type="text" name="password" id="password">
                    </form>
                </div>
            </div>
            <h1 class="text-center mt-5">Password:
                <?php echo randomPassword(3, 2, 3, 2); ?>
            </h1>
        </div>

    </div>

</body>

</html>