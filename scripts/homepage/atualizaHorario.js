document.addEventListener("DOMContentLoaded", () => {
    setInterval(() => {
        const hora = new Date();
        let horaF = hora.getHours();
        let minutoF = hora.getMinutes();

        if (minutoF < 10) {
            minutoF = `0${minutoF}`;
        }

        if (horaF < 10) {
            horaF = `0${horaF}`;
        }

        const labelHorario = document.getElementById("horarioJS");
        if (labelHorario) {
            labelHorario.textContent = `${horaF}:${minutoF}`;
        }
    }, 100);
});
