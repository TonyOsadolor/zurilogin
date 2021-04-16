<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zuri Registration Page</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-12">
		            <div class="form-div">
		                <form action="registrar.php" method="post" autocomplete="off">
		                    <div class="form-row">
                                <div class="col-12">
                                    <h3><center>Welcome to the Assignment Page</center></h3>
                                    <p><center>Please kindly fill out the Form and Click on SIGN UP</center></p>
                                </div>
		                        <div class="col-12">
		                            <h4 class="label">Surname:</h4>
		                            <input type="text" name="surname" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">First Name:</h4>
		                            <input type="text" name="firstname" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Phone Number:</h4>
		                            <input type="tel" name="phone" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Email:</h4>
		                            <input type="email" name="email" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Username:</h4>
		                            <input type="text" name="username" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Occupation:</h4>
		                            <input type="text" name="occupation" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Password:</h4>
		                            <input type="password" name="password1" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Confirm Password:</h4>
		                            <input type="password" name="password2" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Security Question:</h4>
		                            <select name="squestion" id="squestion" class="form-select" required>
		                                <option value="">Select a Security Question</option>
		                                <option value="q1">How old are you</option>
		                                <option value="q2">Where do you live</option>
		                                <option value="q3">First Crush</option>
		                            </select>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Security Answer:</h4>
		                            <input type="text" name="sanswer" id="sanswer" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <button class="btn btn-primary btn-login" name="submit" type="submit">SIGN UP</button>
		                        </div>
		                        <div class="col-12">
		                            <a href="index.php"><button class="btn btn-danger btn-login" type="button">BACK TO LOGIN</button></a>
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>