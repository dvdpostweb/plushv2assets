<?php

//basic configuration settings
require_once('library/config.php');


//URL PARAMS - NON MOD REWRITE
$page = (!empty(filter_var($_GET['page'], FILTER_SANITIZE_STRING))) ? filter_var($_GET['page'], FILTER_SANITIZE_STRING) : 'home';


//PAGE SWITCH MOD REWRITE
switch ($page) {
    case 'home' : //home
        $page_title = SITENAME . ' - ' . 'Movies';
        $top = 'inc/top.php';
//        $left_filters = '';
        $content = 'home.php';
//        $footer = '';
        break;

}

require_once('inc/template.php');
