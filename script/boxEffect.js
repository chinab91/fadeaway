$(document).ready(function() {
    $(".box_frame").hover(function() {
        hover_fadeInOut($(this));
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
        var b_randomR = Math.floor(Math.random() * 255);
        var b_randomG = Math.floor(Math.random() * 255);
        var b_randomB = Math.floor(Math.random() * 255);
        var c_randomR = Math.floor(Math.random() * 255);
        var c_randomG = Math.floor(Math.random() * 255);
        var c_randomB = Math.floor(Math.random() * 255);
        obj_frame.parent(".box_frame").css('background-color', 'rgb(' + b_randomR + ',' + b_randomG + ',' + b_randomB + ')');
        obj_frame.parent(".box_frame").css('color', 'rgb(' + c_randomR + ',' + c_randomG + ',' + c_randomB + ')');
        obj_frame.text(text);
    });
    obj_frame.parent(".box_frame").fadeIn(1000);
//    obj_frame.parent(".box_frame").fadeIn(1000);
}