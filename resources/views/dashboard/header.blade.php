<!DOCTYPE html>
<html>
<head>
	<title>Student Feedback System</title>

	<link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/bootstrap.min.css')}}">

	<script type="text/javascript" src="{{asset('resources/assets/js/jquery-3.3.1.slim.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('resources/assets/js/popper.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('resources/assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="{{route('index')}}">Online Feedback System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{route('index')}}">Home</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('about')}}">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Login
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Admin</a>
							<a class="dropdown-item" href="">Student</a>
							<a class="dropdown-item" href="#">Faculty</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Registration
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Admin</a>
							<a class="dropdown-item" href="{{route('register')}}">Student</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('contact')}}">Contact</a>
					</li>
				</ul>
			</div>
		</nav>