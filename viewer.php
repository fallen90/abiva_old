<!DOCTYPE html>
<html>

<head>
    <!-- 1315 x 800 -->
    <meta charset="UTF-8">
    <title></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script> <!-- Activity Button -->
    <link href="./assets/css/bootstrap.css2" rel="stylesheet" type="text/css" />
    <script src="./assets/js/punch.js" rel="stylesheet" type="text/javascript"></script>
    <script src="./assets/js/flowtype.js" rel="stylesheet" type="text/javascript"></script>
    <!-- Font Awesome Icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified JS -->
    <!-- // <script src="assets/js/bootstrap.js"></script> -->
    <link href="viewer.css" rel="stylesheet" />
</head>

<body class="noselect hidden-xs">
    <?php include ( "includes/sidebar.php"); ?>
    <div class="control-group">
        <a class="btn btn-orange activity" id="activity_btn" data-activity="0">ACTIVITY</a>
        <a class="btn btn-blue objective">OBJECTIVES</a>
    </div>
    <a class="fa fa-bars menu"></a>
    <div class="stage" align="center">
        <div class="overlay" style="width: 100%;height: 100%;position: absolute;top: 0px;right: 0px; background: #70C2E8; z-index: 100000;">
            <img src="abiva_assets/edge_logo.png" class="logo" />
            <div class="intro_heading_title" id="module_title" style="text-transform:uppercase">SUBJECT-VERB AGREEMENT</div>
            <a class="btn btn-green objective">OBJECTIVES</a>
            <img class="background" src="abiva_assets/school_items.png" />
        </div>
        <div class="activity_container">
            <div class="main_container">
                <div class="heading_container" align="left">
                    <img src="abiva_assets/icon_placeholder.png" class="icon_placeholder">
                    <img src="abiva_assets/module_icons/1.png" id="icon_placeholder" class="icon_placeholder">
                    <!--<img src="abiva_assets/logo.png" class="logo_holder">-->
                <div class="heading_title" id="activity_title"></div>
                    <div class="heading_text" id="activity_instruction">
                        Complete each thought. In the box, type the plural form of the underlined word.
                    </div>
                </div>
                <div class="inner_container">
                    <div class="contents">
                        <div class="loader" align="center">
                            <center><i class="fa fa-refresh fa-spin loader"></i> Loading</center>
                        </div>
                    </div>
                    <div class="timer">00:00</div>
                    <div class="counter"><span class="counter_current">0</span>/<span class="counter_last">0</span></div>
                </div>
            </div>
        </div>
    </div>


    <!-- progress report -->
    <div class="overlay_progress">
        <div class="progress_container">
            <img src="abiva_assets/close.png" data-dismiss-progress>
            <div class="progress_report_header" style="padding-right: 14px;">
                <div class="progress_report_title pull-left clearfix col-md-12">
                    <img src="abiva_assets/catchUpBadge.png" id="progress_badge">
                    <h3>Progress Report</h3>
                    <h4 class="progress_score pull-right clearfix"></h4>
                </div>
            </div>
            <div class="progress_report_content sentence">
                <div class="progress_item_container sentence"></div>
            </div>
        </div>
    </div>

    <!-- <img class="pr_close_btn" src="abiva_assets/close.png"> -->

       <!--  <div class="pr-dialog" >

          <div class="pr-content" align="center">
                <div class="main_container">
                     <div class="heading_container" align="left">
                        <img src="abiva_assets/catchUpBadge.png" class="pr_logo_holder">
                        <div class="progress_title">
                            PROGRESS REPORT
                        </div>
                  <div class="pr_score"></div>
                    <div class="pr_content" style=" ">

                    </div>
                </div>
              </div>
          </div>

        </div> -->


    <!-- instruction modal -->
    <div class="overlay_instruction">
        <div class="instruction_container">
            <img src="abiva_assets/close.png" data-dismiss-modal>
            <div class="instruction_content" align="center">
                <img src="abiva_assets/intro_logo.png" class="modal_logo">
                <div class="instruction_text"> In this lesson, you will learn to:</div>
               <div class="instruction_description" >• Identify <u>Phrases and Sentences</u> </div>
                <a class="btn btn-orange modal_btn">DISCUSSION</a>
            </div>
        </div>
    </div>

    <!-- scoring modal  -->
    <div class="overlay_scoring">
        <div class="overlay_content_scoring overlay_content" align="center">
        <img class="close_btn" src="abiva_assets/close.png">
            <div class="score_badge" align="center">
                <h1 class="score">100%</h1>
            </div>
            <h1 class="badge_title">Catch Up</h1>
            <h4 class="badge_description"></h4>
        </div>
    </div>

    <!-- done modal  -->
    <div class="overlay_in" align="center">
        <div class="overlay_content">
            <h1>Are you done with all of the questions?</h1>
            <a href="#" class="btn_box_end yes" style="margin-top:50px;margin-left:20px">YES</a>
            <a href="#" class="btn_box_end no" style="margin-top:50px;margin-left:20px">NO</a>
        </div>
    </div>
    <!-- // <script src="viewer.js"></script> -->
    <script src="stage.js"></script>

	<script>

        var currentActivityData = [];
        var activityLength = 0;
        var timer_interval;
        var multi_dual_option = false;
        var inner_cont = [];

		jQuery(document).ready(function(){
            initStage();
            setModuleIcon();
            //loadModule
            loadModuleAsync();

		});


        function callbackLoadModule(data){
            console.log(data);
            //set all data to module values
            var m = data; //module data
            var t = m.tutorial; //tutorial or lesson data
            var a = m.activity; //activity data

            activityLength = a.length;
            $('#module_title').text(m.module_title);
            $('#objective').html(m.objective);

            $('.overlay > .objective').click(function() {
                showObjectives(m.objective,{
                    show_btn:true,
                    show_close:false,
                    callback: function(){
                        $('.overlay').fadeOut();
                        $('.overlay_instruction').fadeOut();
                        $('aside').fadeOut();
                    }
                });
            });
            $('.control-group > .objective').click(function() {
                showObjectives(m.objective,{
                    show_btn:false,
                    show_close:true
                });
            });
            //set page title
            document.title = m.module_title;

            //load tutorial
            loadTutorial(t);


            //set activity button to respond to clicks and data requests
            $('#activity_btn').click(function(){
                //get id from activity btn to know which activity is needed to load
                var id = $(this).attr("data-activity");
                //set activity variable
                var ad = a[id];
                //set
                var type = ad.questions[0].question_type;

                //load template
                $.get("types/" + type + ".html").success(function(data){
                    //encapsulate data to jquery obj
                    console.log("Activity Type", type);
                    var tpl = $(data);
                    tpl.find("#content").html("");

                    //set global data to current activity
                    currentActivityData = ad;

                    //push content
                    pushContent(tpl);
                });

                console.log("Activity Data", ad);
                console.log("Activity Data Index",id);

                $('.timer').text("00:00");
            });

            console.log("m",m);
            console.log("t",t);
            console.log("a",a);
        }

        function loadModuleAsync(){
            $.get("data/data/<?=$_GET['module'];?>.php").success(function(data){

                callbackLoadModule(data);

            }).error(function(){
                document.location.reload();
            });
        }

        function loadTutorial(t){
            console.log("loading tutorial",t);
            $('#activity_btn').hide();
            //set activity header
            setActivityTitle(document.title);
            setActivityInstruction("");

            //variables
            var tabs = [];
            var contents = [];
            currentActivityData = t;
            var tabs_buttons = [];
            //segregate title and content for tutorials
            $.each(t,function(i,v){
                tabs.push(v.title);
                contents.push(reconstructContent(v.content));
                inner_cont[i] = v.content;
            });

            //load template to page, we can't use a seperate
            //function for this because of the promise


            $.get("lesson_types/"+t[0].lesson_type+".html").success(function(data){
                var tpl = $(data); //encapsulate data to jquery obj
                //fill in content
                tpl.find("#tabs").html("");
                tpl.find("#content").html("");

                //push content to page
                pushContent(tpl);

                $.each(tabs, function(i,v){
                    $('.contents').find("#tabs").append('<a href="#" class="btn_box_yellow" data-index="' + i + '" >' + v + ' <img src="abiva_assets/checkMark.png"></a>');
                    console.log($('.btn_box_yellow[ data-index="' + i + '"]').text().length);
                    if($('.btn_box_yellow[ data-index="' + i + '"]').text().length > 15){
                        $('.btn_box_yellow[ data-index="' + i + '"]').attr('style','padding-top:2px !important');
                         $('.btn_box_yellow[ data-index="' + i + '"]').attr('style','padding-bottom:2px !important');
                    }else{
                        $('.btn_box_yellow[ data-index="' + i + '"]').attr('style','padding-top:14px !important');
                         $('.btn_box_yellow[ data-index="' + i + '"]').attr('style','padding-bottom:14px !important');
                    }
                });
                  //add click handlers on buttons.
                    $('.contents').find("[data-index]").click(function(){
                        $(this).find("img").fadeIn();
                        $(this).parent().find('.btn_orange').removeClass('btn_orange');
                        $(this).addClass('btn_orange');

                        //change visiblity of content
                        //$('[data-content-index]').hide();
                        //$('.contents').find('#content > [data-content-index="' + $(this).data('index') + '"]').show();
                        $('.contents').find("#content").html("");
                        //$('.contents').find("#content").append("<div data-content-index='" + $(this).data('index') + "' style='display:block;'>" + contents[ $(this).data('index') ]+ "</div>");
                        change_inner_content(inner_cont[ $(this).data('index') ]);
                        $('.top_tabs').html("");
                        if(currentActivityData[$(this).data('index') ].tab_buttons != undefined){
                              init_datas(currentActivityData[$(this).data('index') ].tab_buttons_content);
                              tabs_buttons = [];
                              tabs_buttons = currentActivityData[$(this).data('index') ].tab_buttons;
                               $.each(tabs_buttons, function(i,v){

                                     $('.contents').find(".top_tabs").append('<a href="#" class="btn_box_yellow_top" data-index_tabs="' + i + '" >' + v + ' </a>');
                                     $('.contents').find("[data-index_tabs]").click(function(){
                                            $(this).parent().find('.btn_orange_top').removeClass('btn_orange_top');
                                            $(this).addClass('btn_orange_top');
                                            change_tab_content($(this).attr('data-index_tabs'))
                                    });

                            });
                        }
                        //pagination
                        //$('[data-content-index="' + $(this).data('index')  + '"]').MyPagination({height: 100, fadeSpeed: 400});
                      // $('[data-content-index="' + $(this).data('index') + '"]').MyPagination({height: 300, fadeSpeed: 400});
                       // set_counter();

                       //  console.log(contents[ $(this).data('index') ]);
                    });


                $.each(contents, function(i,v){
                    //$('.contents').find("#content").append("<div data-content-index='" + i + "' style='display:none;'>" + v + "</div>");
                });

                //set first button as active
                // $("[data-index]:first").addClass("btn_orange");
                $('[data-index]:first').effect( "pulsate",{times:"3"}, 800);
                $('[data-index]:last').click(function(){
                    $('#activity_btn').fadeIn();
                });
            });
        }
        function reconstructContent(paragraph){
            var divider = 443;
            var divide_count = Math.ceil(paragraph.length / divider);
            var paragraph_arr = [];
            var new_paragraph = "";
            var last_character = "";

            for (i = 0; i < divide_count; i++) {
                    last_character = paragraph.substring((divider * (i+1))-divider, divider * (i+1))[paragraph.substring((divider * (i+1))-divider, divider * (i+1)).length-1]
                    paragraph_arr.push('<div >'+paragraph.substring((divider * (i+1))-divider, divider * (i+1))+'</div>');
                    new_paragraph += paragraph_arr[i];

            }

            return new_paragraph;

        }
        function pushContent(content){
            $('.contents').html(content);
        }

        function setActivityTitle(title){
            $('#activity_title').text(title);
        }

        function setActivityInstruction(instruction){
            $('#activity_instruction').html(instruction);
        }

        function setActivityBtn(text,id){
            console.log("activity length",activityLength);
            if(id == activityLength){
                text = "Next Lesson";
                $('#activity_btn').unbind("click").click(function(){
                    document.location.href = "./viewer.php?module=" + (<?=$_GET['module'];?>+1)
                });
            }
            $('#activity_btn').text(text)
            $('#activity_btn').attr("data-activity",id);
            $('.objective').text("Instructions").removeClass("objective").addClass("instruction");
            multi_dual_option = false;
        }
        function setCurrentCounter(count){
            $('.counter_current').text(count);
        }
        function setLastCounter(count){
            $('.counter_last').text(count);
        }
        function removeByValue(arr) {
            var what, a = arguments, L = a.length, ax;
            while (L > 1 && arr.length) {
                what = a[--L];
                while ((ax= arr.indexOf(what)) !== -1) {
                    arr.splice(ax, 1);
                }
            }
            return arr;
        }
        function set_score(score) {
            score = Math.round(score);
            // if (score.length == 3) {
            //     $(".score").css("left", "441px");
            // } else if (score.length == 2) {
            //     $(".score").css("left", "476px");
            // } else {
            //     $(".score").css("left", "505px");
            // }
            var badge = getBadge(score);
            showScoreModal(score, badge.icon, badge.title, badge.description);
        }
        function showScoreModal(score, icon, heading, description){
            $('.score').text(score);
            $('.score_badge').css("background-image","url('abiva_assets/" + icon + "')");
            $('.badge_title').text(heading);
            $('.badge_description').text(description);
            $('.overlay_scoring').show();

        }
        function init(len) {
            var ua = [];
            for (i = 0; i < len; i++) {
                ua.push([]);
            }
            return ua;
        }
        function checkArray(arr1, arr2) {
            if (arr1.length !== arr2.length)
                return false;
            for (var i = arr1.length; i--;) {
                if (arr1[i] !== arr2[i])
                    return false;
            }

            return true;
        }
        function initActivityStage(){
            $('.counter').show();
            $('.timer').show();
            $('.btn_right').show();
            $('.btn_left').hide();
            $('.control-group > .instruction').click(function(){
                showInstructions(instruction);
            });
        }
        function getBadge(score){
            var arr = {
                catchup: {
                        title: "Catch Up",
                        description: "Review the lesson and improve your score",
                        icon: "catchUpBadge.png",
                        css: {

                        }
                    },
                stayfocused: {
                        title: "Stay Focused",
                        description: "Practice some more and do better.",
                        icon: "stayFocusedBadge.png",
                        css: {

                        }
                    },
                good: {
                        title: "Good",
                        desription: "You are on the right track.",
                        icon: "goodBadge.png",
                        css: {

                        }
                    },
                verygood: {
                        title: "Very Good",
                        description: "Keep up the good work.",
                        icon: "veryGoodBadge.png",
                        css: {

                        }
                    },
                excellent: {
                        title: "Excellent",
                        description: "You did a great job.",
                        icon: "excellentBadge.png",
                        css: {

                        }
                    }
            };
            if(score == 100){
                return arr.excellent;
            }
            if(score >=76 && score <= 99){
                return arr.verygood;
            }
            if(score >=51 && score <=75){
                return arr.good;
            }
            if(score >=26 && score <=50){
                return arr.stayfocused;
            }
            if(score >=0 && score <=25){
                return arr.catchup;
            }
        }
        // function setProgressBadge(score){
        //     var progress_badge = "abiva_assets/" + getBadge(score);
        //     $('#progress_badge').attr("src",progress_badge);
        // }
        function showModal(modal_logo,heading,text){
            $('.overlay_instruction').find('.modal_logo').attr("src","abiva_assets/" + modal_logo);
            $('.overlay_instruction').find('.instruction_text').html(heading);
            $('.overlay_instruction').find('.instruction_description').html(text);
            $('.overlay_instruction').show();
        }
        function showInstructions(text, timerx){

            var modal_logo = "intro_logo.png";
            var heading = "Instructions";
            showModal(modal_logo,heading, text);
            $('.modal_btn').hide();
            $('[data-dismiss-modal]').show();
            if(!timerx){
                $('[data-dismiss-modal]').unbind("click").click(function(){
                    $(this).parent().parent().fadeOut();
                });
            } else {
                 $('[data-dismiss-modal]').unbind("click").click(function(){
                    stopTimer();
                    timer_interval = createTimer();
                    $(this).parent().parent().fadeOut();
                });
            }

        }
        function showObjectives(text, options){

            var modal_logo = "objective_logo.png";
            var heading = "In this lesson, you will learn to:";
            showModal(modal_logo,heading, text);
            $('.modal_btn').show();

            if(options.show_close){
                $('[data-dismiss-modal]').show();
            } else {
                $('[data-dismiss-modal]').hide();
            }

            if(options.show_btn){
                $('.modal_btn').show();
            } else {
                $('.modal_btn').hide();
            }
            $('[data-dismiss-modal]').click(function(){
                $(this).parent().parent().fadeOut();
            });
            $('.modal_btn').click(options.callback);
        }
        function showProgress(score, content){
            $('.progress_report_content').html(content);
            $('.progress_score').html("Score: " + score + "%");
            $('.overlay_progress').fadeIn();
            $('[data-dismiss-progress]').click(function(){
                $(this).parent().parent().fadeOut();
            });
        }
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
        function retake(){

            console.log("Retake");
            setCurrentCounter(1);
            currentActivityIndex = 0;
            $.each($('[data-content-index]'),function(i,v){
                 $(v).hide();
            });
            $.each($('[data-content-answer-group]'),function(i,v){
                 $(v).hide();
            });
            $('[data-content-index="0"]').show();
            $('[data-content-answer-group="0"]').show();

            $('.btn_left').hide();
            $('.btn_right').show();
            $('.btn_done').hide();

            $('.btn_done').text("Retake").attr("data-retake", 1).unbind("click").click(function() {
                stopTimer();
                timer_interval = createTimer();

                user_answers = init(questions.length);
                $(this).text("Done").hide();

                $.each($('[data-content-index] > span'), function(x, v) {
                    $(v).html("");
                });

                $.each($('[data-content-index]'), function(x, v) {
                   $(v).find(".btn_box_orange").removeClass("btn_box_orange");
                   $(v).find(".answer_field").trigger("click");
                   $(v).find(".answer_field").html("");
                });

                $.each($('[data-content-answer-group] > .btn_box_orange'), function(x, v) {
                    $(v).removeClass("btn_box_orange");
                });

                $.each($('.fragment'),function(i,v){
                    $(v).attr("data-column-index","");
                });
                $.each(user_answers, function(i, v) {
                    $('[data-content-index="' + i + '"]> .answers').html('');

                });
                $(this).unbind("click").click(function() {
                    $('.overlay_in').fadeIn();
                });

                $('.btn_progress').fadeOut();
                // $('.btn_new_set').fadeOut();

                setCurrentCounter(1);
                currentActivityIndex = 0;
                $.each($('[data-content-index]'),function(i,v){
                     $(v).hide();
                });
                $.each($('[data-content-answer-group]'),function(i,v){
                     $(v).hide();
                });
                $('[data-content-index="0"]').show();
                $('[data-content-answer-group="0"]').show();

                $('.btn_left').hide();
                $('.btn_right').show();
                $('.btn_done').hide();
                showInstructions(instruction);
            });

            $('.btn_progress').fadeIn().click(function() {
                $('.overlay_progress').fadeIn();
            });

        }
        function retake_multi_answer(){

            console.log("Retake");
            setCurrentCounter(1);
            currentActivityIndex = 0;
            $.each($('[data-content-index]'),function(i,v){
                 $(v).hide();
            });
            $.each($('[data-content-answer-group]'),function(i,v){
                 $(v).hide();
            });
            $('[data-content-index="0"]').show();
            $('[data-content-answer-group="0"]').show();

            $('.btn_left').hide();
            $('.btn_right').show();
            $('.btn_done').hide();

            $('.btn_done').text("Retake").attr("data-retake", 1).unbind("click").click(function() {
                stopTimer();
                timer_interval = createTimer();

                user_answers = init(questions.length);
                $(this).text("Done").hide();

                $.each($('[data-content-index] > span'), function(x, v) {
                    $(v).html("");
                });

                $.each($('[data-content-index]'), function(x, v) {
                   //$(v).find(".btn_box_orange").removeClass("btn_box_orange");
                   $(v).find(".answer_field").trigger("click");
                   $(v).find(".answer_field").html("");
                });

                $.each($('[data-content-answer-group] > .btn_box_orange'), function(x, v) {
                    //$(v).removeClass("btn_box_orange");
                });

                $.each($('.fragment'),function(i,v){
                    $(v).attr("data-column-index","");
                });
                $.each(user_answers, function(i, v) {
                    $('[data-content-index="' + i + '"]> .answers').html('');

                });
                $(this).unbind("click").click(function() {
                    $('.overlay_in').fadeIn();
                });

                $('.btn_progress').fadeOut();
                // $('.btn_new_set').fadeOut();

                setCurrentCounter(1);
                currentActivityIndex = 0;
                $.each($('[data-content-index]'),function(i,v){
                     $(v).hide();
                });
                $.each($('[data-content-answer-group]'),function(i,v){
                     $(v).hide();
                });
                $('[data-content-index="0"]').show();
                $('[data-content-answer-group="0"]').show();

                $('.btn_left').hide();
                $('.btn_right').show();
                $('.btn_done').hide();
                showInstructions(instruction);
            });

            $('.btn_progress').fadeIn().click(function() {
                $('.overlay_progress').fadeIn();
            });

        }

        function retake_multi_selection(){

            console.log("Retake");
            setCurrentCounter(1);
            currentActivityIndex = 0;
             $('.btn_done').show();
            $.each($('[data-content-index]'),function(i,v){
                 $(v).hide();
            });
            $.each($('[data-content-answer-group]'),function(i,v){
                 $(v).hide();
            });
            $('[data-content-index="0"]').show();
            $('[data-content-answer-group="0"]').show();


            $('.btn_done').text("Retake").attr("data-retake", 1).unbind("click").click(function() {
                multi_dual_option = true;
                stopTimer();
                timer_interval = createTimer();

                user_answers = init(questions.length);
                $(this).text("Done");

                $.each($('[data-content-index] > span'), function(x, v) {
                    $(v).html("");
                });


                $.each($('[data-answer-index] > .btn_box_orange'), function(x, v) {
                    $(v).removeClass("btn_box_blue").addClass("btn_box_orange");

                });
                $.each($('[data-answer-index] > .btn_box_blue'), function(x, v) {
                    $(v).removeClass("btn_box_blue").addClass("btn_box_orange");

                });
                 $('span').html('');
                $.each(user_answers, function(i, v) {
                    $('[data-content-index="' + i + '"]> .answers').html('');

                });
                $(this).unbind("click").click(function() {
                    $('.overlay_in').fadeIn();
                });

                $('.btn_progress').fadeOut();
                // $('.btn_new_set').fadeOut();

                setCurrentCounter(1);
                currentActivityIndex = 0;
                $.each($('[data-content-index]'),function(i,v){
                     $(v).hide();
                });
                $.each($('[data-content-answer-group]'),function(i,v){
                     $(v).hide();
                });
                $('[data-content-index="0"]').show();
                $('[data-content-answer-group="0"]').show();
                 $('.counter').hide();
                $('.btn_left').hide();
                $('.btn_right').hide();
                showInstructions(instruction);
            });

            $('.btn_progress').fadeIn().click(function() {
                $('.overlay_progress').fadeIn();
            });
        }
        function retake_type_paragraph(){

            console.log("Retake");
            setCurrentCounter(1);
            currentActivityIndex = 0;
            $.each($('[data-content-index]'),function(i,v){
                 $(v).hide();
            });
            $.each($('[data-content-answer-group]'),function(i,v){
                 $(v).hide();
            });
            $('[data-content-index="0"]').show();
            $('[data-content-answer-group="0"]').show();


            $('.btn_done').text("Retake").attr("data-retake", 1).unbind("click").click(function() {

             $('[data-content-answer-group="' + (0) + '"]').html("");
                stopTimer();
                timer_interval = createTimer();
                $.each(questions, function(i, v) {

                    answers = v.question_answer;
                    console.log('retake ', answers)
                });
                $(this).text("Done");



                $.each($('[data-answer-index] > .btn_box_orange'), function(x, v) {
                    $(v).removeClass("btn_box_blue").addClass("btn_box_orange");

                });
                $.each($('[data-answer-index] > .btn_box_blue'), function(x, v) {
                    $(v).removeClass("btn_box_blue").addClass("btn_box_orange");

                });
                 $('.answer_field').html('');

                $(this).unbind("click").click(function() {
                    $('.overlay_in').fadeIn();
                });

                $('.btn_progress').fadeOut();
                // $('.btn_new_set').fadeOut();

                setCurrentCounter(1);
                currentActivityIndex = 0;
                $.each($('[data-content-index]'),function(i,v){
                     $(v).hide();
                });
                $.each($('[data-content-answer-group]'),function(i,v){
                     $(v).hide();
                });
                $('[data-content-index="0"]').show();
                $('[data-content-answer-group="0"]').show();
                 $('.counter').hide();
                $('.btn_left').hide();
                $('.btn_right').hide();
                showInstructions(instruction);
            });

            $('.btn_progress').fadeIn().click(function() {
                $('.overlay_progress').fadeIn();
            });
        }
        function stopTimer(){
            console.log("Stop Timer Called");
            clearInterval(timer_interval);
        }
        function createTimer(){
            console.log("Create Timer Called");
            var seconds = 0;
            var minutes = 0;
            var my_timer = setInterval(function() {
            seconds = seconds + 1;
            if (seconds > 59) {
                seconds = 0;
                minutes = minutes + 1;
            }
            if (seconds.toString().length == 1) {
                $('.timer').text(minutes + ":" + "0" + seconds)
            }
            if (minutes.toString().length == 1) {
                $('.timer').text("0" + minutes + ":" + seconds)
            }
            if (seconds.toString().length == 1 && minutes.toString().length == 1) {
                $('.timer').text("0" + minutes + ":" + "0" + seconds)
            }

            }, 1000);
            return my_timer;
        }
        function setModuleIcon(){
            var module = <?=$_GET['module'];?>;
            $('.logo_holder').attr("src","abiva_assets/module_icons/" + module + ".png");
        }
        setInterval(function(){
            var current = parseInt($('.counter_current').text());
            var last = parseInt($('.counter_last').text());
            console.log("Polling",current, last);
            if(!multi_dual_option){
            if(current == 0 && last == 0){
                $('.counter').hide();
            } else if(current == 1 && last == 1){
                $('.counter').hide();
                $('.btn_left').hide();
                $('.btn_right').hide();
            } else if(current == 1){
                $('.counter').show();
                $('.btn_left').hide();
                $('.btn_right').show();
            } else if(current != 1 && current != last){
                $('.counter').show();
                $('.btn_left').show();
                $('.btn_right').show();
            } else if(current == last){
                $('.counter').show();
                $('.btn_left').show();
                $('.btn_right').hide();
            } else {
                $('.counter').hide();
            }
            }
        },150);

    $('.menu').hide();
	</script>
</body>

</html>
