<?php 
  if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}
?> 
<style>
tr.break td {
  height: 10px;
}
</style>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Upload New Lesson</h1>
          </div>
       </div> 
			
				<table>
					<tr>
						<td>Chapter:</td>
						<td><input name="LessonChapter" placeholder="Chapter" type="text" value=""></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
						<td>Subject:</td>
						<td>
                         <input  name="LessonTitle" placeholder="Subject Name" type="text" value=""></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
						<td>Select File Type:&nbsp;&nbsp;&nbsp; </td>
						<td>
                         <select name="Category" >
                            <option>Docs</option>
                            <option>Video</option>
                         </select></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
						<td>Upload File:</td>
						<td><input type="file" name="file"/></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
						<td><button class="btn btn-primary btn-sm" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> </td>						
					</tr>
				</table>          
            
        </form> 