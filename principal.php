<?ph3
$nombre;
?>

<html>
    <link href="styles/simple-sidebar.css" rel="stylesheet" >

    <div >
        <div >
            <div class="d-flex " id="wrapper" style=" width: 90%; margin-top:2%; margin-right:5%; margin-left:5%; height: 75%;" >


                <!-- Sidebar -->
                <div class="border border" id="sidebar-wrapper" style=" background-color: white">
                    <div class="sidebar-heading" style="background-color: #DDDDDD">
          
                        <div style=" float: left">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 0px; float: left"> 
                                <img src="img/usuario.png" style="width: 20px; height: 20px">                 </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" ><?php  echo $nombre ?></a>
                                <a class="dropdown-item" >Configuracion</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php">sign out</a>
                            </div>
                            </div>

    
                        <button class="btn btn-secondary" style="margin-left: 30%; width: 40px; height: 40px " onclick="nuevoGrupo()">+</button> 



                    </div>
                    <input id ="Buscador" name="buscar" onkeyup="cargaGrupos()" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search"  >                                                      

                    <div id="grupos" class="list-group container-fluid" style="overflow-y: auto; height:600px; padding: 5px;">

                    </div>
                </div>


                <!-- Page Content -->
                <div id="page-content-wrapper" style=" ">

                    <div id="tareas"  class="container-fluid border-bottom" style="overflow-y: auto; height: 706px; border: 2px;  width: 98%; background-color: white">
                        <div style=" width: 100%; height: 65px; background-color: #DDDDDD"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script>
        var _email = '<?php echo $email; ?>';
        //side var acction

        $("#grupos").load('cargaGrupos.php', {
            email: _email,
            param: ''
        });


        function nuevoGrupo() {
            $('#tareas').load('nuevoGrupo.php');
        }
        function cargaGrupos() {
            var _param = $('#Buscador').val();

            $("#grupos").load('cargaGrupos.php', {
                email: _email,
                param: _param
            });

        }
        cargaGrupos();


    </script>


</html>









