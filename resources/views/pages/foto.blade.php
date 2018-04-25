@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:rgb(209, 225, 201)">Rasmlar</div>

                <div class="card-body" >
                        @foreach($post as $img)
                        <a href="{{asset('uploads/'.$img)}}" data-gallery="example-gallery" data-type="image" data-toggle="lightbox">

                            <img style="height:220px; weight:220px" src="{{asset('uploads/'.$img)}}" alt=""> 
                        </a>
                          
                        @endforeach 
                     
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection