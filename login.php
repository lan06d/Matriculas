<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <section class="form-register">
        <center><h4>Inicio de sesion</h4></center>
        <form action="insertar.php" method="post">
            <label for="email"></label><br><br>
            <input class="controls" type="text" name="introducir_email" id="email" required="obligatorio" placeholder="Email">
            <label for=""></label> </label><br><br>
            <input class="controls" type="password" placeholder="contraseña" name="last_name" required>
            <a href="bd.php">
            <input class="botons" type="submit" name="registrar" value="Inicia sesíon">
            </a>
        </form>
    </section>

</body>

</html>
