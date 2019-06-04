

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="1091108886907-tvhss5q44oavsrl1hkco0vnrlut4siv0.apps.googleusercontent.com">
    <title>Recordator</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="contenedor" style="  overflow:hidden; ">
      <div class="site-wrapper">
  <div   class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand" style="color: white" >Recordator</h3>
          <nav class="nav nav-masthead">
            <a class="nav-link nav-social" href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="https://twitter.com/?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="https://aboutme.google.com/u/0/?referer=gplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="https://www.instagram.com/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </nav>
        </div>
                  </div>

      </div>
        <br>   
        <div class="inner cover">
        <h1 class="cover-heading" style="color: white" >Recordator</h1>
        <p class="lead cover-copy" style="color: white" >La aplicaccion que te ayudara a organizar tu vida.</p>
        <p class="lead">
            <button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal">Iniciar Sesion</button>
            <button  type="button" class="g-signin2 btn btn-lg btn-default btn-notify" data-onsuccess="onSingin" data-toggle="modal" >Iniciar con google</button></p>
            <button  type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#loginmodal">Log-In</button>
        <!--<div class="g-signin2" data-onsuccess="onSingin" style="margin-left: 45%; margin-top: 5%" ></div>-->
      </div>
      <div class="mastfoot">
          <div class="inner">
          <p>&copy; Recordator. <a href="https://recordator.com/" target="_blank">RecordatorTecnologies</a>.</p>
        </div>
      </div>
     
      
      
      
      <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="subscribeModalLabel">Crear Nuevo Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                    <label for="recipient-name"  class="form-control-label">e-mail</label>
                  <input type="text" class="form-control" id="recipient-name" placeholder="your-name@example.com">
                  <p></p>
                    <label for="recipient-name"  class="form-control-label">Nombre</label>
                  <input type="text" class="form-control" id="recipient-name2" placeholder="your-name">
                  <p></p>
                  <label for="recipient-name" class="form-control-label">Password</label>
                  <input type="password" class="form-control" id="recipient-name3" placeholder="**********">
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="ButtonEntrar" class="btn btn-default"  onclick="entrar()">Entrar</button>
            </div>
          </div>
        </div>
    </div>
        
    
    <div class="modal fade" class="modal" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="subscribeModalLabel">Log-In</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                    <label for="recipient-name"  class="form-control-label">e-mail</label>
                  <input type="text" class="form-control" id="recipient-name" placeholder="your-name@example.com">
                  <p></p>
                  <label for="recipient-name" class="form-control-label">Password</label>
                  <input type="password" class="form-control" id="recipient-name3" placeholder="**********">
                </div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="ButtonEntrar" class="btn btn-default"  onclick="entrar2()">Entrar</button>
            </div>
          </div>
        </div>
    </div>
    
        
  </div>
</div>

    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>

     <script src="scripts/main.js"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>
           

    <script src="scripts/main.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="scripts/login.js"></script>

    
    <script> 
        
        var _nombre = $('#recipient-name2').val();
        var _cajaNombre = $('#recipient-name').val();
        var _cajaPassword = $('#recipient-name3').val();
        
        function entrar(){
            $('#contenedor').load("nuevoUsuario.php", {
                email: _cajaNombre,
                nombre: _nombre,
                password: _cajaPassword
            });   
        }
        function entrar2(){          
            $('#contenedor').load("nuevoUsuario.php", {
                email: _cajaNombre,
                nombre: _nombre,
                password: _cajaPassword
            });
        }
        
    </script>
    
  </body>
