<?php
include "function.php";

$students = getAllUsers("data.json");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Management</title>
</head>
<body>
<a href="content/add.php">Them moi</a>
<table class="TableList">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Action</td>
    </tr>

    <?php if (isset($students)): ?>
        <?php foreach ($students as $index => $student): ?>
            <tr>
                <td><?php echo $index ?></td>
                <td><?php echo $student->name ?></td>
                <td><?php echo $student->age ?></td>
                <td><?php echo $student->address ?></td>
                <td><a onclick="return confirm('Ban chac chan muon xoa?')"
                       href="action/delete.php?index=<?php echo $index ?>">Xoa</a>
                    <a href="content/edit.php?index=<?php echo $index ?>">Update</a>
                </td>
            </tr>

        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">No Data</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
