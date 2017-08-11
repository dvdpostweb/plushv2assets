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
        $content = 'home.php';
        break;
        case 'movie-full' : //home
        $page_title = SITENAME . ' - ' . 'RocknRolla';
        $top = 'inc/top.php';
        $content = 'movie-full.php';
        break;
    case '_covers_draft' : //home
        $page_title = SITENAME . ' - ' . ' Covers Draft';
        $top = '';
        $content = '_covers_draft.php';
        break;

}

require_once('inc/template.php');
