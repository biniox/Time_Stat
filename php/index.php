<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'home';
$dir = __DIR__.'/app/view/';
require __DIR__.'/app/include/db.php';
require __DIR__.'/app/include/template.php';

require __DIR__.'/app/view/head.php';
require __DIR__.'/app/view/top-menu.php';

echo '  </div>
        </div> 	
        <div class="row">
		<div class="col-md-12">
			<div class="row">';

require __DIR__.'/app/view/left-menu.php';

$template = new template();



if (file_exists($dir.$view.'.php'))
{
    require $dir.$view.'.php';
} else {
    header('HTTP/1.1 404 Not Found');
    echo 'HTTP/1.1 404 Not Found';
}


require __DIR__.'/app/view/foot.php';
?>