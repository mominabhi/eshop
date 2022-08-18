<?php echo $__env->make('backend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="card-body">
						<img src="../assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Login into your account</h4>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-mail"></i></span>
							</div>
							<input type="email" class="form-control" placeholder="Email address">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-lock"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						
						<div class="form-group text-left mt-2">
							<div class="checkbox checkbox-primary d-inline">
								<input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
								<label for="checkbox-fill-a1" class="cr"> Save credentials</label>
							</div>
						</div>
						<button class="btn btn-primary mb-4">Login</button>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
					</div>
				</div>
				<div class="col-md-6 d-none d-md-block">
					<img src="../assets/images/auth-bg.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $__env->make('backend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dynamic_shop\resources\views/demo_login.blade.php ENDPATH**/ ?>