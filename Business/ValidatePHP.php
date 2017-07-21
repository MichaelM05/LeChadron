<?php

if (isset($_GET['success'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("¡El mensaje fue enviado correctamente!","Envío exitoso");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['error'])) {
    echo '
                <script>     
                    $(document).ready(function(){
                        modalSelect("¡El mensaje no se pudo enviar correctamente!","Envío fallido");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['errorCampos'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("¡El mensaje no se pudo enviar, campos vacíos en el formulario!","Envío fallido");
                        $("#myModal").modal("show");
                    });
                </script>';
}
?>
