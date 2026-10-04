<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-medical fs-4" href="<?= BASE_URL ?>">
            Dra. Rosero Franco
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-semibold text-dark" href="<?= BASE_URL ?>#inicio">Inicio</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link fs-6 fw-semibold text-dark" href="<?= BASE_URL ?>#centro-medico">Eternal Medic</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-semibold text-dark" href="<?= BASE_URL ?>#trayectoria">Trayectoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-semibold text-dark" href="<?= BASE_URL ?>#testimonios">Testimonios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-semibold text-dark" href="<?= BASE_URL ?>#faq">Preguntas Frecuentes</a>
                </li>

                <!-- MENÚ PADRE: SERVICIOS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-6 fw-semibold text-dark" href="#" id="navbarDropdownServicios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 py-2" aria-labelledby="navbarDropdownServicios">

                        <!-- SUBMENÚ 1: SALUD CAPILAR -->
                        <li class="dropdown-submenu position-relative">
                            <a class="dropdown-item dropdown-toggle py-2 fw-semibold text-primary d-flex justify-content-between align-items-center">
                                <span><i class="bi bi-person-badge me-2"></i>Salud Capilar</span>
                            </a>
                            <ul class="dropdown-menu shadow border-0 py-2">
                                <li>
                                    <a class="dropdown-item py-1 fw-bold" href="<?= BASE_URL ?>capilar/index.php">
                                        <i class="bi bi-house-door me-2"></i>Inicio
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>capilar/psoriasis-capilar.php">Psoriasis Capilar</a></li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>capilar/dermatitis-capilar.php">Dermatitis Capilar</a></li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>capilar/caspa.php">Descamación Capilar (caspa)</a></li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>capilar/alopecia-areata.php">Alopecia Areata</a></li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>capilar/alopecia-androgenetica.php">Alopecia Androgenética</a></li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>capilar/efluvio-telogeno.php">Efluvio Telógeno</a></li>
                            </ul>
                        </li>

                        <!-- SUBMENÚ 2: OBSTETRICIA (LISTO PARA MÁS ADELANTE) -->
                        <li class="dropdown-submenu position-relative">
                            <a class="dropdown-item dropdown-toggle py-2 fw-semibold text-dark d-flex justify-content-between align-items-center" href="#">
                                <span><i class="bi bi-heart-pulse me-2"></i>Obstetricia</span>
                            </a>
                            <ul class="dropdown-menu shadow border-0 py-2">
                                <li>
                                    <a class="dropdown-item py-1 fw-bold" href="<?= BASE_URL ?>obstetricia/index.php">
                                        <i class="bi bi-house-door me-2"></i>Inicio Obstetricia
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>obstetricia/control-prenatal.php">Control Prenatal</a></li>
                                <li><a class="dropdown-item py-1" href="<?= BASE_URL ?>obstetricia/ecografia-obstetrica.php">Ecografía Obstétrica</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>