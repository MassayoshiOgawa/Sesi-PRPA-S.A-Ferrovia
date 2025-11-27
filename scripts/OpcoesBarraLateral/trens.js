function voltar() {
    window.location.replace("../homepage.php");
}

document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(".BoxStatus");

    boxes.forEach(box => {
        const tri = box.querySelector(".triangulo");

        box.addEventListener("click", () => {
            const isOpen = box.classList.contains("open");

            // Fecha todos os outros
            boxes.forEach(b => {
                b.classList.remove("open");
                b.style.height = "60px";
                b.querySelector(".triangulo").style.transform = "rotate(0deg)";
            });

            // Abre o atual
            if (!isOpen) {
                box.classList.add("open");
                box.style.height = "auto";
                tri.style.transform = "rotate(180deg)";
            }
        });
    });
});
