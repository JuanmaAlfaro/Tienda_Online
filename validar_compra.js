function validar() {
    var cp,estado,ciudad,fracc,calle,numext,numint,tel;
    cp = document.getElementById("cp").value;
    estado = document.getElementById("estado").value;
    ciudad = document.getElementById("ciudad").value;
    fracc = document.getElementById("fracc").value;
    calle = document.getElementById("calle").value;
    numext = document.getElementById("numext").value;
    numint = document.getElementById("numint").value;
    tel = document.getElementById("tel").value;

    if(cp === "" || estado === ""|| ciudad === ""|| fracc === ""
    || calle === ""|| numext === ""|| tel === ""){
        alert("Llena todos campos obligatorios(*)!");
        return false;
    }
    else if(cp.length < 4 || cp.length > 5){
      alert("El codigo postal no es valido!");
      return false;
    }
    else if(estado.length > 30 || ciudad.length > 30 || fracc > 30
            || calle > 30){
        alert("Los campos estado,ciudad, fraccionamiento y calle solo pueden tener 30 caracteres!");
        return false;        
    }
    else if(numext.length > 10 || numint.length > 10){
        alert("Los campos numero exterior e interior solo pueden tener 10 caracteres!");
        return false;
    }
    else if(tel.length < 10 || tel.length > 13){
        alert("El numero de telefono no es valido!");
        return false;
    }
    else if(isNaN(numext) || isNaN(numint) || isNaN(tel) || isNaN(cp)){
        alert("Los campos numero exterior, numero interior, telefono y codigo postal deben ser numeros!");
        return false;
    }
    
}
 
  