<header class="frame">
    <div class="bit-2">
        <?=img('images/assets/header.png');?>
    </div>
    <div class="bit-5 header-details">
        <h2>BOLET&Iacute;N AXA</h2>
        <h3>{mes} {anio} <strong>N. {numero}</strong></h3>
        <p>Consulta los n&uacute;meros anteriores <?=anchor('https://www.boletinaxa.com.mx/anterior/historico.html', img('images/assets/btn_landing.png'));?></p>
    </div>
</header>
<nav class="frame">
    <ul>
        <li><?=anchor('/', 'INICIO');?></li>
        <li><?=anchor('2015/mayo/salud', 'TU SALUD');?></li>
        <li><?=anchor('2015/mayo/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2015/mayo/auto', 'TU AUTO');?></li>
        <li><?=anchor('2015/mayo/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>
<div class="container health clearfix">
    <div class="frame title clearfix bit-1">
        <div class="bit-1">
            <h1 class="bit-60"><strong><span>11</span> razones para <br />dejar de fumar</strong></h1>
        </div>
        <div class="bit-60">
            <p class="bit-1"><strong>El hábito de fumar es la principal causa evitable de enfermedades como cáncer y afecciones cardiorrespiratorias y provoca más fallecimientos prematuros que los que ocasionan en conjunto el SIDA, la drogadicción, el alcoholismo, los accidentes viales, los incendios e incluso los homicidios, según datos de la Organización Mundial de la Salud.</strong></p>
        </div>
        <div class="bit-40">
            <?=img('images/assets/2015/mayo/salud/no-fumar.png');?>
        </div>
    </div>
    <div class="frame section-1 bit-1">
        <div class="bit-1">
            <h2 class="bit-1">¿Vale la pena poner en riesgo tu salud?</h2>
            <p class="bit-1">Te damos 11 razones para dejar de fumar y mejorar tu calidad de vida:</p>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/1.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Mejora tu presión arterial</strong>, aumentas la oxigenación al corazón y reduces el riesgo de sufrir un infarto. A los 10 años de abandonar este vicio la probabilidad de enfermedad coronaria es prácticamente la misma que la de cualquier persona que nunca haya fumado.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/presion.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/2.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Reparas tu digestión</strong>, reduces las úlceras producidas por el tabaco e incluso percibes mejor el sabor de los alimentos y los olores.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/estomago.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/3.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Tu piel se regenera</strong>: evitas el envejecimiento prematuro, arrugas, caída del cabello y el tono opaco.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/persona.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/4.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Mejora el aspecto</strong> de tus dientes y encías, sobre todo, tu aliento.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/muela.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/5.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Mejora la capacidad pulmonar</strong> y circulación, recuperando energía y vitalidad para realizar esfuerzos físicos.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/bicicleta.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/6.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>La posibilidad de contraer gripe</strong> y el riesgo de sufrir enfermedades coronarias se reduce a un 50%.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/corazon.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/7.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Después de cinco años de no fumar,</strong> el riesgo de cáncer de pulmón se reduce a la mitad.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/pulmones.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/8.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Disminuye el riesgo de sufrir cáncer</strong> de pulmón, laringe, vejiga, boca, esófago y riñón.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/grafica.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/9.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>El riesgo de padecer</strong> disfunción eréctil disminuye.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/espermatozooides.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/10.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>¡Ahorras!</strong> No sólo en la compra del tabaco, sino en medicinas, visitas al médico y gripes por tabaquismo.</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/moneda.png');?></li>
            </ul>
        </div>
        <div class="bit-1">
            <ul class="bit-1 clearfix">
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/11.png');?></li>
                <li class="bit-60">
                    <p class="bit-1"><strong>Al no fumar preservas la salud</strong> de los no fumadores</p>
                </li>
                <li class="bit-5"><?=img('images/assets/2015/mayo/salud/viejita.png');?></li>
            </ul>
        </div>
    </div>
    <div class="frame section-2 bit-1">
        <h3 class="bit-1">Probablemente conocías los riesgos, ahora conoces algunos beneficios: <strong>mantenerlos es tu decisión</strong>.</h3>
    </div>
    <div class="frame section-3 bit-1">
        <h4 class="bit-1"><strong>¡Agrega días a tu vida y a la de los tuyos!</strong></h4>
    </div>
    <div class="frame section-4 bit-1">
        <p class="bit-3"><sup>*</sup> Fuente: <?=anchor( 'http://www.trendenciashombre.com' );?> <br /><?=anchor( 'http://bvs.sld.cu/revistas/med/' );?> <br />Organización Mundial de la Salud (OMS)</p>
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
                <li class="bit-1"><?=anchor('https://www.boletinaxa.com.mx/anterior/tu-salud-junio-2014.html','Nutrición: pieza clave en la prevención');?></li>
                <li class="bit-1"><?=anchor('https://www.boletinaxa.com.mx/anterior/tu-salud-marzo-2014.html','La obesidad más allá del sobrepeso');?></li>
            </ul>
        </div>
    </div>
    <div class="bit-3 clearfix qualify frame">
        <p class="bit-20">Califica</p>
        <ul class="bit-80 stars" data-section="salud" data-month="mayo" data-year="2015">
            <li>
                <?=anchor( '#', 'Una estrella', [ 'data-quality' => "1", 'class' => "clearfix Star-2" ] );?>

            </li>
            <li>
                <?=anchor( '#', 'Dos estrellas', [ 'data-quality' => "2", 'class' => "clearfix Star-2" ] );?>

            </li>
            <li>
                <?=anchor( '#', 'Tres estrellas', [ 'data-quality' => "3", 'class' => "clearfix Star-2" ] );?>

            </li>
            <li>
                <?=anchor( '#', 'Cuatro estrellas', [ 'data-quality' => "4", 'class' => "clearfix Star-2" ] );?>

            </li>
            <li>
                <?=anchor( '#', 'Cinco estrellas', [ 'data-quality' => "5", 'class' => "clearfix Star-2" ] );?>

            </li>
        </ul>
    </div>
</div>