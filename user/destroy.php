<?php
include_once 'User.php';
$destroy = new User();
$destroy->destroy($_GET['id']);
header('Location: index.php');