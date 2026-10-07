<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="¿Cansado de la caspa blanca y el polvillo en la ropa? Descubre la causa real de la descamación capilar y evalúa tus síntomas con la Dra. María Fernanda Rosero Franco." />
    <title>Descamación Capilar y Caspa: Tratamiento Médico | Dra. María Fernanda Rosero Franco</title>
    <!-- Meta Etiquetas SEO Básicas -->
    <meta name="title" content="Descamación Capilar y Caspa: Tratamiento Médico | Dra. María Fernanda Rosero Franco" />
    <meta name="description" content="¿Cansado de la caspa blanca y el polvillo en la ropa? Descubre la causa real de la descamación capilar y evalúa tus síntomas con la Dra. María Fernanda Rosero Franco." />
    <meta name="keywords" content="caspa, descamación capilar, caspa seca, picazón cuero cabelludo, tratamiento caspa, tricología, Dra. María Fernanda Rosero Franco" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Dra. María Fernanda Rosero Franco" />

    <!-- URL Canónica -->
    <link rel="canonical" href="<?= SEO_URL ?>capilar/caspa.php" />

    <!-- Logo -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>img/logo.webp" />

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_EC" />
    <meta property="og:url" content="<?= SEO_URL ?>capilar/caspa.php" />
    <meta property="og:title" content="Tratamiento Médico para la Caspa y Descamación Capilar | Dra. Rosero" />
    <meta property="og:description" content="Elimina el polvillo blanco y la picazón de raíz. Realiza el test evaluador capilar o agenda una valoración médica personalizada." />
    <meta property="og:image" content="<?= SEO_URL ?>img/dermatitis-capilar2.webp" />
    <meta property="og:image:secure_url" content="<?= SEO_URL ?>img/dermatitis-capilar2.webp" />
    <meta property="og:image:type" content="image/webp" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Tratamiento médico para descamación capilar y caspa" />
    <meta property="og:site_name" content="Dra. María Fernanda Rosero Franco" />

    <!-- Twitter / X Cards -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?= SEO_URL ?>capilar/caspa.php" />
    <meta name="twitter:title" content="Tratamiento Médico para la Caspa y Descamación Capilar | Dra. Rosero" />
    <meta name="twitter:description" content="Elimina el polvillo blanco y la picazón de raíz. Consulta médica y test evaluador capilar en línea." />
    <meta name="twitter:image" content="<?= SEO_URL ?>img/dermatitis-capilar2.webp" />

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- Estilos CSS Globales -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/nav.css" />

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": "MedicalWebPage",
                    "@id": "<?= SEO_URL ?>capilar/caspa.php#webpage",
                    "url": "<?= SEO_URL ?>capilar/caspa.php",
                    "name": "Descamación Capilar y Caspa: Tratamiento Médico",
                    "description": "Evaluación médica y tratamiento para la eliminación de la caspa seca y la descamación capilar fina.",
                    "inLanguage": "es",
                    "about": [{
                        "@type": "MedicalCondition",
                        "name": "Dandruff",
                        "alternateName": "Caspa / Descamación Capilar"
                    }],
                    "author": {
                        "@type": "Physician",
                        "name": "Dra. María Fernanda Rosero Franco",
                        "jobTitle": "Médico Cirujano / Especialista Capilar",
                        "url": "<?= SEO_URL ?>"
                    }
                },
                {
                    "@type": "MedicalProcedure",
                    "name": "Valoración y Tratamiento Médico para Descamación Capilar",
                    "procedureType": "http://schema.org/NonInvasiveProcedure",
                    "description": "Diagnóstico tricoscópico y tratamiento personalizado para restaurar el manto hidrolipídico y controlar el recambio celular capilar.",
                    "bodyLocation": "Cuero cabelludo",
                    "performedBy": {
                        "@type": "Physician",
                        "name": "Dra. María Fernanda Rosero Franco"
                    }
                },
                {
                    "@type": "FAQPage",
                    "@id": "<?= SEO_URL ?>capilar/caspa.php#faq",
                    "mainEntity": [{
                            "@type": "Question",
                            "name": "¿Por qué aparece la caspa seca o la descamación fina?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Se produce por una aceleración en el ciclo de renovación celular de la piel cabelluda, frecuentemente detonada por deshidratación, sensibilidad o el uso de productos capilares abrasivos."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Por qué los champús anticaspa comerciales provocan efecto rebote?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Muchos champús comerciales contienen sulfatos y detergentes agresivos que eliminan los aceites naturales en exceso, provocando que el cuero cabelludo se resequen e irrite más, aumentando la descamación."
                            }
                        }
                    ]
                }
            ]
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
                        <span class="badge bg-info text-dark px-3 py-2 mb-3 text-uppercase tracking-wider">
                            Alerta Médica Capilar
                        </span>
                        <h1 class="display-5 fw-bold text-dark mb-4">
                            ¿Prisionero de la Caspa y la Descamación Fina? Elimínala de Raíz
                        </h1>

                        <!-- LISTA DE SÍNTOMAS DE IMPACTO (DIRECTA AL DOLOR) -->
                        <div class="row justify-content-center text-start g-3 my-4">
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-info h-100">
                                    <i class="bi bi-snow2 text-info fs-4 me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Polvillo Blanco en los Hombros</h2>
                                        <p class="small text-muted mb-0">Residuos constantes que caen sobre tu ropa y provocan incomodidad frente a los demás.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-info h-100">
                                    <i class="bi bi-wind text-info fs-4 me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Piel Cabelluda Tirante y Seca</h2>
                                        <p class="small text-muted mb-0">Sensación de resequedad extrema, tirantez y deshidratación al salir de la ducha.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-info h-100">
                                    <i class="bi bi-hand-index text-info fs-4 me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Picazón Intermitente e Incómoda</h2>
                                        <p class="small text-muted mb-0">Molestia constante que empeora con el calor, el uso de gorras o momentos de estrés.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-info h-100">
                                    <i class="bi bi-arrow-repeat text-info fs-4 me-3 mt-1" aria-hidden="true"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Efecto Rebote de Champús Comerciales</h2>
                                        <p class="small text-muted mb-0">Usas productos anticaspa convencionales que limpian un día y al siguiente aumentan la descamación.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-5 text-dark fw-semibold mb-4">
                            ¿Te identificaste? La caspa persistente es una alteración celular que requiere diagnóstico y tratamiento médico específico.
                        </p>

                        <!-- BOTONES DE ACCIÓN -->
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="#test-capilar" class="btn btn-primary btn-lg bg-medical border-0 px-4 py-3">
                                <i class="bi bi-clipboard-check me-2" aria-hidden="true"></i>Hacer Test Evaluador Capilar
                            </a>
                            <button type="button" onclick="abrirWhatsApp()" class="btn btn-outline-success btn-lg px-4 py-3">
                                <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Consulta Directa con la Dra. Rosero
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
                    <h2 class="fw-bold text-medical">Entendiendo la Descamación Capilar (Caspa)</h2>
                    <p class="text-muted fs-5">Cuando el ciclo de renovación celular se acelera, miles de células muertas se desprenden antes de tiempo.</p>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1: Descamación Seca -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-info-subtle text-info fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-cloud-snow-fill" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Caspa Seca Fina</h3>
                                <p class="text-muted small mb-0">
                                    Escamas pequeñas, blancas y volátiles que se desprenden fácilmente con el cepillado y caen de forma constante sobre los hombros.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 2: Resequedad Cutánea -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-info-subtle text-info fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-moisture" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Alteración de la Barrera Cutánea</h3>
                                <p class="text-muted small mb-0">
                                    Pérdida de la hidratación natural de la piel cabelluda debida al uso de químicos agresivos o champús con sulfatos fuertes.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 3: Sensibilidad e Irritación -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-exclamation-octagon-fill" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Sensibilidad y Prurito</h3>
                                <p class="text-muted small mb-0">
                                    Ganas frecuentes de rascarse generadas por la microinflamación epidérmica, afectando el bienestar diario y la concentración.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 4: Inseguridad Social -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3 border-start border-4 border-info">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-info text-dark fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-eye-slash-fill" aria-hidden="true"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Inseguridad Estética</h3>
                                <p class="text-muted small mb-0">
                                    Limitación al vestir prendas oscuras o negras y la constante necesidad de sacudirse la ropa en ambientes de trabajo o reuniones sociales.
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
                            Responde estas breves preguntas para verificar si tus síntomas responden a una Caspa/Descamación Simple o si existe sospecha de Psoriasis o Seborrea.
                        </p>

                        <!-- Contenedor del Cuestionario interactivo gestionado por JS -->
                        <div id="quiz-container" class="card shadow-sm border-0 p-4 text-start bg-white" data-afeccion="caspa">
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
                                <img src="<?= BASE_URL ?>img/dermatitis-capilar2.webp" class="card-img-top img-fluid" alt="Evolución de tratamiento para caspa en paciente femenina" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 4 Semanas</span>
                                <h3 class="h5 fw-bold text-dark">Paciente Femenina (28 años)</h3>
                                <p class="card-text text-muted small mb-0">
                                    Descamación severa por el uso continuado de geles y champús abrasivos. Eliminación total del polvillo blanco e hidratación del cuero cabelludo.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 2 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/dermatitis-capilar3.webp" class="card-img-top img-fluid" alt="Evolución de tratamiento para caspa en paciente masculino" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 6 Semanas</span>
                                <h3 class="h5 fw-bold text-dark">Paciente Masculino (22 años)</h3>
                                <p class="card-text text-muted small mb-0">
                                    Cuadro de caspa crónica asociada a episodios de estrés académico. Normalización del recambio celular y cese definitivo de la picazón.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 3 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/dermatitis-capilar1.webp" class="card-img-top img-fluid" alt="Evolución de tratamiento para descamación capilar" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 4 Semanas</span>
                                <h3 class="h5 fw-bold text-dark">Paciente Femenina (30 años)</h3>
                                <p class="card-text text-muted small mb-0">
                                    Resequedad con descamación persistente y falta de brillo. Restablecimiento del manto hidrolipídico mediante protocolo médico personalizado.
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
                <h3 class="fw-bold text-medical mb-3">Recupera la salud y la limpieza de tu cuero cabelludo</h3>
                <p class="text-muted max-w-75 mx-auto mb-4 fs-5">
                    No sigas adivinando con productos de supermercado. Obtén una valoración tricoscópica personalizada con la Dra. María Fernanda Rosero Franco.
                </p>
                <button type="button" onclick="abrirWhatsApp()" class="btn btn-success btn-lg px-5 py-3 fs-5 shadow-sm">
                    <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Agendar Valoración con la Dra. Rosero Franco
                </button>
            </div>
        </section>
    </main>

    <!-- Botón Flotante de WhatsApp -->
    <a href="#" onclick="abrirWhatsApp(); return false;" class="whatsapp-float" aria-label="Contacto por WhatsApp">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>

    <!-- Footer reutilizable -->
    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>js/whatsapp.js?v=<?= filemtime(BASE_PATH . 'js/whatsapp.js') ?>"></script>
    <script src="<?= BASE_URL ?>js/evaluador-capilar.js?v=<?= filemtime(BASE_PATH . 'js/evaluador-capilar.js') ?>"></script>
</body>

</html>
