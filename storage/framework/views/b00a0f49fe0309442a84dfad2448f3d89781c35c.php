<?php echo $__env->make('backend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="card-body">
						<div class="row">
							<img src="<?php echo e(asset('assets/backend/images/logo-1.png')); ?>" alt="" class="img-fluid mb-4">
							<h5 class="mt-4">Dynamic <h5 class="mt-4" style="color:#3289a8"> Shop</h5></h5>
						</div>
						<h6 class="mb-3 f-w-400">Login into your account</h6>

                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-mail"></i></span>
							</div>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email address">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-lock"></i></span>
							</div>
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						
						<div class="form-group text-left mt-2">
							<div class="checkbox checkbox-primary d-inline">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label  class="cr" for="remember">
                                    <?php echo e(__('Remember Me')); ?>

                                </label>
							</div>
						</div>

                        <button type="submit" class="btn btn-primary mb-4">
                            <?php echo e(__('Login')); ?>

                        </button>

                        <?php if(Route::has('password.request')): ?>
                        <p class="mb-2 text-muted">Forgot password? <a href="<?php echo e(route('password.request')); ?>" class="f-w-400"><?php echo e(__('Reset')); ?></a></p>
                        <?php endif; ?>
                        </form>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="<?php echo e(route('register')); ?>" class="f-w-400">Signup</a></p>
					</div>
				</div>
				<div class="col-md-6 d-none d-md-block">
					<img src="<?php echo e(asset('assets/backend/images/auth-bg.jpg')); ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $__env->make('backend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dynamic_shop\resources\views/auth/login.blade.php ENDPATH**/ ?>