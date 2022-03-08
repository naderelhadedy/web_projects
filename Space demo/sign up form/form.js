
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}




	$("#submit").click (function() {
		var errorMessage = "";
		var fieldMissing = "";

		if($("#email").val () == "") {
			fieldMissing += "<br>Email";
		}

		if($("#phone").val () == "") {
			fieldMissing += "<br>Telephone";
		}

		if($("#password").val () == "") {
			fieldMissing += "<br>Password";
		}

		if($("#confirmPassword").val () == "") {
			fieldMissing += "<br>Confirm Password";
		}


		

		if (fieldMissing != "") {
			errorMessage = "<p> The following field(s) are missing: </p>" + fieldMissing;
		}






		if ($.isNumeric($("#phone").val ()) == false) {
			errorMessage += "<p>Your phone number is not numeric.</p>";
		}


		if ($("#password").val () != $("#confirmPassword").val ()) {
			errorMessage += "<p>Your passwords don't match.</p>";
		}


		if (isEmail($("#email").val ()) == false) {
			errorMessage += "<p>Your email is not valid.</p>";
		}








		if (errorMessage != "") {
			$("#para2").html(errorMessage);
		} else {
			$("#para1").show();
			$("body").css("background-color","black");
			$("#form").hide("fast");
			$("#para2").hide();
		}







	});