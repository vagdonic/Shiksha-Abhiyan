<?php
		check_message(); 
		?> 
<style type="text/css">
	#example {
		white-space: nowrap;
	}
</style> 
      <div class="module-head"> 
            <h1 >List of Student</h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="datatable-1 table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr>  
				  		  <th>Name</th>
				  		  <th>Address</th> 
				  		<th>Contact</th>  
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblstudent`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';  
				  		echo '<td>'. $result->Fname.' ' . $result->Lname .'</td>'; 
				  		echo '<td>'.$result->Address. '</td>'; 
				  		echo '<td>'. $result->MobileNo.'</td>'; 

				  		 
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody> 
				</table> 
				</form> 