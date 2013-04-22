$(document).ready(function() {
    $(".box_content").each(function() {
        $(this).css('marginTop', '-' + $(this).height() / 2 + 'px');
    });
    $(".box_frame").hover(function() {
        hover_fadeInOut($(this));
    });
    $(".overlay").click(function() {
        $(".overlay").fadeOut(400);
        $("#login").fadeOut(400);
        $("#register").fadeOut(400);
    });
});

function hover_fadeInOut(obj_frame) {

    obj_frame.fadeOut(1000, function() {
        var b_randomR = Math.floor(Math.random() * 255);
        var b_randomG = Math.floor(Math.random() * 255);
        var b_randomB = Math.floor(Math.random() * 255);
        var c_randomR = Math.floor(Math.random() * 255);
        var c_randomG = Math.floor(Math.random() * 255);
        var c_randomB = Math.floor(Math.random() * 255);
        obj_frame.css('background-color', 'rgb(' + b_randomR + ',' + b_randomG + ',' + b_randomB + ')');
        obj_frame.css('color', 'rgb(' + c_randomR + ',' + c_randomG + ',' + c_randomB + ')');

        obj_frame.fadeIn(1000);
    });
}

function fadeInOut(obj_frame, text) {
    obj_frame.parent(".box_frame").fadeOut(1000, function() {
        //set colour and text
        var b_randomR = Math.floor(Math.random() * 255);
        var b_randomG = Math.floor(Math.random() * 255);
        var b_randomB = Math.floor(Math.random() * 255);
        var c_randomR = Math.floor(Math.random() * 255);
        var c_randomG = Math.floor(Math.random() * 255);
        var c_randomB = Math.floor(Math.random() * 255);
        obj_frame.parent(".box_frame").css('background-color', 'rgb(' + b_randomR + ',' + b_randomG + ',' + b_randomB + ')');
        obj_frame.parent(".box_frame").css('color', 'rgb(' + c_randomR + ',' + c_randomG + ',' + c_randomB + ')');
        obj_frame.text(text);
        //set new margin
        obj_frame.parent(".box_frame").css('display', 'block').css('opacity',0.01);
        obj_frame.css('marginTop', '-' + obj_frame.parent(".box_frame").children(".box_content").height() / 2 + 'px');
        obj_frame.parent(".box_frame").css('display', 'none').css('opacity',1);
        //fade in
        obj_frame.parent(".box_frame").fadeIn(1000);
        
    });


}

function showLogin() {
    $(".overlay").fadeIn(800);
    $("#login").fadeIn(800);
}

function showRegister() {
    $(".overlay").fadeIn(800);
    $("#register").fadeIn(800);
}
