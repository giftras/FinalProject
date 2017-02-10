<?php include("header.php") ?>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="login-border">
						<h1 class="text-center">Sign In</h1>

						<!-- Form -->
						<form action="loginAction.php" method="POST">
							<strong>Username</strong>
							<input type="text" class="form-control" placeholder="Enter username.." name="username" maxlength="15"/>
							<br/>	
							<strong>Password</strong> 
							<input type="password" class="form-control" placeholder="Enter password.." name="password" />
							<a href="XXX">Forgot password?</a>
							<br/><br/>
							<button type="submit" class="btn btn-primary btn-md btn-block">Login</button>
						</form>	

						<!-- Registration -->
						<hr/>
						<a href="registration.php" class="btn btn-default btn-md btn-block" role="button">Sign Up</a>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
<?php include("footer.php") ?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>