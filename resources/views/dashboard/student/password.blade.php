@include('dashboard.student.header')

<div class="page-wrapper">
	<div class="page-content--bge5">
		<div class="container">
			<div class="login-wrap">
				<div class="login-content">
					<div class="login-logo">
						<div class="h3 text-danger">Update Password</div>
					</div>
					<div class="login-form">
						<form action="" method="post">
							<div class="form-group">
								<label>Old Password</label>
								<input class="au-input au-input--full" type="password" name="oldpwd">
							</div>
							<div class="form-group">
								<label>New Password</label>
								<input class="au-input au-input--full" type="password" name="newpwd">
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input class="au-input au-input--full" type="password" name="conpwd">
							</div>
							<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('dashboard.student.footer')]