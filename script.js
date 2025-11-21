const form = document.getElementById("form");
const inputNum = document.getElementById("numero");
const mensagemErro = document.getElementById("erro");

form.addEventListener("submit",(e)=> {
  if (inputNum.value === "") {
    e.preventDefault();
    mensagemErro.classList.add("active");
  } else {
    mensagemErro.classList.remove("active");
  }
});

inputNum.addEventListener("input", ()=> {
   if(inputNum.value != ""){
      mensagemErro.classList.remove("active")
   }
})

