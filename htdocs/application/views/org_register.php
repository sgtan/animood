<!--<script src="<?php echo base_url();  ?>script/org_register.js" type="text/javascript"></script>-->

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  <link rel="stylesheet" href="http://localhost/style/org_register.css" style="text/css"/>
		
    <h1 class="page-header"> Register Member </h1> 



			<div id="register-form-box" class="form-group">				
						<form id="register-form" action="<?php echo base_url();  ?>index.php/organization/register_member"  method="post">
							
              <div class="form-group">
								<input type="text" class="form-control" placeholder="ID Number" name="idnum" id ="idnumber"/>
              </div>

              <div class="form-group adj-form">
                <input type="text" class="form-control adj-input" placeholder="First Name" name="firstname" id ="firstname"/>
                <input type="text" class="form-control adj-input" placeholder="Last Name" name="lastname" id ="lastname"/>
                <div class="clearfix"></div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" id ="email"/>
              </div>
							
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
        <tbody>

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


