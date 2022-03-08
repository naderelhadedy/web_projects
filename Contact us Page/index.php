
<?php



$errorMessage = "";
$successMessage = "";

if ($_POST) {

    if (!$_POST['name']) {
        $errorMessage .= "The name field is required.<br>";
    }

    if (!$_POST['country']) {
        $errorMessage .= "The country field is required.<br>";
    }

    if (!$_POST['email']) {
        $errorMessage .= "The email field is required.<br>";
    }

    if (!$_POST['subject']) {
        $errorMessage .= "The subject field is required.<br>";
    }

    if (!$_POST['message']) {
        $errorMessage .= "The message field is required.<br>";
    }

    if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $errorMessage .= "The email address is invalid.<br>";
    }


    if ($errorMessage != "") {
        $errorMessage = '<div class="alert alert-danger" role="alert">
  <p>There were error(s) in your form: </p>' .$errorMessage. '</div>';
    } else {

        $emailTo = "nader_dedy@yahoo.com";
        $subject = $_POST['subject'];
        $content = $_POST['message'];
        $headers = "from: ". $_POST['email'];


        if (mail($emailTo, $subject, $content, $headers)) {
            $successMessage = '<div class="alert alert-success" role="alert">
  Your message was sent successfully, we will get back to you ASAP! </div>';
        } else {
            $errorMessage = '<div class="alert alert-danger" role="alert">
  Your message could not be sent!
</div>';
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

    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="logo2.jpg" type="image/x-icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Contact Us - UAEAL</title>

    <style>
    	#nav {
    		height: 80px;
    		padding-top: 0px;
    	}

    	.para {
    		margin-bottom: 20px;
    		margin-right: 50px;
    		text-decoration: none;
    		font-weight: bold;
    		font-size: 20px;
    		color: white;
    	}

    	.para:hover {
    		color: #d71921;
    		text-decoration: none;
    	}

    	#feat {
    		background-image: url(back2.jpg);
    		background-size: cover;
    		background-repeat: no-repeat;
    		height: 350px;
    		color: white;
    		font-size: 40px;
    		font-weight: bold;
    		font-family: 'Yellowtail', cursive;
    		padding-top: 45px;
    		padding-left:600px;
    	}

    	.form-row, #resizeMe {
    		width: 380px;
    	}

    	#send {
    		color: white;
    		background-color: #d71921;
    	}

    	.head {
    		font-size: 26px;
    		color: #d71921;
    		font-weight: bold;
    		font-family: cursive;
    		padding-left: 70px;
    		padding-top: 20px;
    	}

    	#follow {
    		background-image: url(col.jpg);
    		background-size: cover;
    		border-radius: 20px;
    		margin-left: 30px;
    		width: 680px;
    		height: 400px;
    	}

    	#gen {
    		font-size: 32px;
    		padding-left: 240px;
    		padding-top: 80px;
    		font-family: cursive;
    		color: #333333;
    	}

    	#num {
    		font-size: 32px;
    		padding-left: 240px;
    		padding-top: 20px;
    		font-family: cursive;
    		color: #333333;
    	}

    	#footer {
    		height: 70px;
    		background-color: #333333;
    		margin-top: 50px;
    	}

    	.fa {
            padding: 5px;
            font-size: 28px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
            background-color: #333333;
            width: 40px;
            height: 40px;
            border: 1px solid #d71921;
        }
        .fa:hover {
        	background-color: #d71921;
           	color: white;
        }
        .fa-youtube {
            color: white;
        }
        .fa-facebook {
            color: white;
            margin-right: 10px;
        }
        .fa-linkedin {
            color: white;
            margin-right: 10px;
        }
        .fa-instagram {
            color: white;
            margin-right: 10px;
        }
        .fa-twitter {
            color: white;
            margin-right: 10px;
        }

        #last {
        	float: left;
        	padding: 10px 10px 10px 150px;
        	color: white;
    		font-size: 25px;
    		font-family: 'Yellowtail', cursive;
    		margin-bottom: 0px;
        }

        #final {
        	margin-top: 20px;
        	margin-bottom: 20px;
        }
    </style>
  </head>
  <body>


  	<!-- navbar -->
    <nav class="navbar navbar-dark bg-dark" id="nav">
      <a class="navbar-brand" href="#" style="padding-top: 0px;">
        <img src="logo.png" width="60" height="100" alt="logo">
      </a>
      <a href="#" class="para">BOOK</a>
      <a href="#" class="para">MANAGE</a>
      <a href="#" class="para">WHERE WE FLY</a>
      <a href="#" class="para">EXPERIENCE</a>
      <a href="#" class="para" style="color: #d71921; padding-right: 100px;">CONTACT US</a>
    </nav>


    <div id="feat" class="img-fluid">
    	<p>Get in Touch ...</p>
    </div>


<div id="final"><?php echo $errorMessage.$successMessage; ?></div>


<div class="container">

	<div class="row" style="margin-top: 50px;">

		<div class="col-4.5" style="border: 1px solid lightgrey; border-radius: 20px;">

			<p class="head">Contact us Worldwide</p>
    

    <!--contact form-->


            <form method="POST" class="needs-validation" novalidate style="padding-right: 20px; padding-left: 20px; padding-bottom: 5px; margin-top: 30px;">        

                <div class="form-row">
                    <input type="text" class="form-control" placeholder="Full name" name="name" required>
                </div>        

                <div class="form-row">
                    <input type="text" class="form-control" placeholder="Country" name="country" required>
                </div>        

                <div class="form-row">
                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                </div>        

                <div class="form-row">
                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>        

                <div class="form-row">
                    <div id="resizeMe">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message" name="message"></textarea>
                	</div>
            	</div>        

            	<button id="send" class="btn" type="submit" style="margin-left: 120px; margin-top: 25px; width: 100px; border-radius: 20px;">Send</button>
                  
            </form>

    	</div>

    	<div id="follow" class="col-7.5">

    		<p class="head" id="gen">General queries:</p>
    		<hr style="width: 10%; border: 2px solid #d71921; opacity: 0.5; margin-left: 325px;">
    		<p id="num">+20254542009</p>
    		
    	</div>

	</div>
</div>


<!--footer-->
<div id="footer" style="text-align: center; padding-top: 10px; padding-bottom: 10px;">

	<p id="last">Follow us on ...</p>
	<a href="#" target="_blank" class="fa fa-facebook"></a>
  	<a href="#" target="_blank" class="fa fa-linkedin"></a>
  	<a href="#" target="_blank" class="fa fa-twitter"></a>
  	<a href="#" target="_blank" class="fa fa-instagram"></a>
  	<a href="#" target="_blank" class="fa fa-youtube"></a>
	
</div>


    






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


