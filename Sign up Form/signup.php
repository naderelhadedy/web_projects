<?php



// to check if there is an email in post array and the same for password
if (array_key_exists('email', $_POST) AND array_key_exists('password', $_POST)) {


	$link = mysqli_connect("localhost", "id15532826_signupformusers", "IR9)UZ|bSKRTKpX6", "id15532826_signupform");

	if (mysqli_connect_error()) {
		die ('<h1 style="color: red;">There was an error in connecting</h1>');
	}

	// to check if email is empty and user should input
	if ($_POST['email'] == "") {
		echo '<p class="alert alert-danger" role="alert" style="position: fixed; margin-top: 100px; width: 100%; text-align: center; font-size: 18px;">Email is required.</p>';
	} 

	//to check if password is empty and user should input
	else if ($_POST['password'] == "") {
		echo '<p class="alert alert-danger" role="alert" style="position: fixed; margin-top: 100px; width: 100%; text-align: center; font-size: 18px;">Password is required.</p>';
	} else {

		//to check if email is stored before in the database
		$query = "SELECT id FROM formusers WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) > 0) {
			echo '<p class="alert alert-warning" role="alert" style="position: fixed; margin-top: 100px; width: 100%; text-align: center; font-size: 18px;">This email is already registered.</p>';
		} else {

			// to insert data from user into database
			$query = "INSERT INTO formusers (email, password, name) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."', '')";
			
			if (mysqli_query($link, $query)) {
				echo '<p class="alert alert-success" role="alert" style="position: fixed; margin-top: 100px; width: 100%; text-align: center; font-size: 18px;"><b>You have signed up successfully.</b><br>The last step: we have sent you a link via mail to confirm your email.</p>';
			} else {
				echo '<p class="alert alert-danger" role="alert" style="position: fixed; margin-top: 100px; width: 100%; text-align: center; font-size: 18px;">There was a problem signing you up.</p>';
			}

		}
	}


}



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up</title>

    <style>
        body {
            background-image: url(back0.jpg);
            background-size: cover;
        }

        form {
            background-color: white;
            color: black;
            width: 500px;
            padding: 30px;
            float: right;
            margin-right: 200px;
            margin-top: 20px;
        }

        #home {
            margin-top: 50px;
            margin-left: 50px;
            font-size: 50px;
            font-weight: bold;
        }

        #home a {
            color: #e5d8d1;
            text-decoration: none;
        }

        #home a:hover {
            color: rgb(44, 158, 158);
        }
    </style>
  </head>
  <body>
    
    <!--home-->
    <h1 id="home"><a href="#">ABC UNIVERSITY</a></h1>
    <hr class="text-dark" style="margin-bottom: 80px; border: 3px solid;">




    <!--form-->
    <form method="POST">
        <div>
            <h3>Sign up to explore the books you want, if you're <span class="text-info">ABCian</span></h3>
            <p>There are a huge number of valuable books just for you</p>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name="email">
          <small id="emailHelp" class="form-text text-muted">Enter the email at the back of your card</small>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          <small id="emailHelp" class="form-text text-muted">Use letters and numbers (optional - for your security)</small>
        </div>
        <button type="submit" class="btn btn-info" style="width: 440px;">SIGN UP</button>
      </form>
      




    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>