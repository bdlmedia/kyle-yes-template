<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta author="Kyle Wilson">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title> Yes Ladder </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<style type="text/css">

		#second, #third,  #result {
			display: none;
		}


		</style>
		

	</head>

	<body class="bg-dark">

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 bg-light p-4 rounded mt-5"> 
					<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Hello World</h5>
					<div class="progress mb-3" style="height:40px;">
							<div class="progress-bar bg-danger " role="progressbar" style="width:20%;" id="progressBar">
								<b class="lead" id="progressText"> Step - 1 </b>
							</div>
					</div>

					<form action="" method="post" id="form-data">
						<div id="first">

							<h4 class="text-center bg-primary p-1 rounded text-light">Personal Information </h4>
							<div class="form-group">
								<label for="name"> Name </label>
								<input type="text" name="name" class="form-control" placeholder="Full Name">
							</div>

							<div class="form-group">
								<label for="username"> Username </label>
								<input type="text" name="username" class="form-control" placeholder="Username">
							</div>

							<div class="form-group">
								<a href="#" class="btn btn-danger" id="next-1">Next</a>
							</div>



							</div>
					

						<div id="second">
							<h4 class="text-center bg-primary p-1 rounded text-light">Contact Information</h4>

							<div class="form-group">
								<label for="email"> E-Mail </label>
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>

							<div class="form-group">
								<label for="phone"> Phone </label>
								<input type="tel" name="phone" class="form-control" placeholder="Phone">
							</div>

							<div class="form-group">
								<a href="#" class="btn btn-danger" id="prev-2">Previous</a>
								<a href="#" class="btn btn-danger" id="next-2">Next</a>
							</div>


						</div>

						<div id="third">
							<h4 class="text-center bg-primary p-1 rounded text-light">Choose Password</h4>

							<div class="form-group">
								<label for="password"> Password </label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>

							<div class="form-group">
								<label for="confirm_password"> Confirm Password </label>
								<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
							</div>

							<div class="form-group">
								<a href="#" class="btn btn-danger" id="prev-3">Previous</a>
								<input type="submit" value="Submit" id="submit" class="btn btn-success">
							</div>


						</div>





					</form>


				</div>
			</div>
		</div>
	


		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script
		src="http://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(function() {

				$("#next-1").click(function() {
					$("#second").show();
					$("#first").hide();
					$("#progressBar").css("width", "60%");
					$("#progressText").text("Step - 2");

				});

				$("#next-2").click(function() {
					$("#third").show();
					$("#second").hide();
					$("#progressBar").css("width", "100%");
					$("#progressText").text("Step - 3");

				});

				$("#prev-2").click(function() {
					$("#second").hide();
					$("#first").show();
					$("#progressBar").css("width", "20%");
					$("#progressText").text("Step - 1");

				});

				$("#prev-3").click(function() {
					$("#third").hide();
					$("#second").show();
					$("#progressBar").css("width", "60%");
					$("#progressText").text("Step - 2");

				});

				




				


			});

		</script>



	</body>





	</head>