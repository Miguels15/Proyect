const btnEnviar = document.getElementById('enviar');

const validate = (e) => {
  e.preventDefault();
  const usuario = document.getElementById('nombre');
  const email = document.getElementById('email');
  const tel = document.getElementById('telefono');
  const msg= document.getElementById('mensaje');
  if (usuario.value === "") {
    alert("Por favor, escribe tu nombre de usuario.");
    usuario.focus();
    return false;
  }else if (email.value === "") {
    alert("Por favor, escribe tu correo electrónico");
    email.focus();
    return false;
  }else if (!emailVálido(email.value)) {
    alert("Por favor, escribe un correo electrónico válido");
    emailAddress.focus();
    return false;
  }else if(tel.value===""){
    alert("Porfavor escriba un telefono valido");
    return false;
  }else if(msg.value===""){
    alert("Porfavor escriba un mensaje");
    return false;
  }console.log(usuario);
  alert('Mensaje enviado');
  
  window.location.href = "index.html";
  return true; //Se pueden enviar los datos del formulario al servidor
}

const emailVálido = email => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

btnEnviar.addEventListener('click', validate);