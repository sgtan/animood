window.onload=centerize;
window.onresize = centerize;

function centerize (){
	var box = document.getElementById("login-box");
	var wHeight = window.innerHeight/2;
	var vHeight = 150;
	var nTop = wHeight-vHeight;
	box.style.top = nTop+"px";

	}