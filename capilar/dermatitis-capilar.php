<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="¿Sufres de grasa extrema, picazón e irritación en el cuero cabelludo? Identifica si tienes Dermatitis Seborreica y evalúa tus síntomas con la Dra. María Fernanda Rosero Franco." />
    <title>Dermatitis Seborreica Capilar: Síntomas y Tratamiento | Dra. María Fernanda Rosero Franco</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- Estilos CSS Globales -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/nav.css" />
</head>

<body>
    <!-- Navegación reutilizable -->
    <?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main id="main-content">
        <!-- 1. HERO SECTION: Enfoque en Pregunta e Identificación del Dolor -->
        <header class="hero-section py-5 bg-light border-bottom">
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-10 mx-auto text-center">
                        <span class="badge bg-warning text-dark px-3 py-2 mb-3 text-uppercase tracking-wider">
                            Alerta Médica Capilar
                        </span>
                        <h1 class="display-5 fw-bold text-dark mb-4">
                            ¿Exceso de Grasa, Picazón y Costras Amarillas? Podría ser Dermatitis Seborreica
                        </h1>

                        <!-- LISTA DE SÍNTOMAS DE IMPACTO (SENSIACIONALISTA / DIRECTA AL DOLOR) -->
                        <div class="row justify-content-center text-start g-3 my-4">
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-droplet-fill text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Grasa Pegajosa y Mal Olor</h2>
                                        <p class="small text-muted mb-0">Sensación de cabello sucio o sebo pegajoso a las pocas horas de haberlo lavado.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-fire text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Picazón e Inflamación Folicular</h2>
                                        <p class="small text-muted mb-0">Ardor desesperante que asfixia el folículo piloso y debilita la raíz del cabello.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-layers-half text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Escamas Amarillentas Adheridas</h2>
                                        <p class="small text-muted mb-0">Costras grasosas pegadas al cuero cabelludo que se desprenden en grumos al rascarse.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-person-exclamation text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Brote en Cejas, Nariz y Oídos</h2>
                                        <p class="small text-muted mb-0">Enrojecimiento y descamación que se extienden al rostro, aletas nasales y cejas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-5 text-dark fw-semibold mb-4">
                            ¿Te identificaste con más de uno? El hongo de la seborrea podría estar dañando tus folículos.
                        </p>

                        <!-- BOTONES DE ACCIÓN -->
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="#test-capilar" class="btn btn-primary btn-lg bg-medical border-0 px-4 py-3">
                                <i class="bi bi-clipboard-check me-2"></i>Hacer Test Evaluador Capilar
                            </a>
                            <button type="button" onclick="abrirWhatsApp()" class="btn btn-outline-success btn-lg px-4 py-3">
                                <i class="bi bi-whatsapp me-2"></i>Consulta Directa con la Dra. Rosero
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- 2. SECCIÓN DE SÍNTOMAS Y DOLOR SOCIAL -->
        <section class="py-5 bg-white" id="sintomas">
            <div class="container py-3">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-medical">El impacto de la Dermatitis Seborreica en tu día a día</h2>
                    <p class="text-muted fs-5">La sobreproducción de sebo e inflamación requieren atención dermatológica antes de causar la pérdida permanente del cabello.</p>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1: Sebo y Grasa -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-droplet-half"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Seborrea y Brillo Excesivo</h3>
                                <p class="text-muted small">
                                    Piel cabelluda extremadamente oleosa. El sebo acumulado obstruye los poros impidiendo la oxigenación adecuada del folículo.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 2: Escamas Cerosa -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Escamas Amarillas y Cerosas</h3>
                                <p class="text-muted small">
                                    Grumos de caspa grasosa de color amarillento que se pegan a la raíz del cabello y provocan una sensación de suciedad constante.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 3: Picazón y Brotes Facial -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-emoji-expressionless-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Enrojecimiento Facial</h3>
                                <p class="text-muted small">
                                    Aparecen placas rojas y descamativas en cejas, aletas nasales, detrás de las orejas e incluso en el pecho o la espalda.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 4: Caída Secundaria de Cabello -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3 border-start border-4 border-warning">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning text-dark fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-fall-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Debilitamiento y Caída</h3>
                                <p class="text-muted small">
                                    El ambiente graso e inflamatorio debilita la fijación de la hebra capilar, ocasionando un desprendimiento prematuro del cabello.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SECCIÓN INTERACTIVA: TEST CAPILAR REUTILIZABLE -->
        <section class="py-5 bg-light border-top border-bottom" id="test-capilar">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <span class="badge bg-primary mb-2">Herramienta Orientativa</span>
                        <h2 class="fw-bold text-medical mb-3">Evaluador de Sintomatología Capilar</h2>
                        <p class="text-muted mb-4">
                            Responde estas breves preguntas para determinar si tus síntomas corresponden a Dermatitis Seborreica, Psoriasis o Caspa Común.
                        </p>

                        <!-- Contenedor del Cuestionario interactivo gestionado por JS -->
                        <div id="quiz-container" class="card shadow-sm border-0 p-4 text-start bg-white" data-afeccion="seborrea">
                            <!-- El script evaluador-capilar.js renderiza las preguntas aquí -->
                            <div class="text-center py-4">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Cargando test...</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- 4. CASOS DE ÉXITO: Antes y Después -->
        <section class="py-5 bg-white" id="casos-exito">
            <div class="container py-3">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-medical">Casos Clínicos de Éxito</h2>
                    <p class="text-muted fs-5">Resultados reales obtenidos bajo el protocolo médico de la Dra. María Fernanda Rosero Franco.</p>
                </div>

                <div class="row g-4">
                    <!-- Caso 1 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/dermatitis-caso-1.webp" class="card-img-top img-fluid" alt="Antes y Después Dermatitis Seborreica Caso 1" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 6 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Masculino (34 años)</h3>
                                <p class="card-text text-muted small">
                                    Seborrea severa con costras amarillentas e inflamación extendida a la frente. Control total del sebo y eliminación del hongo mediante protocolo médico.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 2 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/dermatitis-caso-2.webp" class="card-img-top img-fluid" alt="Antes y Después Dermatitis Seborreica Caso 2" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 8 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (41 años)</h3>
                                <p class="card-text text-muted small">
                                    Cuadro de brote facial e irritación severa en cuero cabelludo con caída secundaria. Remisión de la inflamación y fortalecimiento de la fibra capilar.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 3 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/dermatitis-caso-3.webp" class="card-img-top img-fluid" alt="Antes y Después Dermatitis Seborreica Caso 3" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 10 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Masculino (26 años)</h3>
                                <p class="card-text text-muted small">
                                    Descamación grasa difusa y prurito inaguantable. Normalización del microbioma capilar y recuperación del aspecto saludable del cuero cabelludo.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- 5. LLAMADO A LA ACCIÓN FINAL (CTA) -->
        <section class="py-5 bg-light border-top">
            <div class="container py-3 text-center">
                <h3 class="fw-bold text-medical mb-3">Frena la dermatitis seborreica y protege la salud de tu cabello</h3>
                <p class="text-muted max-w-75 mx-auto mb-4 fs-5">
                    El exceso de sebo no corregido puede sofocar las raíces y desencadenar una caída acelerada. Agenda una evaluación especializada para un diagnóstico preciso.
                </p>
                <button type="button" onclick="abrirWhatsApp()" class="btn btn-success btn-lg px-5 py-3 fs-5 shadow-sm">
                    <i class="bi bi-whatsapp me-2"></i>Agendar Valoración con la Dra. Rosero Franco
                </button>
            </div>
        </section>
    </main>

    <!-- Botón Flotante de WhatsApp -->
    <a onclick="abrirWhatsApp()" class="whatsapp-float" target="_blank" aria-label="Contacto WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Footer reutilizable -->
    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>js/whatsapp.js?v=<?= filemtime(BASE_PATH . 'js/whatsapp.js') ?>"></script>
    <script src="<?= BASE_URL ?>js/evaluador-capilar.js?v=<?= filemtime(BASE_PATH . 'js/evaluador-capilar.js') ?>"></script>
</body>

</html>
