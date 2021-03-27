<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-contacto.css">
    <title>Estudio Guiguet</title>
</head>
<body>
    <?php include "header.php"?>

    <main>
        <section>
            <h2 class="text-center" id="titulo-contacto">CONTACTO</h2>
        </section>

        <section id="contacto">
            <div>
                <h4 class="text-center" id="contactanos">CONTACTANOS</h4>
                <div class="datos">
                    <img src="img/emailContacto.png" alt="Email" class="icono-contacto">
                    <p> estudio.guiguet@gmail.com </p>
                </div>
                <div class="datos">
                    <img src="img/telefono-inteligente.png" alt="Telefono" class="icono-contacto">
                    <p> 44844388 </p>
                </div>
                <div class="datos">
                    <img src="img/ubicacion.png" alt="Ubicacion" class="icono-contacto">
                    <p> Av de Mayo 2436, Ramos Mejia </p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.563054643536!2d-58.56306578468605!3d-34.66573626828946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7d39aa0fa73%3A0xfc6e85b358a346c7!2sAv.%20de%20Mayo%202436%2C%20B1704BVW%20Ramos%20Mej%C3%ADa%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1616286217767!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <form action="" id="formulario-contacto">
                <label for=""> *NOMBRE </label>
                <input type="text" name="" id="" placeholder="Ingrese su nombre" required>
                <label for="">*EMAIL</label>
                <input type="email" name="" id="" placeholder="Ingrese su email" required>
                <label for="">*TELEFONO/CELULAR</label>
                <input type="tel" name="" id="" placeholder="Ingrese su número de telefono o celular" required>
                <label for="">*ASUNTO</label>
                <input type="text" name="" id="" placeholder="Ingrese el asunto de su consulta" required>
                <label for="">*MENSAJE</label>
                <textarea name="" id="" cols="30" rows="7" placeholder="Ingrese su consulta" required></textarea>
                <input type="submit" value="ENVIAR">
            </form>
        </section>



    </main>

    <?php include "footer.php"; ?>
</body>
</html>
