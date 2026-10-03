<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="¿Sufres de caída masiva de cabello al peinarte o ducharme? Descubre si tienes Efluvio Telógeno o Alopecia Androgenética y haz el test evaluador con la Dra. María Fernanda Rosero Franco." />
    <title>Efluvio Telógeno: Caída Masiva y Repentina de Cabello | Dra. María Fernanda Rosero Franco</title>

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
                            Alerta Capilar Aguda
                        </span>
                        <h1 class="display-5 fw-bold text-dark mb-4">
                            ¿Caída Masiva al Lavarte o Peinarte? Podría ser Efluvio Telógeno
                        </h1>

                        <!-- LISTA DE SÍNTOMAS DE IMPACTO (SENNSACIONALISTA / DIRECTA AL DOLOR) -->
                        <div class="row justify-content-center text-start g-3 my-4">
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-cloud-drizzle-fill text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Mechones Enteros en la Ducha</h2>
                                        <p class="small text-muted mb-0">Manojos de cabello que se desprenden al enjuagarte, cepillarte o tocarte la cabeza.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-calendar-event-fill text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Aparición Repentina e Inesperada</h2>
                                        <p class="small text-muted mb-0">Comienza de forma drástica de 2 a 3 meses después de un evento estresante o enfermedad.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-moon-stars-fill text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Almohada y Ropa Llenas de Pelo</h2>
                                        <p class="small text-muted mb-0">Causa constante de angustia al despertar o ver la ropa cubierta de cabellos desprendidos.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-warning">
                                    <i class="bi bi-activity text-warning fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Desencadenante Sistémico Oculto</h2>
                                        <p class="small text-muted mb-0">Estrés, postparto, déficit de hierro, dietas estrictas, cirugías o secuelas virales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-5 text-dark fw-semibold mb-4">
                            El efluvio telógeno acelera el paso de miles de folículos a fase de caída. ¡Frenarlo a tiempo evita la pérdida de densidad generalizada!
                        </p>

                        <!-- BOTONES DE ACCIÓN -->
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="#test-capilar" class="btn btn-primary btn-lg bg-medical border-0 px-4 py-3">
                                <i class="bi bi-clipboard-check me-2"></i>Hacer Test Evaluador Capilar (6 Preguntas)
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
                    <h2 class="fw-bold text-medical">Entendiendo el Efluvio Telógeno</h2>
                    <p class="text-muted fs-5">Un diagnóstico oportuno permite frenar el desprendimiento y acelerar la fase de crecimiento de nuevos folículos.</p>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1: Desprendimiento Difuso -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-arrows-angle-expand"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Pérdida Generalizada</h3>
                                <p class="text-muted small">
                                    A diferencia de las alopecias focalizadas, el cabello se desprende de manera uniforme en todo el cuero cabelludo.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 2: Reducción del Volumen -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Pérdida de Coleta y Volumen</h3>
                                <p class="text-muted small">
                                    En cuestión de semanas se percibe una disminución drástica del grosor de la coleta o coleta de caballo en mujeres.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 3: Factor Desencadenante -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Desequilibrio Interno</h3>
                                <p class="text-muted small">
                                    Suele estar ligado a picos de cortisol (estrés), alteraciones tiroideas, déficit de ferritina o cuadros posfebriles.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 4: Reversibilidad -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3 border-start border-4 border-success">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-success-subtle text-success fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-arrow-repeat"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Potencial de Recuperación</h3>
                                <p class="text-muted small">
                                    Los folículos no están muertos. Con el tratamiento médico adecuado y estimulación bioactiva, el pelo vuelve a crecer.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SECCIÓN INTERACTIVA: TEST CAPILAR (REUTILIZA EVALUADOR DE 6 PREGUNTAS) -->
        <section class="py-5 bg-light border-top border-bottom" id="test-capilar">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <span class="badge bg-primary mb-2">Herramienta Orientativa</span>
                        <h2 class="fw-bold text-medical mb-3">Evaluador de Patrón Capilar (6 Preguntas)</h2>
                        <p class="text-muted mb-4">
                            Responde estas preguntas para verificar si tu caída corresponde a un Efluvio Telógeno agudo o si existe un componente Androgenético.
                        </p>

                        <!-- Contenedor del Cuestionario interactivo gestionado por JS -->
                        <div id="quiz-container" class="card shadow-sm border-0 p-4 text-start bg-white">
                            <!-- El script evaluador-androgenetica.js renderiza las preguntas aquí -->
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
                    <p class="text-muted fs-5">Resultados reales obtenidos mediante el tratamiento médico integrativo de la Dra. María Fernanda Rosero Franco.</p>
                </div>

                <div class="row g-4">
                    <!-- Caso 1 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/efluvio-caso-1.webp" class="card-img-top img-fluid" alt="Antes y Después Efluvio Telógeno Postparto" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 3 Meses</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (31 años)</h3>
                                <p class="card-text text-muted small">
                                    Efluvio telógeno severo postparto con pérdida difusa del 40% de densidad. Frenado inmediato de caída y brote masivo de nuevo pelo (baby hair).
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 2 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/efluvio-caso-2.webp" class="card-img-top img-fluid" alt="Antes y Después Efluvio por Estrés" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 4 Meses</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (26 años)</h3>
                                <p class="card-text text-muted small">
                                    Caída aguda tras periodo de alto estrés laboral y déficit de nutrientes. Recuperación total de la densidad y fortalecimiento de la fibra.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 3 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>assets/img/casos/efluvio-caso-3.webp" class="card-img-top img-fluid" alt="Antes y Después Efluvio Post-Enfermedad" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 4 Meses</span>
                                <h3 class="h5 fw-bold">Paciente Masculino (37 años)</h3>
                                <p class="card-text text-muted small">
                                    Efluvio telógeno reactivo tras proceso infeccioso febril. Restauración de la fase anágena del folículo y densificación progresiva.
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
                <h3 class="fw-bold text-medical mb-3">Detén la caída acelerada antes de perder más volumen</h3>
                <p class="text-muted max-w-75 mx-auto mb-4 fs-5">
                    Un análisis médico completo identificará la causa de raíz para estabilizar tu ciclo capilar de forma segura.
                </p>
                <button type="button" onclick="abrirWhatsApp()" class="btn btn-success btn-lg px-5 py-3 fs-5 shadow-sm">
                    <i class="bi bi-whatsapp me-2"></i>Agendar Valoración Médica con la Dra. Rosero Franco
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
    <script src="<?= BASE_URL ?>js/evaluador-androgenetica.js"></script>
</body>

</html>