<?php
?>
<html>
    <head>
        <title>ITS VENTAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../public/CSSLogReg/login.css" rel="stylesheet" type="text/css"/>
         <script src="../public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
         <link href="../public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
   <body>
       
 <div class="login-page">
     <div class="form">
          <h1>INGRESE AL SISTEMA</h1>
          <div align="center">
            <img src="../files/login_registro/logo.png" alt=""/>
            </div>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" id="frmAcceso">
      <div class="form-group has-feedback">
      <input type="text" id="logina" placeholder="username"/>
      <span class="fa fa-user form-control-feedback"></span>
          </div>
       <div class="form-group has-feedback">
      <input type="password" id="clavea" placeholder="password"/>
        <span class="fa fa-key form-control-feedback"></span>
          </div>
      <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
      <p class="message">No tiene una cuenta? <a href="registro.php">Crear una cuenta</a></p>
    </form>
  </div>
</div>
       <script src="script/login.js" type="text/javascript"></script>
       <script src="../public/js/bootstrap.min.js" type="text/javascript"></script>
       <script src="../public/js/bootbox.min.js" type="text/javascript"></script>
</body>
</html>

