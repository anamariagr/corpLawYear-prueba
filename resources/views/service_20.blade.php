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
                        Responsabilidad social (probono)
                    </p>
                </div>
                <div class="col-12 pl-0">
                    <h2 class="robot_font">
                        Responsabilidad social (probono)
                    </h2>
                    <div class="col-2 line_red_slide ml-0">
                    </div>
                </div>
                <div class="col-12 pl-0">
                    <p class="sub_title">
                        Apoyamos las causas sociales de los más desprotegidos con nuestras asesorías probono.
                    </p>
                </div>
                <div class="col-12 pl-0">
                    <p>
                        Corplawyers conoce la importancia de dejar huella, por tal motivo también apoyamos las causas sociales a través de nuestras asesorías Probono, lo que hace parte de nuestra formación integral como profesionales con sentido humanista. Con esta práctica facilitamos la asesoría, tramite y representación en defensa de los derechos de las personas y las clases menos favorecidas, quienes debido a su situación se les dificulta acceder a loa diferentes servicios jurídicos.
                        <br>
                            <p class="mt-5">
                                Cuenta con nosotros.
                            </p>
                        </br>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 ">
            <div class="img_services" style="background-image: url({{asset('img/twenty_service.png')}})">
            </div>
        </div>
    </div>
    <div class="container section_give_result">
        <div class="row mt-5 justify-content-between">
            <div class="col-10">
                <h2 class="robot_font give_result">
                    Obténga más información escribíendonos  por
Whatsapp o iniciando una consulta en línea.
                </h2>
            </div>
            <div class="col-2">
                <div class="row section_services_contact text-right">
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
        <div class="space_block_20">
        </div>
    </div>
</div>
@endsection
