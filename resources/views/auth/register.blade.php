@include('backend.inc.header')
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="card">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="row">
							<img src="{{ asset('assets/backend/images/logo-1.png') }}" alt="" class="img-fluid mb-4">
							<h5 class="mt-4">Dynamic <h5 class="mt-4" style="color:#3289a8"> Shop</h5></h5>
						</div>
                        <h5 class="mb-3 f-w-400">Sign up into your account</h5>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email address">

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
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">

                            </div>
                            <button type="submit" class="btn btn-primary mb-4">
                                {{ __('Register') }}
                            </button>
                        </form>

                        <p class="mb-2">Already have an account? <a href="{{ route('login') }}" class="f-w-400">Log in</a>
                        </p>
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
