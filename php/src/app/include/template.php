<?php
class template
{
    public function showMessage($state, $Message)
    {
        switch($state)
        {
            case 'succes': 
                echo $Message;
                break;
            case 'warning': 
                echo $Message;  
                break;
        }

    }
    
    
}