function toggleButton() {
    var button = document.getElementById("toggleButton");

    if (button.innerText === "Activo") {
        button.innerText = "Inactivo";
        button.classList.remove("btn-success");
        button.classList.add("btn-warning");
    } else {
        button.innerText = "Activo";
        button.classList.remove("btn-warning");
        button.classList.add("btn-success");
    }
}
