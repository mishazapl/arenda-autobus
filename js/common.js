$("#my-form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            th.trigger("reset");
            alert('Сообщение отправленно!');
            }, 500);
        return false;
        
        });