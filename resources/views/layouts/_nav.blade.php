       <!-- HEADER -->
       <header  style="background:white; margin-right:0;    border-bottom: 2px solid #f2f2f2; " >
        <div style="padding:0 20px">
            <div class="row">

                <div class="col-md-4 col-sm-5">
                    <p class="text-uppercase" style="color:#266b85">Assalomu Aleykum! Saytimizga xush kelibsiz.</p>
                </div>

                <div class="col-md-8 col-sm-7   text-align-right">
                    <span class="phone-icon">
                        <i class="fa fa-phone"></i> 2263708, 2261897</span>
                    <span class="date-icon">
                        <i class="fa fa-calendar-plus-o"></i>08:00 - 19:00</span>
                    <span class="email-icon">
                        <i class="fa fa-envelope-o"></i>
                        <a href="#">poliklinika@company.com</a>
                    </span>
                    <span class="address-icon">
                        <i class="fa fa-address-card-o"></i>"А.Навоий" кўчаси, №56 уй</span>
                </div>

            </div>
        </div>
    </header>
   <img src="{{asset('images/logo.jpg')}}" style="width:100%; height:210px; " alt="">
     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark special-color-dark lighten-1" style="padding: 5px 12px">
            <div class="container">
                    <a style="margin-left:-20px" class="navbar-brand" href="/"><img src="{{asset('images/logo11.png')}}" alt=""  ></a>
                    
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto navit"   >
                            <li class="nav-item" >
                                    <a class="nav-link" href="/xodimlar">XODIMLAR</a>
                                </li >
                                <li  class="nav-item">
                                    <a class="nav-link" href="services.html">FOTO</a>
                                </li>
                                <li  class="nav-item btn-group">
                                            <span class="nav-link dropdown-toggle"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">KATEGORIYALAR</span>
                                                <div class="dropdown-menu">
                                                   @foreach($categories as $category)
                                                    <a class="dropdown-item"   href="{{route('category.show',$category)}}">{{$category->title}}</a>
                                                    @endforeach
                                                  
                                                </div> 
                                </li>
                                
                                <li  class="nav-item">
                                    <a class="nav-link" href="contact.html">MAHALLA</a>
                                </li>
                                <li  class="nav-item">
                                    <a class="nav-link" href="{{route('vrach')}}">BOSH VRACH</a>
                                </li>
                                <li  class="nav-item">
                                    <a class="nav-link" href="contact.html">ALOQA</a>
                                </li>
                            </ul>
                                <ul class="navbar-nav ml-auto navit">
                                        @guest
                                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('KIRISH') }}</a></li>
                                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('ROYHATDAN OTISH') }}</a></li>
                                    @else
                                
                                <li class="nav-item dropdown">
                
                                    <a id="navbarDropdown" class="text-uppercase nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </a>
                
                                    <div class="dropdown-menu" style="padding:0" aria-labelledby="navbarDropdown">
                                      
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Chiqish') }}
                                        </a>
                
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                        </ul>
                   
                </div>
            </div>
        </nav>
    