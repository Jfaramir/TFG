
 function onSingin(googleUser) {
         var _nombre = googleUser.getBasicProfile().getName();
         var _email = googleUser.getBasicProfile().getEmail();
         var _id = googleUser.getBasicProfile().getId();

        $('#contenedor').load("nuevoUsuario.php", {
            nombre: _nombre,
            email: _email,
            id: _id
        });
      
        console.log("entra");
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    

function onFailure(error) {
      console.log(error);
    }
