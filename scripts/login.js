
 function onSingin(googleUser) {
         var _profile= googleUser.getBasicProfile();
         var _nombre = googleUser.getBasicProfile().getName();
//        $('#contenedor').load("principal.php", {
//            nombre: _nombre
//        });
//      
        console.log("entra");
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    

function onFailure(error) {
      console.log(error);
    }
