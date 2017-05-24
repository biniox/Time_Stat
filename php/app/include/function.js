
function Add_Task(value)
    {
        var link = "app/action/tasks.php?action=Add_Task&id=none&value=" + value;
        $.get(link, function(data, status){
            if(data)
                {
                    alertify.success('Dodano nowe zadanie do Inboxa!');
                    return true;
  
                } else {
                    
                    alertify.error('Nie udało się wykonać zapytania do bazy danych'); 
                    return false;
                }
        })        
    }
///////////////////////////////////////
function Deactivate_Task(identy)
    {
        var id = $(identy).attr('name');
        var link = "app/action/tasks.php?action=Deactivate_Task&id=" + id;
        $.get(link, function(data, status){
            if(data)
                {
                    id = "#" + id;
                    $(id).css({"background-color": "#908585",  "text-decoration": "line-through" }).hide(200);
                    alertify.success('Zadanie przeniesiono do kosza'); 
                    return true;
  
                } else {
                    
                    alertify.error('Nie udało się wykonać zapytania do bazy danych'); 
                    return false;
                }
        })        
    }
///////////////////////////////////////
function SetStar(identy)
    {
        var id = $(identy).attr('name');
        var link = "app/action/tasks.php?action=SetStar&id=" + id;
        $.get(link, function(data, status){
            if(!data)
                {
                    alertify.error('Nie udało się wykonać zapytania do bazy danych gwiazdka'); 
                }
        })        
    }  
///////////////////////////////////////
function RenameTask(identy, value)
    {
        
        var link = "app/action/tasks.php?action=RenameTask&id=" + identy + "&value=" + value;
        $.get(link, function(data, status){
            if(!data)
                {
                    alertify.error('Nie udało się wykonać zapytania do bazy danych Rename Task'); 

                } else {
                    alertify.success('Zaaktualizowano treść zadania');

                }
        });             
        
       
    }  
      




