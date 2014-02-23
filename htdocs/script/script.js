$(document).ready(init);


function init(){
	
	$('#home').click(home);
    courseClick();
    orgClick();
    orgClickli();
    eventClick();
    officeClick();
}


function home(){	
			$.ajax({
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/content/home'
			});
			return false;
}


function courseClick(){

	 $('#course li').click(function(){
 		var courseCode = $(this).attr('courseCode');
 		var section = $(this).attr('section');
 		var type = 1;
 			$.ajax({
				data:{
					'coursecode':courseCode,
					'section': section,
					'type' : type
				},
				type: 'get',
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/content/evaluation'
			});
			return false;

	});
}

function ajaxSuccess(data, textStatus){
	$('#main-content').html(data);			
	}
			
function ajaxError(data, textStatus){
	$('#main-content').html('error');
	}

function orgClick(){

	$('#org>li').click(function(){

		if(!($(this).find('ul').length > 0)){

		var orgCode = $(this).attr('org');
 		var type = 2;
 			$.ajax({
				data:{
					'orgCode': orgCode,
					'type' : type
				},
				type: 'get',
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/content/evaluation'
			});
			return false;
	
			alert('org eval');
			
		}
		return false;
	

	});



}


function orgClickli(){

	$('#org li>ul>li').click(function(){
	
		if($(this).text() == 'Register Member'){
		var orgCode  = $(this).parents('li:first').attr('org');
 			$.ajax({
 				data:{
 					'orgCode' : orgCode
 				},
				type: 'get',
				success: ajaxSuccess,
				error: ajaxError,
				url: 'http://localhost/index.php/content/register_member'
			});
		}
		else if($(this).text() == 'Appoint Admin'){
		}
		else if($(this).text() == 'Evaluation Summary'){
			alert('Evaluation Summary');
		}
	
 	
			return false;

	});



}

function eventClick(){
	$('#events').click(function(){
		var type = 3;
		$.ajax({
			data:{
				'type' : type
			},
			type: 'get',
			success: ajaxSuccess,
			error: ajaxError,
			url: 'http://localhost/index.php/content/view_list'
		});
		return false;
	});
}

function officeClick(){
	$('#office').click(function(){
		var type = 4;
		$.ajax({
			data:{
				'type' : type
			},
			type: 'get',
			success: ajaxSuccess,
			error: ajaxError,
			url: 'http://localhost/index.php/content/view_list'
		});
		return false;
	});
}





