<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>


    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('img/fotos/imgupn.png') ?>" style="object-fit: cover; justify-content: center">
                <div class="container">
                    <div class="carousel-caption text-start">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('img/fotos/imgupn2.png') ?>" style="object-fit: contain">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('img/fotos/imgupn3.png') ?>" style="object-fit: cover">
                <div class="container">
                    <div class="carousel-caption text-end">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <div class="px-4 pt-5 my-5 text-center border-bottom bg-danger">
        <a class="display-4 fw-bold text-light mb-5" style="text-decoration: none" href="<?= base_url('ofertaeducativa') ?>">Consulta nuestra oferta educativa</a>

    </div>


    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo base_url('img/logos/moodle-icon-2.png') ?>" width="140" height="140">
                <h2 class="fw-normal">Plataforma Educativa</h2>
                <p>Sistema de enseñanza diseñado para crear y gestionar espacios de aprendizaje online</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="<?php echo base_url('img/logos/convocatoria.png') ?>"
                     class="rounded-circle border border-primary"
                     width="140" height="140">
                <h2 class="fw-normal">Convocatorías</h2>
                <p>Participa en las convocatorias de UPN</p>
                <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="<?php echo base_url('img/logos/oferta.png') ?>" class="rounded-circle border border-primary"
                     width="140" height="140">
                <h2 class="fw-normal">Oferta Educativa</h2>
                <p>Conoce los programas educativos de la UPN.</p>
                <!-- <p><a class="btn btn-secondary" disable href="#"> &raquo;</a></p> -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Universidad Pedagógica Nacional, <span
                            class="text-body-secondary">Unidad Teziutlán.</span></h2>
                <p class="lead text-justify">Es una Institución Pública de Educación Superior que dirige sus
                    funciones a la Formación, Actualización y Superación de Profesionales de la Educación, generando
                    sinergia, para intervenir, bajo un enfoque humanista, incluyente y sustentable en los procesos
                    educativos, dando respuesta a las necesidades sociales.</p>

                <p class="lead">
                    Los que integramos la UPN, Unidad Teziutlán, nos comprometemos a ofrecer servicios de calidad en
                    la formación, capacitación y profesionalización integral de los usuarios a través de la mejora
                    continua de sus funciones de docencia, investigación, difusión y extensión universitaria.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php echo base_url('img/fotos/imagen14.jpg') ?>" height="400" alt="">
            </div>
        </div>

        <hr class="featurette-divider">


        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('img/fotos/imagen13.jpg') ?>" height="400" alt="">
            </div>

            <div class="col-md-6">
                <h2 class="featurette-heading fw-normal lh-1">Nuestra <span class="text-body-secondary">Misión.</span>
                </h2>
                <p class="lead">Es una institución pública de educación superior con vocación nacional y plena
                    autonomía académica; se orienta a la formación y desarrollo de profesionales de la educación y a
                    la generación de conocimiento de acuerdo con las necesidades del país considerando la diversidad
                    sociocultural. A partir de sus funciones sustantivas se vincula con el sector educativo, con
                    organizaciones sociales e instituciones nacionales e internacionales, con el fin de atender la
                    problemática educativa y el fomento a la cultura.</p>
            </div>

        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Nuestra <span class="text-body-secondary">Visión.</span>
                </h2>
                <p class="lead">Es una institución pública de educación superior, autónoma y líder en el ámbito
                    educativo, que ha ganado prestigio nacional y reconocimiento internacional debido a la calidad y
                    pertinencia de su oferta educativa, la relevancia de su producción científica y su capacidad de
                    intervención en esta área. Tiene un lugar estratégico en la discusión e instrumentación crítica
                    de las políticas públicas educativas, y la atención a temas y problemas emergentes. Se distingue
                    por su vocación social y su compromiso ético con la justicia, la equidad y su especial
                    consideración a los grupos en situación de discriminación o exclusión social.</p>
            </div>
            <div class="col-md-5">
                <img src="<?php echo base_url('img/fotos/imagen10.jpg') ?>" height="400" alt="">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


<?= $this->endSection(); ?>