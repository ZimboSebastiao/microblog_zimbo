document.addEventListener("DOMContentLoaded", function() {
    const resumo = document.querySelector("#resumo");
    const contador = document.querySelector("#maximo");
    const limite = resumo.getAttribute("maxlength"); // Obtém o limite de caracteres

    // Atualiza o contador sempre que o usuário digitar
    resumo.addEventListener("input", function() {
      contador.textContent = resumo.value.length + "/" + limite;
      
      // Altera a cor do contador quando está próximo do limite
      if (resumo.value.length >= limite * 0.9) {
        contador.classList.replace("bg-danger", "bg-warning"); // Alerta quando atinge 90% do limite
      } else {
        contador.classList.replace("bg-warning", "bg-danger");
      }
    });
  });