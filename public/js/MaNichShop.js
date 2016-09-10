$(document).ready(function(){ 
	$('#menusearch').hide();
	$('.btnsearch').click(function(){
		$('#menusearch').slideDown(100);
		$('#menusearch').focus();
	});
});
