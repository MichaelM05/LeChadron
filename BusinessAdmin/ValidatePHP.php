<?php

if (isset($_GET['success'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("¡La acción fue exitosa!","Éxito");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['error'])) {
    echo '
                <script>     
                    $(document).ready(function(){
                        modalSelect("¡Se produjo un error en la acción!","Error");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['errorData'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("¡Debe ingresar todos los datos!","Error Datos");
                        $("#myModal").modal("show");
                    });
                </script>';
}
?>
