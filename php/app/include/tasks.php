<?php
class tasks
{
    public $num_rows;
    
    public function showtask($identy, $connect)
    {
        if($sql = @$connect->query(
            sprintf("SELECT * FROM tasks WHERE user_id='%s'",
            mysqli_real_escape_string($connect,$identy))))
        {
            $How = $sql->num_rows;
            $this->num_rows = $How;
            if($How>0)
			{
                $i = 0;
                foreach($sql as $value)
                    {
                        $sql_tab[$i]['id'] = $value['id'];
                        $sql_tab[$i]['value'] = $value['value'];
                        $i++;
                        
                    }
                return $sql_tab;
				
			} else {
                return false;
			}
            
              
        } else {
            return false;
        }
    }
    
    public function AddTask($value, $connect)
    {
        if($sql = @$connect->query("INSERT INTO tasks SET user_id='$user->id', value='$value'"))
        {


            return true;
				
        } else {
            return false;
			
        }
    }
}