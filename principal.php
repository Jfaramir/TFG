<?php
$nombre;

?>
<html>
    <link href="styles/simple-sidebar.css" rel="stylesheet">

    <div class="container" style=" margin-top: 3%;">
        <div class="d-flex " id="wrapper">
            
            
            <!-- Sidebar -->
            <div class="bg-dark border-right" id="sidebar-wrapper" style="opacity: 0.75 " style="align-items: center">
                <div class="sidebar-heading"><a class=" align-content-lg-start">Grupo</a> <button class="btn-dark" onclick="nuevoGrupo()">+</button> 
                </div>
                <input id ="Buscador" name="buscar" onkeyup="cargaGrupos()" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search"  >                                                      

                <div id="grupos" class="list-group " style="overflow-y: auto; height:500px; padding: 5px;">

                </div>
            </div>


            <!-- Page Content -->
            <div id="page-content-wrapper" style="opacity: 0.75">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0" style="align-items: center">
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost/tfg/index.php#" >Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Notas</a>
                                    <a class="dropdown-item" href="#">Recordatorios</a>
                                    <a class="dropdown-item" href="#">Subtareas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Todos los archivos</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div id="tareas"  class="container-fluid bg-dark border-bottom" style="overflow-y: auto; height: 500px; border: 2px; margin-top: 10px; margin-left: 10px; width: 98%">
                </div>
            </div>
        </div>
    </div>





    <script>
        var _email = '<?php echo $email; ?>';
        //side var acction
    
    $("#grupos").load('cargaGrupos.php', {
            email: _email,
            param:''
        });
        
    
    function nuevoGrupo() {
            $('#tareas').load('nuevoGrupo.php');
        }
    function cargaGrupos(){ 
     var _param = $('#Buscador').val();

    $("#grupos").load('cargaGrupos.php', {
            email: _email,
            param: _param
        });
        
    }
    cargaGrupos();


    </script>


</html>









