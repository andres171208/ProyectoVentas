<?php
?>
<html>
<head>
    <title>ITS VENTAS</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../public/CSSLogReg/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../public/CSSLogReg/estiloRegistro.css" rel="stylesheet" type="text/css"/>
     <script src="../public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
     
</head>  
<body>
    <section>
        <form action="../ajax/registro.php" class="form" method="POST">
            <h1>ITS VENTAS</h1>
            <p>
                <img src="../files/login_registro/logo.png" alt=""/>
            </p>
            
            <input class="controles" type="text" id="nombre" name="nombre" placeholder="Nombre" required="">
         <div class="controles">
         <select class="form-control select-picker" name="tipo_documento" id="tipo_documento">
             <option value=" ">Seleccione su tipo de documento...</option>
             <option value="DNI">DNI</option>
             <option value="RUC">RUC</option>
             <option value="CEDULA">CEDULA</option>
         </select>
     </div>
            <input class="controles" type="number" id="numdocumento" name="numdocumento" minlength="10" maxlength="13" placeholder="N° Documento" required="">
        <div id="repetircedula"></div>
        <input class="controles" type="number" id="telefono" name="telefono" minlength="9" maxlength="10" placeholder="Telefono" required="">
        <input class="controles" type="email" id="email" name="email" placeholder="Email">
        <div id="repetiremail"></div>
        <input class="controles" type="text" id="username" name="username" placeholder="Username" required="">
        <div id="repetirusuario"></div>
        <input class="controles" type="password" id="clave" name="clave" minlength="6" maxlength="8" placeholder="Contraseña" required="">
        <input class="controles" type="password" id="clave2" name="clave2" minlength="6" maxlength="8" placeholder="Confirmar Contraseña" required="">
        <div id="contraseñasiguales"></div>
        <button class="boton" type="submit" id="Registrar">Registrar</button>
        <button class="boton1" type="button" id="Cancelar" onclick="cancelarform()" >Cancelar</button>
        
        <p><a href="login.php">¿YA TIENES UNA CUENTA?</a></p>
        
        </form>
    </section>
   
    <script src="script/registro.js" type="text/javascript"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>