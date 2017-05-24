
                    

<div class="home col-md-10 right">
   <?php
   $task_List = $tasks->ShowTask($user->id, $connect);
   ?>
 <div class="row">
   <div class="col-lg-12" style="min-height:100%;">
             <div class="col-lg-6">
               <div class="input-group">
                 <input type="text" id="Add_Task" class="form-control" placeholder="Zrobię...">
                 <span class="input-group-btn">
                   <button class="Add_Task_Button btn btn-default" type="button"><span class="glyphicon glyphicon-plus"></span></button>
                 </span>

   </div>

               
               <h1>Dzisiaj <?php echo (bool) $task_List[1]['star']; ?></h1>  
               <table id="Task_List">
                  <?php
                       
                   
                   for($i = $tasks->num_rows; $i>0; $i-- ) {
                       if(!$task_List[$i-1]['end'])
                       {
                           $star = ($task_List[$i-1]['star']) ? "yellow" : "";
                               
                               echo '<tr id="'.$task_List[$i-1]["id"].'">';
                           
                               echo '<td class="glyphicon glyphicon-th-list"></td>';
                           
                               echo '<td class="SetStar '.$task_List[$i-1]["id"].' glyphicon glyphicon glyphicon-star-empty '.$star.'" name="'.$task_List[$i-1]["id"].'"></td>
                                   
                                   <td class="value" data-toggle="modal" name="'.$task_List[$i-1]["id"].'" data-target=".value_edit">';
                                   echo $task_List[$i-1]['value'];
                               echo '</td>
                               
                                   <td class="Deactivate_Task '.$task_List[$i-1]["id"].' glyphicon glyphicon-ok" name="'.$task_List[$i-1]["id"].'"></td>
                                   
                                   <td data-toolbar="user-options" class="'.$task_List[$i-1]["id"].' glyphicon glyphicon-option-vertical"></td>
                               </tr>';
                       }
                   }
                 ?>
                   
                   

              
               </table>
               
               
               <div class="btn-group" style="margin-top: 10px;" role="group" aria-label="...">
                 <button type="button" class="btn btn-default">1</button>
                 <button type="button" class="btn btn-default">2</button>
                 <button type="button" class="btn btn-default">3</button>
                 <button type="button" class="btn btn-default">4</button>
                 <button type="button" class="btn btn-default" disabled="disabled">..</button>
                 <button type="button" class="btn btn-default">8</button>
               </div>
               <br />
               <br />
               <h4>Akcje zbiorowe:</h1>
                   <button type="button" class="btn btn-success" aria-label="Left Align">
                     <span class="glyphicon glyphicon-ok" aria-hidden="true"> Zakończ</span>
                   </button>
                   <button type="button" class="btn btn-info" aria-label="Left Align">
                     <span class="glyphicon glyphicon-calendar" aria-hidden="true"> Przełóż</span>
                   </button>
                   <button type="button" class="btn btn-primary" aria-label="Left Align">
                     <span class="glyphicon glyphicon-calendar" aria-hidden="true"> Udostępnij</span>
                   </button>                                 
               
             </div>

    </div>
    </div>
    
        <div id="user-options" class="toolbar-icons hidden" >
			<a href="#"><i class="fa fa-user glyphicon glyphicon-pencil" ><b> Edytuj Zadanie</b></i></a>
			<a href="#"><i class="fa fa-user glyphicon glyphicon-calendar" ><b> Kalendarz</b></i></a>
            <a href="#"><i class="fa fa-user glyphicon glyphicon-paperclip" > <b> Załącznik</b></i></a>	
			<a href="#"><i class="fa fa-user glyphicon glyphicon-bell" ><b> Ustaw Przypomnienie</b></i></a>
			<a href="#"><i class="fa fa-user glyphicon glyphicon-flag" ><b> Priorytet</b></i></a>

		</div>
            
            


				
				
			
				
				

				
			
		
	


