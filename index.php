<?php
require_once('./include/init.php');
$title = SITE_NAME;
// include 'pages/layout/Header.php';
// include 'pages/layout/Navbar.php';
$Controller = $_GET['controller'];
switch ($Controller) {
    case '':
    case 'home':
        if($data_user && $data_user['role'] == -1){ // Admin
            include 'pages/admin/Home.php';
        }elseif($data_user && $data_user['role'] == 1){
            include 'pages/kol/Home.php';
        }elseif($data_user && $data_user['role'] == 2){
            include 'pages/brand/Home.php';
        }else{
            include 'pages/authenticate/Login.php';
        }
        break;
    case 'register':
            isnt_user();
            include 'pages/authenticate/Register.php';
        break;
    case 'forgot':
            isnt_user();
            include 'pages/authenticate/Forgot.php';
        break;
    case 'login':
            isnt_user();
            include 'pages/authenticate/Login.php';
        break;
    case 'order':
            is_user();
            include 'pages/order/Add.php';
        break;
    case 'test':
        include 'pages/order/test.php';
        break;
    case 'change':
            is_user();
            include 'pages/authenticate/Change.php';
        break;
    case 'blog':
        is_user();
        include 'pages/blog/Home.php';
        break;
    case 'admin':
        is_user();
        include 'pages/admin/Home.php';
        break;
    case 'kol':
        is_user();
        include 'pages/kol/Home.php';
        break;   
    case 'brand':
        is_user();
        include 'pages/brand/Home.php';
        break;     
    case 'logout':
            unset($_COOKIE[session_name()]); 
            setcookie(session_name(), null, -1, '/'); 
            $session->destroy();
            header("Location:/");
        break;
    default:
            include 'pages/layout/NotFound.php';
        break;
}

// include 'pages/layout/Footer.php';

