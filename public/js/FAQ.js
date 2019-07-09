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
});