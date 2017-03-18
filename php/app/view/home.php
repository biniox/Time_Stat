<?php
$task_List = $tasks->ShowTask($user->id, $connect);


//$add_task = $tasks->DeactivateTask("32", $connect);
//if(!$add_task)
//{
//    $template->ShowCriticalError("Nie udało się wykonać zapytania update");
//}
?>
                     <div class=" col-md-10 right">
                      
                      <div class="row">
                        <div class="col-lg-12" style="min-height:100%;">
                                  <div class="col-lg-6">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Zrobię...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-plus"></span></button>
                                      </span>
                                    </div>
                                    
                                    <h1>Dzisiaj <?php echo (bool) $task_List[1]['star']; ?></h1>
                                    <table >
                                       <?php
                                            
                                        
                                        for($i = $tasks->num_rows; $i>0; $i-- ) {
                                            if(!$task_List[$i-1]['end'])
                                            {
                                                $star = ($task_List[$i-1]['star']) ? "yellow" : "";
                                                    echo '<tr>
                                                        <td class="glyphicon glyphicon glyphicon-star-empty '.$star.'" ></td>
                                                        <td>';
                                                        echo $task_List[$i-1]['value'];
                                                    echo '</td>
                                                        <td class="glyphicon glyphicon-ok"></td>
                                                        <td class="glyphicon glyphicon-option-vertical"></td>
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
                                  <div class="col-lg-6">
                                   <div id="chart_div" style="width: 500px; height: 300px;"></div>
                                  </div>
                         </div>
                      </div>
				</div>
				
			
		
	


