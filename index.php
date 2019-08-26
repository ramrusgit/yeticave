<?php
    header("Content-Type:text/html;charset=UTF-8");
    require_once 'functions.php';

    echo render('index', ['lots'=>$lots]);
    echo render('layout', ['username'=>$user_name, 'title'=>$title]);






