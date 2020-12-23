<?php
	if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

?>
 
      <div class="module-head"> 
            <h1 class="page-header">List of Lessons <a href="index.php?view=add" class="btn btn-primary">  <i class="fa fa-plus-circle fw-fa"></i> New</a></h1> 
       		 
       		</div> 
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="datatable-1 table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		 <th>Chapter</th>
				  		<th>Subject</th> 
				  		<th>File Type</th> 
				  	 	<th width="30%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php    
				  		$mydb->setQuery("SELECT * FROM  `tbllesson`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>'. $result->LessonChapter.'</td>';
				  		echo '<td>'. $result->LessonTitle.'</td>'; 
				  		echo '<td>'. $result->Category.'</td>';

				  		if ($result->Category=="Video") {
				  			
				  			$view = "index.php?view=playvideo&id=".$result->LessonID;
				  		}else{
				  			$view = "index.php?view=viewpdf&id=".$result->LessonID;

				  		}
				  	  
				  		echo '<td align="center" > <a title="Edit Details" href="index.php?view=edit&id='.$result->LessonID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span> Edit</a> 
				  					<a title="Change File" href="index.php?view=uploadfile&id='.$result->LessonID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-upload fw-fa"></span> Change File</a> 
				  					 <a title="View Files"  href="'.$view.'" class="btn btn-info btn-xs" ><span class="fa fa-info fw-fa"></span> View</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->LessonID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span> Delete</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>
	 