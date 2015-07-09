<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/main.css" type="text/css" rel="stylesheet">
			
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>d
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container-fluid">
			<div id="stage" class="center-block">
				<div id="title-holder">
					<div id="content">
						<h2>Title Phrase</h2>
						<p>Description</p>
					</div>
				</div>
				<div id="icon-holder" style="background-image:url('/abiva_assets/module_icons/1.png');"></div>
				<div id="time-holder">00:00</div>
				<span id="arrow-left"></span>
				<div id="counter-holder">1/5</div>
				<span id="arrow-right"></span>
			</div>
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script>
			//(function(){
				$(document).ready(function(){
					app.init();
				});

				$(window).resize(function(){
					app.init();
				});

				var app = (function(){
					return {
						init : function(){
							this.ready();
							this.stageInit();
						},
						ready : function(){
							$('.container-fluid').css({
								width : window.innerWidth,
								height : window.innerHeight	
							});
						},

						stageInit : function(){
							var stage = $('#stage');
							var height = stage.height();
							var width = stage.width();
							var innerHeight = window.innerHeight;
							var innerWidth = window.innerWidth;

							stage.css({
								marginTop : (innerHeight - height) / 2
							});
						}
					}				
				})();
			//})();
			
		</script>
	</body>
</html>