<?php ?>
<style>


    .blue
    {

        position:relative;// so that .modal & .modal-backdrop gets positioned relative to it
    }


    .modal, .modal-backdrop {
        position: absolute !important;
    }
    .modal-backdrop{
        opacity: 0 !important;
    }

</style>
<html>

    <div class="blue "id="formulario"style="padding: 15%; padding-top: 5%;height: 100%">

        <div class="">
            <label for="exampleFormControlInput1">Nombre del Grupo</label>
            <input type="text" class="form-control" id="cajaNomobreGrupo" >
        </div>

        <br><br>
        <button id="botonModal" onclick="abreModal()">Agregar usuario</button>
        <br><br>
        <div id="usuariosNuevos"></div>
        <button class="btn btn-success" onclick="creaGrupo()">Crear Grupo</button>


        <span id="alertas" class="label "></span>




        <!-- Modal -->
        <div id="myModal" class="modal fade bg-dark" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <input id="cajabusqueda" class="form-control"  placeholder="Search" aria-label="Search" onkeyup="cargaUsuarios()" style="margin-left: 5%">
                    </div>
                    <div class="modal-body" id="usuarios" style="height: 200px">     
                    </div>

                </div>

            </div>
        </div>

        <html>




            <script>
                var listaAñadidos = [];

                function abreModal() {

                    $("#myModal").modal("show");

                    //appending modal background inside the blue div
                    $('.modal-backdrop').appendTo('.blue');

                    //remove the padding right and modal-open class from the body tag which bootstrap adds when a modal is shown
                    $('body').removeClass("modal-open");
                    $('body').css("padding-right", "");
                    cargaUsuarios();
                }


                function  cargaUsuarios() {
                    var _param = $('#cajabusqueda').val();
                    console.log(_param);
                    $('#usuarios').load('buscaUsuarios.php', {
                        param: _param


                    });
                }
                function añadeUsuario(id, nombre) {

                    console.log(id, nombre, listaAñadidos);
                    var anadido = false;
                    for (i = 0; i < listaAñadidos.length; i++) {
                        if (listaAñadidos[i] == id) {
                            anadido = true;

                        }
                    }
                    if (anadido) {
                        console.log('ese usuario ya esta añadido');
                    }
                    else {
                        $('#usuariosNuevos').append('<div>' + nombre + '</div>');
                        listaAñadidos[listaAñadidos.length] = id;

                    }
                }

                function creaGrupo() {
                    var _nombreGrupo = $('#cajaNomobreGrupo').val();
                    if (_nombreGrupo == "") {
                        $('#alertas').addClass('label-danger').text('Inserte un nombre de grupo');


                    } else {
                        //    $('#contenedorTareas').load('insertaGrupo.php',{
                        //       lista:listaAñadidos,
                        //       nombreGrupo:_nombreGrupo
                        //    });

                    }
                }



            </script>   



