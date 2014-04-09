$(document).ready(function(){

	$('#toggle-switcher').click(function(){
		if($(this).hasClass('opened')){
			$(this).removeClass('opened');
			$('#style-switcher').animate({'right':'-222px'});
		}else{
			$(this).addClass('opened');
			$('#style-switcher').animate({'right':'-10px'});
		}
	});
	
	$('#style-switcher li').click(function(e){
		e.preventDefault();
		
		$elem = $(this);
		
		$('#home').attr('class', $elem.attr('id'));
		
		$('#navbar-color').attr('class', 'navbar-inner '+$elem.attr('id'));

		for($i=1; $i<=4; $i++)
			$('#pos'+$i).attr('class', 'position ' +$elem.attr('id'));
		
		$('#submit-button').attr('class', 'button ' +$elem.attr('id'));
	});
});