<?php global $site; ?>
<header class="masthead p-0" id="page-top">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"><div class="hero-slide slide-1 d-flex align-items-center justify-content-center text-center"><div class="hero-content"><p class="hero-eyebrow">Dermatologia premium</p><h1 class="text-uppercase hero-title"><?php echo $site['hero_title'] ?? 'Dra. Elena Ruiz'; ?></h1><h2 class="hero-subtitle text-white-50 mt-3 mb-5"><?php echo $site['hero_subtitle'] ?? ''; ?></h2><a class="btn btn-primary" href="#contact">Agendar valoracion</a></div></div></div>
            <div class="carousel-item"><div class="hero-slide slide-2 d-flex align-items-center justify-content-center text-center"><div class="hero-content"><p class="hero-eyebrow">Medicina y estetica</p><h1 class="text-uppercase hero-title">Confianza en cada consulta</h1><h2 class="hero-subtitle text-white-50 mt-3 mb-5">Un concepto visual que comunica calma, precision y una promesa clara de cuidado profesional.</h2><a class="btn btn-primary" href="#projects">Ver tratamientos</a></div></div></div>
            <div class="carousel-item"><div class="hero-slide slide-3 d-flex align-items-center justify-content-center text-center"><div class="hero-content"><p class="hero-eyebrow">Atencion personalizada</p><h1 class="text-uppercase hero-title">Piel sana, imagen segura</h1><h2 class="hero-subtitle text-white-50 mt-3 mb-5">Diseñado para atraer pacientes que valoran criterio medico, trato premium y resultados naturales.</h2><a class="btn btn-primary" href="#about">Conocer la clinica</a></div></div></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Anterior"><span class="carousel-control-prev-icon" aria-hidden="true"></span></button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Siguiente"><span class="carousel-control-next-icon" aria-hidden="true"></span></button>
    </div>
</header>
