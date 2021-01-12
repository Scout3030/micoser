@extends('layouts.app')

@section('content')

<!-- PRESENTATION -->
<section id="quote" class="ds background_cover changeable section_padding_top_150 section_padding_bottom_150 columns_margin_bottom_40">
    <div class="container">
        <div class="row flex-wrap v-center">
            <div class="col-xs-12 col-sm-6">
                <h2 class="section_header text-uppercase">  <span class="highlight">BIENVENIDOS</span> <span class="small"></span> </h2>
                <blockquote >
                    <p style="color: #fff;">MICOSER S.A le da la bienvenida a su nuevo portal digital, buscamos ser una empresa líder en soluciones de Ingeniería, Construcción, Operación y Mantenimiento Integral en las diferentes Industrias, nos renovamos por qué somos el socio estratégico que sus proyectos exigen.
                    </p>
                    <p style="color: #fff;">
                    Nuestra experiencia de más de 7 años en servicios industriales nos da la confianza de poder desarrollar todo tipo de proyectos en los sectores Minero-Metalúrgico, Petroquímica, Agroindustria y Construcción.
                    </p>
                    <p style="color: #fff;">
                    MICOSER cree en su equipo humano, en su excelencia técnica, en su calidad y en nuestro compromiso para con nuestros clientes, sin descuidar la seguridad, medio ambiente y responsabilidad social.
                    </p>
                    <p>Francisco E. Infantes Oloya <br>
                    Gerente General
                    </p>
                </blockquote>
                <div class="toppadding_10 visible-lg"></div> <a href="#" class="theme_button color1 min_width_button">Contactar</a>
            </div>
            <div class="col-xs-12 col-sm-6 text-center text-sm-right">
                <div class="with_offset_frame"> <img src="images/gerente.jpg" alt=""> </div>
            </div>
        </div>
    </div>
</section>

<!-- END OF PRESENTATION -->


<!-- INDUSTRIES -->
<section id="services" class="cs section_padding_top_150 section_padding_bottom_150 columns_padding_30">
    <div class="container">
        <div class="row">
            <!-- <span class="section_bg_header">Lo que hacemos</span> -->
            <h2 class="section_header big text-uppercase top-offset">
                <span class="highlight">Nuestros</span><br> Sectores
            </h2>
            <div class="col-xs-12">
                @foreach($sectors->chunk(3) as $chunk)
                <div class="owl-carousel with_shadow_items" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="2" data-margin="60" data-nav="false">
                    @foreach($chunk as $sector)
                    <article class="vertical-item content-padding big-padding ds ms with_shadow text-center">
                        <div class="item-media">
                            <img src="/images/sectors-square/{{$sector->image}}" alt="">
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h3 class="entry-title text-uppercase">
                                    <a href="{{route('sector.show', $sector->slug)}}">{{$sector->name}}</a>
                                </h3>
                            </header>
                            <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing</p> -->
                            <p class="topmargin_35"> <a href="{{route('sector.show', $sector->slug)}}" class="theme_button color1 block_button">Ver más</a> </p>
                        </div>
                    </article>
                    @endforeach
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- END OF INDUSTRIES -->



<!-- GALLERY -->
<section id="gallery" class="ds fluid_padding_0 columns_padding_0 positioned_heading">
    <div class="container-fluid">
        <div class="row">
            <h2 class="section_bg_header before_section">Galería</h2>
            <div class="col-xs-12">
                <div class="owl-carousel gallery-carousel framed" data-responsive-xlg="4" data-responsive-lg="4" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true" data-center="true">
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/01.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/01.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/02.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/03.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/03.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/04.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/04.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/05.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/05.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/06.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/06.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/07.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/07.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/08.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/08.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/09.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/09.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/10.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/10.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/11.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/11.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-item ds">
                        <div class="item-media"> <img src="images/gallery-square/12.jpg" alt="">
                            <div class="media-links">
                                <div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/12.jpg"></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OF GALLERY -->



<!-- CONTACT FORM -->
<section id="contact-form" class="cs half_cs section_padding_top_150 section_padding_bottom_150 columns_padding_80">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center">
                <h2 class="section_header text-uppercase"> Entremos en  <span class="black">contacto</span> </h2>
                <div class="col-md-2"></div>
                <form class="contact-form input-text-center row columns_padding_5 col-xs-12 col-md-8" method="post" action="{{route('admin.request')}}">
                    @csrf
                    <div class="col-xs-12">
                        <div class="form-group bottommargin_0"> <label for="name">Nombre</label> <input type="text" size="30" value="" name="name" id="name" class="form-control" placeholder="Nombre / Empresa" autocomplete="off" required value="{{old('name')}}"> </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group bottommargin_0"> <label for="email">Correo</label> <input type="email" size="30" value="" name="email" id="email" class="form-control" placeholder="Correo electrónico" autocomplete="off" required value="{{old('email')}}"> </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group bottommargin_0"> <label for="phone">Teléfono</label> <input type="tel" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Teléfono" autocomplete="off" required value="{{old('phone')}}"> </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group bottommargin_0"> <label for="message">Mensaje</label> <textarea rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Mensaje" required value="{{old('message')}}"></textarea> </div>
                    </div>
                    <div class="col-xs-12 bottommargin_0">
                        <div class="contact-form-submit"> <button type="submit" class="theme_button min_width_button margin_0">Enviar</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END OF CONTACT FORM -->

@endsection