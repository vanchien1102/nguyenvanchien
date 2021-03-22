<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Template Basic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/67b41cffa0.js" crossorigin="anonymous"></script>
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
			$fname = $lname = $mail = $gender = $state = $hobbies = "";
			$fnameError = $lnameError = $mailError = $genderError = "";
			if ($_SERVER['REQUEST_METHOD']=="POST"){
				if(empty($_POST['fname'])){
					$fnameError = "First name can't be empty!";
				}
				else {
					$fname = test_input($_POST['fname']);
				}
				if(empty($_POST['lname'])){
					$lnameError = "Last name can't be empty!";
				}
				else {
					$lname = test_input($_POST['lname']);
				}
				if(empty($_POST['mail'])){
					$mailError = "Email can't be empty!";
				}
				else {
					$mail = test_input($_POST['mail']);
					if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
						$mailError = "Email format not correct";
					}
				}
				if (empty($_POST["gender"])) {
					$genderError = "Gender required!";
				} else {
					$gender = test_input($_POST["gender"]);
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
            <div class="row mt-5">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="form border rounded pl-3 pr-3 pb-3 mb-4">
                        <h5 class="bg-light border-bottom  pt-2 pb-2">Registration Form</h5>
                        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                        <div class="form-group">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" name="fname"><span class="error"><?php echo $fnameError ?></span>
                        </div>
                        <div class="form-group">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" name="lname"><span class="error"><?php echo $lnameError ?></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="mail"><span class="error"><?php echo $mailError ?></span>
                        </div>
                        <label class="mr-2" for="gender">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
						<span class="error"><?php echo $genderError ?></span>
                        <div class="form-group">
                            <label for="inputState">State</label>
                            <select name="state" class="form-control">
                                <option selected>Choose...</option>
                                <option value="1">Johor</option>
                                <option value="2">Massachusetts</option>
                                <option value="3">Washington</option>
                            </select>
                        </div>
                        <label class="mr-2" for="Hobbies">Hobbies</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="1">
                            <label class="form-check-label" for="hobbies">Badminton</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="2">
                            <label class="form-check-label" for="hobbies">Football</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="3">
                            <label class="form-check-label" for="hobbies">Bicycle</label>
                        </div><br><br>
                        <input type="submit" name="saverecord" class="btn btn-primary" value="Save record">
                        <input type="reset" name="reset" class="btn btn-dark text-light" value="Reset">
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="container border rounded">
                        <h5 class="border-bottom pb-2 pt-2 bg-light">Featured</h5>
                        <h5>Special title treatment</h5>
                        <p>With supporting text below as a natural lead-in to additional content.</p>
                        <button class="btn btn-primary mb-3">Go somewhere</button>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-12 col-md-8 col-lg-8">
					<?php
						if (isset($_POST['saverecord'])){
							$gender = $_POST['gender'];
							if ($gender == 0) {
								$gender = "Male";
							}
							else {
								$gender = "Female";
							}
							$state = $_POST['state'];
							if ($state == 1) {
								$state = "Johor";
							}
							else if ($state == 2) {
								$state = "Massachusetts";
							}
							else {
								$state = "Washington";
							}
							$checkboxArr = $_POST['hobbies'];
							foreach ($checkboxArr as $values) {
								if ($values == 1) {
									$values = 'Badminton';
								} else if ($values == 2) {
									$values = 'Football';
								} else {
									$values = 'Bicycle';
								}
							}
							echo '<p class="text-success">Register Successfully!</p>'."<br>";
							echo 'Your information below'."<br>";
							echo "Fist name: ". $fname ."<br>";
							echo "Last name: ".$lname."<br>";
							echo "Email: ".$mail ."<br>";
							echo "Gender: ".$gender ."<br>";
							echo "State: ".$state ."<br>";
							echo "Hobbies: ".$values."<br>";
						}
						?>
				</div>
			</div>
        </div>
    </body>
</html>