@extends('layout')
@section('content')
     <!-- Page Content -->
     <div class="container" style="background:white;  overflow:hidden">
        <h1 class="mt-4 mb-3">Yangiliklar
             
          </h1>
    
         
      <!-- Card --> 
    @foreach($posts->take(5) as $post) 
       
 
          <!-- Project One -->
          <div id="all" class="row">
            <div class="col-md-7">
              <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="{{$post->getImage()}}" alt="">
              </a>
            </div>
            <div class="col-md-5">
              <h3><a href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">{{$post->title}}</a>
                
            </h3>
            <span    style=" margin:20px 0;color:black ">  Muallif:  <a href=""> {{$post->user->name}}</a></span>
            <span style="color:orange;float:right;  ">{{$post->created_at}}</span>
              <p style="padding-top:20px">{{$post->content}}</p>
              <div class="news-categories" style="float:right">
                    <li><a  href="{{route('category.show',$post->category)}}"><i class="fa fa-angle-right"></i> {{optional($post->category)->title}}</a></li>
            </div> 
              <a class="btn btn-primary" href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">Oqib chiqish 
              </a>
            </div>
          </div>
          <!-- /.row -->
    
          <hr>
       
    @endforeach
    {{$posts->links()}}
    </div>    
    <!-- Card --> 
@endsection