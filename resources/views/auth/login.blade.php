@extends('layout')

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background:rgb(233, 243, 233);  padding:15px 15px; 
                 ">{{ __('LOGIN') }}</div>

                <div class="card-body" style="padding:30px 30px">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Adresingiz') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.075) 
                                " class="shadows form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Parol') }}</label>

                            <div class="col-md-6">
                                <input style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.075) 
                                "  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                    
                        <div class="modal-footer "  >
                                <button type="submit" class="btn btn-primary btn-sm"   >
                                    {{ __('Kirish') }}
                                    <i class="fa fa-sign-in ml-1"></i>
                                </button>

                                <a href="/register"  class="btn btn-primary btn-sm"  >
                                      <span style="text-muted;"> {{ __('Royhatdan otish') }}
                                            <i class="fa fa-address-book ml-1"></i>      
                                    </span> 
                                </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
