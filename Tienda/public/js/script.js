function registrarse(){
    let nombre = document.F_R.Nombre.value
    let apellido = document.F_R.Apellido.value
    let email = document.F_R.Email.value
    let password = document.F_R.Password.value
    let r_password = document.F_R.Repetir_Password.value
    let telefono = document.F_R.Telefono.value
    let validar_email = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/
    let validar_telefono = /^\+\d{2,3}\s\d{9}$/

    if(nombre == ""){
        document.getElementById("error_nombre").innerHTML = "El campo es obligatorio"
    }else{
        document.getElementById("error_nombre").innerHTML = ""
    }

    if(apellido == ""){
        document.getElementById("error_apellido").innerHTML = "El campo es obligatorio"
    }else{
        document.getElementById("error_apellido").innerHTML = ""
    }
    if (email != validar_email || email == "" ){
        document.getElementById("error_email").innerHTML = "Este email no es valido"
       } else {
        document.getElementById("error_email").innerHTML = ""
       }


    if( password == null || password.length <= 5 ) {
        document.getElementById("error_password").innerHTML = "El campo password debe tener 6 o mas caracteres"
      }else{
        document.getElementById("error_password").innerHTML = ""
    }

    if( r_password != password) {
        document.getElementById("error_r_password").innerHTML = "Los password no coinciden"
      }else{
        document.getElementById("error_r_password").innerHTML = ""
    }

    if( telefono != validar_telefono || telefono == "" || isNaN(telefono) ) {
        document.getElementById("error_telefono").innerHTML = "El numero de telefono no es valido"
      }else{
        document.getElementById("error_telefono").innerHTML = ""
    }

}