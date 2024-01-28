$(document).ready(function(){
    $("#Send").click(function(){
        $.post("autorization.php", {
            Login : $("#Login").val() ,
            Password : $("#Password").val()
        }, function(data){
            alert(data);
            if(data != '0'){
                let link = "main.php?Login=" +  $("#Login").val();
                alert(link);
                window.location.replace(link);
            }
        })
    })
})