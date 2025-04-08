const iniciados = document.getElementById("iniciados");
const progresso = document.getElementById("progresso");
const concluido = document.getElementById("concluido");
const card_iniciados = document.getElementById("card-iniciados");
const card_progresso = document.getElementById("card-progresso");
const cards_concluido = document.getElementById("card-concluido");

iniciados.addEventListener("click", function () {
    card_iniciados.classList.add("active");
    card_progresso.classList.remove("active");
    cards_concluido.classList.remove("active");

    iniciados.classList.add("active");
    progresso.classList.remove("active");
    concluido.classList.remove("active");

});

progresso.addEventListener("click", function () {
    card_progresso.classList.add("active");
    card_iniciados.classList.remove("active");
    cards_concluido.classList.remove("active");

    progresso.classList.add("active");
    iniciados.classList.remove("active");
    concluido.classList.remove("active");
});

concluido.addEventListener("click", function () {
    cards_concluido.classList.add("active");
    card_iniciados.classList.remove("active");
    card_progresso.classList.remove("active");

    concluido.classList.add("active");
    iniciados.classList.remove("active");
    progresso.classList.remove("active");
});