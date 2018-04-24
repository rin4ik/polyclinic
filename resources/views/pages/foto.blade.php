@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:rgb(209, 225, 201)">Fotolar</div>

                <div class="card-body" >
                        @foreach($post as $img)
                            <img style="height:200px; weight:200px" src="{{asset('uploads/'.$img)}}" alt=""> 
                        @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection