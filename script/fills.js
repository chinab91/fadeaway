$(document).ready(function() {
    
    $(".box_content").css('marginTop','-'+$(".box_content").height()/2 + 'px');
    
    $('textarea#inputContent').focus(function() {
        if ($(this).val() == "Fill this") {
            $(this).val('');
        }
    });

    $('textarea#inputContent').focusout(function() {
        if ($(this).val() == "") {
            $(this).val('Fill this');
        }
    });
    
    $('textarea#inputContent').change(function() {
        $(".box_content").css('font-weight','bold').text($(this).val()).css('marginTop','-'+$(".box_content").height()/2 + 'px');
    });
    
    $(".box_frame").fadeOut(300, function() {
        var b_randomR = Math.floor(Math.random() * 255);
        var b_randomG = Math.floor(Math.random() * 255);
        var b_randomB = Math.floor(Math.random() * 255);
        var c_randomR = Math.floor(Math.random() * 255);
        var c_randomG = Math.floor(Math.random() * 255);
        var c_randomB = Math.floor(Math.random() * 255);
        $(".box_frame").css('background-color', 'rgb(' + b_randomR + ',' + b_randomG + ',' + b_randomB + ')');
        $(".box_frame").css('color', 'rgb(' + c_randomR + ',' + c_randomG + ',' + c_randomB + ')');
        $("#bg_R").val(b_randomR);
        $("#bg_G").val(b_randomG);
        $("#bg_B").val(b_randomB);
        $("#font_R").val(c_randomR);
        $("#font_G").val(c_randomG);
        $("#font_B").val(c_randomB);
        $(".box_frame").fadeIn(300);
    });
    $(".box_frame").click(function() {
        $(this).fadeOut(300, function() {
            var b_randomR = Math.floor(Math.random() * 255);
            var b_randomG = Math.floor(Math.random() * 255);
            var b_randomB = Math.floor(Math.random() * 255);
            var c_randomR = Math.floor(Math.random() * 255);
            var c_randomG = Math.floor(Math.random() * 255);
            var c_randomB = Math.floor(Math.random() * 255);
            $(this).css('background-color', 'rgb(' + b_randomR + ',' + b_randomG + ',' + b_randomB + ')');
            $(this).css('color', 'rgb(' + c_randomR + ',' + c_randomG + ',' + c_randomB + ')');
            $("#bg_R").val(b_randomR);
            $("#bg_G").val(b_randomG);
            $("#bg_B").val(b_randomB);
            $("#font_R").val(c_randomR);
            $("#font_R").val(c_randomG);
            $("#font_R").val(c_randomB);
            $(this).fadeIn(300);
        });
    });
});

