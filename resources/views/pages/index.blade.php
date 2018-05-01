@extends('layout') 

@section('content')
@include('layouts._header')
     <!-- Page Content -->
     <div class=" card clearfix shadow news" style="padding:30px 30px;">
        <h1 class="mt-4 mb-3">So'ngi Yangiliklar
             
          </h1>
    
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/yangiliklar">Barcha Yangiliklar</a>
            </li> 
          </ol>
      <!-- Card --> 
    @forelse($posts->take(5) as $post) 
       
 
          <!-- Project One -->
          <div id="all" class="row">
            <div class="col-md-7">
              <a href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">
                <img style="height:450px; "  class="img-fluid rounded mb-3 mb-md-0" src="{{$post->getImage()}}" alt="">
              </a>
            </div>
            <div class="col-md-5">
              <h3><a href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">{{$post->title}}</a>
                
            </h3>
            <span    style=" margin:20px 0;color:grey ">  Muallif:  <span style="color:#3a3939"> {{$post->user->name}}</span></span>
            <span style="color:orange;float:right;  ">{{$post->created_at}}</span>
              <p style="padding-top:20px">{!! str_limit($post->content,545) !!}</p>
              <div class="news-categories" style="float:right">
                    <li><a  href="{{route('category.show',$post->category)}}"><i class="fa fa-angle-right"></i> {{optional($post->category)->title}}</a></li>
            </div> 
              <a class="btn btn-primary" href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">Oqib chiqish 
              </a>
            </div>
          </div>
          <!-- /.row -->
          @if (!$loop->last)
          <hr>
       
      @endif
         
       @empty
       <h2>Hozircha yangiliklar yo'q</h2>
    @endforelse
    
    </div>    
    <!-- Card --> 
@endsection