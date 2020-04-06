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

    $dataArr = getData("../data.json");
    foreach ($dataArr->$student as $item => $value){
        if ($index == $item){
            $name["name"] = $name;
            $age["age"] = $age;
            $address["address"] = $address;
        }
    }
    $dataNewJson = json_encode($dataArr);
    file_put_contents("../data.json", $dataNewJson);
    //editStudent($student,"../data.json");
    header("Location: ../index.php");
}