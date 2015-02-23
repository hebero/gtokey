
function regular1(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = [13];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
         alert("Has presionado un caracter no permitido"); 
        return false;
} 

     if( e.keyCode === 13 ) 
{

document.getElementById("apellido").focus(); 
}
   
}

function regular2(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = [13];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
         alert("Has presionado un caracter no permitido"); 
        return false;
} 

     if( e.keyCode === 13 ) 
{

document.getElementById("correo").focus(); 
}
   
}

function regular3(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "@_1234567890-.abcdefghijklmnñopqrstuvwxyz";
    especiales = [13];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
         alert("Has presionado un caracter no permitido"); 
        return false;
} 

     if( e.keyCode === 13 ) 
{

document.getElementById("usuario").focus(); 
}
}
function regular4(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "_1234567890abcdefghijklmnñopqrstuvwxyz";
    especiales = [13];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
        return false;
} 

     if( e.keyCode === 13 ) 
{

document.getElementById("contrasena").focus(); 
}
   
}

function regular5(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890_-!#$%&/()=?¨*[]:;{}@¡.,+abcdefghijklmnñopqrstuvwxyz";
    especiales = [13];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
        return false;
} 

     if( e.keyCode === 13 ) 
{

document.getElementById("contrasena2").focus(); 
}
   
}

function regular6(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890_-!#$%&/()=?¨*[]:;{}@¡.,+abcdefghijklmnñopqrstuvwxyz";
    especiales = [13];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
        return false;
} 

     if( e.keyCode === 13 ) 
{

document.getElementById("btn2").focus(); 
}
   
}




