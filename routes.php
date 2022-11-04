<?php
    $action = $_GET['action'] ?? 'index';


    switch ($action) {
        case 'index':
            require './controller/home/index.php';
            (new HomePage)->index();
            break;
        case 'signin':

        case 'signup':

        case 'cart':

        case 'order':

        default:
            require './error.php';
            break;

        
    }
?>