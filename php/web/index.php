<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'home';
$dir = __DIR__.'/../src/app/view/';
require __DIR__.'/../src/app/include/db.php';
require __DIR__.'/../src/app/include/template.php';
require __DIR__.'/../src/app/view/head.php';

echo '<body>
        <div class="container-fluid">
	    <div class="row">
		<div class="col-md-12">';

require __DIR__.'/../src/app/view/top-menu.php';
require __DIR__.'/../src/app/view/left-menu.php';
$template = new template();



if (file_exists($dir.$view.'.php'))
{
    require $dir.$view.'.php';
} else {
    header('HTTP/1.1 404 Not Found');
    echo 'HTTP/1.1 404 Not Found';
}
?>