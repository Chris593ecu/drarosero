<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="¿Presentas escamas gruesas, picazón intensa y sangrado en el cuero cabelludo? Descubre si tienes Psoriasis Capilar y evalúa tus síntomas con la Dra. María Fernanda Rosero Franco." />
    <title>Psoriasis Capilar: Síntomas, Evaluación y Tratamiento | Dra. María Fernanda Rosero Franco</title>

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
                        <span class="badge bg-danger px-3 py-2 mb-3 text-uppercase tracking-wider">
                            Alerta Médica Capilar
                        </span>
                        <h1 class="display-5 fw-bold text-dark mb-4">
                            ¿Psoriasis Capilar o Caspa Común? Descubre la diferencia antes de perder más cabello
                        </h1>

                        <!-- LISTA DE SÍNTOMAS DE IMPACTO (AMARILLISTA / DIRECTA AL DOLOR) -->
                        <div class="row justify-content-center text-start g-3 my-4">
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-exclamation-triangle-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Escamas Gruesas en la Ropa</h2>
                                        <p class="small text-muted mb-0">Costras blancas y plateadas que caen a tus hombros y te obligan a no usar ropa oscura.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-fire text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Picazón Desesperante y Sangrado</h2>
                                        <p class="small text-muted mb-0">Ardor inaguantable que al rascarte fisura la piel dejando heridas abiertas y sangre.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-eye-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Placas visibles fuera del Cabello</h2>
                                        <p class="small text-muted mb-0">Parches rojos e inflamados que invaden tu frente, la nuca y detrás de las orejas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-x-circle-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Champús Comerciales Inútiles</h2>
                                        <p class="small text-muted mb-0">Gastas dinero en productos anticaspa de farmacia que solo empeoran la resequedad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-5 text-dark fw-semibold mb-4">
                            ¿Te identificaste con más de uno? No estás tratando una caspa común.
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
                    <h2 class="fw-bold text-medical">Más que un problema estético: El impacto diario</h2>
                    <p class="text-muted fs-5">La Psoriasis Capilar se manifiesta con señales muy claras que afectan tu calidad de vida.</p>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1: Escamas y Descamación -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Escamas Gruesas y Plateadas</h3>
                                <p class="text-muted small">
                                    Placas o costras elevadas y secas que se desprenden constantemente. No es caspa común; son placas psoriásicas duras de remover.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 2: Picazón e Incomodidad -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-hand-index-thumb-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Picazón e Irritación Intensa</h3>
                                <p class="text-muted small">
                                    Un ardor constante que tienta a rascarse. Al desprender las escamas, la piel debajo queda viva, inflamada y propensa a fisuras o sangrado.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 3: Áreas Extracapilares -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-primary-subtle text-primary fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-person-exclamation"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Límites del Cuero Cabelludo</h3>
                                <p class="text-muted small">
                                    Las placas suelen sobrepasar el nacimiento del cabello, apareciendo en la frente, detrás de las orejas, pabellones auriculares y la nuca.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 4: Dolor Social y Vergüenza -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3 border-start border-4 border-danger">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger text-white fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-heartbreak-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Impacto Emocional y Social</h3>
                                <p class="text-muted small">
                                    Evitar ropa oscura por miedo a los residuos en los hombros, sentir vergüenza en reuniones o peluquerías y la inseguridad al contacto social.
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
                            Responde estas breves preguntas para determinar qué tanto coinciden tus síntomas con la Psoriasis Capilar u otras afecciones capilares.
                        </p>

                        <!-- Contenedor del Cuestionario interactivo gestionado por JS -->
                        <div id="quiz-container" class="card shadow-sm border-0 p-4 text-start bg-white" data-afeccion="psoriasis">
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
                                <img src="<?= BASE_URL ?>assets/img/casos/psoriasis-caso-1.webp" class="card-img-top img-fluid" alt="Antes y Después Tratamiento Psoriasis Capilar Caso 1" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 12 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (38 años)</h3>
                                <p class="card-text text-muted small">
                                    Placas psoriásicas severas en nuca y zona occipital con descamación constante. Remisión completa de la inflamación y restauración de la barrera cutánea.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 2 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/psoriasis-caso-2.webp" class="card-img-top img-fluid" alt="Antes y Después Tratamiento Psoriasis Capilar Caso 2" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 8 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Masculino (45 años)</h3>
                                <p class="card-text text-muted small">
                                    Involucramiento de línea frontal y orejas. Reducción total de la picazón desde las primeras semanas y control de la descamación.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 3 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/psoriasis-caso-3.webp" class="card-img-top img-fluid" alt="Antes y Después Tratamiento Psoriasis Capilar Caso 3" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 16 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (29 años)</h3>
                                <p class="card-text text-muted small">
                                    Cuadro complejo de descamación difusa y sangrado folicular. Recuperación del volumen capilar y remisión de síntomas inflamatorios.
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
                <h3 class="fw-bold text-medical mb-3">No dejes que la psoriasis condicione tu día a día</h3>
                <p class="text-muted max-w-75 mx-auto mb-4 fs-5">
                    Cada caso de psoriasis capilar es único y requiere una evaluación clínica presencial para detener la inflamación y proteger tus folículos.
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
    <script src="<?= BASE_URL ?>js/whatsapp.js"></script>
    <script src="<?= BASE_URL ?>js/evaluador-capilar.js"></script>
</body>

</html>