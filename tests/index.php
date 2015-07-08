<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		
		<!-- jQuery -->
		<script src="../assets/js/jquery-1.11.1.min.js"></script>
		<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../assets/js/bootstrap.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="main_container">
			<div class="stage">
				<div class="header">
					<div class="activity_header_container">
						<div class="icon_placeholder"></div>
						<div class="activity_header">
							<h1 class="title"></h1>
							<p class="description"></p>
						</div>
					</div>
					<div class="btn_controls pull-right clearfix hidden-xs">
						<a href="#" class="btn btn-warning">QUIZ</a>
						<a href="#" class="btn btn-primary">DISCUSSION</a>
					</div>
				</div>
				<div class="content">
					<div class="content_container">
						<p class="questions">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed ex faucibus, elementum nisl ut, laoreet est. Ut sit amet orci a nisl tempor tempus eget quis mi. Praesent commodo nibh elit, vel efficitur arcu cursus sed. Curabitur non tincidunt tortor. Etiam vitae turpis ornare, viverra erat ac, rutrum lectus. Morbi felis massa, pharetra eu imperdiet nec, tincidunt vel quam. Nulla ut mi eget tortor vehicula mattis vitae id turpis. </p>
					</div>
				</div>
				<div class="footer"></div>
			</div>	

			<img src="../abiva_assets/bg_left.png" id="bg_left" class="bg_img">
			<img src="../abiva_assets/bg_right.png" id="bg_right" class="bg_img">
		</div>

		<script>
		var prevTop = 0;
		jQuery(document).ready(function(){
			//make sure that the images are on the right side always
			autosizeBG();
			autosizeStage();
		});

		jQuery(window).resize(function(){
			autosizeBG();
			autosizeStage();
		});

		function autosizeBG(){
			$('.bg_img').css({
				height: window.innerHeight
			});
		}
		
		function autosizeStage(){
			prevTop = $('.stage').position().top;
			//stage
			$('.stage').css({
				height:window.innerHeight,
				width:window.innerWidth,
			});
			$('.stage').css({
				top: ((window.innerHeight - $('.stage').height())/2)+10+ "px",
				left: ((window.innerWidth - $('.stage').width())/2)-19 + "px",
				borderWidth: 18 * .5 +"px"
			});
			//header
			$('.header').css({
				height: $('.stage').height() * .2 + "px"
			});
			$('.btn_controls > .btn-primary').css({
				top: "-" + ((window.innerHeight - $('.stage').height())/2) - (prevTop * 8 / $('.stage').position().top) +  "px",
				right: "0px"
			});
			$('.btn_controls > .btn-warning').css({
				top: "-" + ((window.innerHeight - $('.stage').height())/2) - (prevTop*8 / $('.stage').position().top) +  "px",
				right:$('.btn_controls > .btn-primary').width() + 15 + 20+"px"
			});
			$('.icon_placeholder').css({
				top: "-" + ($('.stage').position().top)/2 - 25 +"px",
				left: "-" + ($('.stage').position().left)/2 -5 +"px"
			});
			$('.activity_header_container').css({
				top: "-" + ($('.stage').position().top)/2 - 25 +"px",
				left: "-" + ($('.stage').position().left)/2 -5 +"px"
			});

			//footer
			$('.footer').css({
				height:$('.stage').height() * .1 + "px"
			}).css({
				top:$('.stage').height()-$('.footer').height() + "px"
			});
			//content
			$('.content').css({
				height:$('.stage').height() - ($('.header').height() + $('.footer').height()) + "px"
			});
			console.log(prevTop*10, $('.stage').position().top,(prevTop*10 / $('.stage').position().top));
			
		}
		</script>


		<style>
			body {
				background:#B58FC2;
			}
			.bg_img{
				z-index: -10000000;
			}
			#bg_right {
				position:absolute;
				right:0px;
				top:0px;
				width:auto;
				height:auto;
			}
			#bg_left {
				position:absolute;
				left:0px;
				width:auto;
				height:auto;
			}

			.stage {
				position:absolute;
				max-width:78%;
				max-height:80%;
				z-index:100000;
				background-color:#fff;
				border: 18px solid #F2D748;
				border-radius: 51px;
        		box-shadow: 4px 16px 0px #9C862F;
			}
			.header {
				max-height:20%;
				width:100%;
			}
			.footer{
				max-height:10%;
				position:absolute;
				width:100%;
			}
			.content {
				max-height:70%;
				padding:15px 20px;
			}
			.content_container {
				font-size:100%;
			}
			.btn_controls > .btn {
				position:absolute;
				font-size:18px;
				font-weight:100;
				font-family: "Calibri";
				border-radius: 25px;
				padding:8px 10px;
				width:160px;
			}
			.activity_header_container {
				position:absolute;
				background: #00678F;
				width:60%;
				height:18%;
			}
			.icon_placeholder {
				position:absolute;
				width:150px;
				height:150px;
				border-radius:124px;
				border:5px solid #02202F;
				background-color:#FEF5EC;
			}
		</style>
	</body>
</html>