@extends('layout')
@section('title','Home')
@section("content")
<div class="container_fluid">
  <div class="section_header" id="consul">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 slider_icon slider_image">
                <div class="row space_top">

                  <div class="col-12">
                     <div class="tab_slider pb-5 pt-3">
                        <div id="one_slide" class="tablinks_slider active" onclick="openSlider( 'choose_area',0)">
                           <div class="line_step"></div>
                           <p>1</p>
                        </div>
                        <div id="two_slide" class="tablinks_slider" onclick="openSlider( 'register',1)">
                           <div class="line_step"></div>
                           <p>2</p>
                        </div>
                        <div id="three_slide" class="tablinks_slider" onclick="openSlider( 'wellcome',2)">
                           <p>3</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div id="choose_area" class="tabcontent_slider">
                        <div class="row">
                           <div class="col-12 item_slider">
                              <h1>Elige un área para una asesoría en linea <span class="free">Gratis</span></h1>
                           </div>
                           <div class="col-12">
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div>
                                       <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       @foreach($services_item as $service)
                                       <div class="row d-lg-flex mt-1 ml-4">
                                            @foreach($service as $itemservice)
                                          <div class="card_1 col-lg-2-cols">
                                             <div class="form-check">
                                                <input id="r1" type="radio" name="radio" value="1" checked>
                                             </div>
                                             <p for="r1">{{$itemservice["title"]}}</p>
                                          </div>
                                           @endforeach
                                       </div>

                                    </div>

                                    <div class="carousel-item">

                                       @endforeach
                                            <div class="row d-lg-flex mt-1 ml-4">
                                            @foreach($service as $itemservice)
                                          <div class="card_1 col-lg-2-cols">
                                             <div class="form-check">
                                                <input id="r1" type="radio" name="radio" value="1" checked>
                                             </div>
                                             <p for="r1">{{$itemservice["title"]}}</p>
                                          </div>
                                           @endforeach
                                       </div>
                                    </div>
                                 </div>
                                    </div>
                                  <div>

                           </div>
                           <div class="col-12">
                              <div class="car_header">
                                    <a href="#carouselExampleIndicators" data-slide="prev" class="  active swiper-header-prev" aria-hidden="true">
                                       <div class="line_one"></div>
                                    </a>
                                    <a href="#carouselExampleIndicators" data-slide="next" class=" swiper-header-next" aria-hidden="true">
                                       <div class="line_two"></div>
                                    </a>
                                  </div>
                           </div>
                            <div class="col-12">
                              <button class="btn_10 btn_red ml-0 mt-3 space_btn_top" onclick="openSlider( 'register',1)">Elegir</button>
                           </div>
                              </div>
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div id="register" class="tabcontent_slider">
                     <div class="row">
                        <div class="col-12 item_slider">
                           <h1 class="sesion_text">Inicia sesión o regístrate</h1>
                        </div>
                        <div class="col-12">
                           <p class="font_incio">Ir al Inicio de sesión</p>
                        </div>
                        <div class="col-12 mb-2">
                           <div class="row">
                              <div class="col-12">
                                 <input class="input_email" placeholder="Email para guardar conversación" name="Tu nombre">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 mb-2">
                           <input class="input_complate_header_name" placeholder="Nombre completo" name="Tu nombre">
                        </div>
                        <div class="col-12 mb-2">
                           <div class="row">
                              <div class="col-6">
                                 <input class="number_input" type="number" placeholder="Número celular" name="Tu nombre">
                              </div>
                              <div class="col-6">
                                 <input class="password" placeholder="Contraseña" name="Tu nombre">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 text_options">
                           <div class="d-lg-flex">
                              <input id="check" type="checkbox" name="check" value="1">
                              <p class="mt-2">Acepto términos y condiciones</p>
                           </div>
                           <div class="d-lg-flex">
                              <input id="check"  type="checkbox" name="check" value="1">
                              <p class="mt-2">Recibir notificaciones cuando recibo respuesta</p>
                           </div>
                        </div>
                        <div class="col-12">
                           <button class="btn_10 btn_red ml-0 mt-3">Registrarme</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div id="wellcome" class="tabcontent_slider">
                     <div class="row">
                        <div class="col-12 item_slider">
                           <h3 class="text_wellcome">Bienvenido/a a la plataforma de Corplawyers</h3>
                           <h2 class="text_do">¿Qué deseas hacer?</h2>
                        </div>
                        <div class="col-12">
                           <div class="row cards_welcome">
                              <div class="col-4">
                                 <div class="card_one row">
                                    <div class="col-12 text_card_one">
                                       <div class="row">
                                          <div class="col-12 title_services_card">
                                             <h3 class="mb-0">Iniciar chat web</h3>
                                             <div class="border_bottom mb-3"></div>
                                             <p class="text_card_tag">y consultar sobre mi área de asesoría.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12 img_card_one img_item_card">
                                       <button class="btn_edit btn_white">Elegir</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-4">
                                 <div class="card_one row">
                                    <div class="col-12 text_card_one">
                                       <div class="row">
                                          <div class="col-12 title_services_card">
                                             <h3 class="mb-0">Iniciar chat WhatsApp</h3>
                                             <div class="border_bottom mb-3"></div>
                                             <p class="text_card_tag">y consultar sobre mi área de asesoría.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12 img_card_two img_item_card">
                                       <a class="btn btn_whats" href="https://api.whatsapp.com/send?phone=+57%20310%202207043" target="black">Elegir</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-4">
                                 <div class="card_one row">
                                    <div class="col-12 text_card_one">
                                       <div class="row">
                                          <div class="col-12 title_services_card">
                                             <h3 class="mb-0">Crear acuerdo de confidencialidad en línea</h3>
                                             <div class="border_bottom mb-3"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12 img_card_three img_item_card">
                                       <button class="btn_edit btn_white">Elegir</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="section_main_services">
   <div class="container-fluid">
      <div class="row" id="services">
         <div class="col-12 title_services_section">
            <h4>Bienvenido/a a la plataforma de Corplawyers</h4>
            <h3>¿Qué deseas hacer?</h3>
            <div class="border_bottom"></div>
         </div>
         <div class="col section_items_services">
            @foreach($services as $service)
            <div class="row text-center cont_services equal">
               @foreach($service as $itemservice)
               <div class="service_item col-lg-5-cols" onclick="window.location='/services/{{$itemservice["slug"]}}'">
               <img src="{{$itemservice["image"]}}"/>
               <div class="inner-service">
                  <p class="text_service">{{$itemservice["title"]}} <span class="line_text"></span></p>
                  <p class="text_service_oter">{{$itemservice["subtitle"]}}</p>
                  <div class="circle_icon">+</div>
               </div>
            </div>
            @endforeach
         </div>
         @endforeach
         <a href="/responsabilidad_social" class="row text-center cont_services equal justify-content-end space_item_sevice">
            <div class="service_item col-lg-5-cols service_20">
               <img src="{{asset('img/twenty_service.png')}}"/>
               <div class="inner-service">
                  <p class="text_service text_color">Responsabilidad social (probono)<span class="line_text"></span></p>
                  <p class="text_service_oter text_color">Apoyamos las causas sociales de los más desprotegidos con nuestras asesorías probono.</p>
                  <div class="circle_icon">+</div>
               </div>
            </div>
         </a>
      </div>
   </div>
   <div class="section_about_us">
      <div class="container-fluid">
         <div class="row white_text">
            <div class="col-7 img_about_us"></div>
            <div class="col-5 text_about_us">
               <div class="row">
                  <div class="col-12">
                     <h2>¿Quiénes somos?</h2>
                  </div>
                  <div class="col-2 line_red"></div>
                  <div class="col-12">
                     <p class="helvetica-light">
                        Corplawyers es una firma especializada en la prestación de servicios jurídicos integrales con un enfoque corporativo. Nuestro equipo cuenta con amplia experiencia en asesoría legal de empresas del sector real, financiero, solidario, así como de empresas prestadoras de servicios de tecnología
                        y aquellas startups, que con el apoyo de las nuevas tecnologías desarrollan sus ideas innovadoras.
                        Los servicios que prestamos, alineados con los objetivos de nuestros clientes, van dirigidos a la prevención y atención de sus riesgos jurídicos de una manera oportuna y eficaz, en cumplimiento de los requerimientos de las autoridades.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section_map">
      <div class="container-fluid">
         <div class="row">
            <div class="col-7 text_map_right">
               <div class="row">
                  <div class="col-12">
                     <h2 class="robot_font">Cobertura </h2>
                  </div>
                  <div class="col-12">
                     <div class="row">
                        <div class="col-9"></div>
                        <div class="col-2 line_red_map"></div>
                     </div>
                  </div>
                  <div class="col-12">
                     <p  class="text_section_map">Nuestra firma cuenta con participación directa o a través de abogados aliados, en ciudades tales como: Bogotá D.C., Medellín, Cali, Bucaramanga, Barranquilla, Tunja, Santa Marta, Ibagué, Neiva, Florencia, Cúcuta, Pasto, Popayán y Yopal. </p>
                  </div>
               </div>
            </div>
            <div class="col-5 img_map"></div>
         </div>
      </div>
   </div>
   <div class="section_results">
      <div class="container-fluid">
         <div class="row exit">
            <div class="col-5">
               <div class="row">
                  <div class="col-12">
                     <h2>Casos de éxito</h2>
                  </div>
                  <div class="col-2 line_red"></div>
                  <div class="col-12">
                     <p class="helvetica-light">
                        Conoce la experiencia de aquellos que han trabajado con nosotros.
                     </p>
                  </div>
                  <div class="col-12">
                     <div class="tab">
                        <button id="btn_numbers" class="tablinks active" onclick="openCity(event, 'result_one')">
                           <p>1</p>
                        </button>
                        <button id="btn_numbers" class="tablinks" onclick="openCity(event, 'result_two')">
                           <p>2</p>
                        </button>
                        <button id="btn_numbers" class="tablinks" onclick="openCity(event, 'result_three')">
                           <p>3</p>
                        </button>
                        <button id="btn_numbers" class="tablinks" onclick="openCity(event, 'result_one')">
                           <p>4</p>
                        </button>
                        <button id="btn_numbers" class="tablinks" onclick="openCity(event, 'result_two')">
                           <p>5</p>
                        </button>
                        <button id="btn_numbers" class="tablinks" onclick="openCity(event, 'result_three')">
                           <p>6</p>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-7">
               <div id="result_one" class="tabcontent" class="row">
                  <div class="col-12">
                     <div class="row">
                        <div class="col-2">
                           <div class="circle_face"></div>
                        </div>
                        <div class="col-10">
                           <p> “Trabajar al lado de Corplawyers nos permitió dar solución a nuestros conflictos
                              jurídicos y llevar a buen puerto las necesidades que teníamos respecto a la asesoría
                              legal relacionada con nuestro emprendimiento tecnológico”.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 pt-5 pl-5">
                     <div class="row justify-content-between">
                        <div class="col-7 d-lg-flex">
                           <p>Juan Carlos Garzón</p>
                           <p class="client_rubro">CEO en Datia</p>
                        </div>
                        <div class="col-4">
                           <div class="img_company img_datia"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="result_two" class="tabcontent" class="row">
                  <div class="col-12">
                     <div class="row">
                        <div class="col-2">
                           <div class="circle_face"></div>
                        </div>
                        <div class="col-10">
                           <p> “Trabajar al lado de Corplawyers nos permitió dar solución a nuestros conflictos
                              jurídicos y llevar a buen puerto las necesidades que teníamos respecto a la asesoría
                              legal relacionada con nuestro emprendimiento tecnológico”.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 pt-5 pl-5">
                     <div class="row justify-content-between">
                        <div class="col-7 d-lg-flex">
                           <p>Rodrigo Piñera</p>
                           <p class="client_rubro">CEO en Bastet</p>
                        </div>
                        <div class="col-4">
                           <div class="img_company img_bastet"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="result_three" class="tabcontent" class="row">
                  <div class="col-12">
                     <div class="row">
                        <div class="col-2">
                           <div class="circle_face"></div>
                        </div>
                        <div class="col-10">
                           <p> “Trabajar al lado de Corplawyers nos permitió dar solución a nuestros conflictos
                              jurídicos y llevar a buen puerto las necesidades que teníamos respecto a la asesoría
                              legal relacionada con nuestro emprendimiento tecnológico”.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 pt-5 pl-5">
                     <div class="row justify-content-between">
                        <div class="col-7 d-lg-flex">
                           <p>Rodrigo Piñera</p>
                           <p class="client_rubro">CEO en Bastet</p>
                        </div>
                        <div class="col-4">
                           <div class="img_company img_datia"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section_atention">
      <div class="row">
         <div class="col-12 title_services_atenction">
            <h3>Te atendemos en</h3>
            <div class="border_bottom"></div>
         </div>
         <div class="col-12 text-center">
            <div class="-sapce">
               <div class="swiper-container">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/procuraduría.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/fiscalía.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/consejo.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/dian.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/contraloría.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/fiscalía.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/consejo.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/dian.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/contraloría.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/logo_tic.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/icon_comers.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/trans_icon.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/icon_comition.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/icon_invima.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/icon_super.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/icon_author.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_atention" src="/img/icon_intendence.png">
                     </div>
                     <div class="swiper-slide">
                        <img class="icon_uiaf" src="/img/icon_uiaf.png">
                     </div>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section_contact" id="contact">
      <div class="row">
         <div class="col-12 title_services_contact">
            <h3>Contáctanos</h3>
            <div class="border_bottom"></div>
         </div>
         <div class="col-12 pb-4">
            <p class="text-center">Escríbanos para recibir más información acerca de nuestros servicios y lo que podemos ofrecerle.</p>
         </div>
         <div class="col-12">
            <div class="row pl-5">
               <div class="col-3">
                  <div class="row">
                     <div class="col-12"><input class="input_form_contact" placeholder="Tu nombre" name="Tu nombre"></div>
                     <div class="col-12"><input class="input_form_contact" placeholder="Tu correo electrónico" name="Tu nombre"></div>
                     <div class="col-12"><input class="input_form_contact" placeholder="Tu número de contacto (opcional)" name="Tu nombre"></div>
                     <div class="col-12"><input class="input_form_contact" placeholder="¿Quieres consultar sobre un servicio?" name="Tu nombre"></div>
                  </div>
               </div>
               <div class="col-9"><textarea class="text_space" placeholder="tu mensaje.."></textarea></div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function openCity(evt, cityName) {
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablinks");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" active", " ");
     }
     document.getElementById(cityName).style.display = "block";
     evt.currentTarget.className += " active";
   }
   function openSlider(slider,index) {
      $(".tabcontent_slider").hide();

      $("#"+slider).show();
      $(".tab_slider .tablinks_slider").map(function (indexItem,item){
         if(indexItem<=index){
            $("#"+item.id).addClass("active")
         }else{
            $("#"+item.id).removeClass("active")
         }


         if(index==2){
            $(".slider_icon").removeClass("slider_image");

         //   $(".slider_icon").css("background-image","none");
         }else{
                       // $(".slider_icon").css("background-image","url(/img/slider_icon.png)");

            $(".slider_icon").addClass("slider_image");

         }
      });
     }

</script>
<script src="../js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
   var swiper = new Swiper('.swiper-container', {
     slidesPerView: 5,
     slidesPerGroup: 3,
     loop: true,
     loopFillGroupWithBlank: true,
     pagination: {
       el: '.swiper-pagination',
       clickable: true,
     },
     navigation: {
       nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev',
     },
   });

   var currentTab = 0;
   function selectTab(tab){
      currentTab = tab;
   }
   // Material Select Initialization

</script>

@endsection