document.getElementById('nav').onmouseover = function(event){
	
	var target = event.target;
	if(target.className == 'menu_item'){
		var s = target.getElementsByClassName('submenu');
		closeMenu();
		s[0].style.display = 'block';
	}	
}

document.onmouseover = function(event){
	var target = event.target;
	console.log(event.target);
	if(target.className != 'menu_item' && target.className != 'submenu'){
		closeMenu();
	}	
}

function closeMenu(){

	var subm = document.getElementsByClassName('submenu');
	for(var i = 0; i < subm.length; i++){
		subm[i].style.display = "none";
	}	
}





