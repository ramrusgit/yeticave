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

    // time until midnight
    function time_until_midnight () {
        date_default_timezone_set('Europe/Moscow');
        $ts = time();
        $ts_midnight = strtotime('tomorrow');
        $secs_to_midnight = $ts_midnight - $ts;
        $hours = floor($secs_to_midnight / 3600);
        $minutes = floor(($secs_to_midnight % 3600) / 60);
        $lot_time = "Лот пропадет через: $hours часов $minutes минут";
        print $lot_time;



    }


