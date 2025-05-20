document.addEventListener("DOMContentLoaded", function () {
  const dateInput = document.getElementById("date");
  const today = new Date().toISOString().split("T")[0];
  dateInput.value = today;
});

document.addEventListener("DOMContentLoaded", function () {
  const dateInput = document.getElementById("date");
  const today = new Date().toISOString().split("T")[0];
  dateInput.value = today;

  const cpfInput = document.getElementById("cpf_client");
  const numberInput = document.getElementById("number_client");

  // Formata o CPF enquanto o usuário digita
  cpfInput.addEventListener("input", function () {
    let value = cpfInput.value.replace(/\D/g, ""); // Remove caracteres não numéricos
    value = value.slice(0, 11); // Limita o CPF a 11 dígitos
    value = value.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o primeiro ponto
    value = value.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o segundo ponto
    value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Adiciona o traço
    cpfInput.value = value;
  });

  // Formata o número de telefone enquanto o usuário digita
  numberInput.addEventListener("input", function () {
    let value = numberInput.value.replace(/\D/g, ""); // Remove caracteres não numéricos
    value = value.slice(0, 11); // Limita o número de telefone a 11 dígitos
    value = value.replace(/(\d{2})(\d)/, "($1) $2"); // Adiciona o DDD
    value = value.replace(/(\d{4})(\d)/, "$1-$2"); // Adiciona o traço
    numberInput.value = value;
  });

  // Remove a formatação antes de enviar o formulário
  const form = document.querySelector("form");
  form.addEventListener("submit", function () {
    cpfInput.value = cpfInput.value.replace(/\D/g, ""); // Remove a formatação do CPF
    numberInput.value = numberInput.value.replace(/\D/g, ""); // Remove a formatação do número
  });
});
