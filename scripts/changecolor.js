function hexParaRgb(hex) {
    const bigint = parseInt(hex.slice(1), 16);
    const r = (bigint >> 16) & 255;
    const g = (bigint >> 8) & 255;
    const b = bigint & 255;
    return `rgb(${r}, ${g}, ${b})`;
}

function substituirBackgroundsPorVermelho() {
    const elementos = document.getElementsByTagName('*');

    for (let i = 0; i < elementos.length; i++) {
        const el = elementos[i];
        const estilo = window.getComputedStyle(el);
        const bg = estilo.backgroundColor;

        // Se tiver algum background visível (não transparente), substitui por vermelho
        if (bg !== "transparent") {
            if (bg == hexParaRgb("#F58430")) {
                el.style.backgroundColor = 'red';
            }
        }
    }
}

const corUsada = "padrão"
if (corUsada == "vermelho") {
    window.onload = substituirBackgroundsPorVermelho;
}