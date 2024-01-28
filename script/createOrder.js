$(document).ready(function(){
    $("#Send").click(function(){
        $.post("createOrder.php" , {
            PhoneMark : $("#PhoneMark").val(),
            PhoneModel : $("#PhoneModel").val(),
            DateOrder : $("#DateOrder").val(),
            DateDeviliry : $("#DateDeviliry").val() 
        } , function(){
            alert(data);
            let link = "main.php"
        })
    })
})