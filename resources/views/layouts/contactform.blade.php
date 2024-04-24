<?php

    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $correoDe = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $correoPara = "felipe.rodriguezas@correoaiep.cl";
        $headers = "De: ".$correoDe;
        $texto = "Tu has recibido un correo de ".$nombre.".\n\n".$mensaje;

        mail($correoPara, $asunto, $texto, $headers);
        header("Location: index.php?correoenviado");
    }
?>