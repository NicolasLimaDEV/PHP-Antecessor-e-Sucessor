const form = document.getElementById("form");
const inputNum = document.getElementById("numero");
const mensagemErro = document.getElementById("erro");

form.addEventListener("submit", function (event) {
  if (inputNum.value === "") {
    event.preventDefault(); // impede enviar
    mensagemErro.classList.add("active");
  } else {
    mensagemErro.classList.remove("active");
  }
});
