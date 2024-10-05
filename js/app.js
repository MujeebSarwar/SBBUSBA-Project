function showPassword(){
  var pass = document.getElementById("password");

  if(pass.type == "password"){
    pass.type ="text"
    }else{
      pass.type ="password"
    }
}



// Show Modal Box
$(document).ready(function() {
  $('#imageModal').modal('show');
});