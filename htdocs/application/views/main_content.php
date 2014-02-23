<<<<<<< HEAD
<div class="container-fluid">
   <div class="row">
   	
   	<div class="col-sm-3 col-md-2 sidebar" id ="nav-sidebar">
	<?php include('/application/views/navigation.php');?>
	</div>

	<div id="main-content">
			<?php include('/application/views/student_main.php');?>
	</div>


	</div>
</div>
=======
<div class = "main">

<?php include('/application/views/navigation.php');?>
<?php include('/application/views/content.php');?>


</div>
<script>

			window.onload=initMenuToggle;
			function initMenuToggle(){
				var toggleList=document.getElementsByClassName("menu-toggle");
				for(var i=0; i<toggleList.length;i++){
					toggleList[i].onclick=function(){
						var open=document.getElementById(this.getAttribute("data-toggle"));
						open.style.display="block";
					}
				}
			}

</script>
>>>>>>> 544f9ece8955b97bd363387097b4301cca7a0071
