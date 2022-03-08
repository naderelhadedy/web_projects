<?php



if ($_POST) {



	//for text file
	$application = "\n Name: ".$_POST['fullname']."\n Email: ".$_POST['email']."\n Phone: ".$_POST['phone']."\n Address: ".$_POST['address']."\n Department: ".$_POST['department']."\n Experience: ".$_POST['experience']."\n Availability: ".$_POST['availability']."\n";

	//for html view
	$applicationView = "<br> Name: ".$_POST['fullname']."<br> Email: ".$_POST['email']."<br> Phone: ".$_POST['phone']."<br> Address: ".$_POST['address']."<br> Department: ".$_POST['department']."<br> Experience: ".$_POST['experience']."<br> Availability: ".$_POST['availability']."<br>";




	$handle = fopen('jobapp.txt', 'a');
	fwrite($handle, $application);
	fclose($handle);

	echo '<div class="alert alert-success" role="alert" style="text-align: center; font-size: 20px; margin-top: 30px; margin-bottom: 30px;">Your form has been submitted successfully!</div>';


	echo '<button type="button" class="btn btn-info" style="margin-left: 600px;" data-toggle="modal" data-target="#exampleModal">View Results</button>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Results</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">'
              	.$applicationView.'
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>';


	//send email with data
	$emailTo = "elhadedynader@gmail.com";
	$subject = "Job Application";
	$body = $application;
	$headers = "From: ".$_POST['fullname']." <".$_POST['email'].">";

	mail($emailTo, $subject, $body, $headers);

	//send thanks email
	$emailTo = $_POST['email'];
	$subject = "Job Application Received";
	$body = "Thanks for taking time to fill our form. We are happy that you are interested to join us.\n We are reviewing applications and the recruitment team will contact you if you matched our requirements.\n Best wishes.";
	$headers = "From: "."X-Company LLC"." <no-reply@org>";

	mail($emailTo, $subject, $body, $headers);




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
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <title>Job Registration Form</title>
    <style>
      body {
        background-image: url(backgib.png);
        background-size: cover;
        font-weight: bold;
      }

      form {
        width: 70%;
        margin: auto;
        margin-bottom: 50px;
        border: 2px solid grey;
        padding: 40px;
        border-radius: 50px;
      }

      #head {
        text-align: center;
        margin-top: 40px;
        margin-bottom: 60px;
        font-family: 'Anton', sans-serif;
      }
    </style>
  </head>
  <body>

    <!--form-->
    <div class="container">
      <div id="head">
        <h1 class="display-4">Please fill this form to join us</h1>
      </div>
    <form class="needs-validation" novalidate method="POST">
        <div class="form-group">
            <label for="validationDefault01">Full name</label>
            <input type="text" name="fullname" class="form-control" id="validationDefault01" placeholder="Enter your name" required>
          </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="validationCustom05">Phone</label>
            <input type="number" name="phone" class="form-control" id="validationCustom05" placeholder="Enter your phone" required>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Enter your address" required>
        </div>
        <div class="form-group">
            <label for="validatedCustomSelect">Preferred Department</label>
            <select name="department" class="form-control browser-default" required>
              <option value="">Choose an option</option>
              <option value="IT">IT</option>
              <option value="Human Resources">Human Resources</option>
              <option value="Engineering">Engineering</option>
              <option value="Accounting">Accounting</option>
              <option value="Supply Chain">Supply Chain</option>
              <option value="Sales & Marketing">Sales & Marketing</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Business Analysis">Business Analysis</option>
            </select>
          </div>
        <div class="form-group">
          <label for="validatedCustomSelect">Experience</label>
          <select name="experience" class="form-control browser-default" required>
            <option value="">Choose an option</option>
            <option value="Student">Student (currently studying)</option>
            <option value="Fresh Graduate">Fresh Graduate (graduated in the past 12 months)</option>
            <option value="Junior">Junior (1-4 years experience)</option>
            <option value="Senior">Senior (5-10 years experience)</option>
          </select>
        </div>
        <div class="form-group">
            <label for="validatedCustomSelect">Availability</label>
            <select name="availability" class="form-control browser-default" required>
              <option value="">Choose an option</option>
              <option value="Part-Time">Part-Time</option>
              <option value="Full-Time">Full-Time</option>
              <option value="Contract">Contract</option>
            </select>
          </div>
        <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                I acknowledge that my input data is correct
              </label>
              <div class="invalid-feedback">
                You must check before submitting.
              </div>
            </div>
        </div>
        <button class="btn btn-dark" type="submit" style="width: 50%; margin-top: 25px; margin-left: 200px;"><b>Submit form</b></button>
    </form>
    </div>
    

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>