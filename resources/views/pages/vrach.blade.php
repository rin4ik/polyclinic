@extends('layout')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                 
          <div class="card-header  " style="background-color:#cce5ff;  border-color:#b8daff">   <h3>Мадалиева Феруза Махамаджановна</h3></div>
          <div class="card-body">
       
          
          <p style="margin-bottom:15px">
          
            <p>2014 йил 26-ноябрдан:</p> <p><strong>Фарғона шахар 5-сонли оилавий поликлиника бош врачи</strong></p> <p><strong>Туғилган йили:&nbsp;</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 05.08.1971&nbsp; &nbsp;</p> <p><strong>Туғилган жойи:</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Фарғона вилояти, Фарғона шаҳри</p> <p><strong>Миллати:&nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ўзбек</p> <p><strong>Партиявийлиги:&nbsp; </strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;партиясиз</p> <p>&nbsp;</p> <p><strong>Маълумоти:&nbsp;</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;олий</p> <p><strong>Тамомлаган:</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1993 й. Андижон давлат тиббиёт институти (кундузги)</p> <p><strong>Маълумоти бўйича мутахассислиги:&nbsp;</strong>&nbsp;даволаш иши</p> <p><strong>Илмий даражаси:</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;йўқ&nbsp;&nbsp;</p> <p><strong>Илмий унвони:</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; йўқ&nbsp; &nbsp;</p> <p>&nbsp;</p> <p><strong>Қайси чет тилларини билади:&nbsp;</strong>&nbsp;&nbsp;рус &nbsp;&nbsp;</p> <p><strong>Давлат мукофотлари билан тақдирланганми (қанақа):</strong>&nbsp;&nbsp;тақдирланмаган&nbsp;&nbsp;&nbsp;</p> <p>&nbsp;</p> <p><strong>Халқ депутатлари республика, вилоят, шаҳар ва туман Кенгаши депутатими ёки бошқа</strong></p> <p><strong>сайланадиган органларнинг аъзосими (тўлиқ кўрсатилиши лозим):&nbsp;</strong></p> <p>Фаргона шахар халқ депутатлари кенгаши депутати&nbsp;&nbsp;&nbsp;</p>
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