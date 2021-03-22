<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercise 3</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 <style>
			.error {
				color: red;
				font-size: 0.8rem;
				font-style: italic;
			}
	 </style>
	</head>
	<body>
		<?php
			$name = $mail =  $site = $phonenumber = $message= "";
			$nameError = $mailError  = $siteError = $phonenumberError ="";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameError = "This field cannot be empty!";
				} else {
					$name = test_input($_POST["name"]);
					if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
						$nameError = "Only letters and spaces are allowed!";
					}
				}

				if (empty($_POST["mail"])) {
					$mailError = " ";
				} else {
					$mail = test_input($_POST["mail"]);
					if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
						$mailError = "Invalid E-mail format!";
					}
				}

				if (empty($_POST["phone"])) {
					$phonenumber=" ";
				} else {
					$phonenumber = test_input($_POST["phone"]);
					if(filter_var($phonenumber, FILTER_VALIDATE_INT)){
						$phonenumberError = "Incorrect format!";
					}
				}

				if (empty($_POST["website"])) {
					$site = "";
				} else {
					$site = test_input($_POST["website"]);
					if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $site)) {
						$siteError = "This field must have URL format!";

					}
				}
				if (empty($_POST["message"])) {
					$message = "";
				} else {
					$message = test_input($_POST["message"]);
				}
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<div class="container">
			<div class="row ">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12  ">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-control bg-secondary" method="POST">
						<div class="form-group mt-3">
							<input class="form-control" type="text" name="name" placeholder="Your name">
						</div>
						<span class="error"> <?php echo $nameError;?></span>
						<div class="form-group mt-3">
							<input class="form-control" type="email" name="mail" placeholder="Your email address" >
						</div>
						<span class="error"> <?php echo $mailError;?></span>
						<div class="form-group mt-3">
							<input class="form-control" type="number" name="phone" placeholder="Your phone number">
						</div>
						<span class="error"> <?php echo $phonenumberError;?></span>
						<div class="form-group mt-3">
							<input class="form-control" type="text" name="website" placeholder="Your Website starts with http:/ ">
						</div>
						<span class="error"><?php echo $siteError;?></span>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label"></label>
							<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Type your Message here..."></textarea>
						</div>
						<input type="submit" class="btn btn-danger w-100 " value="Submit">

					</form>
					<?php
					echo $name."<br>";
					echo $mail."<br>";
					echo $phonenumber ."<br>";
					echo $site."<br>";
					echo $message;
					?>
				</div>
			</div>
		</div>
	</body>
</html>