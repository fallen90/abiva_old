var appStage = (function(){
	return {
		init : function(){
			this.ready();
			this.stageInit();
			FastClick.attach(document.body);
		},
		ready : function(){
			$('.container-fluid').css({
				width : window.innerWidth,
				height : window.innerHeight	
			});
		},

		stageInit : function(){
			var stage = $('#stage');
			var activityContainer = $('.activity-container');
			var height = stage.height();
			var width = stage.width();
			var innerHeight = window.innerHeight;
			var innerWidth = window.innerWidth;

			stage.css({
				marginTop : (innerHeight - height) / 2
			});

			activityContainer.css({
				paddingTop : (stage.innerHeight - $(this).height()) / 2
			});
		}
	}				
})();

$('#stage').click(function(){
	$('#menu_items').fadeOut('fast');
});

$(document).ready(function(){
	appStage.init();

});
document.oncontextmenu = function(e){
	$('#menu_items').css({
		left: e.pageX,
		top: e.pageY
	}).fadeIn();
	return false;
}
$(window).resize(function(){
	appStage.init();
});

			