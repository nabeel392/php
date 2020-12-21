

<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <base href="/">

    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-route/angular-route.js"></script>

    <script src="dist/js/app.js"></script>

</head>
<body>
    <header>
        <a href="/">page</a>
        <a href="php/firstpage.php">
            first page
        </a>
        <a href="php/secondpage.php">second page</a>
        <a href="php/thirdpage.php">third page</a>
    </header>
    <main>
        <div ng-view></div>
    </main>
    <footer>
        <h4>
            THIS IS FOOTER
            <?php
            echo "Hello";
?>
        </h4>
    </footer>
</body>
</html>