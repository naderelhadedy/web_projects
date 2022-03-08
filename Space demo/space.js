$(document).ready(function(){

	document.getElementById("date").innerHTML = "Today's date:  " + new Date().toDateString();

	$("#accordion").accordion();

	$("table").resizable();

	
	$("#moon").click(function() {
		$("body").toggleClass('change');
	});

	

	$("#ask").click (function() {
		alert("Send your inquiry to 'info@space.com'");
	});

});