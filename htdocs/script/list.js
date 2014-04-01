$(document).ready(init);

function init(){
	showEventEval();
	showOfficeEval();
}

function showEventEval(){
	$('#event-list li').click(function(){
		var eventname = $(this).attr('eventname');
		var eventid = $(this).attr('id');
		var type = 3;

		$.ajax({
			data:{
				'eventname':eventname,
				'eventid': eventid,
				'type' : type
			},
			type: 'get',
			success: ajaxSuccess,
			error: ajaxError,
			url: 'http://localhost/index.php/content/evaluation'
		})
	});
}

function showOfficeEval(){
	$('#office-list li').click(function(){
		var officename = $(this).attr('officename');
		var officeid = $(this).attr('id');
		var type = 4;
		
		$.ajax({
			data:{
				'officename':officename,
				'officeid': officeid,
				'type' : type
			},
			type: 'get',
			success: ajaxSuccess,
			error: ajaxError,
			url: 'http://localhost/index.php/content/evaluation'
		})
	});

}

function ajaxSuccess(data, textStatus){
    $('#main-content').html(data);
}

function ajaxError(data, textStatus){
    $('#main-content').html('error');
}