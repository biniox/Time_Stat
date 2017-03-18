<?php
class tasks
{
    public $num_rows;
 ////////////////////////////////////////////////////////////////////////////////////    
    public function ShowTask($identy, $connect)
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
                        $sql_tab[$i]['star'] = $value['star'];
                        $sql_tab[$i]['date'] = $value['date'];
                        $sql_tab[$i]['end'] = $value['end'];
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
 ////////////////////////////////////////////////////////////////////////////////////    
    public function AddTask($id, $value, $connect)
    {
        $value = htmlentities($value, ENT_QUOTES, "UTF-8");
        if($sql = @$connect->query("insert into tasks (id, user_id, value) values (NULL, '".$id."', '".$value."')"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
  ////////////////////////////////////////////////////////////////////////////////////   
    public function DeleteTask($id, $task_id, $connect)
    {

        if($sql = @$connect->query("delete from tasks where user_id = '".$id."' AND id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
 ////////////////////////////////////////////////////////////////////////////////////    
    public function RenameTask($id, $task_id, $value, $connect)
    {
        $value = htmlentities($value, ENT_QUOTES, "UTF-8");
        if($sql = @$connect->query("update tasks set value = '".$value."' where user_id = '".$id."' AND id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
 ////////////////////////////////////////////////////////////////////////////////////  
    public function SetStar($task_id, $connect)
    {
        if($sql = @$connect->query("update tasks set star = '1' where id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
 //////////////////////////////////////////////////////////////////////////////////// 
    public function RemoveStar($task_id, $connect)
    {
        if($sql = @$connect->query("update tasks set star = '0' where id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    } 
 //////////////////////////////////////////////////////////////////////////////////// 
    public function SetDate($task_id, $date, $connect)
    {
        if($sql = @$connect->query("update tasks set date = '".$date."' where id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
 //////////////////////////////////////////////////////////////////////////////////// 
    public function RemoveDate($task_id, $connect)
    {
        if($sql = @$connect->query("update tasks set date = NULL where id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
 //////////////////////////////////////////////////////////////////////////////////// 
    public function DeactivateTask($task_id, $connect)
    {
        if($sql = @$connect->query("update tasks set end = '1' where id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
 //////////////////////////////////////////////////////////////////////////////////// 
    public function ActivateTask($task_id, $connect)
    {
        if($sql = @$connect->query("update tasks set end = '0' where id = '".$task_id."'"))
        {
            return true;
				
        } else {
            return false;
			
        }
    }
}