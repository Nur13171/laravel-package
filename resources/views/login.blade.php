@extends('first-package::layout')

@section('content')
      <main class="login-form">
        <div class="cotainer mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="{{ route('user.login') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="email"  id="email_address" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>
    
                                <div class="form-group row mt-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>
    
                                <div class="form-group row mt-2">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4 mt-5">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a href="{{ route('user.register') }}" class="btn btn-link text-decoration-none">
                                        register here?
                                    </a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    </main>
@endsection