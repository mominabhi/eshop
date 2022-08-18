@include('backend.inc.header')
<div class="auth-wrapper">
	<div class="auth-content container">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="card-body">
						<div class="row">
							<img src="{{ asset('assets/backend/images/logo-1.png') }}" alt="" class="img-fluid mb-4">
							<h3 class="mt-3">E <h3 class="mt-3" style="color:#3289a8"> Shop</h3></h3>
						</div>
						<h6 class="mb-3 f-w-400">Login into your account</h6>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-mail"></i></span>
							</div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-lock"></i></span>
							</div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						
						<div class="form-group text-left mt-2">
							<div class="checkbox checkbox-primary d-inline">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label  class="cr" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
							</div>
						</div>

                        <button type="submit" class="btn btn-primary mb-4">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">{{ __('Reset') }}</a></p>
                        @endif
                        </form>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
					</div>
				</div>
				<div class="col-md-6 d-none d-md-block">
					<img src="{{ asset('assets/backend/images/auth-bg.jpg') }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
@include('backend.inc.footer')