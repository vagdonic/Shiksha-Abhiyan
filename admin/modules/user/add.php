                      <?php 

                       ?> 
<style>
tr.break td {
  height: 10px;
}
</style>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatedpass()">
           <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Add New Faculty</h1>
          </div>
       </div> 
                <table>
					<tr>
					<td>Name:</td>
					<td><input class="form-control input-sm" id="user_name" name="user_name" placeholder=
                            "Account Name" type="text" value=""></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
					<td>Username:</td>
					<td><input class="form-control input-sm" id="user_email" name="user_email" placeholder=
                            "Username" type="text" value=""></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
					<td>Password:</td>
					<td><input class="form-control input-sm" id="user_pass" name="user_pass" placeholder=
                            "Account Password" type="Password" value=""></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
					<td>Confirm Password:</td>
					<td><input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" placeholder=
                            "Retype Password" type="Password" value=""></td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
					<td>Type:</td>
					<td><select class="form-control input-sm" name="user_type" id="user_type">
                          <option value="Faculty">Faculty</option>
                        </select> </td>
					</tr>
					<tr class="break"><td colspan="2"></td></tr>
					<tr>
					<td><button class="btn btn_kcctc" id="usersave" name="save" type="submit" ><strong>Save</strong></button> </td>
					<td><a href="index.php" class="btn btn_kcctc"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>List of Users</strong></a></td>
					</tr>
					
				</table>
                 
          
          
        </form>
       