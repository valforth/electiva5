 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contáctenos</title>
  <?php include ("header.php"); ?>
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="bootstrap/css/estilos.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="fondo">
    <?php require ("recaptcha/recaptchalib.php"); ?>
    <?php include("barraNavegacion.php"); ?>
    <?php require ("DBManager.php"); ?>
  <center class="TituloRegistro"><h1>Conctáctenos</h1></center>

<section>
<form action="envioEmail.php" method="post">

    <center>
        <table>
            <tbody>
                <tr>
                    <td><label for="txtnombre">Nombre </label></td>
                    <td>
                    <input type="text" title="Ingrese el nombre" name="txtnombre" id="txtnombre" class="form-control" placeholder="Escriba su nombre" required>
                    <div class="nota-informativa" id="notaNombre">Debe ingresar un nombre</div>
                    </td>
                </tr>

                <tr>
                    <td><label for="txtapellido">Apellidos </label> </td>
                    <td>
                    <input type="text" title="Ingrese el apellido" name="txtapellido" id="txtapellido" class="form-control" 
                        placeholder="Escriba  su apellido" required>
                        <div class="nota-informativa" id="notaApellido">Debe ingresar un apellido</div>

                    </td>
                </tr>

                <tr>
                    <td><label for="txtemail">Email </label> </td>
                    <td>
                    <input type="email" title="Ingrese el correo" name="txtemail" id="txtemail" class="form-control" placeholder="Escriba su correo electrónico" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="text">Mensaje</label></td>
                    <td>
                        <input type="text" title="Ingrese un mensaje" name="texto" id="texto" class="form-control" placeholder="Escriba el mensaje" required>
                    </td>
                </tr>
<br>
<div align="center">
    <div class="g-recaptcha" data-sitekey="6Leuqg0TAAAAAGTtqZKwM5i19Co_y1aSdR0oWHtm" style="position:relative;"></div>
</div>

            </tbody>
            </table></center>
             <br>
        <center><td><input type="submit" value="Enviar" class="btn btn-primary" name="enviar" id="Enviar" /></td>
        <td><input type="reset" value="Resetear" class="btn btn-primary" /></td>
            <p><?php echo $error = $_GET['error']; ?></p></center>

        </form>
</section>

<?php include ("footer.php"); ?>

</body>
</html>
