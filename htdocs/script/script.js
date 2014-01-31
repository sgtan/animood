$(document).ready(init);


function init(){
	$('.nav-sidebar').on('click','li', function(){
		$(this).children(".sub-menu").show().end().siblings().find('.sub-menu').hide();
	});

    courseClick();
    
	$('#home').click(home);

	
}


function home(){	
			$.ajax({
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/main/home'
			});

			
			function ajaxSuccess(data, textStatus){
				$('#main-content').html(data);			
			}
			
			function ajaxError(data, textStatus){
				$('#main-content').html('error');
			}
			
			return false;
}


function courseClick(){

	 $('#course li').click(function(){
 		var courseCode = getNavChildID(this);
 			$.ajax({
				data:{
					'coursecode':courseCode
				},
				type: 'get',
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/main/evaluation'
			});
			
			function ajaxSuccess(data, textStatus){
				$('#main-content').html(data);			
			}
			
			function ajaxError(data, textStatus){
				$('#main-content').html('error');
			}
			
			return false;

	});
}

function orgClick(){

}
function officeClick(){
	
}

function getNavChildID(element){
	 return ($(element).attr('id'));
}




