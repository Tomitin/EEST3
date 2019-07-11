$(document).ready(function() {
    $(".collapsible").click(function () {
        $(this).find(".rotate").toggleClass("down");
    })
    $(".collapsible").hover(function(){
        $(this).find(".rotate").toggleClass("accordion-caret-right");
        $(this).toggleClass("left-marker");
    })
    $("#expandAccordion").click(function(){
        $(".collapsible").each(function(i){
            if($(this).hasClass("active") == false)
            {
                $(this).click();
            }
        });
    })
    $("#collapseAccordion").click(function(){
        $(".collapsible").each(function(i){
            if($(this).hasClass("active"))
            {
                $(this).click();
            }
        });
    })

    $(".page-useful").click(function(){
        $(".page-useful").addClass("hidden");
        $('#print-thankyou').append('<div class="loader" style="margin: 0 auto;"></div>');

        setTimeout(function(){
            $('#print-thankyou').text("Se ha enviado su encuesta.");
            $('#print-thankyou').append('<i class="fa fa-check-square-o"></i>');
        }, 1250);
    })
});