<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12  ">
					<form action="" class="form-control" method="POST">
						<h3 class="text-center">Operator</h3>
						<div class="form-group mt-3">
							<input class="form-control" type="number" name="a" placeholder="Insert number">
						</div>
						<div class="form-group mt-3 mb-3">
							<input class="form-control" type="number" name="b"  placeholder="Insert number">
						</div>
						<div class="text-center">
						<input type="submit" class="btn btn-success col-2 m-2" value="a + b" name="btn">
						<input type="submit" class="btn btn-info col-2 m-2" value="a - b" name="btn">
						<input type="submit" class="btn btn-danger col-2 m-2" value="a * b" name="btn">
						<input type="submit" class="btn btn-warning col-2 m-2" value="a / b" name="btn">
						</div>
					</form>
					<?php
						function calculator($calculator, $a, $b){
							if($calculator =='a + b'){
								return $a+$b;
							}else if($calculator =='a - b'){
								return $a-$b;
							}else if($calculator =='a * b') {
								return $a*$b;
							}else if($calculator =='a / b'){
								if ($b!=0){
									return $a/$b;}
								}else{
								echo ' It cannot divide for 0';}
						}

						if(isset($_POST["btn"])) {
							$a = $_POST['a'];
							$b = $_POST['b'];
							$calculator = $_POST['btn'];
							if ($calculator == 'a + b') {
								$result = calculator($calculator, $a, $b);
								echo 'Addittion result: ' . $result;
							} elseif ($calculator == 'a - b') {
								$result = calculator($calculator, $a, $b);
								echo 'Subtraction result ' . $result;
							} elseif ($calculator == 'a * b') {
								$result = calculator($calculator, $a, $b);
								echo 'Mutiplication reult: ' . $result;
							} elseif ($calculator == 'a / b') {
								$result = calculator($calculator, $a, $b);
								echo 'Division result: ' . $result;
							}
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>