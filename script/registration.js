$(document).ready(function(){
    $("#Send").click(function(){
      $.post("registration.php", {
        Name : $("#Name").val(),
        Lastname : $("#Lastname").val(),
        Middlename : $("#Middlename").val(),
        Login : $("#Login").val(),
        Password : $("#Password").val(),
        Email : $("#Email").val(),
        Number : $("#Number").val()
      }, function(data){
        $(".join").append(data);
      });
    });
});