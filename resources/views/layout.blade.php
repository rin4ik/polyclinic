<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">
        <title>5 Oilaviy Poliklinika</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color:rgb(251, 251, 252);
                color: #636b6f;
          
                margin: 0;
                padding:0;
            }
            [v-cloak] {
                display: none;
              }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    

    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
             
        <div id="app">
      
                
       @include('layouts._nav')
       
       @yield('content')
        
        @include('layouts._footer')
        <flash levels="{{session('level','success')}}" message="{{session('flash')}}"></flash>
        <div v-cloak >
                @include('modals.all')
               
        </div> 
        </div>
          <!-- Bootstrap core JavaScript --> 
            <script src="{{asset('js/app.js')}}"></script> 
     <!-- JQuery -->
 
        </body>
        
        </html>