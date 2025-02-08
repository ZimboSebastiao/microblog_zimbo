
  document.addEventListener("DOMContentLoaded", function() {
    // Seleciona todos os botões de exclusão
    const botoesExcluir = document.querySelectorAll(".excluir-btn");

    botoesExcluir.forEach(botao => {
      botao.addEventListener("click", function(event) {
        event.preventDefault(); // Impede o redirecionamento imediato

        const url = this.getAttribute("href");

        if (confirm("Tem certeza que deseja excluir? Essa ação não pode ser desfeita!")) {
          window.location.href = url; 
        }
      });
    });
  });

