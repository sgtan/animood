<<<<<<< HEAD
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <h1 class="page-header"><?php echo $orgCode; ?> / Appoint Admin</h1>
	 
	<div style="float: left; width: 47%;">
	<div class="input-group" style="padding-bottom: 10px;">
      <input id="search-members" type="text" class="form-control" placeholder="Search members">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-search"></span>
      </span>
    </div>
	<div class="panel panel-default">	
=======
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <h1 class="page-header"><?php echo $orgCode; ?> / Appoint Admin</h1>
	 <div id="confirm-box" style="display: none;">
		<div class="panel panel-default">
		<div class="panel-heading">Appoint selected members as admins?</div>
		<div style="padding: 10px;">
		<button id="yes" type="button" class="choice btn btn-primary btn-sm"><span class="glyphicon glyphicon-ok"></span> Yes</button>
		<button id="no" type="button" class="choice btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span> No</button>
		</div>
		</div>
	 </div>
	<div style="float: left; width: 475px;">
	<div class="panel panel-default">
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
	<div class="panel-heading">Members</div>

	<table class = "table">
	<tbody id="member-body">
		<tr>
		<th>ID Number</th>
		<th>Name</th>
		<th>Appoint</th>
		</tr>
		<?php
			foreach($members as $member){
			echo '<tr id="'.$member->idnumber.'">';
			echo '<td>'.$member->idnumber.'</td>';
			echo '<td>'.$member->lastname.', '.$member->firstname.'</td>';
<<<<<<< HEAD
			echo '<td><button id="'.$member->idnumber.'" data-firstname="'.$member->firstname.'" data-lastname="'.$member->lastname.'" type="button" class="check btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button></td>';
=======
			echo '<td><button id="'.$member->idnumber.'" data-firstname="'.$member->firstname.'" data-lastname="'.$member->lastname.'" type="button" class="toggle-check btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span></button></td>';
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
			echo '</tr>';
			}
		?>
	</tbody>
	</table>
	<script type="text/javascript">
		(function(){
<<<<<<< HEAD
			
			$('#search-admins').keyup(function() {
			var $rows = $('#admin-body tr');
			var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

			$rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
			}).hide();
			});
			
			$('#search-members').keyup(function() {
			var $rows = $('#member-body tr');
			var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

			$rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
			}).hide();
			});
			
			var idnumber, orgCode = '<?php echo $orgCode; ?>';
								
			$(".check").click(function(){
				idnumber = $(this).attr("id");
							
				$(".check").attr("disabled");
				$(this).closest("tr").remove();
				
				$.ajax({
					data:{
						id: idnumber,
=======
			var userArray, orgCode = '<?php echo $orgCode; ?>';
		
			$(".toggle-check").click(function(){
				if($(this).hasClass("btn-default") == true){
					$(this).addClass("btn-success checked").removeClass("btn-default unchecked");
				}
				else{
					$(this).addClass("btn-default unchecked").removeClass("btn-success checked");
				}
			});
			
			$("#confirm").click(function(){
				userArray = new Array();
				$('.checked').each(function(){
					var idnum = $(this).attr("id");
					userArray.push(idnum);
				});
				
				if(userArray.length != 0)
					$("#confirm-box").slideDown(300);
				
			});
			
			$(".choice").click(function(){
				var choice = $(this).attr("id");
				
				if(choice == "no"){
					$("#confirm-box").slideUp(300);
					return false;
				}
				
				$(".choice").attr("disabled");
				
				$.ajax({
					data:{
						id: userArray,
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
						o: orgCode
					},
					type:"post",
					success: appointSuccess,
					error: appointError,
					url: '<?php echo base_url();?>index.php/organization/appoint_members'
					
				});
				
				function appointSuccess(data, textStatus){
					$("#admin-body").html(data);
<<<<<<< HEAD
					

				}
				
				function appointError(data, textStatus){
					alert("error");
				}
				
			});
			
			$(".remove").click(function(){
				idnumber = $(this).attr("id");
							
				$(".remove").attr("disabled");
				$(this).closest("tr").remove();
				
				$.ajax({
					data:{
						id: idnumber,
						o: orgCode
					},
					type:"post",
					success: removeSuccess,
					error: removeError,
					url: '<?php echo base_url();?>index.php/organization/remove_admin'
					
				});
				
				function removeSuccess(data, textStatus){
					$("#member-body").html(data);
				}
				
				function removeError(data, textStatus){
=======
					$(".choice").removeAttr("disabled");
					$("#confirm-box").slideUp(300);
					
					$("#member-body tr").each(function(){
						var id = $(this).attr("id");
						
						if(userArray.indexOf(id) >= 0)
							$(this).remove();
					});
					
					console.log(userArray.indexOf('11108908'));
					
				}
				
				function appointError(data, textStatus){
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
					alert("error");
				}
				
			});
			
		})();
	</script>
	
<<<<<<< HEAD
	</div>	
	</div>
    
	<div style="float: right; width: 47%;">
	<div class="input-group" style="padding-bottom: 10px;">
      <input id="search-admins" type="text" class="form-control" placeholder="Search admins">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div>
	<div class="panel panel-default">
    <div class="panel-heading">Admins</div>
	<table id="admin-table" class = "table">
=======
	</div>
	<button id="confirm" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Appoint</button>
	</div>
    
	<div style="float: right; width: 475px;">
	<div class="panel panel-default">
    <div class="panel-heading">Admins</div>

	<table class = "table">
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
	<tbody id="admin-body">
		<tr>
		<th>ID Number</th>
		<th>Name</th>
<<<<<<< HEAD
		<th>Remove</th>
=======
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		</tr>
		<?php
			foreach($admins as $admin){
			echo '<tr>';
			echo '<td>'.$admin->idnumber.'</td>';
			echo '<td>'.$admin->lastname.', '.$admin->firstname.'</td>';
<<<<<<< HEAD
			echo '<td><button id="'.$admin->idnumber.'" data-firstname="'.$admin->firstname.'" data-lastname="'.$admin->lastname.'" type="button" class="remove btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button></td>';
=======
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
			echo '</tr>';
			}
		?>
	</tbody>
	</table>
	</div>
	</div>
          
 
 </div> 
  
  










 
