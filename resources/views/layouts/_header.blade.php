<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade " style="width:1350px;margin:0 auto; box-shadow:5px 5px 5px #c8ccce;  "  data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li> 
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner"  role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <img style="height:450px"  class="d-block w-100" src="{{asset('images/1.jpg')}}" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img style="height:450px"  class="d-block w-100" src="{{asset('images/2.jpg')}}" alt="Second slide">
            </div>
            <!--/Second slide-->
          
            <!--/Third slide-->
            <div class="carousel-item">
                    <img style="height:450px" class="d-block w-100" src="{{asset('images/pol5.jpg')}}" alt="Fourth slide">
                </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->