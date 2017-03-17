<?php
class tasks
{
        public function showtask($identy, $connect)
    {
        if($sql = @$connect->query(
            sprintf("SELECT * FROM tasks WHERE user_id='%s'",
            mysqli_real_escape_string($connect,$identy))))
        {
            $How = $sql->num_rows;
            if($How>0)
			{
                return $sql;
				
			} else {
                return false;
			}
            
              
        } else {
            return false;
        }
    }
}