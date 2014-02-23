<div class="container-fluid">
   <div class="row">
   	
   	<div class="col-sm-3 col-md-2 sidebar" id ="nav-sidebar">
	<?php include('/application/views/navigation.php');?>
	</div>

	<div id="main-content">
		<?php
		if($type ==1)
			 include('/application/views/student_main.php');
		else if($type ==2)
			include('/application/views/faculty_main.php');
		?>
	</div>



	</div>
</div>