<?php

function getAllUsers($filePath){
    return getData($filePath);
}

function store($data, $filePath) {
    $dataArr = getData($filePath);
    array_push($dataArr, $data);
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function getData($filePath) {
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson);
}

function deleteStudent($index, $filePath){
    $dataArr = getData($filePath);
    unset($dataArr[$index]);
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function editStudent($index, $filePath){
    $dataArr = getData($filePath);
    foreach ($dataArr as $item => $value){
        if ($index == $item){

        }
    }
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function getStudentByIndex($index, $filePath) {
    $dataArr = getData($filePath);
    return $dataArr[$index];
}