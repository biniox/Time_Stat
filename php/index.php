<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'home';
$dir = __DIR__.'/app/view/';
$dir2 = __DIR__.'/app/outside/';
require __DIR__.'/app/include/db.php';
require __DIR__.'/app/include/template.php';
require __DIR__.'/app/include/tasks.php';

require __DIR__.'/app/view/head.php';

$template = new template($connect);
$tasks = new tasks();
$user = new user();
$tasks->showtask($_SESSION['id'], $connect);

$user->id = $_SESSION['id'];
$user->login = $_SESSION['login'];

require __DIR__.'/app/view/top-menu.php';
require __DIR__.'/app/view/left-menu.php';






if (file_exists($dir.$view.'.php'))
{
    require $dir.$view.'.php';
    
} else if(file_exists($dir2.$view.'.php')){
    
    require $dir.$view.'.php';
    
} else {
    echo '<center>HTTP/1.1 404 Not Found</center>';
}


require __DIR__.'/app/view/foot.php';
?>