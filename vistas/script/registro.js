// ver la contraseña repetida 
$(document).ready(function(){
   $("#clave2").keyup(revisarContraseña);
});

//verifica si la contraseña
$(document).ready(function(){
   $("#clave").keyup(revisarContraseña2);
});

function revisarContraseña2(){
    var clave2 = document.getElementById("#clave2").value;
    var longitudcla= clave2.length;
    if(longitudcla>0){
        var clave = $("#clave").val();
        var confirmarclave = $("#clave2").val();
        
        if(clave != confirmarclave){
            $("#contraseñasiguales").html("<div clas='alert alert-danger'><i class='fa fa-close'></i> LAS CONTRASEÑAS NO COINCIDEN<input value='error' type='hidden' name='verificarcontraseñas'></div>")
        document.getElementById("Registrar").disabled = true;
        }else{
             $("#contraseñasiguales").html("<div clas='alert alert-succes'><i class='fa fa-check'></i> LAS CONTRASEÑAS COINCIDEN<input value='1' type='hidden' name='verificarcontraseñas'></div>")
        document.getElementById("Registrar").disabled = false;
        }
    }
}

function revisarContraseña(){
    var clave = $("#clave").val();
    var confirmarClave = $("#clave2").val();
    
    if(clave != confirmarClave){
        var contador = 0;
        $("#contraseñasiguales").html("<i class='fa fa-close'></i> LAS CONTRASEÑAS NO COINCIDEN<input value='error' type='hidden' name='verificarcontraseñas'>")
    document.getElementById("Registrar").disabled = true;
    }else{
        contador =1;
        $("#contraseñasiguales").html("<i class='fa fa-check'></i> LAS CONTRASEÑAS COINCIDEN<input value='1' type='hidden' name='verificarcontraseñas'>")
        document.getElementById("Registrar").disabled = false;
    }
}





