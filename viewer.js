var currentQuestion = [];
var answers = [];
var current = 0;
var second = 0;
var minutes = 0;
var status = 0;

jQuery(window).resize(function() {
    initStage();
});
jQuery(document).ready(function() {
    initStage();
});
$(".modal_close_btn").hide();
$(".modal_overlay").hide();



function getActivity() {
    // $('.btn_left').hide();

    $.get("./data/data.php").success(function(data) {

        var d = JSON.parse(data)[0];
        //console.log(d);
        $('.heading_title').html(d.title);
        $('.heading_text').html(d.instruction);
        $('.counter_current').text(current + 1);
        $('.counter_last').text(d.questions.length);
        current.watch = function(e) {
            console.log(e);
        }
    });
}

function showActivity(questions, index) {
    var question = questions[index];
    currentQuestion = question;
    $.get("./types/combo_input_buttons.html").success(function(data) {
        $('.contents').html($(data));
    });
}

function setPage(template) {

    $('.contents').empty();
    $.get("./types/" + template + ".html").success(function(data) {
        cache: false,
        $('.contents').html($(data));
    });
}
$('.menu').click(function() {
    $('aside.sidebar').fadeIn();
    $(".sibar_inner").animate({
        width: 'toggle'
    }, 350);
});
$('aside.sidebar > .sibar_inner').click(function(e) {
    e.prevenDefault();
});
$('[data-template]').click(function() {
    console.log("natawag datatemplate", this);
    setPage($(this).data("template"));
    $(".sibar_inner").animate({
        width: 'toggle'
    }, 350);
    $('aside.sidebar').fadeOut();
});

/*show modal*/
$(".btn-green").click(function() {

    $(".modal-dialog").dialog({
        modal: true,
        show: {
            effect: "fadein",
            duration: 500
        }
    });
    $(".ui-dialog-titlebar").hide();
    $(".ui-resizable-handle").hide();
    $(".modal_overlay").show();
    $('.modal_close_btn').hide();
});
/*show discussion sceen*/
$(".modal_discussion_btn").click(function() {
    $(".overlay").fadeToggle();
    setPage("phrases_sentences");
    $(".sibar_inner").animate({
        width: 'toggle'
    }, 350);
    $('aside.sidebar').fadeOut();
    //modal
    $(".ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable").fadeToggle().hide();
    $(".modal_overlay").fadeToggle().hide();
    $(".ui-widget-overlay").fadeToggle().hide();
    update_button();
});

$('.objective').click(function() {
    $(".modal-dialog").dialog({
        modal: true,
        show: {
            effect: "fadein",
            duration: 500
        }
    });
    $(".ui-dialog-titlebar").hide();
    $(".ui-resizable-handle").hide();
    $(".ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable").fadeToggle().show();
    $(".modal_overlay").fadeToggle().show();
    $(".ui-widget-overlay").fadeToggle().show();
    $(".modal_discussion_btn").hide();
    $('.modal_close_btn').show();

})
$('.modal_close_btn').click(function() {
    //modal
    $(".ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable").fadeToggle();
    $(".modal_overlay").fadeToggle();
    $(".ui-widget-overlay").fadeToggle();
    $(".modal_close_btn").hide();
})


function shuffle(array) {
    var currentIndex = array.length,
        temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

function update_button() {
    if (status == 0) {


        $('.first_activity').hide();
        $('.second_activity').hide();
        $('.third_activity').hide();
        $('.finish_activity').hide();
        $('.first_activity').show();
    }
    if (status == 1) {


        $('.first_activity').hide();
        $('.second_activity').hide();
        $('.third_activity').hide();
        $('.finish_activity').hide();
        $('.second_activity').show();
    }
    if (status == 2) {

        $('.first_activity').hide();
        $('.second_activity').hide();
        $('.third_activity').hide();
        $('.finish_activity').hide();
        $('.third_activity').show();

    }
    if (status == 3) {
        /* $('.third_activity').removeClass('third_activity').addClass('fourth_activity');
          $('.activity').text("FINISH");*/
        $('.first_activity').hide();
        $('.second_activity').hide();
        $('.third_activity').hide();
        $('.finish_activity').hide();
        $('.finish_activity').show();
    }


}

$('.activity').click(function() {
    $(".modal_overlay").fadeToggle().fadeToggle();
});
