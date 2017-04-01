<?php
session_start();
ob_start();
$view = isset($_GET['view']) ? $_GET['view'] : 'home';
$dir = __DIR__.'/app/view/';
$dir2 = __DIR__.'/app/outside/';

require_once __DIR__.'/app/include/db.php';
require_once __DIR__.'/app/include/template.php';
require_once __DIR__.'/app/include/tasks.php';



if(isset($_SESSION['logged']))
{
$template = new template($connect);
$tasks = new tasks();
$user = new user();






$user->id = $_SESSION['id'];
$user->login = $_SESSION['login'];   
    
require_once $dir.'head.php';
require_once $dir.'top-menu.php';
require_once $dir.'left-menu.php'; 
} else {
require_once $dir2.'head.php';
require_once $dir2.'top-menu.php';     
}

if (file_exists($dir.$view.'.php'))
{
    if(isset($_SESSION['logged']))
    {
        require_once $dir.$view.'.php';    
    } else {
        header('Location: login');
    }
    
    
} else if(file_exists($dir2.$view.'.php')){
    
    require_once $dir2.$view.'.php';
    
} else {
    header('Location: 404');
}


require_once __DIR__.'/app/view/foot.php';
ob_end_flush();
?>