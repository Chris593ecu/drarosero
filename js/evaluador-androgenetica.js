document.addEventListener('DOMContentLoaded', function () {
    const quizContainer = document.getElementById('quiz-container');
    if (!quizContainer) return;

    const preguntas = [
        // --- Preguntas para Alopecia Androgenética (1, 2, 3) ---
        {
            id: 1,
            tipo: 'androgenetica',
            pregunta:
                '¿Has notado que la pérdida de cabello se concentra principalmente en la coronilla, las entradas o la línea frontal?',
            opciones: [
                {
                    texto: 'Sí, es muy evidente en las entradas o la coronilla.',
                    puntos: 2,
                },
                { texto: 'Un poco, pero no estoy seguro/a.', puntos: 1 },
                {
                    texto: 'No, la pérdida es uniforme por toda la cabeza.',
                    puntos: 0,
                },
            ],
        },
        {
            id: 2,
            tipo: 'androgenetica',
            pregunta:
                '¿Sientes que los cabellos nuevos nacen cada vez más delgados, finos o débiles (miniaturización)?',
            opciones: [
                {
                    texto: 'Sí, la hebra se ve mucho más fina y con menos fuerza.',
                    puntos: 2,
                },
                {
                    texto: 'He notado cierta pérdida de grosor en algunas zonas.',
                    puntos: 1,
                },
                {
                    texto: 'No, el grosor del cabello parece ser el mismo.',
                    puntos: 0,
                },
            ],
        },
        {
            id: 3,
            tipo: 'androgenetica',
            pregunta:
                '¿Tienes antecedentes familiares de calvicie o pérdida de cabello (padres, tíos, abuelos)?',
            opciones: [
                {
                    texto: 'Sí, en mi familia hay varios casos de calvicie.',
                    puntos: 2,
                },
                {
                    texto: 'Solo un familiar cercano presenta pérdida de cabello.',
                    puntos: 1,
                },
                { texto: 'No, en mi familia no hay antecedentes.', puntos: 0 },
            ],
        },

        // --- Preguntas para Efluvio Telógeno (4, 5, 6) ---
        {
            id: 4,
            tipo: 'efluvio',
            pregunta:
                '¿La caída de cabello comenzó de forma repentina o masiva en los últimos 2 a 4 meses?',
            opciones: [
                {
                    texto: 'Sí, empezó de la noche a la mañana de forma abundante.',
                    puntos: 2,
                },
                {
                    texto: 'Ha aumentado progresivamente en los últimos meses.',
                    puntos: 1,
                },
                {
                    texto: 'No, llevo años perdiendo densidad poco a poco.',
                    puntos: 0,
                },
            ],
        },
        {
            id: 5,
            tipo: 'efluvio',
            pregunta:
                '¿Notas mechones grandes de cabello al lavarte, peinarte o sobre la almohada?',
            opciones: [
                {
                    texto: 'Sí, cae en gran cantidad al ducharme o cepillarme.',
                    puntos: 2,
                },
                { texto: 'Cae una cantidad moderada al peinarme.', puntos: 1 },
                { texto: 'Cae muy poco o lo normal de siempre.', puntos: 0 },
            ],
        },
        {
            id: 6,
            tipo: 'efluvio',
            pregunta:
                '¿Has atravesado recientemente un periodo de estrés severo, cirugía, parto, enfermedad o cambio de dieta?',
            opciones: [
                {
                    texto: 'Sí, tuve un evento estresante o cambio de salud reciente.',
                    puntos: 2,
                },
                { texto: 'He tenido un poco de estrés habitual.', puntos: 1 },
                { texto: 'No, todo se ha mantenido normal.', puntos: 0 },
            ],
        },
    ];

    let pasoActual = 0;
    let respuestas = {
        androgenetica: 0,
        efluvio: 0,
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

        q.opciones.forEach((op, idx) => {
            html += `
                <button type="button" class="btn btn-outline-primary text-start p-3 btn-opcion" data-puntos="${op.puntos}" data-tipo="${q.tipo}">
                    <i class="bi bi-circle me-2"></i> ${op.texto}
                </button>
            `;
        });

        html += `</div>`;
        quizContainer.innerHTML = html;

        document.querySelectorAll('.btn-opcion').forEach((btn) => {
            btn.addEventListener('click', function () {
                const puntos = parseInt(this.getAttribute('data-puntos'));
                const tipo = this.getAttribute('data-tipo');

                respuestas[tipo] += puntos;
                pasoActual++;
                renderizarPregunta();
            });
        });
    }

    function mostrarResultado() {
        const scoreA = respuestas.androgenetica;
        const scoreE = respuestas.efluvio;

        let titulo = '';
        let descripcion = '';
        let badgeColor = 'bg-primary';

        if (scoreA >= 4 && scoreA > scoreE) {
            titulo = 'Alta sospecha de Alopecia Androgenética';
            badgeColor = 'bg-danger';
            descripcion =
                'Tus respuestas indican un patrón de afinamiento localizado (entradas o coronilla) e influencia genética. Este tipo de alopecia es progresiva pero altamente tratable si se interviene a tiempo antes de que el folículo se atrofie.';
        } else if (scoreE >= 4 && scoreE > scoreA) {
            titulo = 'Compatible con Efluvio Telógeno (Caída Aguda)';
            badgeColor = 'bg-warning text-dark';
            descripcion =
                'Tus síntomas sugieren un desprendimiento difuso y acelerado, frecuentemente desencadenado por estrés, cambios hormonales, deficiencias nutricionales o post-enfermedad. Es crucial evaluar las causas subyacentes.';
        } else if (scoreA >= 3 && scoreE >= 3) {
            titulo = 'Posible Cuadro Mixto (Androgenética + Efluvio)';
            badgeColor = 'bg-danger';
            descripcion =
                'Presentas características combinadas: pérdida de densidad progresiva junto a un episodio agudo de caída masiva. Una evaluación médica tricoscópica permitirá diferenciar ambos factores y aplicar un protocolo combinado.';
        } else {
            titulo = 'Patrón Leve o No Determinado';
            badgeColor = 'bg-info text-dark';
            descripcion =
                'Tus respuestas muestran una sintomatología leve. Recomendamos un chequeo tricoscópico preventivo para monitorear la salud de tus folículos y prevenir un debilitamiento futuro.';
        }

        const mensajeWS = encodeURIComponent(
            `Hola Dra. Rosero, realicé el evaluador de alopecia en la web. Mi resultado fue: "${titulo}". Deseo agendar una cita de valoración.`
        );

        quizContainer.innerHTML = `
            <div class="text-center py-3">
                <span class="badge ${badgeColor} fs-6 mb-3 px-3 py-2">${titulo}</span>
                <h3 class="h4 fw-bold text-dark mb-3">Resultado de tu Evaluación</h3>
                <p class="text-muted mb-4">${descripcion}</p>

                <div class="p-3 bg-light rounded mb-4 text-start small">
                    <p class="fw-bold mb-1 text-dark"><i class="bi bi-info-circle-fill text-primary me-2"></i>Nota Médica Importante:</p>
                    <p class="mb-0 text-muted">Este evaluador es de carácter orientativo. Un diagnóstico certero requiere dermatoscopia digital en consulta.</p>
                </div>

                <a href="https://wa.me/593969748118?text=${mensajeWS}" target="_blank" class="btn btn-success btn-lg w-100 py-3 fw-bold">
                    <i class="bi bi-whatsapp me-2"></i>Consultar este Resultado por WhatsApp
                </a>
            </div>
        `;
    }

    renderizarPregunta();
});
