@extends('layout')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                 
          <div class="card-header  " style="background-color:#cce5ff;  border-color:#b8daff">   <h3>Мадалиева Феруза Махамаджановна</h3></div>
          <div class="card-body">
       
          
          <p style="margin-bottom:15px">
          
            <p>2014 йил 26-ноябрдан: <strong>Фарғона шахар 5-сонли оилавий поликлиника бош врачи</strong></p>
            
            <p><strong>Туғилган йили: </strong>05.08.1971</p>
            <p><strong>Телефон: </strong>244-99-13</p>
            
            <p><strong>Туғилган жойи:</strong> Фарғона вилояти, Фарғона шаҳри</p>
            
            <p><strong>Миллати: </strong>ўзбек</p>
            
            <p><strong>Партиявийлиги: </strong>партиясиз</p>
            
            <p><strong>Маълумоти: </strong>олий</p>
            
            <p><strong>Тамомлаган: </strong>1993 й. Андижон давлат тиббиёт институти (кундузги)</p>
            
            <p><strong>Маълумоти бўйича мутахассислиги: </strong>даволаш иши</p>
            
            <p><strong>Илмий даражаси: </strong>йўқ </p>
            
            <p><strong>Илмий унвони: </strong>йўқ   </p>
            
            <p><strong>Қайси чет тилларини билади: </strong>рус  </p>
            
            <p><strong>Давлат мукофотлари билан тақдирланганми (қанақа):</strong> тақдирланмаган </p>
            
            <p><strong>Халқ депутатлари республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа</strong></p>
            
            <p><strong>сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим): </strong>Фаргона шахар халқ депутатлари кенгаши депутати </p>
          </p>
                          @auth
                        
                                <post-comments post-slug="vrach"></post-comments>
                                
                          
                          
                          @else
                          <div class="text-center mt-4 mb-2">
                                <button class="btn btn-danger">Iltimos xabar qoldirish uchun saytga kiring
                                    <i class="fa fa-sign-in ml-2"></i>
                                </button>
                            </div>
                          @endauth
                        </div>     
                </div>
            </div>
        </div>
    </div>
@endsection