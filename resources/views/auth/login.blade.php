@extends('layouts.app')

@section('content')
<body>

        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/login" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TODO</h3>
                            </a>
                            <h3>Log In</h3>
                        </div>

                        <form method="POST" action="/login">
                            @csrf
                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                            <label for="email">Email address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            <label for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                               
                            </div>
                            <a href="#">Forgot Password</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">
                            {{ __('Login') }}
                        </button>
                        <p class="text-center mb-0">Don't have an Account? <a href='/register'>Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>

</html>

