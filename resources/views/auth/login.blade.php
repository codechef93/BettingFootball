<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Play9ja - Sign In</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('admin/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/ui/ripple.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/demo_pages/login.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content login-cover">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form wmin-sm-400" method="post">
				{{csrf_field()}}
					<div class="card mb-0">
						<ul class="nav nav-tabs nav-justified alpha-grey mb-0">
							<li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active" data-toggle="tab"><h6 class="my-1">Sign in</h6></a></li>
							<li class="nav-item"><a href="#login-tab2" class="nav-link border-y-0 border-right-0" data-toggle="tab"><h6 class="my-1">Register</h6></a></li>
						</ul>

						<div class="tab-content card-body">
							<div class="tab-pane fade show active" id="login-tab1">
								<div class="text-center mb-3">
									<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Login to your account</h5>
									<span class="d-block text-muted">Your credentials</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="email_1" id="email_1" placeholder="Email Address">
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" name="password_1" id="password_1" placeholder="Password">
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="form-group d-flex align-items-center">
									<div class="form-check mb-0">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>

									<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in</button>
								</div>							
								<div class="form-group text-center text-muted content-divider">
									<span class="px-2">or sign in with</span>
								</div>

								<div class="form-group text-center">
									<button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
									<button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
									<button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
									<button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
								</div>

								
							</div>
							
							<div class="tab-pane fade" id="login-tab2">
								<div class="text-center mb-3">
									<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Create account</h5>
									<span class="d-block text-muted">All fields are required</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
									<div class="form-control-feedback">
										<i class="icon-user-check text-muted"></i>
									</div>
								</div>
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
									<div class="form-control-feedback">
										<i class="icon-user-check text-muted"></i>
									</div>
								</div>
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
									<div class="form-control-feedback">
										<i class="icon-mention text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" name="password" id="password" placeholder="password">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" name="re-pass" id="re-pass" placeholder="Confirm password">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>
								

								

								<button type="submit" class="btn bg-dark btn-block">Register</button>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
