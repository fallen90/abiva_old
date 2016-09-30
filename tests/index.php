<!DOCTYPE html>
<html lang="" ng-app="AbivaEdge">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<!-- <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
		<!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'> -->
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="/tests/assets/css/main.css" type="text/css" rel="stylesheet">
			
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
						<h2>{{activity.module_title}}</h2>
						<p ng-bind-html="activity.instruction | to_trusted"></p>
					</div>
				</div>
				<div id="icon-holder" style="background-image:url('/abiva_assets/module_icons/1.png');"></div>
				<div id="time-holder" ng-hide="state==tutorial">00:00</div>
				<span id="arrow-left" ng-hide="state==tutorial"></span>
				<div id="counter-holder" ng-hide="state==tutorial">1/5</div>
				<span id="arrow-right" ng-hide="state==tutorial"></span>

				<div class="activity-container" ng-view></div>
			</div>
		</div>
		
		<!-- context menu -->
		<div class="list-group" style="display:none;position:absolute;" id="menu_items">
			<span class="list-group-item active">
				<h4 class="list-group-item-heading">Module List</h4>
			</span>
			<a onclick="this.innerHtml = '...' + this.innerHtml;window.location.href='/tests'" class="list-group-item">
				<h4 class="list-group-item-heading">Refresh Application</h4>
			</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Phrases and Sentences</h4>
				<p class="list-group-item-text">Content goes here</p>
			</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Phrases and Sentences</h4>
				<p class="list-group-item-text">Content goes here</p>
			</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Phrases and Sentences</h4>
				<p class="list-group-item-text">Content goes here</p>
			</a>
		</div>

		<!-- Script assets -->
		<script src="/tests/bower_components/angular/angular.js"></script>
		<script src="/tests/bower_components/angular-route/angular-route.js"></script>
		<script src="/tests/bower_components/angular-cookies/angular-cookies.js"></script>
		<script src="/tests/bower_components/angular-animate/angular-animate.js"></script>
		<script src="/tests/bower_components/angular-resource/angular-resource.js"></script>
		<script src="/tests/bower_components/angular-touch/angular-touch.js"></script>
		<script src="../assets/js/jquery-1.11.1.min.js"></script>
		<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="../dist/js/bootstrap.min.js"></script>
		<!-- for mobile devices -->
		<script src="/tests/assets/js/fastclick.js"></script>
		<!-- init script -->
		<script src="/tests/stage.js"></script>
		<!-- angularjs app scripts -->
		<script type="text/javascript" src="/tests/app/app.js"></script>
	</body>
</html>