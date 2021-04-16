<?php

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Zuri Login Page</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-12">
		            <div class="login-form">
		                <form action="loginhandler.php" method="post" autocomplete="off">
		                    <div class="form-row">
                                <div class="col-12">
                                    <h4><center>Please Login to Proceed to Your Dashboard</center></h4>
                                </div>
		                        <div class="col-12">
		                            <h4 class="label">Username:</h4>
		                            <input type="text" name="username" class="form-control" required autofocus>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Password:</h4>
		                            <input type="password" name="password" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <button class="btn btn-success btn-login" name="login" type="submit">LOGIN</button>
		                        </div>
		                        <div class="row">
		                            <div class="col-6"><a href="register.php"><button class="btn btn-info btn-login" type="button">REGISTER</button></a></div>
		                            <div class="col-6"><button class="btn btn-warning btn-login"  data-bs-toggle="modal" data-bs-target="#reset" type="button">REST PASSWORD</button></div>
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		
		<div class="modal fade" id="reset" tabindex="-1">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-body">
		                <div class="container">
		                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">
                                <div class="form-group col-12">
                                    <span><center><b>Username:</b></center></span>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group col-12">
                                    <span><center><b>Phone:</b></center></span>
                                    <input type="tel" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group col-12">
                                    <span><center><b>Security Question:</b></center></span>
                                    <select name="squestion" id="squestion" class="form-select" required>
		                                <option value="">Select a Security Question</option>
		                                <option value="q1">How old are you</option>
		                                <option value="q2">Where do you live</option>
		                                <option value="q3">First Crush</option>
		                            </select>
                                </div>
                                <div class="form-group col-12">
		                            <span><center><b>Security Question:</b></center></span>
		                            <input type="text" name="sanswer" id="sanswer" class="form-control" required>
		                        </div>
		                        <div class="form-group col-12">
		                            <span><center><b>Password:</b></center></span>
		                            <input type="password" name="password1" class="form-control" required>
		                        </div>
		                        <div class="form-group col-12">
		                            <span><center><b>Confirm Password:</b></center></span>
		                            <input type="password" name="password2" class="form-control" required>
		                        </div>
		                        <br>
		                        <div class="col-12">
		                            <button class="btn btn-primary login-btn col-12 form-control" name="reset" id="reset" type="submit">RESET PASSWORD</button>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>




<?php

if(isset($_POST["reset"])){
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $squestion = $_POST["squestion"];
    $sanswer = $_POST["sanswer"];
    $password = $_POST["password1"];
    $password2 = $_POST["password2"];
    
    //Check for User Exists
    if(file_exists('database/'. $username . ".json")){
        
        //$user = file_get_contents('database/'. $username . ".json", "r");
        $user = file_get_contents('database/'. $username . ".json", "r+");
        
        $userData = json_decode($user);
        $newpassword = $password;
        $oldsquestion = $userData->squestion;
        $oldsanswer = $userData->sanswer;
        $oldphone = $userData->phone;
        $oldpassword = $userData->password;
        
        
        //Checking for Matching Data
        if($phone == $oldphone && $squestion == $oldsquestion && $sanswer == $oldsanswer){
            
            //Writing new data to database
            $addnewpw = (str_replace($oldpassword, $newpassword, $user,$i));
            file_put_contents('database/'. $username . ".json", $addnewpw);
            
            echo "<br> <h3><center><b>SUCCESS!</b> Password Updated Successfully</center></h3>";
            echo "<script>alert('SUCCESS! Password Updated Successfully')</script>";
            
        }else {
            echo "<br> <h3><center><b>ERROR!</b> Password was not Updated <br> Security Credentials does not match Records in our Database</center></h3>";
            echo "<script>alert('ERROR! Password was not Updated Security Credentials does not match Records in our Database')</script>";
        }
    } else {
        //Redirecting to Login Page, if the Password is Wrong
        echo "<script>alert('Sorry, User: $username Not Found on our Database')</script>";
            
        return false;
    }
}
?>