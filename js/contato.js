// Selecionando o campo de telefone
const campoTelefone = document.querySelector("#telefone");

// Ativação da máscara usando jQuery Mask
$(campoTelefone).mask("(00) 0000-0000");

// Programação de formspree usando Ajax
var form = document.getElementById("my-form");

async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("my-form-status");
    var data = new FormData(event.target);

    fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            status.innerHTML = "Obrigado pela sua submissão, entraremos em contanto em breve!";
            form.reset();
        } else {
            response.json().then(data => {
                if (Object.hasOwn(data, 'errors')) {
                    status.innerHTML = data["errors"].map(error => error["message"]).join(", ");
                } else {
                    status.innerHTML = "Oops! Houve um problema ao submeter o seu formulário";
                }
            });
        }
    }).catch(error => {
        status.innerHTML = "Oops! Houve um problema ao submeter o seu formulário";
    });
}

form.addEventListener("submit", handleSubmit);
