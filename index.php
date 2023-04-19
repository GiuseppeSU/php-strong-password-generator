<?php

function randomPassword($lower, $upper, $digit, $special, )
{
    if (isset($_GET['password'])) {
        $numCharacters = $_GET['password'];
        $lower_case = "abcdefghijklmnopqrstuvwxyz";
        $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $number = "1234567890";
        $symbol = "!@#$%^&*";

        $lower_case = str_shuffle($lower_case);
        $upper_case = str_shuffle($upper_case);
        $number = str_shuffle($number);
        $symbol = str_shuffle($symbol);



        $random_password = substr($lower_case, 0, $lower);
        $random_password .= substr($upper_case, 0, $upper);
        $random_password .= substr($number, 0, $digit);
        $random_password .= substr($symbol, 0, $special);

        $pass = str_shuffle($random_password);
        return substr($pass, 0, $numCharacters);
    }
}
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