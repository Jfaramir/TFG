<?php
//$idTarea = $_POST['idTarea'];
//include ('misFunciones.php');
//$mysqli = conectaBBDD();
//$id = $_POST['id'];
//$resultado = $mysqli->query("select * from notas inner join notas_grupo on(notas.id = notas_grupo.id) where notas_grupo.id_tarea = $id;");
//
//$numNotas = $resultado->num_rows;
//
//
//$listaNotas = array();
//
//for ($i = 0; $i < $listaNotas; $i++) {
//    
//    $r = $resultado->fetch_array(); //leo una fila del resultado de la query
//    $listaNotas[$i][0] = $r['id'];
//    $listaNotas[$i][1] = $r['texto_tarea'];
//    $listaNotas[$i][2] = $r['nombre'];
//    $listaNotas[$i][3] = $r['id_grupo'];
//
//    
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Notas Adhesivas con CSS3 y Google Fonts (Paso 5)</title>
        <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
        <style type="text/css">
            *{
                margin:0;
                padding:0;
            }
            input {
                width: 250px;
                padding: 5px;
            }
            .sinbordefondo {
                background-color: ;
                border: 0;
            }

            h2,p{
                font-size:100%;
                font-weight:normal;
            }
            ul,li{
                list-style:none;
            }
            ul{
                overflow:hidden;
                padding:3em;
            }
            ul li a{
                text-decoration:none;
                color:#000;
                background:#ffc;
                display:block;
                height:15em;
                width:15em;
                padding:1em;
                -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
                -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
                box-shadow: 5px 5px 7px rgba(33,33,33,.7);
                -moz-transition:-moz-transform .15s linear;
                -o-transition:-o-transform .15s linear;
                -webkit-transition:-webkit-transform .15s linear;
            }
            ul li{
                margin:1em;
                float:left;
            }
            ul li h2{
                font-size:140%;
                font-weight:bold;
                padding-bottom:10px;
            }
            ul li p{
                font-family:"Reenie Beanie",arial,sans-serif;
                font-size:130%;
            }
            ul li a{
                -webkit-transform: rotate(-6deg);
                -o-transform: rotate(-6deg);
                -moz-transform:rotate(-6deg);
            }
            ul li:nth-child(even) a{
                -o-transform:rotate(4deg);
                -webkit-transform:rotate(4deg);
                -moz-transform:rotate(4deg);
                position:relative;
                top:5px;
                background:#cfc;
            }
            ul li:nth-child(3n) a{
                -o-transform:rotate(-3deg);
                -webkit-transform:rotate(-3deg);
                -moz-transform:rotate(-3deg);
                position:relative;
                top:-5px;
                background:#ccf;
            }
            ul li:nth-child(5n) a{
                -o-transform:rotate(5deg);
                -webkit-transform:rotate(5deg);
                -moz-transform:rotate(5deg);
                position:relative;
                top:-10px;
            }
            ul li a:hover,ul li a:focus{
                box-shadow:10px 10px 7px rgba(0,0,0,.7);
                -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
                -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
                -webkit-transform: scale(1.25);
                -moz-transform: scale(1.25);
                -o-transform: scale(1.25);
                position:relative;
                z-index:5;
            }
            ol{text-align:center;}
            ol li{display:inline;padding-right:1em;}
            ol li a{color:#fff;}
        </style>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>


    <div style="margin-left:3%">
        <button class="btn btn-secondary" onclick="nuevaNota()">nueva nota</button>
        <ul  id="cajaNotas">
            <li>
                <a href="#">

                    <input type="text" value="TITULO" style="background-color:transparent; border:1px; width: 80%; text-align: center">

                    <p>
                    <textarea name="text" cols="25" rows="5" style="background-color:transparent; border: 1px">
escribe el contenido de la nota aqui</textarea>
                    
                    </p>
                </a>
            </li>
           <li>
                <a href="#">

                    <input type="text" value="TITULO" style="background-color:transparent; border:1px; width: 80%; text-align: center">

                    <p>
                    <textarea name="text" cols="25" rows="5" style="background-color:transparent; border: 1px">
escribe el contenido de la nota aqui</textarea>
                    
                    </p>
                </a>
            </li>

        </ul>
    </div>


    <script>

        function nuevaNota() {
            $('#cajaNotas').append(' <li> <a href="#"> <input type="text" value="TITULO" style="background-color:transparent; border:1px; width: 80%; text-align: center">   <p><textarea name="text" cols="25" rows="5" style="background-color:transparent; border: 1px">escribe el contenido de la nota aqui</textarea> </p> </a>            </li>');


        }


    </script>



</html>
