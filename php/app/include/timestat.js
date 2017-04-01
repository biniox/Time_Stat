

  $(document).ready(function(){

// toolbar
$('td[data-toolbar="user-options"]').toolbar({
    content: '#user-options',
    position: 'right',
    event: 'click',
    animation: 'grow',
    hideOnClick: true,
});
   
// Przeniesienie zadania do kosza     
    $(".Deactivate_Task").on("click", function(){
        Deactivate_Task(this);
    });
//Dodanie zadania      
    $(".Add_Task_Button").on("click", function(){
        var task_value = $('#Add_Task').val();
        if(task_value != "")
        {
            

        if(Add_Task(task_value))
            {
                var add = "";
                add += '<tr id="62">';
                add += '<td class="SetStar 62 glyphicon glyphicon glyphicon-star-empty " name="62"></td>';
                
                add += '<td class="value" data-toggle="modal" data-target=".value_edit">Daniel Dejniak</td>';
                
                add += '<td class="Deactivate_Task 62 glyphicon glyphicon-ok" name="62"></td>';                         
                add += '<td data-toolbar="user-options" class="62 glyphicon glyphicon-option-vertical"></td>';
                add += '</tr>';
               $('#Task_List').prepend(add);     
            } else {
                var add = "";
                add += '<tr id="62">';
                add += '<td class="SetStar 62 glyphicon glyphicon glyphicon-star-empty " name="62"></td>';
                add += '<td class="value" data-toggle="modal" data-target=".value_edit">Daniel Dejniak</td>';
                add += '<td class="Deactivate_Task 62 glyphicon glyphicon-ok" name="62"></td>';                        
                add += '<td data-toolbar="user-options" class="62 glyphicon glyphicon-option-vertical"></td>';
                add += '</tr>';
               $('#Task_List').prepend(add);                 
            }
        }

    }); 

// Oznaczanie i zdejmowanie oznaczenia gwiazdką
    $(".SetStar").on("click", function(){
        var star = $(this).css('color');
        if(star == 'rgb(255, 255, 0)')
            {
                $(this).css('color', 'white'); 
                RemoveStar(this);
            } else {
                $(this).css('color', 'yellow');
                SetStar(this);
            }
    });
      
    $(".value").on("click", function() {
      alert("dddd");  
    
    });
});   
      