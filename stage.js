initStage();
$(window).resize(function() {
    initStage();
});

function initStage() {
    $('.stage').css({
        width: window.innerWidth,
        height: window.innerHeight,
    });
    $('.sidebar').css({
        width: window.innerWidth,
        height: window.innerHeight,
    });
    $('.activity_container').css({
        width: window.innerWidth - 260 + "px",
        height: window.innerHeight + "px"
    });
    $('.timer').css("top", $('.control-group').position().top + $('.control-group').height() + 24 + "px !important");
}