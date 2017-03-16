<?php
class template
{
    
    public function login($login, $pass, $connect)
    {
      
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$pass = md5(htmlentities($pass, ENT_QUOTES, "UTF-8"));
	
		if ($sql = @$connect->query(
		sprintf("SELECT * FROM users WHERE login='%s' AND pass='%s'",
		mysqli_real_escape_string($connect,$login),
		mysqli_real_escape_string($connect,$pass))))
		{
			$How = $sql->num_rows;
			if($How>0)
			{
				$_SESSION['logged'] = true;
				
				$row = $sql->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['login'] = $row['login'];
				
				unset($_SESSION['error']);
				$sql->free_result();
				header('Location: home');
				
			} else {
				
                return false;

				
			}
			
		} else
        {
  				return false;  

        }
		
		$connect->close();
	       return true;

    }
    
    public function showtask($identy)
    {
      $identy = htmlentities(identy, ENT_QUOTES, "UTF-8");  
        
      
    }
    
    public function showWarning($value)
    {
       echo "<div class='alert alert-danger' role='alert' style='width: 500px; margin: auto;'>";
        echo $value;
      echo "</div>";
        
    }
    
    
}
