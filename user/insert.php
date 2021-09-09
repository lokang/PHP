<?php
include_once 'User.php';

$insertModel = new User();
if($_POST){
    $insertModel->Create($_POST['gender'], $_POST['firstName'], $_POST['lastName'], $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>insert</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <p>
                <label>Gender</label>
                <select name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </p>
            <p>
                <label for="firstname">First Name</label>
                <input name="firstName" type="text" placeholder="Enter first name">
            </p>
            <p>
                <label for="lastName">First Name</label>
                <input name="lastName" type="text" placeholder="Enter last name">
            </p>
            <p>
                <label for="email">Email</label>
                <input name="email" type="text" placeholder="Enter email">
            </p>
            <p>
                <label for="password">Password</label>
                <input name="password" type="password" placeholder="Enter password">
            </p>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
