<?php
require __DIR__.'/app/include/db.php';
require __DIR__.'/app/include/template.php';

require __DIR__.'/app/outside/head.php';
require __DIR__.'/app/outside/top-menu.php';

$template = new template();

	
if ((isset($_POST['login'])) || (isset($_POST['pass'])))
{

$template->login($_POST['login'], $_POST['pass']);
	
}
	

?>

	<form method="post" style="width: 300px; margin: auto;">
	
		Login: <br /> <input type="text" class="form-control" name="login" /> <br />
		Hasło: <br /> <input type="password" class="form-control" name="pass"/> <br /><br />
		<input type="submit" class="btn btn-success" value="Zaloguj się" />
	
	</form>
<?php

require __DIR__.'/app/view/foot.php';
?>