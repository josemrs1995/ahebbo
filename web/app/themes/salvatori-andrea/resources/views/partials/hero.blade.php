<div class="hero"> 
    <div class="slider-hero carousel carousel-animated carousel-animate-fade" data-autoplay="true" data-delay="10000" >
            <div class="contenedor-hero carousel-container">  
        @php
            $c = 0;
            $class = '';
        @endphp
    @if(have_rows('contenido_hero', 'options'))
    {{-- loop through the rows of data --}}
        @while (have_rows('contenido_hero', 'options'))
        @php
        the_row();
            $c++;
            $imagen1 = get_sub_field('imagen_1');
            $imagen2 = get_sub_field('imagen_2');
            if ( $c == 1 )
                $class = ' is-active';
            else
                $class=''; 
         @endphp
        <div class='hero-item carousel-item {{ $class }}'>

        <div class='imagen-1peito' style="position: absolute">
            <img class="imagen-1" style="background-position: center center; background-size: cover; background-repeat:no-repeat;" src="{{ $imagen1}}">
        </div>
        <div class='imagen-2peito' style="background-size: cover; background-repeat: no-repeat;">
        <img class="imagen-2-hero" src="{{ $imagen2}}">
        </div>
        </div>
        @endwhile
     @else
   @endif
</div>

<div class="content-animacion-hero">
    <div class="content-hero">
            <h5>{{get_field('titulo_resumen','options')}}</h5>
            <div class="columns">
                <div class="colum is-6" style="display: flex;">
                    <p>{{get_field('resumen_hero','options')}}</p>
                    @php
                    $boton1 = get_field('boton_crucero','options');
                    $boton2 = get_field('boton_destino','options');
                    @endphp
                    <a class="boton1 column is-3" href="{{ $boton1['url'] }}">{{$boton1['title']}}</a>
                    <a class="boton2 column is-3" href="{{ $boton2['url'] }}">{{$boton2['title']}}</a>
                </div>
            </div>
    </div>
</div>
<div class="content-slider" style="display: flex; align-items: center;">
<div class="carousel-navigation">
    <div class="carousel-nav-left">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="carousel-nav-right">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
    </div>
    </div>
</div>
</div>
