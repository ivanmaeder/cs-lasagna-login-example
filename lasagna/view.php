<?php

namespace view;

$_lasagna_display_vars = array();

function set($key, $value) {
    global $_lasagna_display_vars;

    $_lasagna_display_vars[$key] = $value;
}

function display($path = NULL, $parameters = NULL) {
    if (!$path) {
        $info = pathinfo($_SERVER['SCRIPT_NAME']);
        $path = dirname(__FILE__) . '/html' . $info['dirname'] . '/' . $info['filename'] . '.tpl';
    }

    if (!file_exists($path)) {
        trigger_error("Unable to display $path; file not found");

        return;
    }

    if (!$parameters) {
        global $_lasagna_display_vars;

        $parameters = $_lasagna_display_vars;
    }

    extract($parameters, EXTR_OVERWRITE);

    include($path);
}

?>
