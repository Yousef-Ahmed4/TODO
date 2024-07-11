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
                            <h3>Register</h3>
                        </div>
                        <form method="POST" action="/register">
                            @csrf
    
                            <div class="form-floating mb-3">
                               
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                                    <label for="name" >{{ __('Name') }}</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
    
                            <div class="form-floating mb-3">
                                
    
                               
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
                                    <label for="email" >{{ __('Email Address') }}</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
    
                            <div class="form-floating mb-3">
                               
    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="password">
                                    <label for="password" >{{ __('Password') }}</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                            <div class="row mb-0">
                                
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">
                                        {{ __('Register') }}
                                    </button>
                                
                            </div>

                        </form>
                       

                        <p class="text-center mb-0">Already have an Account? <a href={{ route('login') }}>Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>


</body>

</html>

