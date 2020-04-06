<?php
include "../function.php";
$index = $_REQUEST['index'];

deleteStudent($index, "../data.json");
header("Location: ../index.php");