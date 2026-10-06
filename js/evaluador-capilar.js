document.addEventListener('DOMContentLoaded', function () {
    const quizContainer = document.getElementById('quiz-container');
    if (!quizContainer) return;

    // Cuestionario dinámico paso a paso (Psoriasis, Dermatitis Seborreica y Caspa)
    const preguntas = [
        // --- PSORIASIS CAPILAR ---
        {
            id: 1,
            afeccion: 'psoriasis',
            pregunta:
                '¿Tus costras o escamas son gruesas, duras y de un tono blanquecino o plateado?',
            opciones: [
                { texto: 'No o casi imperceptible', puntos: 0 },
                { texto: 'Leve (Escamas delgadas)', puntos: 1 },
                { texto: 'Moderado (Placas visibles al tacto)', puntos: 2 },
                {
                    texto: 'Intenso (Placas muy gruesas, duras y compactas)',
                    puntos: 3,
                },
            ],
        },
        {
            id: 2,
            afeccion: 'psoriasis',
            pregunta:
                '¿Las lesiones o parches rojos sobrepasan el cabello (frente, nuca o detrás de las orejas)?',
            opciones: [
                { texto: 'Solo dentro del cuero cabelludo', puntos: 0 },
                {
                    texto: 'Leve (Ligeramente cerca del nacimiento del cabello)',
                    puntos: 1,
                },
                {
                    texto: 'Moderado (Afecta bordes de orejas o nuca)',
                    puntos: 2,
                },
                {
                    texto: 'Intenso (Extensión clara sobre frente, orejas y cuello)',
                    puntos: 3,
                },
            ],
        },
        {
            id: 3,
            afeccion: 'psoriasis',
            pregunta:
                '¿Sientes que la piel se agrieta, sangra o genera ardor/dolor al rascarte?',
            opciones: [
                { texto: 'Nunca sangra ni duele', puntos: 0 },
                { texto: 'Leve (Molestia leve sin sangrado)', puntos: 1 },
                { texto: 'Moderado (Puntos de sangre ocasionales)', puntos: 2 },
                {
                    texto: 'Intenso (Piel agrietada, sangrado recurrente y dolor)',
                    puntos: 3,
                },
            ],
        },

        // --- DERMATITIS SEBORREICA ---
        {
            id: 4,
            afeccion: 'seborrea',
            pregunta:
                '¿Cómo percibes el exceso de grasa o brillo en tu cuero cabelludo y cabello?',
            opciones: [
                { texto: 'Normal o seco', puntos: 0 },
                { texto: 'Leve (Grasa moderada al final del día)', puntos: 1 },
                {
                    texto: 'Moderado (Sebo visible a las pocas horas del lavado)',
                    puntos: 2,
                },
                {
                    texto: 'Intenso (Sensación grasosa/pegajosa extrema e inmediata)',
                    puntos: 3,
                },
            ],
        },
        {
            id: 5,
            afeccion: 'seborrea',
            pregunta:
                '¿Las escamas o costras que se desprenden son amarillentas y grasosas?',
            opciones: [
                { texto: 'Son completamente secas o blancas', puntos: 0 },
                { texto: 'Leve (Ligeramente húmedas)', puntos: 1 },
                {
                    texto: 'Moderado (Grumos amarillentos adheridos)',
                    puntos: 2,
                },
                {
                    texto: 'Intenso (Escamas cerosas y grasosas con picazón constante)',
                    puntos: 3,
                },
            ],
        },
        {
            id: 6,
            afeccion: 'seborrea',
            pregunta:
                '¿Experimentas enrojecimiento con picazón en cejas, aletas de la nariz o pecho?',
            opciones: [
                { texto: 'No, solo en la cabeza', puntos: 0 },
                { texto: 'Leve (Ligera picazón en el rostro)', puntos: 1 },
                {
                    texto: 'Moderado (Enrojecimiento recurrente facial)',
                    puntos: 2,
                },
                {
                    texto: 'Intenso (Brotes constantes en rostro y pecho)',
                    puntos: 3,
                },
            ],
        },

        // --- CASPA / DESCAMACIÓN SIMPLE ---
        {
            id: 7,
            afeccion: 'caspa',
            pregunta:
                '¿Sueles notar un polvillo blanco fino cayendo sobre tus hombros al peinarte?',
            opciones: [
                { texto: 'No cae nada', puntos: 0 },
                { texto: 'Leve (Muy poco y fino)', puntos: 1 },
                {
                    texto: 'Moderado (Residuos visibles en ropa oscura)',
                    puntos: 2,
                },
                {
                    texto: 'Intenso (Caída constante de descamación blanca y seca)',
                    puntos: 3,
                },
            ],
        },
        {
            id: 8,
            afeccion: 'caspa',
            pregunta:
                '¿La picazón o resequedad empeora tras usar champús convencionales?',
            opciones: [
                { texto: 'Siento la piel humectada y normal', puntos: 0 },
                { texto: 'Leve (Ligera resequedad ocasional)', puntos: 1 },
                {
                    texto: 'Moderado (Tirantez evidente en el cuero cabelludo)',
                    puntos: 2,
                },
                {
                    texto: 'Intenso (Resequedad extrema con descamación inmediata)',
                    puntos: 3,
                },
            ],
        },
    ];

    let pasoActual = 0;
    let respuestas = {
        psoriasis: 0,
        seborrea: 0,
        caspa: 0,
    };

    function renderizarPregunta() {
        if (pasoActual >= preguntas.length) {
            mostrarResultado();
            return;
        }

        const q = preguntas[pasoActual];
        const progreso = Math.round((pasoActual / preguntas.length) * 100);

        let html = `
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small fw-bold text-muted">Pregunta ${pasoActual + 1} de ${preguntas.length}</span>
                    <span class="small fw-bold text-primary">${progreso}%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: ${progreso}%;"></div>
                </div>
            </div>
            <h3 class="h5 fw-bold text-dark mb-4">${q.pregunta}</h3>
            <div class="d-grid gap-2">
        `;

        q.opciones.forEach((op) => {
            html += `
                <button type="button" class="btn btn-outline-primary text-start p-3 btn-opcion" data-puntos="${op.puntos}" data-afeccion="${q.afeccion}">
                    <i class="bi bi-circle me-2"></i> ${op.texto}
                </button>
            `;
        });

        html += `</div>`;
        quizContainer.innerHTML = html;

        document.querySelectorAll('.btn-opcion').forEach((btn) => {
            btn.addEventListener('click', function () {
                const puntos = parseInt(this.getAttribute('data-puntos'));
                const afeccion = this.getAttribute('data-afeccion');

                respuestas[afeccion] += puntos;
                pasoActual++;
                renderizarPregunta();
            });
        });
    }

    function mostrarResultado() {
        const scorePso = respuestas.psoriasis;
        const scoreSeb = respuestas.seborrea;
        const scoreCas = respuestas.caspa;

        let titulo = '';
        let descripcion = '';
        let badgeColor = 'bg-primary';

        if (scorePso >= 4 && scorePso >= scoreSeb && scorePso >= scoreCas) {
            titulo = 'Alta Sospecha de Psoriasis Capilar';
            badgeColor = 'bg-danger';
            descripcion =
                'Tus respuestas reflejan la presencia de placas gruesas, extensión fuera del límite del cabello o sangrado por fisuras. Estos indicadores coinciden fuertemente con Psoriasis Capilar en evolución.';
        } else if (scoreSeb >= 4 && scoreSeb > scorePso) {
            titulo = 'Compatible con Dermatitis Seborreica';
            badgeColor = 'bg-warning text-dark';
            descripcion =
                'Presentas acumulación lipídica y descamación grasosa con inflamación. La sobreproliferación de levaduras naturales suele estar alterando tu barrera cutánea.';
        } else {
            titulo = 'Cuadro de Descamación Simple / Caspa Seca';
            badgeColor = 'bg-info text-dark';
            descripcion =
                'Tus síntomas apuntan a una alteración ligera en el ciclo de renovación celular o resequedad ocasionada por factores ambientales o productos agresivos.';
        }

        const mensajeWS = encodeURIComponent(
            `Hola Dra. Rosero, realicé el evaluador de problemas del cuero cabelludo en su web. Mi resultado fue: "${titulo}". ¿Me podrían ayudar con más información?`
        );

        quizContainer.innerHTML = `
            <div class="text-center py-3">
                <span class="badge ${badgeColor} fs-6 mb-3 px-3 py-2 text-uppercase">${titulo}</span>
                <h3 class="h4 fw-bold text-dark mb-3">Resultado de tu Evaluación</h3>
                <p class="text-muted mb-4">${descripcion}</p>

                <div class="p-3 bg-light rounded mb-4 text-start small border-start border-4 border-warning">
                    <p class="fw-bold mb-1 text-dark"><i class="bi bi-info-circle-fill text-warning me-2"></i>Nota Médica Importante:</p>
                    <p class="mb-0 text-muted">Este cuestionario digital es una herramienta de orientación algorítmica. Un diagnóstico definitivo requiere un examen de dermatoscopia/tricoscopia digital presencial.</p>
                </div>

                <a href="https://wa.me/593969748118?text=${mensajeWS}" target="_blank" class="btn btn-success btn-lg w-100 py-3 fw-bold">
                    <i class="bi bi-whatsapp me-2"></i>Consultar este Resultado por WhatsApp
                </a>
            </div>
        `;
    }

    renderizarPregunta();
});
