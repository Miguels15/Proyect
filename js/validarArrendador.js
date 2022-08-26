//registro arrendador
document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("registro_arrendador").addEventListener('submit', validarArrendador);
});

function validarArrendador(arrendador){
    arrendador.preventDefault();
    var nom = document.getElementById('nombre').value;
        if(nom.length == 0)
        {
            var nomSpan = document.getElementById("nomError");
            nomSpan.innerHTML = "No puedes dejar tu nombre vacio!!";
            return;
        }else{
            document.getElementById("nomError").style.display = 'none';
        }
    

    var mailOnline = document.getElementById('mail').value;
    if(!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(mailOnline))
    {
        var emailSpan = document.getElementById("emailError");
        emailSpan.innerHTML = "Ingresa un correo valido!!";
        return;
    }else{
        document.getElementById("emailError").style.display = 'none';;
    }

    user = document.getElementById("usuario").value;
    if( user == null || user.length == 0 || /^\s+$/.test(user) ) {
        var userSpan = document.getElementById("userError");
        userSpan.innerHTML = "Ingresa un nombre de usuario!!";
        return;
    }else{
         document.getElementById("userError").style.display = 'none';
    }

    tel = document.getElementById("telefono").value;
    if( !(/^\+\d{2,3}\s\d{8}$/.test(tel)) ) {
        var telSpan = document.getElementById("telError");
        telSpan.innerHTML = "Ingresa tu numero de telefono con prefijo internacional!!";
        return;
    }else{
        document.getElementById("telError").style.display = 'none';;
    }
    
  
    pass = document.getElementById("contra").value;
    if( pass == null || pass.length == 0 || /^\s+$/.test(pass) ) {
        var passSpan = document.getElementById("passError");
        passSpan.innerHTML = "Ingresa una contraseña!!";
        return;
    }else{
        document.getElementById("passError").style.display = 'none';
    }

    genero = document.getElementById("generos").selectedIndex;
    if(genero == 0 ) {
        var genSpan = document.getElementById("genError");
        genSpan.innerHTML = "Especifica tú genero!!";
        return;
    }else{
        document.getElementById("genError").style.display = 'none';
    }
    alert("Registro exitoso");
    this.submit();
}