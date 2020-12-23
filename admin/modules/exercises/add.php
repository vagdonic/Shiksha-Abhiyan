<?php 
if (!isset($_SESSION['USERID'])){
redirect(web_root."admin/index.php");
}
?> 
<style>
tr.break td {
  height: 10px;
}
</style>
                     <form class="form-horizontal span6" action="controller.php?action=add" method="POST" style="margin-top: 20px;"> 
                        <div class="row">
                           <div class="col-lg-12">
                              <h1 class="page-header">Add New Question</h1>
                            </div>
                         </div>
						<table>
							<tr>
							<td>Lesson:</td>
							<td>
							<select class="form-control" name="Lesson">
                              <?php 
                               $sql = "SELECT * FROM `tbllesson`";
                               $mydb->setQuery($sql);
                               $cur = $mydb->loadResultList();
                               foreach ($cur as $res) {
                                echo '<option value='.$res->LessonID.'>'.$res->LessonTitle.'</option>';
                               }
                              ?>
                            </select></td>
							</tr>
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td>Question:</td>
							<td><textarea  class="form-control input-sm" id="Question" name="Question" placeholder=
                                "Question Name" type="text"></textarea></td>
							</tr>	
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td>A:</td>
							<td><input class="form-control input-sm" id="ChoiceA" name="ChoiceA" placeholder=
                                "" type="text" value=""></td>
							</tr>	
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td>B:</td>
							<td><input class="form-control input-sm" id="ChoiceB" name="ChoiceB" placeholder=
                                "" type="text" value=""></td>
							</tr>
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td>C:</td>
							<td><input class="form-control input-sm" id="ChoiceC" name="ChoiceC" placeholder=
                                "" type="text" value=""></td>
							</tr>
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td>D:</td>
							<td><input class="form-control input-sm" id="ChoiceD" name="ChoiceD" placeholder=
                                "" type="text" value=""></td>
							</tr>
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td>Answer:</td>
							<td><input class="form-control input-sm" id="Answer" name="Answer" placeholder=
                                "Answer" type="text" value="" required></td>
							</tr>	
							<tr class="break"><td colspan="2"></td></tr>
							<tr>
							<td><button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> </td>
							</tr>
						</table> 
                      </form>