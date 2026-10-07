<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="¿Notas entradas pronunciadas, claridad en la coronilla o pérdida general de densidad? Realiza el test de 6 preguntas y evalúa si sufres de Alopecia Androgenética o Efluvio Telógeno con la Dra. María Fernanda Rosero Franco." />
    <!-- Meta Etiquetas SEO Básicas -->
    <meta name="description" content="¿Notas entradas pronunciadas, claridad en la coronilla o pérdida de densidad? Realiza el test evaluador y consulta tratamientos para Alopecia Androgenética con la Dra. María Fernanda Rosero Franco." />
    <meta name="keywords" content="alopecia androgenetica, efluvio telogeno, caida de cabello, tratamiento alopecia Guayaquil, miniaturizacion folicular, densidad capilar, Dra Maria Fernanda Rosero, Eternal Medic" />
    <meta name="robots" content="index, follow" />

    <!-- URL Canónica -->
    <link rel="canonical" href="<?= SEO_URL ?>capilar/alopecia-androgenetica.php" />

    <!-- Logo -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>img/logo.webp" />

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Alopecia Androgenética y Caída Capilar: Tratamiento Médico | Dra. María Fernanda Rosero Franco" />
    <meta property="og:description" content="¿Entradas prominentes, coronilla despoblada o caída masiva? Identifica si sufres de Alopecia Androgenética o Efluvio Telógeno con nuestro evaluador de 6 preguntas." />
    <meta property="og:image" content="<?= BASE_URL ?>img/alopecia-androgenetica1.webp" />
    <meta property="og:url" content="<?= SEO_URL ?>capilar/alopecia-androgenetica.php" />
    <meta property="og:site_name" content="Eternal Medic - Centro Médico Capilar" />
    <meta property="og:locale" content="es_EC" />

    <title>Alopecia Androgenética y Caída Capilar: Tratamiento Médico | Dra. María Fernanda Rosero Franco</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- Estilos CSS Globales -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/nav.css" />

    <!-- Schema.org JSON-LD (Página Médica / Diagnóstico y Tratamiento) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalWebPage",
            "name": "Alopecia Androgenética y Caída Capilar: Evaluador y Tratamiento Médico",
            "url": "<?= SEO_URL ?>capilar/alopecia-androgenetica.php",
            "description": "Evaluación clínica y diferenciación diagnóstica entre Alopecia Androgenética y Efluvio Telógeno Agudo.",
            "about": [{
                    "@type": "MedicalCondition",
                    "name": "Alopecia Androgenética"
                },
                {
                    "@type": "MedicalCondition",
                    "name": "Efluvio Telógeno"
                }
            ],
            "author": {
                "@type": "Physician",
                "name": "Dra. María Fernanda Rosero Franco",
                "jobTitle": "Médica General - Formación y Enfoque en Tricología y Medicina Capilar",
                "medicalSpecialty": "PrimaryCare"
            },
            "publisher": {
                "@type": "MedicalBusiness",
                "name": "Eternal Medic - Centro Médico Capilar",
                "logo": "<?= SEO_URL ?>img/logo.webp",
                "url": "<?= SEO_URL ?>"
            }
        }
    </script>
</head>

<body>
    <!-- Navegación reutilizable -->
    <?php require_once BASE_PATH . 'includes/nav.php'; ?>

    <main id="main-content">
        <!-- 1. HERO SECTION: Enfoque en Pregunta e Identificación del Dolor -->
        <header class="hero-section py-5 bg-light border-bottom">
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-10 mx-auto text-center">
                        <span class="badge bg-danger text-white px-3 py-2 mb-3 text-uppercase tracking-wider">
                            Evaluación Capilar Progresiva
                        </span>
                        <h1 class="display-5 fw-bold text-dark mb-4">
                            ¿Entradas Prominentes, Coronilla Despoblada o Caída Masiva?
                        </h1>

                        <!-- LISTA DE SÍNTOMAS DE IMPACTO (DIRECTA AL DOLOR) -->
                        <div class="row justify-content-center text-start g-3 my-4">
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-arrow-down-right-circle-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Pérdida de Densidad Localizada</h2>
                                        <p class="small text-muted mb-0">Retroceso en la línea frontal (entradas) o clareo visible en la parte superior del cuero cabelludo.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-border-width text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Afinamiento del Cabello</h2>
                                        <p class="small text-muted mb-0">El cabello nace cada vez más delgado, corto y débil debido a la miniaturización del folículo.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-cloud-drizzle-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Caída Abundante al Peinar o Lavar</h2>
                                        <p class="small text-muted mb-0">Desprendimiento repentino de mechones en la ducha, cepillo o almohada (Efluvio Telógeno).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-people-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Factor Hereditario Hormonal</h2>
                                        <p class="small text-muted mb-0">Predisposición genética sensible a andrógenos (DHT) que acelera el ciclo folicular.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-5 text-dark fw-semibold mb-4">
                            Identificar si sufres de Alopecia Androgenética o Efluvio Telógeno es esencial para detener el avance antes de que sea irreversible.
                        </p>

                        <!-- BOTONES DE ACCIÓN -->
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="#test-capilar" class="btn btn-primary btn-lg bg-medical border-0 px-4 py-3">
                                <i class="bi bi-clipboard-check me-2"></i>Hacer Test Evaluador (6 Preguntas)
                            </a>
                            <button type="button" onclick="abrirWhatsApp()" class="btn btn-outline-success btn-lg px-4 py-3">
                                <i class="bi bi-whatsapp me-2"></i>Consulta Directa con la Dra. Rosero
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- 2. SECCIÓN DE SÍNTOMAS Y DIFERENCIACIÓN -->
        <section class="py-5 bg-white" id="sintomas">
            <div class="container py-3">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-medical">¿Androgenética o Efluvio Telógeno?</h2>
                    <p class="text-muted fs-5">Conoce las diferencias clave entre el afinamiento genético y la caída acelerada por estrés o factores sistémicos.</p>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1: Miniaturización -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-zoom-in"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Miniaturización Folicular</h3>
                                <p class="text-muted small">
                                    El folículo se reduce con cada ciclo, produciendo un hebra cada vez más fina hasta atrofiar la raíz por completo.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 2: Patrón Localizado -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-person-bounding-box"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Patrón Típico M/O</h3>
                                <p class="text-muted small">
                                    En hombres afecta entradas y coronilla. En mujeres suele manifestarse como un ensanchamiento de la raya central.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 3: Caída Masiva Aguda -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-exclamation-circle-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Efluvio Telógeno Agudo</h3>
                                <p class="text-muted small">
                                    Caída difusa por toda la cabeza desencadenada por estrés, déficit vitamínico, postparto o cambios metabólicos.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 4: Diagnóstico y Recuperación -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3 border-start border-4 border-success">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-success-subtle text-success fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-capsule-solid"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Tratamiento Antiandrógeno</h3>
                                <p class="text-muted small">
                                    Protocolos médicos combinados para bloquear la DHT, engrosar el folículo debilitado y estimular nueva densidad.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SECCIÓN INTERACTIVA: TEST CAPILAR DE 6 PREGUNTAS -->
        <section class="py-5 bg-light border-top border-bottom" id="test-capilar">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <span class="badge bg-primary mb-2">Herramienta Diagnóstica Orientativa</span>
                        <h2 class="fw-bold text-medical mb-3">Evaluador de Patrón Capilar (6 Preguntas)</h2>
                        <p class="text-muted mb-4">
                            Responde con honestidad estas 6 preguntas para diferenciar si tu caída corresponde a un proceso Androgenético o un Efluvio Telógeno.
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
                    <p class="text-muted fs-5">Resultados reales obtenidos mediante tratamiento médico tricológico personalizado.</p>
                </div>

                <div class="row g-4">
                    <!-- Caso 1 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/alopecia-androgenetica1.webp" class="card-img-top img-fluid" alt="Antes y Después Alopecia Androgenética Masculina" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 6 Meses</span>
                                <h3 class="h5 fw-bold">Paciente Masculino (33 años)</h3>
                                <p class="card-text text-muted small">
                                    Alopecia Androgenética grado III en entradas. Recuperación de densidad folicular mediante mesoterapia y terapia oral.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 2 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/alopecia-androgenetica2.webp" class="card-img-top img-fluid" alt="Antes y Después Alopecia Androgenética Femenina" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 5 Meses</span>
                                <h3 class="h5 fw-bold">Paciente Masculino (38 años)</h3>
                                <p class="card-text text-muted small">
                                    Patrón masculino difuso con pérdida de densidad en la raya central. Redensificación y fortalecimiento notable de la fibra capilar.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 3 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/alopecia-androgenetica3.webp" class="card-img-top img-fluid" alt="Antes y Después Efluvio Telógeno" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 4 Meses</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (29 años)</h3>
                                <p class="card-text text-muted small">
                                    Efluvio Telógeno severo post-estrés. Detención inmediata del desprendimiento e inducción de la fase anágena de crecimiento.
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
                <h3 class="fw-bold text-medical mb-3">El tiempo es el factor más determinante para salvar tu cabello</h3>
                <p class="text-muted max-w-75 mx-auto mb-4 fs-5">
                    Un folículo atrofiado no vuelve a producir pelo. Inicia tu protocolo de recuperación capilar con la Dra. María Fernanda Rosero Franco.
                </p>
                <button type="button" onclick="abrirWhatsApp()" class="btn btn-success btn-lg px-5 py-3 fs-5 shadow-sm">
                    <i class="bi bi-whatsapp me-2"></i>Agendar Valoración Médica con la Dra. Rosero
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
    <script src="<?= BASE_URL ?>js/whatsapp.js?v= <?= filemtime(BASE_PATH . 'js/whatsapp.js') ?>"></script>
    <script src="<?= BASE_URL ?>js/evaluador-androgenetica.js?v=<?= filemtime(BASE_PATH . 'js/evaluador-androgenetica.js') ?>"></script>
</body>

</html>
