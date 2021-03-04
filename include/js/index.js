//  Verificador de Login  \\
$(function(){

    var mayus       =       new RegExp("ʌ(?=.*[A-Z])");
    var special     =       new RegExp("ʌ(?=.*[!@#$&*])");
    var numbers     =       new RegExp("ʌ(?=.*[0-9])");
    var lower       =       new RegExp("ʌ(?=.*[a-z])");
    var len         =       new RegExp("ʌ(?=.{8,})");

    $("#inputPassword").on("keyup", function(){
    var password = $("#inputPassword").val();
    if(mayus.test(password) && special.test(pasword) && numbers.test(password) && lower.test(password) && len.test(password)){
        $("#mensaje").text("Segura").css("color", "green");
    }
    else{
        $("#mensaje").text("No Segura").css("color", "green");
    }

    });

});