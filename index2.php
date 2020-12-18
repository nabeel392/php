<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>angular js</title>
<!-- Bootstrap --> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>
<body>
<div class="container">
    <h1 align="center">Insert Data Into Database using Angular JS with PHP Mysql</h1>
    <div ng-app="sa_insert" ng-controller="controller">
        <label>Name</label><input type="text" name="cust_name" ng-model="cust_name" class="form-control"><br/>
        <label>Fathername</label><input type="text" name="cust_fname" ng-model="cust_fname" class="form-control"><br/>
        <label>Email</label><input type="text" name="cust_email" ng-model="cust_email" class="form-control"><br/>
        <label>Address</label><input type="text" name="cust_adddess" ng-model="cust_address" class="form-control"><br/>
        <label>Password</label><input type="text" name="cust_pass" ng-model="cust_pass" class="form-control"><br/>
        <input type="submit" name="insert" class="btn btn-success" ng-click="insert()" value="Insert">
    </div>
</div>
<!-- Script -->
<script>
var app = angular.module("sa_insert", []);
app.controller("controller", function($scope, $http) {
    $scope.insert = function() {
        $http.post(
            "insert1.php", {
                'cust_name': $scope.cust_name,
                'cust_fname': $scope.cust_fname,
                'cust_email': $scope.cust_email,
                'cust_address': $scope.cust_address,
                'cust_pass': $scope.cust_pass,

            }
        ).success(function(data) {
            alert(data);
            $scope.cust_name = null;
            $scope.cust_fname = null;
            $scope.cust_email = null;
            $scope.cust_address = null;
            $scope.cust_pass = null;
        });
    }
});
</script>
</body>
</html>