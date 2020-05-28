@extends('layout')
@section('title','Home')
@section("content")

<style>
.carousel-inner {
    position: relative;
    width: 86%;
    overflow: hidden;
}
	.items-carousel{
		position: absolute;
    bottom: -89px;
        left: 106px;
    top: 21.1vw;
	}
		.items-carousel li.active{
			background-image: url(img/slider_point.png);
    background-size: 1.3vw;
    height: 1.4vw;
    background-color: #ffffff00;
    background-repeat: no-repeat;
    position: relative;
    bottom: 0.1vw;
    width: 2.1vw;

		}
	.items-carousel li{
		background-image: url(img/point_gray.png);
    background-size: 1vw;
    height: 1.1vw;
    background-color: white;
    background-repeat: no-repeat;
    transition: .6s ease;
    position: relative;
    width: 2vw;
    background-position: 0.1vw;
}


	}
	</style>
<div class="container_fluid">
   <div class="section_header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 slider_icon">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators items-carousel ">
                     <li  data-slide-to="0" data-target="#carouselExampleIndicators" class="active"><div ></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner ml-5 pl-5">
                     <div class="carousel-item active">
                       <div class="row">
                       	<div class="col-12">
                       		<h1 class="robot_font">Asesoría en todas las áreas de gestión</h1>
                       	</div>
                       		<div class="col-12">
                       			<div class="row">
                       				<div class="col-2 line_red_slide"></div>
                       			</div>
                       		</div>
                       			<div class="col-12">
                       					Ofrecemos servicios integrales en derecho comercial,
										financiero, societario, laboral, informático y mucho más;
										elige una opción y consúltanos en línea.
                       			</div>
                       			<div class="col-12"><button class="btn_8-4 btn_red_slide">Elegir servicio</button></div>
                       </div>
                     </div>
                     <div class="carousel-item">
                       <div class="row">
                       	<div class="col-12">
                       		<h1 class="robot_font">Asesoría en todas las áreas de gestión</h1>
                       	</div>
                       		<div class="col-12">
                       			<div class="row">
                       				<div class="col-2 line_red_slide"></div>
                       			</div>
                       		</div>
                       			<div class="col-12">
                       					Ofrecemos servicios integrales en derecho comercial,
										financiero, societario, laboral, informático y mucho más;
										elige una opción y consúltanos en línea.
                       			</div>
                       			<div class="col-12"><button class="btn_8-4 btn_red_slide">Elegir servicio</button></div>
                       </div>
                     </div>
                     <div class="carousel-item">
                         <div class="row">
                       	<div class="col-12">
                       		<h1 class="robot_font">Asesoría en todas las áreas de gestión</h1>
                       	</div>
                       		<div class="col-12">
                       			<div class="row">
                       				<div class="col-2 line_red_slide"></div>
                       			</div>
                       		</div>
                       			<div class="col-12">
                       					Ofrecemos servicios integrales en derecho comercial,
										financiero, societario, laboral, informático y mucho más;
										elige una opción y consúltanos en línea.
                       			</div>
                       			<div class="col-12"><button class="btn_8-4 btn_red_slide">Elegir servicio</button></div>
                       </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section_main_services">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 title_services_section">
               <h3>Elige uno de nuestros servicios</h3>
               <div class="border_bottom"></div>
            </div>
            <div class="col section_items_services">
               <div class="row text-center cont_services">
                  <div class="col col_service_white">
                     <div class="row">
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="row">
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col_service_white">
                     <div class="row">
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="row">
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col col_service_white">
                     <div class="row">
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 space_btn_service">
                           <div class="row">
                              <div class="col-12">
                                 <p class="text_service">Derecho informático</p>
                              </div>
                              <div class="col-12">
                                 <div class="circle_icon">+</div>
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
                        <button id="btn_numbers" class="tablinks active" onclick="openCity(event, 'result_one')">
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
                        <div class="col-12 pt-4">
                           <div class="row justify-content-between">
                              <div class="col-4">
                                 <p>Juan Carlos Garzón</p>
                              </div>
                              <div class="col-4">
                                 <div class="img_datia"></div>
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
                        <div class="col-12 pt-4">
                           <div class="row justify-content-between">
                              <div class="col-4">
                                 <p>Juan Carlos Garzón</p>
                              </div>
                              <div class="col-4">
                                 <div class="img_datia"></div>
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
                        <div class="col-12 pt-4">
                           <div class="row justify-content-between">
                              <div class="col-4">
                                 <p>Juan Carlos Garzón</p>
                              </div>
                              <div class="col-4">
                                 <div class="img_datia"></div>
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
         <div class="col-12 title_services_section">
            <h3>Te atendemos en</h3>
            <div class="border_bottom"></div>
         </div>
         <div class="col-12 text-center">

         </div>
      </div>
   </div>
   <div class="section_contact">
      <div class="row">
         <div class="col-12 title_services_section">
            <h3>Contáctanos</h3>
            <div class="border_bottom"></div>
         </div>
         <div class="col-12">
            <p class="text-center">Escríbanos para recibir más información acerca de nuestros servicios y lo que podemos ofrecerle.</p>
         </div>
         <div class="col-12">
            <div class="row">
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
@endsection
<script>
   function openCity(evt, cityName) {
           var i, tabcontent, tablinks;
           tabcontent = document.getElementsByClassName("tabcontent");
           for (i = 0; i < tabcontent.length; i++) {
               tabcontent[i].style.display = "none";
           }
           var i, tabcontent, tablinks;
           tabcontent = document.getElementsByClassName("tabconone");
           for (i = 0; i < tabcontent.length; i++) {
               tabcontent[i].style.display = "inherit!important";
           }
           tablinks = document.getElementsByClassName("tablinks");
           for (i = 0; i < tablinks.length; i++) {
               tablinks[i].className = tablinks[i].className.replace(" active", "");
           }
           document.getElementById(cityName).style.display = "block";
           evt.currentTarget.className += " active";
       }
</script>