@extends('layout')

@section('content')
<div class="container"  style="margin-top:50px" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Royhatdan otish') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name"   class="col-md-4 col-form-label text-md-right">{{ __('Ism, Familiyangiz') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.075) 
                                " class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adresingiz') }}</label>

                            <div class="col-md-6">
                                <input id="email" style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.075) 
                                " type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Parol tanlang') }}</label>

                            <div class="col-md-6">
                                <input style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.075) 
                                " id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Parolni qayta kiriting') }}</label>

                            <div class="col-md-6">
                                <input style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.075) 
                                " id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                      
                        <div class="modal-footer " style="background:#f5f8fa;border:1px solid rgb(204, 208, 211);">
                                <button type="submit" class="btn btn-primary btn-sm"   >
                                        {{ __('Royhatdan otish') }}
                                </button>

                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
