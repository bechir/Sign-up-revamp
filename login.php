<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap&text=dribbble" rel="stylesheet">

    <title>Sign in to Dribbble</title>
  </head>
  <body>
  	<div class="warpper py-5 px-sm-5">
  		<div class="card shadow-lg mb-5 mt-4 mx-sm-3 border-0">
	  		<div class="row h-100">
	  			<div class="col-sm-4">
	  				<div class="left rounded-left h-100 d-flex justify-content-between flex-column align-items-center">
	  					<div class="top mx-4 mt-4">
	  						<p class="dribbble">dribbble</p>
		  					<h2 class="discover">Discover the world's top Designers & Creatives.</h2>
	  					</div>
	  					<div class="bottom">
	  						<img class="rounded img" src="art.png">
	  						<p class="ml-4 mt-3 small copy">Art by <a href="">Peter Tarka</a> </p>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="col-sm-8">
	  				<div class="row mx-0 pr-3">
	  					<p class="w-100 mt-3 text-right small">Not a member? <a href="index.php">Sign up</a></p>
	  				</div>
	  				<div class="row mx-0">
	  					<div class="form mx-auto px-3">
	  						<h1>Sign in to Dribbble</h1>
	  						<div class="btn-group d-flex">
		  						<a href="" class="btn btn-primary px-4 rounded mr-1">
		  							<i class="fab fa-google mr-4"></i>
		  							Sign in with Google
		  						</a>
	  							<a href="" class="btn social-btn mx-1">
	  								<i class="fab fa-twitter"></i>
	  							</a>
	  							<a href="" class="btn social-btn ml-1">
	  								<i class="fab fa-facebook-square"></i>
	  							</a>
	  						</div>

	  						<div class="divider my-3 d-flex flex-row justify-content-between align-items-center">
	  							<div class="border-bottom flex-grow-1"></div>
	  							<div class="mx-3 text-muted">Or</div>
	  							<div class="border-bottom flex-grow-1"></div>
	  						</div>
	  						<form method="POST">
	  							<div class="row">
								    <div class="col">
								    	<label>Username or email address</label>
								    	<input type="text" name="username" class="form-control">
								    </div>
								</div>
	  							<div class="row mt-3">
								    <div class="col">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
								    </div>
								</div>
								<div class="custom-control custom-checkbox mt-3">
								    <input type="checkbox" class="custom-control-input" id="customControlValidation1">
								    <label class="cusor-pointer pt-1 text-muted small custom-control-label" for="customControlValidation1">
								    Remember me</label>
								</div>
								<button type="submit" class="btn mt-3 btn-submit">Sign in</button>

								<div class="mt-5">
									<p class="py-2 small text-muted">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>
								</div>
							</form>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>