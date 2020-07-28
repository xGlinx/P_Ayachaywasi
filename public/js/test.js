const contenedor = document.getElementById("test");
const bontonSig = document.getElementById("siguiente");
const bontonRes = document.getElementById("boton");
const resultadoTest = document.getElementById("resultado");

const preguntas = [
    {
        id: "1",
        pregunta:
            "1. ¿Aceptarías trabajar escribiendo artículos en la sección económica de un diario? ",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "2",
        pregunta: "2.  ¿Sabes lo que es el PBI?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "3",
        pregunta:
            "3.  ¿Sabes la diferencia conceptual entre macroeconomía y microeconomía?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "4",
        pregunta:
            "4.  ¿Te gustaría investigar la justa distribución de la riqueza?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "5",
        pregunta:
            "5.  ¿Te sentirías a gusto desempeñando el rol de gerente de comercialización?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "6",
        pregunta:
            "6.  ¿Te costearías tus estudios trabajando en una auditoría?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "7",
        pregunta:
            "7.  ¿Dirigirías el área de importación y exportación de una empresa?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "8",
        pregunta:
            "8.  Si te pidieran planificar, organizar y dirigir un campo de deportes ¿Aceptarías?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "9",
        pregunta:
            "9.  ¿Te sentirías a gusto desempeñando el rol de gerente de comercialización?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "10",
        pregunta:
            "10.  ¿Te resultaría gratificante ser asesor contable en una empresa reconocida?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },

    {
        id: "11",
        pregunta:
            "1. ¿Te ofrecerías para explicarle a tus compañeros un tema que no entendieron? ",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "12",
        pregunta:
            "2.  ¿Dedicarías parte de tu tiempo para ayudar a personas de zonas cadenciadas? ",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "13",
        pregunta: "3.  ¿Te gratificaría trabajar con niños?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "14",
        pregunta: "4.  ¿Pasarías varias horas leyendo un libro de tu interés?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "15",
        pregunta:
            "5.  ¿¿Te interesan los temas relacionados al pasado y el progreso de la humanidad?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "16",
        pregunta:
            "6.  ¿Participarías en una investigación sobre la violencia en el fútbol?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "17",
        pregunta:
            "7.  ¿Descubriste algún escritor que haya expresado tus mismas ideas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "18",
        pregunta:
            "8.  La libertad y la justicia ¿Son valores importantes en tu vida?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "19",
        pregunta:
            "9.  ¿Lucharías por una causa justa hasta las últimas consecuencias?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "20",
        pregunta:
            "10.  ¿Elegirías una carrera cuyo instrumento de trabajo fuere un idioma extranjero?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },

    {
        id: "21",
        pregunta:
            "1. ¿Te gustaría dirigir un proyecto de urbanización en tu provincia?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "22",
        pregunta: "2.  ¿Eres el que pone un toque de alegría en las fiestas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "23",
        pregunta: "3.  ¿Disfrutarías modelar arcilla?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "24",
        pregunta:
            "4.  Fuera de los horarios escolares ¿dedicas algún tiempo a actividades corporales?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "25",
        pregunta:
            "5.  ¿Tolerarías empezar tantas veces como fuere necesario hasta obtener un logro?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "26",
        pregunta:
            "6.  ¿Te agrada producir ideas originales y que sean tenidas en cuenta?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "27",
        pregunta:
            "7.  ¿Desearías que te regalen algún instrumento musical para tu cumpleaños?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "28",
        pregunta: "8.  ¿Harías el afiche para una campaña contra el SIDA?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "29",
        pregunta: "9.  ¿Eres de los que defienden causas perdidas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "30",
        pregunta: "10.  ¿Te atrae armar rompecabezas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },

    {
        id: "31",
        pregunta:
            "1. ¿Escuchas atentamente los problemas que te plantean tus amigos?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "32",
        pregunta:
            "2.  ¿Convences fácilmente a otras personas sobre la validez de tus argumentos?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "33",
        pregunta:
            "3.  ¿Participarías en una campaña de prevención de la enfermedad del Dengue?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "34",
        pregunta: "4.  ¿Te gustaría hacer un curso de primeros auxilios?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "35",
        pregunta:
            "5.  Ante un llamado solidario ¿Te ofrecerías para cuidar un enfermo?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "36",
        pregunta:
            "6.  ¿Te sentirías a gusto trabajando en un ámbito hospitalario?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "37",
        pregunta:
            "7.  Ante una emergencia ¿Participarías en una campaña brindando tu ayuda?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "38",
        pregunta:
            "8.  ¿Te resultaría interesante el estudio de las ciencias biológicas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "39",
        pregunta:
            "9.  ¿Acostumbras a leer revistas de avances científicos y tecnológicos sobre la salud?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "40",
        pregunta: "10.  ¿Te gustaría investigar sobre una nueva vacuna?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "41",
        pregunta:
            "1. Cuándo eras chico ¿te interesaba saber como estaban construidos tus juguetes?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "42",
        pregunta:
            "2.  Al resolver un problema matemático ¿Perseveras hasta encontrar la solución?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "43",
        pregunta:
            "3.  ¿Entablas una relación casi personal con tu computadora?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "44",
        pregunta:
            "4.  ¿Te ofrecerías para colaborar como voluntarios para la NASA?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "45",
        pregunta:
            "5.  ¿Harías un curso para aprender a fabricar piezas de máquinas que utilizas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "46",
        pregunta:
            "6.  ¿Te gustaría trabajar en un laboratorio mientras estudias?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "47",
        pregunta:
            "7.  ¿Te incluirías en un proyecto sobre las principales fuentes de recursos nacionales?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "48",
        pregunta:
            "8.  Cuando se descompone un artefacto en tu casa ¿Te dispones a repararlo?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "49",
        pregunta:
            "9.  ¿Postularías a una automotriz que solicita gente para el área de producción?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "50",
        pregunta:
            "10.  ¿Te gustaría trabajar como profesional dirigiendo una empresa hidroeléctrica?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },

    {
        id: "51",
        pregunta:
            "1. ¿Te dedicarías a socorrer a personas accidentadas o atacadas por asaltantes?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "52",
        pregunta:
            "2.  ¿Participarías como profesional en un espectáculo de acrobacia aérea?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "53",
        pregunta:
            "3.  ¿Te gustaría mantener el orden en grandes desordenes o catástrofes?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "54",
        pregunta:
            "4.  ¿Te gustaría realizar tareas auxiliares en una nave, arreglo de desperfectos, etc?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "55",
        pregunta:
            "5.  ¿Estás de acuerdo con la formación de un cuerpo de soldados profesionales?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "56",
        pregunta: "6.  ¿Participarías en un grupo de alguna fuerza armada?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "57",
        pregunta:
            "7.  ¿Aceptarías colaborar con el cumplimiento de las normas en lugares públicos?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "58",
        pregunta:
            "8.  ¿Elegirías una profesión en la que estarías algunos meses alejado de tu familia?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "59",
        pregunta:
            "9.  ¿Te interesan las actividades de reacción rápida en situaciones imprevistas?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "60",
        pregunta:
            "10.  ¿Te parece que las mujeres formen parte de las fuerzas armadas bajo las mismas condiciones que los hombres?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },

    {
        id: "61",
        pregunta:
            "1.  ¿Formarías parte de un equipo sobre la preservación de la flora y la fauna?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "62",
        pregunta:
            "2.  ¿Estás informado sobre los últimos descubrimientos científicos?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "63",
        pregunta:
            "3. ¿Te gustaría crear nuevas técnicas para descubrir algunas enfermedades?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "64",
        pregunta:
            "4.  ¿Te incluirías en un proyecto de investigación sísmica y sus consecuencias?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "65",
        pregunta:
            "5.  ¿Te radicarías en una zona agrícola-ganadera para desarrollar tus actividades?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "66",
        pregunta:
            "6.  ¿Te gustaría trabajar en un laboratorio mientras estudias?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "67",
        pregunta:
            "7.  ¿Visitarías un observatorio astronómico para conocer más sobre el tema?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "68",
        pregunta: "8.  ¿Sabe responder que significa ADN y ARN?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "69",
        pregunta:
            "9.  ¿Te atrae investigar sobre los misterios del universo, por ejemplo, agujeros negros?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    },
    {
        id: "70",
        pregunta:
            "10.  ¿Trabajarías en una industria de producción en el sector de control de calidad?",
        respuestas: {
            a: "Si",
            b: "No"
        },
        respuestaCorrecta: "a"
    }
];

function mostrarTest() {
    const preguntasYrespuestas = [];

    preguntas.forEach((preguntaActual, numeroDePregunta) => {
        const respuestas = [];
        for (letraRespuesta in preguntaActual.respuestas) {
            respuestas.push(
                `<label> 
                    <input type="radio" name="${numeroDePregunta}" value="${letraRespuesta}">
                    ${preguntaActual.respuestas[letraRespuesta]}
                    </label>`
            );
        }
        preguntasYrespuestas.push(
            `<div class="cuestion">${preguntaActual.pregunta}</div>
            <div class="respuestas">${respuestas.join("")}</div>
            `
        );
    });

    contenedor.innerHTML = preguntasYrespuestas.join("");
}

mostrarTest();

function mostrarResultado() {
    const respuestas = contenedor.querySelectorAll(".respuestas");
    let administracionYContabilidad = 0;
    let humanidadesYCiencasSociales = 0;
    let artes = 0;
    let medicinaYCienciasDeSalud = 0;
    let ingenieriaYComputacion = 0;
    let defensaYSeguridad = 0;
    let cienciasExactasYAgrarias = 0;

    preguntas.forEach((preguntaActual, numeroDePregunta) => {
        const todasLasRespuestas = respuestas[numeroDePregunta];
        const checkboxRespuestas = `input[name='${numeroDePregunta}']:checked`;
        const respuestaElegida = (
            todasLasRespuestas.querySelector(checkboxRespuestas) || {}
        ).value;

        if (numeroDePregunta < 10) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                administracionYContabilidad++;
            }
        } else if (numeroDePregunta < 20) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                humanidadesYCiencasSociales++;
            }
        } else if (numeroDePregunta < 30) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                artes++;
            }
        } else if (numeroDePregunta < 40) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                medicinaYCienciasDeSalud++;
            }
        } else if (numeroDePregunta < 50) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                ingenieriaYComputacion++;
            }
        } else if (numeroDePregunta < 60) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                defensaYSeguridad++;
            }
        } else if (numeroDePregunta < 70) {
            if (respuestaElegida === preguntaActual.respuestaCorrecta) {
                cienciasExactasYAgrarias++;
            }
        }
    });

    resultadoTest.innerHTML =
        "Administracion y contabilidad " +
        administracionYContabilidad +
        " puntos <br> " +
        "Humanidades y ciencias sociales " +
        humanidadesYCiencasSociales +
        " puntos <br>" +
        "Artes " +
        artes +
        " puntos<br>" +
        "Medicina y ciencias de salud " +
        medicinaYCienciasDeSalud +
        " puntos <br>" +
        "Ingenieria y computación " +
        ingenieriaYComputacion +
        " puntos <br>" +
        "Defensa y seguridad " +
        defensaYSeguridad +
        " puntos <br>" +
        "Ciencias exactas y agrarias " +
        cienciasExactasYAgrarias +
        " puntos";
}

bontonRes.addEventListener("click", mostrarResultado);
