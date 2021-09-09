<?php
include_once 'User.php';
$userModel = new User();
$users = $userModel->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Select</title>
</head>
<body>
    <main>
    <table border="1">
        <tr>
            <th>Gender</th>
            <th>Fist Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user):?>
        <tbody>
            <tr>
                <td><?php echo $user['gender'];?></td>
                <td><?php echo $user['fName'];?></td>
                <td><?php echo $user['lName'];?></td>
                <td><?php echo $user['email'];?></td>
                <td>
                    <a href="update.php?id=<?php echo $user['id'];?>">Update</a>
                    <a href="destroy.php?id=<?php echo $user['id'];?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach;?>
    </table>
    <a href="insert.php">Create User</a>
    </main>
</body>
</html>
