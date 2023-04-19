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