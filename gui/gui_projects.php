<?php global $site; $theme_url = get_template_directory_uri(); ?>
<section class="projects-section bg-black" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <p class="section-kicker">Servicios principales</p>
            <h2 class="contact-title">Una consulta que se siente premium</h2>
            <p class="contact-subtitle">El prototipo está pensado para transmitir experiencia, seguridad y una atención de alta categoria desde la primera visita.</p>
        </div>
        <section class="catalogo">
            <div class="grid">
                <div class="item" onclick="abrirModal('modal1')"><img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Retrato profesional de doctora dermatologa" loading="lazy"><div class="overlay"><span>+</span></div><h3 class="contact-subtitle"><?php echo $site['project_one_title']; ?></h3></div>
                <div class="item" onclick="abrirModal('modal2')"><img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Consulta estetica en clinica dermatologica" loading="lazy"><div class="overlay"><span>+</span></div><h3 class="contact-subtitle"><?php echo $site['project_two_title']; ?></h3></div>
                <div class="item" onclick="abrirModal('modal3')"><img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Chequeo medico en clinica" loading="lazy"><div class="overlay"><span>+</span></div><h3 class="contact-subtitle"><?php echo $site['project_three_title']; ?></h3></div>
            </div>
        </section>
        <div class="text-center mt-5"><p class="contact-subtitle">El lenguaje visual mezcla limpieza clinica, serenidad y una percepcion clara de profesionalismo superior.</p></div>
        <div class="modal" id="modal1"><div class="modal-content"><span class="close" onclick="cerrarModal('modal1')">&times;</span><h2><?php echo $site['project_one_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Dermatologia clinica" loading="lazy"><p><?php echo $site['project_one_text']; ?></p></div></div>
        <div class="modal" id="modal2"><div class="modal-content"><span class="close" onclick="cerrarModal('modal2')">&times;</span><h2><?php echo $site['project_two_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Consulta estetica" loading="lazy"><p><?php echo $site['project_two_text']; ?></p></div></div>
        <div class="modal" id="modal3"><div class="modal-content"><span class="close" onclick="cerrarModal('modal3')">&times;</span><h2><?php echo $site['project_three_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Tecnologia dermatologica" loading="lazy"><p><?php echo $site['project_three_text']; ?></p></div></div>
    </div>
</section>
