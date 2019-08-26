<?php

    // templates
    function render ($tmp, $vars = []) {
        if (file_exists('templates/' . $tmp . '.tpl.php')) {
            ob_start();
            extract($vars);
            require 'templates/' . $tmp . '.tpl.php';
            return ob_get_clean();
        } else {
            return '';
        }
    }

