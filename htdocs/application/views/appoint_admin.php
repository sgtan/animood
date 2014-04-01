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
			echo '<td><button id="'.$member->idnumber.'" data-firstname="'.$member->firstname.'" data-lastname="'.$member->lastname.'" type="button" class="toggle-check btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span></button></td>';
			echo '</tr>';
			}
		?>
	</tbody>
	</table>
	<script type="text/javascript">
		(function(){
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
						o: orgCode
					},
					type:"post",
					success: appointSuccess,
					error: appointError,
					url: '<?php echo base_url();?>index.php/organization/appoint_members'
					
				});
				
				function appointSuccess(data, textStatus){
					$("#admin-body").html(data);
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
					alert("error");
				}
				
			});
			
		})();
	</script>
	
	</div>
	<button id="confirm" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Appoint</button>
	</div>
    
	<div style="float: right; width: 475px;">
	<div class="panel panel-default">
    <div class="panel-heading">Admins</div>

	<table class = "table">
	<tbody id="admin-body">
		<tr>
		<th>ID Number</th>
		<th>Name</th>
		</tr>
		<?php
			foreach($admins as $admin){
			echo '<tr>';
			echo '<td>'.$admin->idnumber.'</td>';
			echo '<td>'.$admin->lastname.', '.$admin->firstname.'</td>';
			echo '</tr>';
			}
		?>
	</tbody>
	</table>
	</div>
	</div>
          
 
 </div> 
  
  










 
