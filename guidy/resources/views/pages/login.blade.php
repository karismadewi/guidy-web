<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap demo</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
		/>
		<script src="layout.js"></script>
	</head>
	<body>
		<!-- Section: Design Block -->
		<form action="./landing" method="post" onSubmit="return ValidasiForm()" name="FormReg">
			<section class="text-center">
				<!-- Background image -->
				<div class="p-5 bg-image" style="background-color: rgb(68, 172, 190); height: 300px"></div>
				<!-- Background image -->

				<div
					class="card mx-4 mx-md-5 shadow-5-strong"
					style="
						margin-top: -100px;
						background: hsla(0, 0%, 100%, 0.8);
						backdrop-filter: blur(30px);
					"
				>
					<div class="card-body py-5 px-md-5">
						<div class="row d-flex justify-content-center">
							<div class="col-lg-8">
								<h2 class="fw-bold mb-5">Sign up to Guidy</h2>
								<form>
									<!-- 2 column grid layout with text inputs for the first and last names -->
									<div class="row">
										<div class="col-md-6 mb-4">
											<div class="form-outline">
												<label class="form-label" for="fname">First name</label>
												<input type="text" id="fname" class="form-control" />
												<small style="color: red" id="err_fname"></small>
											</div>
										</div>
										<div class="col-md-6 mb-4">
											<div class="form-outline">
												<label class="form-label" for="lname">Last name</label>
												<input type="text" id="lname" class="form-control" />
												<small style="color: red" id="err_lname"></small>
											</div>
										</div>
									</div>

									<!-- Email input -->
									<div class="form-outline mb-4">
										<label class="form-label" for="email">Email address</label>
										<input type="email" id="email" class="form-control" />
										<small style="color: red" id="err_email"></small>
									</div>

									<!-- Password input -->
									<div class="form-outline mb-4">
										<label class="form-label" for="pass">Password</label>
										<input type="password" id="pass" class="form-control" />
										<small style="color: red" id="err_pass"></small>
									</div>

									<!-- Checkbox -->
									<!-- <div class="form-check d-flex justify-content-center mb-4">
										<input
											class="form-check-input me-2"
											type="checkbox"
											value=""
											id="form2Example33"
											checked
										/>
										<label class="form-check-label" for="form2Example33">
											Subscribe to our newsletter
										</label>
									</div> -->

									<!-- Submit button -->
									<a href="./landing"
										><button type="submit" class="btn btn-primary btn-block mb-4">
											Sign up
										</button></a
									>

									<!-- Register buttons -->
									<!-- <div class="text-center">
										<p>or sign up with:</p>
										<button type="button" class="btn btn-link btn-floating mx-1">
											<i class="fab fa-facebook-f"></i>
										</button>

										<button type="button" class="btn btn-link btn-floating mx-1">
											<i class="fab fa-google"></i>
										</button>

										<button type="button" class="btn btn-link btn-floating mx-1">
											<i class="fab fa-twitter"></i>
										</button>

										<button type="button" class="btn btn-link btn-floating mx-1">
											<i class="fab fa-github"></i>
										</button>
									</div> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>
		<!-- Section: Design Block -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
			crossorigin="anonymous"
		></script>
	</body>
</html>
