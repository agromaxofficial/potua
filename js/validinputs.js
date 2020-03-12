$(function(){
    
    $('form').submit(function(event){
        var name = $(this).find("[name='Order[fio]']");
        var phone = $(this).find("[name='Order[phone]']");

        if(name.val().trim().length <= 0 || phone.val().trim().length <= 0)
            alert("Введите все данные");
        else
            return true;
        
        event.preventDefault();
    });
})