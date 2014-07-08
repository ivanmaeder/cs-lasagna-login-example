<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/view.php');

session_start();

if (!$_SESSION['username']) {
    header('Location: login-form.php');
}

$parameters = array('username' => $_SESSION['username']);

\view\display('lasagna/html/welcome.tpl', $parameters);

?>
