const nombre = document.getElementById('name');
const email = document.getElementById('mail');
const asunto = document.getElementById('subject');
const mensaje = document.getElementById('msg');

contact_form.addEventListener("submit", e=> {   
    if(!(nombre.value.lenght===0 && email.value.lenght===0 && asunto.value.lenght===0 && mensaje.value.lenght===0)){
        alert('Mensaje Enviado')
    }
})