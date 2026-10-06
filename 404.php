<?php
require_once __DIR__ . '/config.php'
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada - 404</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .error-card {
            max-width: 540px;
            width: 90%;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .error-code {
            font-size: 5rem;
            font-weight: 800;
            color: #0d6efd;
            line-height: 1;
        }

        .countdown-badge {
            font-size: 0.95rem;
            background-color: #e9ecef;
            color: #495057;
            padding: 0.5rem 1rem;
            border-radius: 50rem;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <?php require_once BASE_PATH . 'includes/nav.php'; ?>
            </div>
        </div>

        <hr class="my-4">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card error-card text-center p-4 p-md-5 my-2 shadow-sm">
                    <div class="card-body">
                        <!-- Icono y Código 404 -->
                        <div class="mb-3">
                            <i class="bi bi-exclamation-triangle-fill text-warning display-3"></i>
                        </div>
                        <h1 class="error-code mb-2">404</h1>
                        <h2 class="h4 fw-bold mb-3 text-dark">Página no encontrada</h2>

                        <!-- Mensaje -->
                        <p class="text-secondary mb-4 fs-6">
                            Perdón, pero esto no debía ocurrir. Le invito a regresar al inicio y continuar navegando por esta página.
                        </p>

                        <!-- Botón de acción principal -->
                        <div class="mb-4">
                            <a href="<?php echo BASE_URL; ?>" class="btn btn-primary btn-lg px-4 gap-2 shadow-sm">
                                <i class="bi bi-house-door-fill me-1"></i> Ir ahora al inicio
                            </a>
                        </div>

                        <!-- Contador regresivo -->
                        <div class="countdown-badge">
                            Será redirigido automáticamente en <strong id="contador" class="text-primary fs-6">10</strong> segundos...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script de redirección alineado con BASE_URL -->
    <script>
        (function() {
            let segundos = 10;
            const elementoContador = document.getElementById('contador');
            const urlDestino = "<?php echo BASE_URL; ?>";

            const intervalo = setInterval(() => {
                segundos--;
                if (elementoContador) {
                    elementoContador.textContent = segundos;
                }

                if (segundos <= 0) {
                    clearInterval(intervalo);
                    window.location.href = urlDestino;
                }
            }, 1000);
        })();
    </script>
</body>

</html>
