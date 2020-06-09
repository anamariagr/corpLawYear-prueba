@extends('layout')
@section('title','Abogados')

@section("content")
<div class="container">
    <div class="section_lawyears">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-2 items_descrition_view">
                        <p>
                            Inicio
                        </p>
                        <div>
                            <span class="glyphicon">
                                
                            </span>
                        </div>
                        <p>
                            Abogados
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-8 title_view_lawyears">
                        Nuestro equipo de especialistas
                        <div class="col-2 line_red_slide ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
   @foreach($lawyers as $item)
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="row  b_buttom">
                <div class="col-5" style="background-image: url({{$item->image}}); backgroun-repeatno-repeat;background-size: 100%;">
                </div>
                <div class="col-7">
                    <div class="row space_item_lawyear">
                        <div class="col-12 space_name_lawyear">
                            <h4 class="pl-5 ml-5 robot_font">
                               {{$item->name}}

                            </h4>
                            <p class="pl-5 ml-5">
                                 {{$item->position}}
                            </p>
                            <p class="pl-5 ml-5">
                               {{$item->description}}
                            </p>
                           <div class="lawyer_contact">
                               <img class="mail_icon" src="{{asset('img/IconMail.png')}}"> <p>{{$item->mail}}</p>
                                <img class="phone_icon" src="{{asset('img/IconPhone.png')}}"> <p>{{$item->number}}</p>
                           </div>
                        </div>

                        <div class="col-12 space_expirent_lawyear">
                            <h5 class="pl-5 ml-5 robot_font">
                                Experiencia
                            </h5>
                            <p class="pl-5 ml-5">
                                {{$item->expiriance}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
