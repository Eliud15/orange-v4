var send=document.querySelector("#send");

send.addEventListener("click",(e)=>{
    
    var usuario=document.querySelector("#user");
    var password=document.querySelector("#password");

    
    if (usuario.value.length<=0) {
        e.preventDefault();
        alert("No puedes dejar el usuario en blanco")
    }
    else if(usuario.value.length>=30){
        e.preventDefault();
        alert("No puedes Escribir mas de 30 caracteres en el mensaje eso incluye los espacios")
    }
    else if(password.value.length<=0){
        e.preventDefault();
        alert("No puedes dejar la contraseña en blanco")
    }
    else if(password.value.length<8){
        e.preventDefault();
        alert("Escribe una contraseña superior a 8 digitos")
    }
    else{
       
    }
});