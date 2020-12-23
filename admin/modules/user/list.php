<?php

?> 
      <div class="module-head"> 
            <h1 class="page-header">List of Users <a href="index.php?view=add" class="btn btn-primary">New</a></h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="datatable-1 table table-hover table-bordered" cellspacing="0" style="font-size:12px" > 
				  <thead>
				  	<tr> 
				  		<th> Account Name</th>
				  		<th>Username</th>
				  		<th width="10%">Action</th> 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
	
				  		$mydb->setQuery("SELECT * 
											FROM  `tblusers`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->NAME.'</a></td>';
				  		echo '<td>'. $result->UEMAIL.'</td>';
	
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->USERID.'" class="btn btn-primary btn-xs" >Edit</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->USERID.'" class="btn btn-danger btn-xs" >Delete</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
				</form> 