<?php
require __DIR__.'/app/include/db.php';
require __DIR__.'/app/include/template.php';

require __DIR__.'/app/outside/head.php';
require __DIR__.'/app/outside/top-menu.php';

$template = new template();

	
if ((isset($_POST['login'])) || (isset($_POST['pass'])))
{

$question = $template->login($_POST['login'], $_POST['pass'], $connect);
    if($question == false)
    {
        $template->ShowWarning("Nieprawidłowy login lub hasło. Jeżeli nie pamiętasz hasła, możesz skorzystać z opcji 
  <a href='forget_pass' class='alert-link'> przypomnienia hasła</a>");
    }
    
	
}
	

?>

	<form method="post" style="width: 300px; margin: auto; padding-top: 20px;">
	
		<span style="color: white;">Login:</span> <br /> <input type="text" class="form-control" name="login" /> <br />
		<span style="color: white;">Hasło:</span> <br /> <input type="password" class="form-control" name="pass"/> <br /><br />
		<input type="submit" class="btn btn-success" value="Zaloguj się" />
	
	</form>
<?php

require __DIR__.'/app/view/foot.php';
?>