@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:rgb(204, 229, 255)"><h3>Rasmlar</h3></div>

                <div class="card-body" >
                        @foreach($photos as $img) 
                        <a href="{{$img->getImage()}}" data-gallery="example-gallery" data-type="image"  data-toggle="lightbox" data-title="{{$img->title}}" >

                            <img style="height:240px; width:352px ; padding:2px" src="{{$img->getImage()}}" class="img-fluid" alt=""> 
                        </a>
                          
                        @endforeach 
                     
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection