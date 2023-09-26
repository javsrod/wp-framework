jQuery(document).ready(function($) {

    // Canvas Slide Toggle
    $( ".canvas_side_toggle" ).click(function() {
        $("#canvas_slide_wrapper").toggleClass("open");
        $(".main").toggleClass("opened-main");
        $( ".opened-main" ).click(function() {
            $("#canvas_slide_wrapper").removeClass("open");
            $(".main").removeClass("opened-main");
            return false;
        });

        return false;
    });

