@extends('layout')
@section('content')
 <!-- Page Content -->
 <div class="card" style="padding:40px" >
        
              <div class="row">
        
                <!-- Post Content Column -->
                <div class="col-lg-8" style="border:1px solid #e4e4eb; padding:30px; border-radius:3px">
        
                  <!-- Title -->
                  <h1 class="mt-4">{{$post->title}}</h1>
        
                  <!-- Author -->
                  <p class="lead">
                    Muallif:
                    <a href="#">{{$post->user->name}}</a>
                  </p>
        
                  <hr>
        
                  <!-- Date/Time -->
                  <p>Chop etilgan sana: <span style="color:orange">{{$post->created_at->format('d M Y G:i:s') }}</span></p>
        
                  <hr>
        
                  <!-- Preview Image -->
                  <img class="img-fluid rounded" src="{{$post->getImage()}}" style="height:500px" alt="">
        
                  <hr>
        
                  <!-- Post Content -->
                  <p class="lead">{{$post->content}}</p>
         
                  <hr>
        @auth

        <post-comments post-slug="{{$post->slug}}"></post-comments>
      

          {{--  <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
           </div>   --}}
        @else
                <h4 style="text-align:center">Iltimos izox qoldirish uchun saytga <a href="/login">kiring</a></h4>
                <post-comments post-slug="{{$post->slug}}"></post-comments>
        @endauth
              
                  
        
                </div>
        
               @include('layouts._sidebar')
        
              </div>
              <!-- /.row -->
        
            </div>
@endsection