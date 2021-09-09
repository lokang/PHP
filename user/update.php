<?php
include_once 'User.php';

$updateModel = new User();
if($_POST){
    $updateModel->update($_POST['gender'], $_POST['firstName'], $_POST['lastName'], $_POST['email'], $_GET['id']);
}

$updates = $updateModel->get($_GET['id']); // comes from the URL
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Update</title>
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
                <label for="firstName">First Name</label>
                <input  name="firstName" type="text" value="<?php echo $updates['firstName'];?>" placeholder="Enter first name">
            </p>

            <p>
                <label for="lastName">Name</label>
                <input name="lastName" type="text" value="<?php echo $updates['lastName'];?>" placeholder="Enter name">
            </p>
            <p>
                <label for="email">Email</label>
                <input name="email" type="text" value="<?php echo $updates['email'];?>" placeholder="Enter email">
            </p>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>

