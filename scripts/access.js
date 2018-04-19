/* 01. code check for access code
-----------------------------------------------------------------------------*/
$(document).ready(function(){

  $("#submit").click(function(){

    var username = $("#myusername").val();
    var password = $("#mypassword").val();

    if((username == "") || (password == "")) {
      $("#message").html("<p class=\"display-error\">Inseriu um código errado!</p>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "checklogin.php",
        data: "myusername="+username+"&mypassword="+password,
        success: function(html){
          if(html=='true') {
            window.location="http://localhost/hpe/home";
          }
          else {
            $("#message").html(html);
          }
        },
        beforeSend:function()
        {
         	//$("#message").html("<img class=\"loader\" src=''>")
         	$("#message").html('<p class=\"green body-copy-small\"><strong>Código inserido com sucesso!</strong></p>')
        }
      });
    }
    return false;
  });

});