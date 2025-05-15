@extends('auth.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="bg-white shadow-lg col-md-6 offset-md-3 col-12 mt-100 p-5">
                <div class="rounded10 ">
                    <div class="content-top-agile p-20 pb-0">
                        <a href="/"><img width="100" src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }}">
                        </a>
                        <br>
                        <h4 class="text-primary">{{ $title }}</h4>
                        <p class="mb-0">Please enter login credentials</p>
                    </div>
                    <div class="p-40">
                        @if (session('status'))
                            <p class="text-success"> {{ session('status') }}</p>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" placeholder="Enter account email"
                                        class="form-control ps-15 bg-transparent" name="email" value="{{ old('email') }}"
                                        autocomplete="email">
                                </div>
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text  bg-transparent">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </span>
                                    <input type="password" placeholder="Enter account password"
                                        class="form-control ps-15 bg-transparent" name="password"
                                        autocomplete="current-password">
                                </div>
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <label for="remember_me">Remember Me</label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                
                                </div>
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
