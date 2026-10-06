<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="¿Notas parches circulares sin cabello o zonas despobladas de repente? Diagnóstico y tratamiento médico especializado para Alopecia Areata con la Dra. María Fernanda Rosero Franco." />

    <!-- Meta Etiquetas SEO Básicas -->
    <meta name="description" content="¿Notas parches circulares sin cabello o zonas despobladas de repente? Diagnóstico y tratamiento médico especializado para Alopecia Areata con la Dra. María Fernanda Rosero Franco." />
    <meta name="keywords" content="alopecia areata, parches calvos, caida de cabello en monedas, tratamiento alopecia areata Guayaquil, tricoscopia capilar, repoblación capilar, Dra Maria Fernanda Rosero, Eternal Medic" />
    <meta name="robots" content="index, follow" />

    <!-- URL Canónica -->
    <link rel="canonical" href="<?= SEO_URL ?>capilar/alopecia-areata.php" />

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Alopecia Areata: Tratamiento Médico de Parches Capilares | Dra. María Fernanda Rosero Franco" />
    <meta property="og:description" content="¿Caída repentina en forma de monedas o parches lisos? Diagnóstico tricoscópico y tratamiento médico para detener la respuesta autoinmune y estimular la repoblación capilar." />
    <meta property="og:image" content="<?= SEO_URL ?>img/alopecia-areata1.webp" />
    <meta property="og:url" content="<?= SEO_URL ?>capilar/alopecia-areata.php" />
    <meta property="og:site_name" content="Eternal Medic - Centro Médico Capilar" />
    <meta property="og:locale" content="es_EC" />


    <title>Alopecia Areata: Tratamiento Médico de Parches Capilares | Dra. María Fernanda Rosero Franco</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- Estilos CSS Globales -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/nav.css" />

    <!-- Schema.org JSON-LD (Página Médica / Diagnóstico y Tratamiento de Alopecia Areata) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalWebPage",
            "name": "Alopecia Areata: Tratamiento Médico de Parches Capilares",
            "url": "<?= SEO_URL ?>capilar/alopecia-areata.php",
            "description": "Evaluación clínica, tricoscopia y tratamiento inmunomodulador para la Alopecia Areata.",
            "about": [{
                "@type": "MedicalCondition",
                "name": "Alopecia Areata"
            }],
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
                            Alerta Médica Autoinmune
                        </span>
                        <h1 class="display-5 fw-bold text-dark mb-4">
                            ¿Caída Repentina en Formas de "Monedas" o Parches Lisos? Podría ser Alopecia Areata
                        </h1>

                        <!-- LISTA DE SÍNTOMAS DE IMPACTO (DIRECTA AL DOLOR) -->
                        <div class="row justify-content-center text-start g-3 my-4">
                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-patch-minus-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Áreas Circulares Completamente Calvas</h2>
                                        <p class="small text-muted mb-0">Aparición repentina de huecos lisos sin cabello en la cabeza, barba o cejas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-lightning-charge-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Avanza Rápido y Sin Previo Aviso</h2>
                                        <p class="small text-muted mb-0">En cuestión de días o semanas los parches crecen o se multiplican rápidamente.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-heart-break-fill text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Gran Impacto Emocional y Estrés</h2>
                                        <p class="small text-muted mb-0">Ansiedad e inseguridad al intentar peinarte o esconder las zonas afectadas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-5">
                                <div class="d-flex align-items-start bg-white p-3 rounded shadow-sm border-start border-4 border-danger">
                                    <i class="bi bi-shield-exclamation text-danger fs-4 me-3 mt-1"></i>
                                    <div>
                                        <h2 class="h6 fw-bold text-dark mb-1">Ataque del Sistema Inmune</h2>
                                        <p class="small text-muted mb-0">Tus propias defensas atacan por error la raíz del cabello deteniendo su crecimiento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="fs-5 text-dark fw-semibold mb-4">
                            La alopecia areata requiere tratamiento médico inmediato para frenar el ataque folicular y reactivar el crecimiento.
                        </p>

                        <!-- BOTÓN DE ACCIÓN ÚNICO -->
                        <div class="d-flex justify-content-center">
                            <button type="button" onclick="abrirWhatsApp()" class="btn btn-success btn-lg px-5 py-3 shadow-sm">
                                <i class="bi bi-whatsapp me-2"></i>Agendar Consulta Médica con la Dra. Rosero
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- 2. SECCIÓN DE SÍNTOMAS Y EXPLICACIÓN CLÍNICA -->
        <section class="py-5 bg-white" id="caracteristicas">
            <div class="container py-3">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-medical">¿Cómo identificar la Alopecia Areata?</h2>
                    <p class="text-muted fs-5">Comprender la naturaleza de esta condición autoinmune es el primer paso para detener su avance.</p>
                </div>

                <div class="row g-4">
                    <!-- Tarjeta 1: Parches lisos -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-circle"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Piel Lisa e Intacta</h3>
                                <p class="text-muted small">
                                    A diferencia de las micosis o infecciones, la zona calva suele verse suave, sin cicatrices ni descamación visible.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 2: Distribución Múltiple -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-danger-subtle text-danger fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-grid-1x2-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Cabeza, Barba o Cejas</h3>
                                <p class="text-muted small">
                                    Puede presentarse en una sola zona o en múltiples parches en el cuero cabelludo, la barba, pestañas o vello corporal.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 3: Pelos en Signo de Exclamación -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-warning-subtle text-warning fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-exclamation-triangle-fill"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Bordes Activos</h3>
                                <p class="text-muted small">
                                    En la periferia del parche se aprecian cabellos más delgados en la base que se desprenden con suma facilidad.
                                </p>
                            </div>
                        </article>
                    </div>

                    <!-- Tarjeta 4: El Folículo Sigue Vivo -->
                    <div class="col-md-6 col-lg-3">
                        <article class="card h-100 border-0 shadow-sm p-3 border-start border-4 border-success">
                            <div class="card-body text-center">
                                <div class="feature-icon bg-success-subtle text-success fs-2 rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </div>
                                <h3 class="h5 fw-bold text-dark">Reversible con Tratamiento</h3>
                                <p class="text-muted small">
                                    El folículo piloso permanece vivo. Con el tratamiento adecuado, es posible modular la inmunidad y estimular la repoblación.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. CASOS DE ÉXITO: Antes y Después -->
        <section class="py-5 bg-light border-top border-bottom" id="casos-exito">
            <div class="container py-3">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-medical">Casos Clínicos de Éxito</h2>
                    <p class="text-muted fs-5">Evolución de repoblación capilar bajo la supervisión médica de la Dra. María Fernanda Rosero Franco.</p>
                </div>

                <div class="row g-4">
                    <!-- Caso 1 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/alopecia-areata1.webp" class="card-img-top img-fluid" alt="Antes y Después Alopecia Areata Caso 1" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 3 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (31 años)</h3>
                                <p class="card-text text-muted small">
                                    Placa única de tamaño extenso en zona de coronilla. Repoblación completa con cabellos nuevos en el área mediante inmunomodulación y mesoterapia focalizada.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 2 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/alopecia-areata2.webp" class="card-img-top img-fluid" alt="Antes y Después Alopecia Areata Caso 2" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 16 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (9 años)</h3>
                                <p class="card-text text-muted small">
                                    Parche en zona de coronilla asociados a estrés agudo. Detención de la progresión y recuperación del grosor y densidad del cabello.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Caso 3 -->
                    <article class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            <figure class="mb-0">
                                <img src="<?= BASE_URL ?>img/alopecia-areata3.webp" class="card-img-top img-fluid" alt="Antes y Después Alopecia Areata en Barba Caso 3" loading="lazy">
                            </figure>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Evolución a 12 Semanas</span>
                                <h3 class="h5 fw-bold">Paciente Femenina (23 años)</h3>
                                <p class="card-text text-muted small">
                                    Alopecia Areata en línea media. Tratamiento infiltrativo intralesional con cierre total del parche y crecimiento uniforme.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- 4. LLAMADO A LA ACCIÓN FINAL (CTA) -->
        <section class="py-5 bg-white">
            <div class="container py-3 text-center">
                <h3 class="fw-bold text-medical mb-3">No esperes a que los parches se extiendan más</h3>
                <p class="text-muted max-w-75 mx-auto mb-4 fs-5">
                    Un diagnóstico tricoscópico a tiempo frena la respuesta autoinmune y acelera el proceso de recuperación del pelo perdido.
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
</body>

</html>
