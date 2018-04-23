@extends('layout')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                 
          <div class="card-header  " style="background-color:#cce5ff;  border-color:#b8daff">BOSH VRACH BILAN ALOQA</div>
     
                          @auth
                          <div class="card-body">
                                <post-comments post-slug="vrach"></post-comments>
                                
                          </div>
                          
                          @else
                          <div class="text-center mt-4 mb-2">
                                <button class="btn btn-danger">Iltimos xabar qoldirish uchun saytga kiring
                                    <i class="fa fa-sign-in ml-2"></i>
                                </button>
                            </div>
                          @endauth
                </div>
            </div>
        </div>
    </div>
@endsection