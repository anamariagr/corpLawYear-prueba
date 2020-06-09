@extends('layout')
@section('title','Services')
@section("content")
<div class="container_fluid">
    <div class="row section_header_sevices">
        <div class="col-6">
            <div class="row position_text_sevices">
                <div class="col-12 d-lg-flex pl-0">
                    <p>
                        Servicios
                    </p>
                    <div>
                        <span class="glyphicon arrow">
                            
                        </span>
                    </div>
                    <p>
                        {{$service->title}}
                    </p>
                </div>
                <div class="col-12 pl-0">
                    <h2 class="robot_font">
                        {{$service->title}}
                    </h2>
                    <div class="col-2 line_red_slide ml-0">
                    </div>
                </div>
                <div class="col-12 pl-0">
                    <p class="sub_title">
                        {{$service->subtitle}}
                    </p>
                </div>
                <div class="col-12 pl-0">
                    <p>
                        {{$service->text}}C
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 ">
            <div class="img_services" style="background-image: url({{$service->image}})">
            </div>
        </div>
    </div>
    <div class="container_fluid">
        <div class="row row_section_number">
            <div class="col-10 space_col">
                <div class="row">
                    <div class="col-12">
                        <h3 class="robot_font">
                    Nuestros servicios comprenden, entre otros
                </h3>
                <div class="col-1 line_red_services ml-0">
                </div>
                    </div>
                    <div class="col-6">
                         <div class="row section_numbers">
                            <?php $counter=1; ?>
                            @foreach($services[0] as $key=>$service)
                            <div class="col-lg-12 d-lg-flex space_btn_number">
                                <div>
                                    <button class="tablinks active" id="btn_numbers_service" onclick="openCity(event, 'result_one')">
                                        <p>
                                            {{$counter}}
                                        </p>
                                    </button>
                                </div>
                                <p>
                                    {{$service}}
                                </p>
                            </div>
                            <?php $counter++; ?>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row section_numbers">
                            @foreach($services[1] as  $service)
                            <div class="col-lg-12 d-lg-flex space_btn_number">
                                <div>
                                    <button class="tablinks active" id="btn_numbers_service" onclick="openCity(event, 'result_one')">
                                        <p>
                                            {{$counter}}
                                        </p>
                                    </button>
                                </div>
                                <p>
                                    {{$service}}
                                </p>
                            </div>
                            <?php $counter++; ?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 conten_rigth">
                <div class="row section_services_contact text-right">
                            <div class="col-12">
                                <h5>
                                    Obténga más información
                                        escribíendonos  por
                                        Whatsapp o iniciando
                                        una consulta en línea.
                                </h5>
                            </div>
                            <div class="col-12">
                                <button class="btn_contact btn_red">
                                    Iniciar consulta
                                </button>
                            </div>
                            <div class="col-12">
                                <button class="btn_contact btn_green">
                                    Escribir a whatsapp
                                </button>
                            </div>
                        </div>
            </div>
 </div>

    </div>
    @endsection
</div>