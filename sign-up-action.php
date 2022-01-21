<?php
    if (!isset($_POST["email"]))
    {
        header("Location: /");
        exit;
    }

    var_dump($_POST);
?>