<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/view.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/sql/users.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$row = \sql\users\fetchByCredentials($username, $password);

if ($row) {
    $_SESSION['username'] = $username;

    header('Location: welcome.php');
}
else {
    header('Location: login-form.php');
}

?>
