<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../function.php";
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $index = $_REQUEST['index'];

    $student = [
        "name" => $name,
        "age" => $age,
        "address" => $address
    ];

    editStudent($index, $student,"../data.json");
    header("Location: ../index.php");
}