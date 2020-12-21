<!DOCTYPE html>
<html ng-app="myApp">

	<head>
		<meta charset="utf-8"/>
	

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />

		<!-- The main CSS file -->
		<link href="style.css" rel="stylesheet" />

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        //<base href="/">

        <script src="node_modules/angular/angular.js"></script>
        <script src="node_modules/angular-route/angular-route.js"></script>

        <script src="dist/js/app.js"></script>
	</head>

	<!-- The ng-app directive tells angular that the code below should be evaluated -->

	<body ng-app>

		<!-- The navigation menu will get the value of the "active" variable as a class.
			 The $event.preventDefault() stops the page from jumping when a link is clicked. -->

		<nav class="{{active}}" ng-click="$event.preventDefault()">

			<!-- When a link in the menu is clicked, we set the active variable -->

			<a href="php/angular_view.php" class="home" ng-click="active='home'">view</a>
	
			<a href="php/createe_user.php" class="about" ng-click="active='about'">create</a>
			<a href="#" class="contact" ng-click="active='contact'">Contact</a>
		</nav>

		<!-- ng-show will show an element if the value in the quotes is truthful,
			 while ng-hide does the opposite. Because the active variable is not set
			 initially, this will cause the first paragraph to be visible. -->


		<p ng-show="">You chose <b>{{active}}</b></p>

		<!-- Include AngularJS from Google's CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	</body>
</html>
