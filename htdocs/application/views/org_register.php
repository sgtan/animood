<<<<<<< HEAD
<script src="<?php echo base_url();  ?>script/org_register.js" type="text/javascript"></script>
=======
<!--<script src="<?php echo base_url();  ?>script/org_register.js" type="text/javascript"></script>-->
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  <link rel="stylesheet" href="http://localhost/style/org_register.css" style="text/css"/>
		
<<<<<<< HEAD
    <h1 class="page-header" org= <?php echo $orgCode?> ><?php echo $orgCode?> / Register Member </h1> 
=======
    <h1 class="page-header"> Register Member </h1> 
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f



			<div id="register-form-box" class="form-group">				
<<<<<<< HEAD
						<form id="register-form"  method="post">
=======
						<form id="register-form" action="<?php echo base_url();  ?>index.php/organization/register_member"  method="post">
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
							
              <div class="form-group">
								<input type="text" class="form-control" placeholder="ID Number" name="idnum" id ="idnumber"/>
              </div>

<<<<<<< HEAD
              
=======
              <div class="form-group adj-form">
                <input type="text" class="form-control adj-input" placeholder="First Name" name="firstname" id ="firstname"/>
                <input type="text" class="form-control adj-input" placeholder="Last Name" name="lastname" id ="lastname"/>
                <div class="clearfix"></div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" id ="email"/>
              </div>
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
							
							<input type="submit" id="register-btn" class="btn btn-warning" value="Register Member"/>	


						</form>

			</div>


      
      <div class = "table-responsive">
       
        <form method = "post" action="search.php" class = "search-form">
       <div class="input-group">
       <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
       </form>
     
		<table class="table table-bordered">
        <thead>
          <tr>
            <th>ID Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
          </tr>
        </thead>
<<<<<<< HEAD
        <tbody id ="member-body">
=======
        <tbody>
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f

           <?php
           if($org_members != null){
              foreach ($org_members as $member)
             {  
                echo "<tr>";
                echo "<td>". $member->idnumber. "</td>";
                echo "<td>". $member->firstname. "</td>";
                echo "<td>". $member->lastname. "</td>";
                echo "<td>". $member->email. "</td>";
                echo "</tr>";
             
             };
           }
           else{
            echo "<td colspan='4'> There are no Registered Members </td>";
           }
           

          ?>
          
        </tbody>
      </table>



      </div>

 
	

</div> 


