<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="estilos.css">
    <title>FORM 0.1</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"   >
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="">

            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="">

            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje"></textarea>

            <?php if(!empty($errores)):  ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado con éxito</p>
                </div>
            <?php endif ?>

            <input type="submit" class="btn btn-primary" name="submit" value="Enviar">


        </form>
    </div>
</body>
</html>