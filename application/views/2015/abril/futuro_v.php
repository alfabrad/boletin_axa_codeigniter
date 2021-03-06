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
<div class="container future">
    <div class="frame clearfix bit-1 title">
        <div class="bit-60">
            <h1 class="bit-1">Falta cultura del ahorro en México.</h1>
            <h2 class="bit-1">Sólo el 16% de los mexicanos ahorra.</h2>
        </div>
        <div class="bit-40">
            <?=img( 'images/assets/2015/abril/futuro/alcancia.png' );?>
        </div>
        <div class="bit-1">
            <?=img( 'images/assets/2015/abril/futuro/dibujos-relacionados-con-dinero.png' );?>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-1">
        <p>Los beneficios de ahorrar son inmejorables y perdurables. Y tú, <strong>¿ya tienes un plan eficaz de ahorro?</strong></p>
        <p>Habituarte a ahorrar puede resultar complejo, sobre todo si no sueles pensar en tus finanzas personales o en cómo maximizar tus ingresos. Por ello, te damos algunos tips para preservar tu dinero óptimamente:</p>
    </div>
    <div class="bit-1 clearfix frame section-2">
        <div class="bit-1 clearfix sub-section-1">
            <div class="bit-2">
                <?=img( 'images/assets/2015/abril/futuro/uno.png' );?>
                <h3>Controla y registra tus gastos.</h3>
                <p>Puedes anotar el monto de tus ingresos y egresos, así como tus gastos de manutención, vivienda y transporte, así tendrás más claro qué parte puedes destinar al ahorro. (Si tienes deudas, es importante que no descuides la cantidad destinada para cubrir éstas.)</p>
            </div>
            <div class="bit-2">
                <?=img( 'images/assets/2015/abril/futuro/dos.png' );?>
                <h3>Aprende a decir no.</h3>
                <p>En la medida de lo posible, evita hacer uso de tu aportación al ahorro. Es aconsejable la deposites en algún tipo de cuenta de ahorro; ya que ésta frecuentemente ofrece mecanismos útiles de fomento y protección al ahorro</p>
            </div>
        </div>
        <div class="bit-1 clearfix sub-section-2">
            <div class="bit-2">
                <?=img( 'images/assets/2015/abril/futuro/tres.png' );?>
                <h3>Identifica tus necesidades y prioridades.</h3>
                <p>Procura cubrir sólo aspectos básicos de tu vida cotidiana. Evita gastar cuando no sea realmente necesario y no lleves dinero que puedas gastar en exceso o tarjetas de crédito si no las requieres</p>
            </div>
            <div class="bit-2">
                <?=img( 'images/assets/2015/abril/futuro/cuatro.png' );?>
                <h3>Apóyate en la tecnología.</h3>
                <p>Usa algún software o app que te permita administrar y vigilar tus finanzas de manera precisa y continúa</p>
            </div>
        </div>
        <div class="bit-1 clearfix sub-section-3">
            <div class="bit-2">
                <?=img( 'images/assets/2015/abril/futuro/cinco.png' );?>
                <h3>Ahorra en compañía.</h3>
                <p>Si tienes clara tu meta, pero se te dificulta el hábito del ahorro, puedes apoyarte involucrando a alguien cercano y confiable. Compartir tus metas y avances te motiva y reduce gastos innecesarios.</p>
                <ul>
                    <li><strong>El ahorro en pareja es mejor</strong>, pues conjunta la meta en un plan mutuo y la confianza de la relación se fortalece.</li>
                    <li><strong>El ahorro en familia</strong> enseña a los niños a valorar el ahorro-recompensa tras cumplir una meta</li>
                </ul>
            </div>
            <div class="bit-2">
                <?=img( 'images/assets/2015/abril/futuro/seis.png' );?>
                <h3>Fíjate objetivos y metas realistas.</h3>
                <p>Destina una parte de tu ahorro para cubrir un objetivo prioritario a corto o mediano plazo pero prevé que esta operación no impacte tus metas a largo plazo, como el ahorro para tu retiro. Para ello, puedes apoyarte en seguros de vida que además de protegerte, son un mecanismo eficaz para ahorrar</p>
            </div>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-3">
        <p><sup>*</sup> Tu objetivo de ahorro es personal, puede variar desde comprar algún artículo de novedad, viajar a algún destino anhelado, estudiar una maestría, comprar una vivienda, adquirir tu propio auto, hasta el pago de una deuda: el secreto radica en ser constante para cumplir tu meta</p>
    </div>
    <div class="bit-1 clearfix frame section-4">
        <div class="bit-3 clearfix"><?=img( 'images/assets/2015/abril/futuro/nota.png' );?></div>
        <div class="bit-666">
            <p class="bit-1"><strong>Ten muy presente que para compensar el retraso de ahorro de 10 años, requerirás un 50% adicional. Por eso, la edad ideal para comenzar el ahorro voluntario es desde los 20 años; aunque la mayoría comienza en promedio a los 30 años.</strong></p>
            <h4 class="bit-1">¡No postergues más tu ahorro: asegura y brinda tranquilidad a tu vida futura!</h4>
        </div>
        <p class="bit-1"><sup>*</sup> Fuente: axainforma.com / Análisis Axa México con datos OCDE</p>
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