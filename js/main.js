$(function(){
    //script for general carousel

    $('body').scrollspy({ target: '.navbar-nav' })

    //script for fancy box
    $(".fancybox").fancybox({
        padding : 0,
        helpers: {
            overlay: {
                locked: false
            }
        }
    });


    $(document).ready(function() {

        $(".form").submit(function() {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: $(this).serialize()
            }).done(function() {
                $(this).find("input").val("");
                $('.close').click();

                $(".form").trigger("reset");
                $('#success').modal();
            });
            return false;
        });

    });

    // var $page = $('html, body');
    // $('a[href*="#"]').click(function() {
    //     $page.animate({
    //         scrollTop: $($.attr(this, 'href')).offset().top
    //     }, 400);
    //     return false;
    // });

});