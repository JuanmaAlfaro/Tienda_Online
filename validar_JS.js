function validar(){
    var nombre, apellido, correo,password,password2,expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    password = document.getElementById("password").value;
    password2 = document.getElementById("password2").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" || apellido === "" || correo === "" 
       || password === "" || password2 === ""){
        alert("No dejes ningun campo vacio!");
        return false;
    }
    else if(nombre.length>50){
        alert("El nombre es demasiado largo!");
        return false;
    }
    else if(apellido.length>50){
        alert("El Apellido(s) es demasiado largo!");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El Correo no es valido!");
        return false;     
    }
    else if(password.length>20){
        alert("La contraseña debe tener un maximo de 20 caracteres!");
        return false;
    }
    else if(password.length<8){
        alert("La contraseña debe tener un minimo de 8 caracteres!");
        return false;
    }
    else if(password != password2){
        alert("Las contraseñas no coinciden!");
        return false;
    }
}