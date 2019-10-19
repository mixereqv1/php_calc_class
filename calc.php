<?php
    include_once('calc_class.php');

    echo '<h1><a href="index.html">Wroc</a></h1>';

    $action = $_POST['action'];
    $number1 = $_POST['number_1'];
    $number2 = $_POST['number_2'];

    $app = new Calculator($action,$number1,$number2);
    $app->count();

?>