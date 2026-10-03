<?php
require_once __DIR__ . '/../config.php';
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Comprende el círculo de afecciones capilares: desde la resequedad, dermatitis seborreica y caspa hasta la psoriasis capilar. Diagnóstico por la Dra. María Fernanda Rosero Franco." />
    <title>
        Salud y Medicina Capilar | Dra. María Fernanda Rosero Franco
    </title>

    <!-- Bootstrap 5 CSS CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <!-- Estilos CSS Globales -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/index.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>css/nav.css" />

</head>

<body>
    <!-- Navegación reutilizable -->
    <?php require_once BASE_PATH . 'includes/nav.php'; ?>

    <!-- 1. Hero Section Capilar -->
    <section class="hero-section py-5 bg-light border-bottom">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="badge bg-primary px-3 py-2 mb-3">
                        Enfoque Clínico Especializado
                    </span>
                    <h1 class="display-5 fw-bold text-dark">
                        El Círculo de las Enfermedades Capilares
                    </h1>
                    <p class="lead text-medical fw-semibold mb-3">
                        Entendimiento patológico del cuero cabelludo: De la sobre-humectación a la Psoriasis Capilar.
                    </p>
                    <p class="text-muted mb-4">
                        A lo largo de años de práctica e investigación en el ámbito de la salud capilar, la <strong>Dra. María Fernanda Rosero Franco</strong> ha establecido una perspectiva clínica clara sobre el desarrollo en cadena de las afecciones del cuero cabelludo.
                    </p>
                    <button type="button"
                        onclick="abrirWhatsApp()"
                        class="btn btn-primary btn-lg bg-medical border-0">
                        <i class="bi bi-whatsapp me-2"></i>Agendar Evaluación Capilar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Desarrollo del Círculo Patológico -->
    <section class="py-5 bg-white">
        <div class="container py-2">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-medical">Fases del Deterioro del Cuero Cabelludo</h2>
                <p class="text-muted">Un proceso defensivo del cuerpo que, sin tratamiento adecuado, genera un círculo vicioso.</p>
            </div>

            <div class="row g-4">
                <!-- Fase 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-warning text-dark fs-6 rounded-circle me-3 px-3 py-2">1</span>
                            <h3 class="h5 fw-bold mb-0">Origen y Sobre-humectación</h3>
                        </div>
                        <p class="text-muted small">
                            Todo inicia por agresiones iniciales como resequedad ambiental o el uso prolongado de agentes químicos exfoliantes. El cuerpo reacciona de forma defensiva intentando hidratar la piel mediante el sudor.
                        </p>
                        <p class="text-muted small">
                            Esta hiperhidrosis localizada altera el ecosistema del cuero cabelludo y crea un ambiente de sobre-humectación.
                        </p>
                    </div>
                </div>

                <!-- Fase 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-4 border-start border-4 border-warning">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-warning text-dark fs-6 rounded-circle me-3 px-3 py-2">2</span>
                            <h3 class="h5 fw-bold mb-0">Dermatitis Seborreica y Proliferación de Fúngica</h3>
                        </div>
                        <p class="text-muted small">
                            Al presentarse una zona constantemente húmeda, el hongo <strong>Malassezia</strong> (microorganismo que habita en nuestra piel) encuentra el ambiente ideal para proliferar velozmente.
                        </p>
                        <p class="text-muted small">
                            A este estado con exceso de oleosidad lo llamamos <strong>Dermatitis Seborreica</strong>. La Malassezia reseca la piel al desestructurar los lípidos, desprendiendo costras de piel deshidratada que conocemos popularmente como <strong>caspa</strong>. Esto desencadena inflamación, prurito (picazón) y eventual desprendimiento del folículo capilar.
                        </p>
                    </div>
                </div>

                <!-- Fase 3 -->
                <div class="col-lg-4 col-md-12">
                    <div class="card h-100 border-0 shadow-sm p-4 border-start border-4 border-danger bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-danger fs-6 rounded-circle me-3 px-3 py-2">3</span>
                            <h3 class="h5 fw-bold text-danger mb-0">Evolución a Psoriasis Capilar</h3>
                        </div>
                        <p class="text-muted small">
                            <strong>¿Puede la Dermatitis derivar en Psoriasis Capilar?</strong> En un periodo corto no ocurre de manera inmediata; sin embargo, si la dermatitis crónica no se trata adecuadamente, el cuadro inflamatorio progresivo avanza hacia etapas severas.
                        </p>
                        <p class="text-muted small">
                            Esta fase avanzada se caracteriza por la aparición de <strong>pústulas, prurito extremo, costras engrosadas en pabellones auriculares y cuello, así como sangrado</strong> por la fisura de las placas cutáneas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Llamado a la Acción Clínico -->
    <section class="py-5 bg-light border-top border-bottom">
        <div class="container py-3 text-center">
            <h3 class="fw-bold text-medical mb-3">¿Presentas síntomas de descamación, picazón o grasa excesiva?</h3>
            <p class="text-muted max-w-75 mx-auto mb-4">
                Un diagnóstico oportuno antes de alcanzar fases inflamatorias complejas es clave para restaurar la salud de tu cuero cabelludo y prevenir la pérdida folicular.
            </p>
            <button type="button"
                onclick="abrirWhatsApp()"
                class="btn btn-success btn-lg px-4">
                <i class="bi bi-whatsapp me-2"></i>Consultar con la Dra. María Fernanda Rosero
            </button>
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
    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>js/whatsapp.js"></script>
</body>

</html>