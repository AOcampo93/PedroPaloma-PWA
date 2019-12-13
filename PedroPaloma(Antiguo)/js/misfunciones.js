function validador(){
  /*Obtengo las variables*/
  var nombre = document.getElementById("Nombre").value;
  var horario = document.getElementById("Horario").value;
  var chkEstado = document.getElementById('checkBox');

  /*Proceso las variables*/
  //document.getElementById("Nombre").style.background = "white";
    document.getElementById("Nombre").style.background = "white";
    document.getElementById("Horario").style.background = "white";

  //Test campo obligatorio
    if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
      //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
      document.getElementById("Nombre").style.background = "#FF9393";
      return false;
    }

    if(horario == ""){
      //alert('ERROR: Seleccione un horario');
      document.getElementById("Horario").style.background = "#FF9393";
      return false;
    }

    if(!chkEstado.checked){
      alert('Debes aceptar los términos y condiciones del servicio');
      return false;
    }

    return true;
}

function validadorFormulario(){
  var nombre = document.getElementById("Nombre").value;
  var email = document.getElementById("Email").value;
  var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  document.getElementById("Nombre").style.background = "white";
  document.getElementById("Email").style.background = "white";

  if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
    //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    document.getElementById("Nombre").style.background = "#FF9393";
    return false;
  }
  if(email == null || email.length == 0 || !expr.test(email)){
    //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    document.getElementById("Email").style.background = "#FF9393";
    return false;
  }
  return true;
}

function evento(){
  var nombre = document.getElementById("Nombre").value;
  var email = document.getElementById("Email").value;
  var personas = document.getElementById("Personas").value;
  var hora = document.getElementById("Hora").value;
  var lugar = document.getElementById("Lugar").value;
  var comentario = document.getElementById("Comentario").value;
  var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  document.getElementById("Nombre").style.background = "white";
  document.getElementById("Email").style.background = "white";
  document.getElementById("Personas").style.background = "white";
  document.getElementById("Hora").style.background = "white";
  document.getElementById("Lugar").style.background = "white";
  document.getElementById("Comentario").style.background = "white";

  if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
    //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    document.getElementById("Nombre").style.background = "#FF9393";
    return false;
  }
  if(email == null || email.length == 0 || !expr.test(email)){
    //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    document.getElementById("Email").style.background = "#FF9393";
    return false;
  }
  if (personas == null || personas.length == 0 || !/^([0-9])*$/.test(personas)){
    document.getElementById("Personas").style.background = "#FF9393";
    return false;
  }
  if(lugar == null || lugar.length == 0 || /^\s+$/.test(lugar)){
    //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    document.getElementById("Lugar").style.background = "#FF9393";
    return false;
  }
  if(comentario == null || comentario.length == 0 || /^\s+$/.test(comentario)){
    //alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
    document.getElementById("Comentario").style.background = "#FF9393";
    return false;
  }
  return true;
}
