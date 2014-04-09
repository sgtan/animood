
$(document).ready(initAddMember); 

 
function initAddMember(){
		$('#register-btn').click(register)
 }

function register(){	

		var idnumber = $('#idnumber').val();
		var orgCode = $('h1').attr('org');
		
				$.ajax({
				data:{
					'idnumber':idnumber,
					'orgCode':orgCode
					
				},
				type:"post",
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/organization/register_member'
			});
				clearInput();
			return false;

function ajaxSuccess(data, textStatus){
		$("#member-body").prepend(data);
				
		}
		function ajaxError(data, textStatus){
					alert("error");
}

}

	
function clearInput() { 
	$('#idnumber').val('');
 		
 } 

