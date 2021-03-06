<header class="frame">
    <div class="bit-2">
        <?=img('images/assets/header.png');?>
    </div>
    <div class="bit-5 header-details">
        <h2>BOLET&Iacute;N AXA</h2>
        <h3>{mes} {anio} <strong>N. {numero}</strong></h3>
        <p>Consulta los n&uacute;meros anteriores <?=anchor('http://www.boletinaxa.com.mx/anterior/historico.html', img('images/assets/btn_landing.png'));?></p>
    </div>
</header>
<nav class="frame">
    <ul>
        <li><?=anchor('/', 'INICIO');?></li>
        <li><?=anchor('2015/abril/salud', 'TU SALUD');?></li>
        <li><?=anchor('2015/abril/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2015/abril/auto', 'TU AUTO');?></li>
        <li><?=anchor('2015/abril/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>
<div class="container auto">
    <div class="frame bit-1 title clearfix">
        <div class="bit-80 clearfix">
            <h1>Por tu seguridad,<br /> <span><strong>evita el celular</strong> <br />al volante</span></h1>
        </div>
        <div class="bit-20 clearfix">
            <?=img( [ 'src' => 'images/assets/2015/abril/auto/telefono-prohibido.png', 'alt' => 'Vacaciones sobre ruedas' ] );?>
        </div>
    </div>
    <div class="frame bit-1 section-1 clearfix">
        <div class="bit-60 clearfix">
            <p>El uso del celular al volante ha hecho que se registre un importante aumento en accidentes de tránsito, todo debido a la falta de atención de los conductores.</p>
        </div>
        <div class="bit-40 clearfix">
            <?=img( [ 'src' => 'images/assets/2015/abril/auto/choque.png', 'alt' => 'Choque entre automóviles' ] );?>
        </div>
    </div>
    <div class="frame bit-1 section-2 clearfix">
        <hr class="bit-90">
        <p class="bit-90">Sabías que 7 de cada 10 accidentes son derivados de los distractores, siendo el celular el más común de ellos.</p>
        <hr class="bit-90">
    </div>
    <div class="frame bit-1 section-3 clearfix">
        <h2>Principales distractores que causan accidentes</h2>
        <?=img( [ 'src' => 'images/assets/2015/abril/auto/distractores-que-causan-accidentes.jpg', 'alt' => 'Principales distractores que causan accidentes' ] );?>
        <p class="bit-1">Investigaciones del Centro de Experimentación y Seguridad Vial México señalan que los accidentes que se habían reducido con el Programa Conduce Sin Alcohol, se vuelven a incrementar debido al uso de teléfonos frente al volante.</p>
    </div>
    <div class="frame bit-1 section-4 clearfix">
        <hr class="bit-90">
        <p class="bit-90">Las personas que utilizan el teléfono celular mientras conducen tienen cuatro veces más posibilidades de sufrir un accidente.</p>
        <hr class="bit-90">
    </div>
    <div class="frame bit-1 section-5 clearfix">
        <hr class="bit-90">
        <p class="bit-90">Hablar por celular reduce el tiempo de reacción un 9%</p>
        <hr class="bit-90">
    </div>
    <div class="frame bit-1 section-6 clearfix">
        <div class="bit-80">
            <p class="bit-1">El uso del manos libres tampoco es una solución segura, ya que aunque este dispositivo permite poner ambas manos sobre el volante, la falta de atención al camino sigue siendo la misma.</p>
        </div>
        <div class="bit-20">
            <?=img( [ 'src' => 'images/assets/2015/abril/auto/audifonos.png', 'alt' => 'Audífonos' ] );?>
        </div>
        <p class="bit-1">¡No arriesgues tu vida y la de los demás por contestar el teléfono!</p>
    </div>
    <div class="frame bit-1 section-7 clearfix">
        <div class="bit-80">
            <p class="bit-1">Recomendaciones:<br />Si recibes una llamada mientras conduces te sugerimos detenerte en un lugar seguro o pedir que te llamen después.</p>
        </div>
        <div class="bit-20">
            <?=img( [ 'src' => 'images/assets/2015/abril/auto/alerta.png', 'alt' => 'Alerta' ] );?>
        </div>
    </div>
    <hr class="bit-1 rule-information bit-1" />
    <div class="frame more--information bit-1">
        <h5 class="bit-1">Si necesitas más información</h5>
        <h5 class="bit-1">¡Contacta a tu agente!</h5>
    </div>
    <div class="frame related bit-1">
        <div class="bit-3 clearfix">
            <h6 class="bit-1">Artículos relacionados</h6>
            <ul class="bit-1">
                <li class="bit-1"><?=anchor( 'http://www.boletinaxa.com.mx/anterior/tu-salud-junio-2014.html','Tú puedes ser tu propio jefe.' );?></li>
                <li class="bit-1"><?=anchor( 'http://www.boletinaxa.com.mx/anterior/tu-salud-marzo-2014.html','México carece de una cultura del ahorro.' );?></li>
            </ul>
        </div>
    </div>
</div>
<div class="bit-3 clearfix qualify frame">
    <p class="bit-20">Califica</p>
    <ul class="bit-80 stars" data-section="auto" data-month="abril" data-year="2015">
        <li>
            <a href="#" target="_self" data-quality="1" class="clearfix Star-2">Una estrella</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="2" class="clearfix Star-2">Dos estrellas</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="3" class="clearfix Star-2">Tres estrellas</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="4" class="clearfix Star-2">Cuatro estrellas</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="5" class="clearfix Star-2">Cinco estrellas</a>
        </li>
    </ul>
</div>
