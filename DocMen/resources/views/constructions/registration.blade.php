<!DOCTYPE html>
<html>
    <title>Doctore In Leave</title>
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

    <div class="leave">
        <div class="leave-bg">
        
        </div>
        <div class="leave-body">
            <div class="leave-body-left">
                <img src="images/galib1.png" alt="Galib" width="" height="">
            </div>
			
            <div class="leave-body-right">
                <div class="reg-body">
					<img src="images/DocMenLogo.png" alt="DocMen Logo" width="" height="">
					 
						<div class="reg-parents">
							<div class="reg-form">
								<h5>Register yourself with nessery information!</h5>

								<!--Display error-->
								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

								<form action="{{ route('registration')}}" method="post">
									@csrf
									<label for="fname">First Name : &nbsp;</label>
									<input type="text" id="fname" class="reg-form-input" name="fname" value="" placeholder="Your First Name" required>
									<br>
									<label for="lname">Last Name : &nbsp;</label>
									<input type="text" id="lname" class="reg-form-input" name="lname" value="" placeholder="Your Last Name">
									<br>
									<label for="lname">Your Email : &nbsp;</label>
									<input type="email" id="lname" class="reg-form-input" name="email" value="" placeholder="Your Email Address" required>
									<br>
									<label for="lname">Password : &nbsp;&nbsp;&nbsp;</label>
									<input type="password" id="lname" class="reg-form-input" name="password" value="" placeholder="Your Password" required>
									<br>
									<label for="lname">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
									<input type="text" id="lname" class="reg-form-input" name="phone" value="" placeholder="Your Phone Number">
									<br>
									<input type="submit" value="Register Now" class="reg-btn">
									<br/><br/><br/><br/>
									<p id="login-driver">Already registered? Click on <a href="#">Login</a></p>
								</form> 
							</div>
						</div>
					<h4>copyright &copy; 2020 all rights reserved by <a href="#">DocMen</a>&nbsp;</h4>
				</div>
            </div>
        </div>
    </div>

</body>
</html>