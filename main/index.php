<?php
    include "C:/xampp/htdocs/John/log-in-test/BladeOne/lib/BladeOne.php";
    use eftec\bladeone\BladeOne;
    $views = __DIR__ .'\views';
    $cache = __DIR__ .'\cache';
    $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
    echo $blade->run("home_view",array("variable1" => "value1"));
?>
