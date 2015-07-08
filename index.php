<!DOCTYPE html>

<html>
  <head>
  <!-- 1315 x 800 -->
    <meta charset="UTF-8">
    <title></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
    <link href="./assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="./assets/js/punch.js" rel="stylesheet" type="text/javascript"></script>
     <script src="./assets/js/flowtype.js" rel="stylesheet" type="text/javascript"></script>
    <!-- Font Awesome Icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified JS -->
    <script src="assets/js/bootstrap.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <!-- PAGINATION START -->
    <link rel='stylesheet' href='pagination/css/main.css' type='text/css' />
    <!--<script src='pagination/js/jquery.min.js'></script>-->
    <script src='pagination/js/main.js'></script>
    <!-- PAGINATION END -->
    <script>
      (function($){

        $.fn.fitText = function( kompressor, options ) {

        // Setup options
        var compressor = kompressor || 1,
          settings = $.extend({
            'minFontSize' : Number.NEGATIVE_INFINITY,
            'maxFontSize' : 11
          }, options);

        return this.each(function(){

          // Store the object
          var $this = $(this);

          // Resizer() resizes items based on the object width divided by the compressor * 10
          var resizer = function () {
          $this.css('font-size', Math.max(Math.min($this.width() / (compressor*5), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
          };

          // Call once to set.
          resizer();

          // Call on resize. Opera debounces their resize by default.
         //$(window).on('resize.fittext orientationchange.fittext', resizer);

        });

        };

      })( jQuery );
    </script>
  </head>
  <body class="noselect hidden-xs">
        <div class="control-group">
            <a class="btn btn-orange activity first_activity" data-template="selection">ACTIVITY</a>
            <a class="btn btn-orange activity second_activity" data-template="sentence_completion" style="width: 52%;">NEXT ACTIVITY</a>
            <a class="btn btn-orange activity third_activity"  data-template="dragndrop" style="width: 52%;">NEXT ACTIVITY</a>
             <a class="btn btn-orange activity finish_activity" >FINISH</a>
            <a class="btn btn-blue objective">OBJECTIVE</a>
           
          </div>
          <a class="fa fa-bars menu"></a>

          <aside class="sidebar">
            <div class="ctrl-buttons">
              
              <div class="sibar_inner">
                  <img src="abiva_assets/edge_logo.png" class="edge" width="100%">
                  <ul class="list-group">
                    <li class="list-group-item" style="cursor:pointer;" data-template="phrases_sentences">Phrases and Sentences</li>
                     <li class="list-group-item" style="cursor:pointer;" data-template="selection">Identification</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="sentence_completion">Identification Version 6</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="dragndrop">Matching Type</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="multiple_choice">Multiple Choice Plural</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="single_input">Fill in the Blanks</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="single_input_dual_choices">Multiple Choice</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="comparison">Identification Version 4</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="combo_input_buttons">Identification Version 2</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="dragndrop2">Ordering</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="pool_of_words">Multiple Choice Version 9</li>
                    <li class="list-group-item" style="cursor:pointer;" data-template="dual_multiple_choice">Dual multiple choice</li>
                  </ul>
              </div>

            </div>
          </aside>

      <div class="stage" align="center"> 
      <div class="overlay" style="width: 100%;height: 100%;position: absolute;top: 0px;right: 0px; background: #B58FC2; z-index: 100000;">

       <img src="abiva_assets/edge_logo.png" class="logo"/>
       
       <div class="intro_heading_title">SUBJECT-VERB AGREEMENT</div>
       <a class="btn btn-green">OBJECTIVE</a>
       <img src="abiva_assets/school_items.png"/>
    </div>
          <div class="activity_container">
              <div class="main_container">
                <div class="heading_container" align="left">
                  <img src="abiva_assets/icon_placeholder.png" class="icon_placeholder">
                  <img src="abiva_assets/logo.png" class="logo_holder">
                  <div class="heading_title">
                      Singular and Plural Nouns
                  </div>
                  <div class="heading_text">
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
                  <div class="counter"><span class="counter_current">1</span>/<span class="counter_last">5</span></div>
                 

                </div>
              </div> 
          </div>
      </div>
    <img class="modal_close_btn" src="abiva_assets/close.png" style="position: absolute; top: 13%; right: 16%; width: 61px; height: 58px; cursor: pointer; display: block;z-index: 1000002;">
      <div class="modal_overlay" style="width: 100%;height: 100%;position: absolute;top: 0px;right: 0px; background: rgba(0,0,0,.5); z-index: 100001;pointer-events: none">
     
      </div >
      

      <div class="modal fade" id="modal-id" style="">

        <div class="modal-dialog" >

          <div class="modal-content" style="height:100%;min-height:500px;background:#B58FC2;color:white; width:800px;   border-radius: 32px;   box-shadow: 0 5px 15px rgba(0, 0, 0, 0);" align="center">
                <img src="abiva_assets/intro_logo.png" class="modal_logo"> 
                 
            <h1 style="  margin-top: 9px;text-align: center;   font-size: 37px;color: #032437;   margin-bottom: 10px; font-family: 'Montserrat', sans-serif;" >In this lesson, you will learn to:</h1>
            <div class="modal_sentence">• Differentiate a <i>phrase</i> from a <i>sentence</i>.</div>
             <a class="btn btn-blue modal_discussion_btn" style="  position: absolute;bottom: 34px; right: 323px;">DISCUSSION</a>
          </div>
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
  <style>
.ui-widget-content {
  border: rgba(0,0,0,0);
  background: rgba(0,0,0,0);
  color: rgba(0,0,0,0);
}
  .logo_holder{
      margin-top: -3.5% !important;
  margin-bottom: -2.5% !important;
    margin-left: -22.5% !important;
  width: 19%;
  }
  .modal_sentence{
      font-family: 'Montserrat', sans-serif;
  font-size: 26px;
  /* position: absolute; */
  /* top: 38%; */
  /* left: 36px; */
  margin-top: 4%;
  display: block;
  text-align: center;
  }
    .edge{
      padding:50px;
    }
    body {
      padding:0 !important;
      margin:0 !important;
    }
    .control-group {
      position:absolute;
      right: 24%;
      top: 3%;
    }
    .stage {
      background-image:url('abiva_assets/discussion_bg.jpg');
      background-repeat: no-repeat;
      background-position:center;
      background-size: cover;
      padding-top:5%;
      padding-bottom:1%;
    }
    .activity_container {
        border: 18px solid #F2D748;
        max-height: 95% !important;
        width: 79% !important;
        background: #fff;
        border-radius: 51px;
        box-shadow: 4px 20px 0px #9C862F;
    }
    .sidebar {
        position: absolute;
        top: 0px;
        background: rgba(0,0,0,0.5);
        right: 0px;
        bottom: 0px;
        z-index: 100000;
    }
    .sibar_inner {
      width: 350px;
      height: 100%;
      background: #ddd;
      right: 0px;
      position: absolute;
      padding-left:10px;
      padding-right:10px;
    }
    .heading_container {
      background: #007FAE;
      background-image: -webkit-linear-gradient(top, #007FAE, #00678E);
      background-image: -moz-linear-gradient(top, #007FAE, #00678E);
      background-image: -ms-linear-gradient(top, #007FAE, #00678E);
      background-image: -o-linear-gradient(top, #007FAE, #00678E);
      background-image: linear-gradient(to bottom, #007FAE, #00678E);
      height:80%;
      max-height: 141px;
        min-height: 113px;
      width: 60%;
      margin-top: -5.5%;
      margin-left: -38%;
      border-top-right-radius: 62px;
      border-bottom-right-radius: 62px;
    }
    .icon_placeholder {
        margin-top: -3.5% !important;
        margin-bottom: -3.5% !important;
        margin-left: -15.5% !important;
        width: 25%;
    }
    .logo{
         display:block;
          margin-top:50px
    }

    .heading_title {
      color: #FAC861;
      font-size: 29px;
      text-shadow: 2px 5px 0px #005D7D;
      display: inline-block;
      position: relative;
        top: -16px;
      left: 4%;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }
    .intro_heading_title {
      color: #FFFFFF;
      font-size: 100px;
      position: relative;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
      text-decoration: underline;
      display: block;
    }
    .heading_text {
      color: #fff;
      width: 78%;
      margin-left: 71px;
      margin-top: -40px;
      position: relative;
      top: -16px;
      left: 2px;
        font-family: 'Montserrat', sans-serif;
  font-size: 19px;
  font-weight: bold;
    }

    .timer {
      display: inline-block;
      position: absolute;
      background-color: #F2D748;
      color: #433812; 
      padding: 5px 37px;
      border-bottom-right-radius: 28px;
      border-bottom-left-radius: 27px;
      font-size: 25px;
      font-weight: bolder;
      font-family: 'Montserrat', sans-serif;
     top: 15%;
      right: 13%;
      float: right;

    }
    .counter {
      position: absolute;
    display: inline-block;
    background-color: #F2D748;
    color: #433812;
    font-size: 26px;
    font-weight: bolder;
    font-family: 'Montserrat', sans-serif;
    padding: 15px 14px 15px 14px;
    border-top-right-radius: 37px;
    border-top-left-radius: 37px;
    bottom: 7%;
  right:18.1%;

    }
   
    .change_page_btns > img {
      display:inline-block;
      cursor:pointer;
      transition: all 250ms;
    }
    .change_page_btns > img.btn_left {
      margin-right:40px;
      float: right;
    position: absolute;
    right: 22%;
    bottom: 1%;
    }
    .change_page_btns > img.btn_right {
      margin-left:40px;
      float: right;
      position: absolute;
      right: 11%;
  bottom: 1%;
    }

    .btn_left:hover {
      transform:scale(1.1);
    }
    .btn_right:hover {
      transform:scale(1.1);
    }
    
    .contents {
      padding-top: 32px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .loader {
      font-size:40px;
    }









    @media (max-width: 1199px) {
      .timer {
        top:99px !important;
      }
      .stage {  
        padding-top:9% !important;
      }
    }
    @media (max-width: 1199px) and (min-width:992px) {
      .activity_container {
        border: 10px solid #F2D748;
        box-shadow: 4px 12px 0px #9C862F;
        border-radius: 31px;
      }
      .stage {
        padding-top:6%;
      }
      .control-group {
        right:13% !important;
      }
      .heading_title {
        font-size:26px !important;
      }
      .heading_text {
        font-size:15px !important;
        top: -7px;
        left: -19px;
      }
      .timer {
          top: 138px;
        right: 14%;
      }
      .counter {
        bottom: 6%;
        right: 27.1%;
      }
      .btn_right {
        right:15% !important;
      }
      .btn_left {
        right:33% !important;
      }
    }
    @media (max-width: 991px) {
      .timer {
        top: 156px !important;
       right: 13% !important;
      }
    }
    @media (max-width: 991px) and (min-width:768px){
      .activity_container {
        border: 10px solid #F2D748;
        box-shadow: 4px 12px 0px #9C862F;
        border-radius: 31px;
      }
      .stage {
        padding-top:15%;
      }
      .control-group {
        right:12%;
      }
      .icon_placeholder {
          margin-top: -3.5% !important;
          margin-bottom: -3.5% !important;
          margin-left: -15.5% !important;
          width: 31%;
      }
      .heading_container {
          margin-top: -5.5%;
          margin-left: -26%;
          width: 75%;
      }
      .heading_title {
        font-size:34px;
      }
      .heading_text {
         font-size: 13px;
        left: 23px;
        top: -24px;
      }
      .timer {
        top: 16%;
       right: 13%;
      }
      .counter {
        bottom: 6%;
        right: 26.1%;
      }
      .btn_right {
        right:13% !important;
      }
      .btn_left {
        right:31% !important;
      }
    }
    @media (max-width: 767px){
      .activity_container {
        border: 10px solid #F2D748;
        box-shadow: 4px 12px 0px #9C862F;
        border-radius: 31px;
      }
      .stage {
        padding-top:15%;
      }
      .control-group {
        right:12%;
      }
      .icon_placeholder {
          margin-top: -3.5% !important;
          margin-bottom: -3.5% !important;
          margin-left: -15.5% !important;
          width: 31%;
      }
      .heading_container {
          margin-top: -5.5%;
          margin-left: -26%;
          width: 75%;
      }
      .heading_title {
        font-size:22px;
      }
      .heading_text {
        font-size:12px;
      }
      .timer {
        top:16% !important;
      }
      .counter {
        bottom: 6%;
        right: 27.1%;
      }
      .btn_right {
        right:14% !important;
      }
      .btn_left {
        right:33% !important;
      }
    }
    @media (max-width: 767px) and (min-width: 768px){
      .timer {
        top: 20% !important;
        right: 15% !important;
      }
    }
    @media (min-width: 992px){
      .activity_container {
        border: 10px solid #F2D748;
        box-shadow: 4px 12px 0px #9C862F;
        border-radius: 31px;
      }
      .stage {
        padding-top:13%;
      }
      .control-group {
        right:17%;
      }
    }    
    @media (min-width: 1200px){
      .activity_container {
        border: 10px solid #F2D748;
        box-shadow: 4px 12px 0px #9C862F;
        border-radius: 31px;
      }
      .stage {
        padding-top:7%;
      }
      .control-group {
        right:13%;
      }
      .timer {
        top: 97px;
        right: 19%;
      }
    }



  .btn {
      -webkit-border-radius: 28;
      -moz-border-radius: 28;
      border-radius: 28px;
      font-family: 'Montserrat', sans-serif;
      color: #ffffff !important;
      font-size: 20px;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      width:171px;
      font-family: 'Montserrat', sans-serif;
      font-weight:bold;
    }
  .btn-blue {
      background: #3498db;
      background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
      background-image: -moz-linear-gradient(top, #3498db, #2980b9);
      background-image: -ms-linear-gradient(top, #3498db, #2980b9);
      background-image: -o-linear-gradient(top, #3498db, #2980b9);
      background-image: linear-gradient(to bottom, #3498db, #2980b9);
  }
  .btn-blue:hover,.btn-blue:active {
    background: #007FAE;
    background-image: -webkit-linear-gradient(top, #007FAE, #00678E);
    background-image: -moz-linear-gradient(top, #007FAE, #00678E);
    background-image: -ms-linear-gradient(top, #007FAE, #00678E);
    background-image: -o-linear-gradient(top, #007FAE, #00678E);
    background-image: linear-gradient(to bottom, #007FAE, #00678E);
    text-decoration: none;
  }
  .overlay > .btn {
    width:24% !important;
    margin-top: 50px !important;
    font-family: 'Montserrat', sans-serif; !important;
      display: block;
  }
  .btn-green {
      background: #C0E536;
      background-image: -webkit-linear-gradient(top, #C0E536, #889C3B);
      background-image: -moz-linear-gradient(top, #C0E536, #889C3B);
      background-image: -ms-linear-gradient(top, #C0E536, #889C3B);
      background-image: -o-linear-gradient(top, #C0E536, #889C3B);
      background-image: linear-gradient(to bottom, #C0E536, #889C3B);
      -webkit-border-radius: 20;
     -moz-border-radius: 20;
       border-radius: 20px;
       font-size: 27px;
       padding: 30px 40px 32px 40px;
     text-decoration: none;
  }
  .btn-green:hover,.btn-green:active {
    background: #889C3B;
    text-decoration: none;
  }

    
  .btn-orange {
      background: #FFBF3C;
      background-image: -webkit-linear-gradient(top, #FFBF3C, #E09735);
      background-image: -moz-linear-gradient(top, #FFBF3C, #E09735);
      background-image: -ms-linear-gradient(top, #FFBF3C, #E09735);
      background-image: -o-linear-gradient(top, #FFBF3C, #E09735);
      background-image: linear-gradient(to bottom, #FFBF3C, #E09735);
  }
  .btn-orange:hover,.btn-orange:active {
    background: #FFDE5A;
    background-image: -webkit-linear-gradient(top, #FFDE5A, #E09735);
    background-image: -moz-linear-gradient(top, #FFDE5A, #E09735);
    background-image: -ms-linear-gradient(top, #FFDE5A, #E09735);
    background-image: -o-linear-gradient(top, #FFDE5A, #E09735);
    background-image: linear-gradient(to bottom, #FFDE5A, #E09735);
    text-decoration: none;
  }

  .btn_box_blue {
    -webkit-border-radius: 10;
    -moz-border-radius: 10;
    border-radius: 10px;
    -webkit-box-shadow: 0px 4px 0px #00678E;
    -moz-box-shadow: 0px 4px 0px #00678E;
    box-shadow: 0px 4px 0px #00678E;
    font-family: 'Montserrat', sans-serif;
    color: #ffffff;
    font-size: 18px;
    background: #0097D7;
    padding: 10px 55px 10px 55px;
    text-decoration: none;
    display: inline-block;

}

  .btn_box_end {
    -webkit-border-radius: 10;
    -moz-border-radius: 10;
    border-radius: 10px;
    -webkit-box-shadow: 0px 4px 0px #00678E;
    -moz-box-shadow: 0px 4px 0px #00678E;
    box-shadow: 0px 4px 0px #00678E;
    font-family: 'Montserrat', sans-serif;
    color: #ffffff;
    font-size: 18px;
    background: #0097D7;
    padding: 10px 55px 10px 55px;
    text-decoration: none;
    display: inline-block;

}
.menu {
    position: fixed;
  border: 4px solid #fff;
  border-radius: 150px;
  padding: 10px 12px;
  color: White;
  font-weight: bolder;
  text-decoration: none !important;
  font-size: 29px;
  right: 23px;
  top: 12px;
  cursor: pointer;
}
.menu:hover {
  color:white !important;
  font-size:34px;
  transform:scale(2);
  transition: all 500ms ease-in-out;
}

.btn_box_blue:hover {
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    text-decoration: none;
}
.btn_box_end:hover {
    background: #3cb0fd;
    background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
    background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
    background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
    text-decoration: none;
}

.btn_box_orange {
    -webkit-border-radius: 10;
    -moz-border-radius: 10;
    border-radius: 10px;
    -webkit-box-shadow: 0px 4px 0px #EB8D33;
    -moz-box-shadow: 0px 4px 0px #EB8D33;
    box-shadow: 0px 4px 0px #EB8D33;
    font-family: 'Montserrat', sans-serif;
    color: #433811;
    font-size: 18px;
    background: #FBC962;
    padding: 10px 55px 10px 55px;
    text-decoration: none;
    display: inline-block;

}
.noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.btn_box_orange:hover {
    background: #FBD486;
    text-decoration: none;
}

.btn-objective > img {
      margin-top:100px;
    }
.btn-objective >img:hover { 
      -webkit-filter: drop-shadow(5px 5px 20px #BEE236);
      filter:         drop-shadow(5px 5px 20px #BEE236); 
    }

.ui-dialog-titlebar {
    float: right;
    border: 0;
    padding: 0;
}
.ui-dialog-titlebar-close {
    top: 0;
    right: 0;
    margin: 0;
    z-index: 999;
}


.modal-dialog{
  width:auto;
  height:auto;
}

.ui-dialog .ui-dialog-content {
  position: relative;
  border: 0;
  padding: 0 0;
  background: none;
  overflow: auto;
  zoom: 1;
  margin:auto;
}
.ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable{
    display: block;
  z-index: 100002 !important;
  outline: 0px;
  position: absolute;
  height: auto !important;
  width: auto !important;
  top: 138px;
  left: 240px !important;
}


.modal_logo{
   padding-bottom: 0px;
  padding-top: 49px;
}

  </style>
    <script>
      var currentQuestion = [];
      var answers = [];
      var current = 0;
       var second = 0;
        var minutes = 0;
        var status = 0;

      jQuery(window).resize(function(){
         initStage();
        });
      jQuery(document).ready(function(){
        initStage();
      });
       $(".modal_close_btn").hide();
      $(".modal_overlay").hide();
      function initStage(){
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
        $('.timer').css("top",$('.control-group').position().top + $('.control-group').height() +24 +"px !important");
        getActivity();
      }

      function getActivity(){
        // $('.btn_left').hide();
        
        $.get("./data/create.php").success(function(data){

          var d = JSON.parse(data)[0];
          //console.log(d);
          $('.heading_title').html(d.title);
          $('.heading_text').html(d.instruction);
          $('.counter_current').text(current+1);
          $('.counter_last').text(d.questions.length);
          current.watch = function(e){
            console.log(e);
          }

          // showActivity(d.questions, current);
          // $(current).bind(function(e){
          //   console.log(e);
          // });


          // setInterval(function(){
          //     if(current+1 >= d.questions.length){
          //       $('.btn_right').hide();
          //       $('.btn_left').show();
          //     } else if(current+1 <= 1){
          //       $('.btn_left').hide();
          //       $('.btn_right').show();
          //     } else {
          //       $('.btn_right').show();
          //      $('.btn_left').show();
          //     }
          // },500);

          // $('.btn_right').click(function(){
          //     current++;
          //     showActivity(d.questions, current);
          //     console.log("current",current);
          //     $('.counter_current').text(current+1);
          // });
          // $('.btn_left').click(function(){
          //     current--;
          //     showActivity(d.questions, current);
          //     console.log("current",current);
          //     $('.counter_current').text(current+1);
          // });

        });
      }
      function showActivity(questions, index){
          var question = questions[index];
          currentQuestion = question;
           $.get("./types/combo_input_buttons.html").success(function(data){
            $('.contents').html($(data));
          });
      }
      function setPage(template){

        $('.contents').empty();
         $.get("./types/" + template + ".html").success(function(data){
           cache: false,
            $('.contents').html($(data));
          });
      }
      // $('aside.sidebar').click(function(){
      //   $(this).fadeOut();
      // });
      $('.menu').click(function(){
        $('aside.sidebar').fadeIn();
        $(".sibar_inner").animate({width:'toggle'},350);
      });
       $('aside.sidebar > .sibar_inner').click(function(e){
          e.prevenDefault();
       });
       $('[data-template]').click(function(){
        console.log("natawag datatemplate",this); 
          setPage($(this).data("template"));
          $(".sibar_inner").animate({width:'toggle'},350);
          $('aside.sidebar').fadeOut();
       });

       /*show modal*/
       $(".btn-green").click(function(){
         
             $(".modal-dialog").dialog({
                modal:true,
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
         $(".modal_discussion_btn").click(function(){
            $(".overlay").fadeToggle();
           setPage("phrases_sentences");
             $(".sibar_inner").animate({width:'toggle'},350);
            $('aside.sidebar').fadeOut();
            //modal
            $(".ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable").fadeToggle().hide();
              $(".modal_overlay").fadeToggle().hide();
              $(".ui-widget-overlay").fadeToggle().hide();
               update_button();
        });
        /* $(".overlay").fadeToggle();
         setPage("sentence_completion");
         $(".sibar_inner").animate({width:'toggle'},350);
         $('aside.sidebar').fadeOut();*/




       $('.objective').click(function(){
         $(".modal-dialog").dialog({
                modal:true,
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
       $('.modal_close_btn').click(function(){
            //modal
            $(".ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-draggable.ui-resizable").fadeToggle();
              $(".modal_overlay").fadeToggle();
              $(".ui-widget-overlay").fadeToggle();
               $(".modal_close_btn").hide();
       })


        function shuffle(array) {
          var currentIndex = array.length, temporaryValue, randomIndex ;

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

        function update_button(){
            if(status == 0){
              
              
               $('.first_activity').hide();
               $('.second_activity').hide();
                $('.third_activity').hide();
               $('.finish_activity').hide();
                $('.first_activity').show();
            }
            if(status == 1){
             
                 
               $('.first_activity').hide();
               $('.second_activity').hide();
                $('.third_activity').hide();
               $('.finish_activity').hide();
                $('.second_activity').show();
            }
            if(status == 2){
           
                 $('.first_activity').hide();
               $('.second_activity').hide();
                $('.third_activity').hide();
               $('.finish_activity').hide();
                $('.third_activity').show();
               
            }
            if(status == 3){
             /* $('.third_activity').removeClass('third_activity').addClass('fourth_activity');
               $('.activity').text("FINISH");*/
                $('.first_activity').hide();
               $('.second_activity').hide();
                $('.third_activity').hide();
               $('.finish_activity').hide();
                $('.finish_activity').show();
            }

            
          }

        $('.activity').click(function(){
          $(".modal_overlay").fadeToggle().fadeToggle();
        }); 
        
       
       

    </script>
  </body>
</html>