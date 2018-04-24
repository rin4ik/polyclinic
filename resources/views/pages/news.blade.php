@extends('layout')
@section('content')
     <!-- Page Content -->
     <div class="card news"  style="padding:30px 30px;">
        <h1 class="mt-4 mb-3">
           
            
            
       @if(\Route::current()->getName() == 'category.show') 
      {{ucfirst(request()->route('slug'))}} 
        @else   
         Yangiliklar
             @endif
          </h1>
    
         
      <!-- Card --> 
    @forelse($posts->take(5) as $post) 
       
 
          <!-- Project One -->
          <div id="all" class="row">
            <div class="col-md-7">
              <a href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">
                <img style="height:450px" class="img-fluid rounded mb-3 mb-md-0" src="{{$post->getImage()}}" alt="">
              </a>
            </div>
            <div class="col-md-5">
              <h3><a href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">{{$post->title}}</a>
                
            </h3>
            <span    style=" margin:20px 0;color:grey ">  Muallif:  <span style="color:#3a3939"> {{$post->user->name}}</span></span>
            <span style="color:orange;float:right;  ">{{$post->created_at}}</span>
              <p style="padding-top:20px">{!! str_limit($post->content,545) !!}</p>
              <div class="news-categories" style="float:right">
                    <li><a  href="{{route('category.show',['category'=>$post->category->slug])}}"><i class="fa fa-angle-right"></i> {{optional($post->category)->title}}</a></li>
            </div> 
              <a class="btn btn-primary" href="{{route('post.show',['category'=>$post->category->slug,'post'=>$post])}}">Oqib chiqish 
              </a>
            </div>
          </div>
          <!-- /.row -->
    
          @if (!$loop->last)
          <hr>
          @else
          <span style="margin-bottom:20px;"></span>
           @endif
     @empty
     <h2>Hozircha bolimda yangiliklar yoq</h2>  
    @endforelse
    {{$posts->links()}}
    </div>    
    <!-- Card --> 
@endsection