const switchModo = document.getElementById("modoOscuro");
switchModo.addEventListener("change", () => {
    document.body.classList.toggle("modo-oscuro");
    localStorage.setItem("modoOscuro", switchModo.checked);
});

const modoOscuro = localStorage.getItem("modoOscuro");
if (modoOscuro === "true") {
    document.body.classList.add("modo-oscuro");
    switchModo.checked = true;
}
