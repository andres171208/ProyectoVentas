var tabla;

//Funcion que se ejecute al inicio

function init(){
    mostrarform(false);
    listar();
    
    $("#formulario").on("submit",function(e)
    {
            guardaryeditar(e); 
        });
    
}

//funcion limpiar

function  limpiar(){
    $("#idcategoria").val("");
    $("#nombre").val(" ");
    $("#descripcion").val(" ");
    
}

// funcion mostrar formulario

function mostrarform(flag)

{
    limpiar();
    if(flag){
        
$("#listadoregistros").hide();
$("#formularioregistros").show();
$("#btnGuardar").prop("disabled",false);
        
    }else{
        
$("#listadoregistros").show();
$("#formularioregistros").hide();
    }
    
}

function cancelarform(){
    
    limpiar();
    mostrarform(false);
}

// funcion listar

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
            "aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: "../ajax/categoria.php?op=listar",
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();

}

function guardaryeditar(e)
{
	e.preventDefault(); //No se activarÃ¡ la acciÃ³n predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/categoria.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}
//funcion mostrar datos antes de editar
function mostrar(idcategoria){
    $.post("../ajax/categoria.php?op=mostrar",{idcategoria:idcategoria}, function(data, status)
    {
        data = JSON.parse(data);
        mostrarform(true);
        
        $("#nombre").val(data.nombre);
        $("#descripcion").val(data.descripcion);
        $("#idcategoria").val(data.idcategoria);
    });
    }

//Desactivar Categoria
function desactivar(idcategoria){
    bootbox.confirm("¿Desea desactivar la categoria?", function(result){
        if(result){
                    $.post("../ajax/categoria.php?op=desactivar", {idcategoria:idcategoria}, function(e){
                    bootbox.alert(e);
                    tabla.ajax.reload();  
                    });
                    
        }
    });
}

//Activar Categoria
function activar(idcategoria){
    bootbox.confirm("¿Desea activar la categoria?", function(result){
        if(result){
                    $.post("../ajax/categoria.php?op=activar", {idcategoria:idcategoria}, function(e){
                    bootbox.alert(e);
                    tabla.ajax.reload();    
                        
                    });
                    
        }
    });
}
init();

