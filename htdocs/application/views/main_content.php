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