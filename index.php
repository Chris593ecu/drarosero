<?php
require_once __DIR__ . '/config.php'
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Sitio oficial de la Dra. María Fernanda Rosero Franco, Directora General de Eternal Medic y Especialista en Medicina Capilar." />
    <title>
        Dra. María Fernanda Rosero Franco | Directora General Eternal Medic
    </title>

    <meta name="description" content="Sitio oficial de la Dra. María Fernanda Rosero Franco, Directora General de Eternal Medic en Guayaquil. Medicina capilar, diagnóstico de alopecia, psoriasis y salud integral." />
    <meta name="keywords" content="Dra Maria Fernanda Rosero, Eternal Medic, medicina capilar Guayaquil, tratamiento para la caida de cabello, tratamiento alopecia, psoriasis capilar, dermatitis seborreica, tricoscopia digital, centro medico Guayaquil" />
    <meta name="robots" content="index, follow" />

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= BASE_URL ?>" />

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Dra. María Fernanda Rosero Franco | Directora General Eternal Medic" />
    <meta property="og:description" content="Medicina Capilar y Salud Integral en Guayaquil. Diagnóstico y tratamiento avanzado para patologías del cuero cabelludo." />
    <meta property="og:image" content="<?= BASE_URL ?>img/dra-de-pie.webp" />
    <meta property="og:url" content="<?= BASE_URL ?>" />
    <meta property="og:site_name" content="Eternal Medic - Centro Médico Capilar" />
    <meta property="og:locale" content="es_EC" />

    <!-- Logo -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>img/logo.webp" />

    <!-- Google Search Verification (URGENTE)-->
    <!-- <meta name="google-site-verification" content="APi_XmP8alRoBHkGkAUMZG2MXdAEioZ9rKtAKAqjiXU" /> -->


    <!-- Bootstrap 5 CSS CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/nav.css" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalBusiness",
            "name": "Eternal Medic - Centro Médico Capilar",
            "url": "<?= BASE_URL ?>",
            "logo": "<?= BASE_URL ?>img/logo.webp",
            "image": "<?= BASE_URL ?>img/dra-de-pie.webp",
            "description": "Centro médico para salud y medicina capilar, diagnóstico de afecciones del cuero cabelludo y consulta médica integral.",
            "medicalSpecialty": [
                "Trichology",
                "PrimaryCare"
            ],
            "founder": {
                "@type": "Physician",
                "name": "Dra. María Fernanda Rosero Franco",
                "jobTitle": "Directora General en Medicina Capilar"
            },
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Guayaquil",
                "addressRegion": "Guayas",
                "addressCountry": "EC"
            },
            "areaServed": "EC"
        }
    </script>

</head>

<body>
    <!-- Navegación reutilizable -->
    <?php require_once BASE_PATH . 'includes/nav.php'; ?>

    <!-- 1. Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <span class="badge bg-primary px-3 py-2 mb-3">
                        Centro Médico Tipo A
                    </span>
                    <h1 class="display-5 fw-bold text-dark">
                        Dra. María Fernanda Rosero Franco
                    </h1>
                    <p class="lead text-medical fw-semibold mb-3">
                        Directora General del Centro Médico Capilar "Eternal Medic" <br />
                        <span class="text-secondary fw-normal">
                            Salud y Medicina Capilar
                        </span>
                    </p>
                    <p class="text-muted mb-4">
                        Comprometidos con la excelencia médica integral y la
                        innovación en tratamientos capilares avanzados. Un
                        espacio diseñado para brindar diagnóstico preciso y
                        atención multidisciplinaria de alto nivel.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <button type="button"
                            onclick="abrirWhatsApp()"
                            class="btn btn-primary btn-lg bg-medical border-0">
                            <i class="bi bi-whatsapp me-2"></i>Agendar Consulta
                        </button>
                        <!-- <a
                            href="#centro-medico"
                            class="btn btn-outline-secondary btn-lg">
                            Especialidades Médicas y Medicina aplicada
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <img
                        src="img/dra-de-pie.webp"
                        alt="Dra. María Fernanda Rosero Franco"
                        class="img-fluid rounded-4 shadow-lg" />
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Centro Médico Eternal Medic & Especialidades -->
    <section id="centro-medico" class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-medical">
                    Centro Médico Capilar "Eternal Medic"
                </h2>
                <p class="text-muted">
                    Instalaciones acreditadas Tipo A para la atención médica
                    integral de tu familia
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3 text-center">
                        <div class="fs-1 text-medical mb-2">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <h4 class="h5 fw-bold">Medicina Capilar</h4>
                        <p class="text-muted small">
                            Diagnóstico y tratamiento avanzado para
                            patologías del cuero cabelludo por la Dra.
                            Rosero.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3 text-center">
                        <div class="fs-1 text-medical mb-2">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <h4 class="h5 fw-bold">Medicina General</h4>
                        <p class="text-muted small">
                            Atención prioritaria en medicina general
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3 text-center">
                        <div class="fs-1 text-medical mb-2">
                            <i class="bi bi-bandaid"></i>
                        </div>
                        <h4 class="h5 fw-bold">Obstetricia</h4>
                        <p class="text-muted small">
                            Atención médica especializada en evaluación femenina.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Trayectoria y Dirección -->
    <section id="trayectoria" class="py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img
                        src="img/dra-hair.webp"
                        alt="Trayectoria Médica"
                        class="img-fluid rounded-4 shadow" />
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <h2 class="fw-bold text-medical mb-3">
                        Trayectoria y Compromiso Médico
                    </h2>
                    <p class="text-muted">
                        La Dra. María Fernanda Rosero Franco lidera el
                        Centro Médico y de Especialidades "Eternal Medic"
                        bajo el principio de rigor científico y trato
                        humano.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Directora General de Eternal Medic.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Médica especialista en diagnóstico y salud capilar.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            Coordinación e integración de especialidades médicas clave.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Testimonios -->
    <section id="testimonios" class="py-5 bg-white">
        <div class="container py-4">
            <h2 class="fw-bold text-medical text-center mb-5">
                Experiencia de Nuestros Pacientes
            </h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded-3 shadow-sm">
                        <p class="fst-italic text-muted">
                            "Excelente atención en el centro médico. La Dra.
                            Rosero me dio un diagnóstico capilar preciso
                            desde la primera consulta."
                        </p>
                        <p class="fw-bold mb-0 text-dark">
                            - Paciente de Medicina Capilar
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 bg-light rounded-3 shadow-sm">
                        <p class="fst-italic text-muted">
                            "Instalaciones impecables y especialidades
                            completas. Muy buena organización por parte de
                            la dirección médica."
                        </p>
                        <p class="fw-bold mb-0 text-dark">
                            - Paciente de Especialidades
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Preguntas Frecuentes (FAQ) -->
    <section id="faq" class="py-5 bg-light">
        <div class="container py-4">
            <h2 class="fw-bold text-medical text-center mb-5">
                Preguntas Frecuentes
            </h2>
            <div class="accordion shadow-sm" id="accordionFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            ¿Dónde está ubicado el Centro Médico "Eternal Medic"?
                        </button>
                    </h2>
                    <div
                        id="faq1"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Nos encontramos ubicados en la ciudad de Guayaquil. Puedes
                            agendar tu cita previa para coordinar la
                            atención con cualquiera de nuestros
                            profesionales de la salud.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            ¿Cómo agendar una cita para una valoración?
                        </button>
                    </h2>
                    <div
                        id="faq2"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Puede hacer clic en el botón de <a
                                onclick="abrirWhatsApp()"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-decoration-none fw-bold text-success">
                                <i class="bi bi-whatsapp me-1"></i>WhatsApp
                            </a> para comunicarse con el equipo de la Dra. Rosero Franco María Fernanda.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Botón Flotante de WhatsApp -->
    <a
        onclick="abrirWhatsApp()"
        class="whatsapp-float"
        target="_blank"
        aria-label="Contacto WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Footer reutilizable -->
    <?php require_once 'includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>js/whatsapp.js"></script>
</body>

</html>
