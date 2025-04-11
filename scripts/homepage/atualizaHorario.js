
setInterval(() => {
    const hora = new Date();
    const minuto = new Date();
    horaF = hora.getHours()
    minutoF = minuto.getMinutes()

    
    if (minutoF < 10) {
        minutoF = `0${minutoF}`
    }
    
    if (horaF < 10) {
        horaF = `0${horaF}`
    }

    const labelHorario = document.getElementById("horarioJS")
    labelHorario.innerText = `${horaF}:${minutoF}`
}, 0o100);