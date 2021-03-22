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
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8 col-md-5 col-lg-4 mx-auto mt-5 border border-info rounded">
					<h4 class="col-12 text-center text-info m-2">Sign In</h4>
					<form class="p-3" action="#" method="POST">
						<input class="form-control" type="text" name="username" placeholder="Username"><br>
						<input class="form-control" type="password" name="password" placeholder="Password"><br>
						<input class="btn btn-outline-info col-12" type="submit" name="btn" value="Login">
					</form>
                   	<?php
						if (isset($_POST['btn'])) {
							$username = isset($_POST['username']) ? $_POST['username'] : '';
							$password = isset($_POST['password']) ? $_POST['password'] : '';
							if (!$username || !$password) {
								echo '<p class="text-danger">Bạn chưa nhập đủ thông tin!</p>';
							}
							else if ($username == 'admin' && $password == 'admin'){
								echo '<p class="text-success">Đăng nhập thành công!</p>';
								echo 'Tên người dùng:'.' '.$username;
							}
							else{
								echo '<p class="text-danger">Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại</p>';
							}
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>