<?php

    $lenPassword = $_GET["lenPassword"];

    // echo "il num scelto è $lenPassword";

    function genPassword($lenPassword) {

        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+.";

        $myPassword = "";

        for ($i = 0; $i < $lenPassword; $i++) {

            $numRandom = rand(0, strlen($characters) - 1);

            $myPassword .= $characters[$numRandom];

        }

        return $myPassword;
    }

    // echo " la password generata è:" . genPassword($lenPassword);
?>