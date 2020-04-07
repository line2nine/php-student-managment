<?php
include "../function.php";
$index = $_REQUEST['index'];
$student = getStudentByIndex($index, "../data.json")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../action/update.php?index=<?php echo $index ?>" method="post">
    Name:
    <input type="text" name="name" value="<?php echo $student->name ?>">
    Age:
    <input type="number" name="age" value="<?php echo $student->age ?>">
    Address:
    <input type="text" name="address" value="<?php echo $student->address ?>">
    <button type="submit">Update</button>
</form>

</body>
</html>
