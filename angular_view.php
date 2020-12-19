<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title> Display data Using AngularJS </title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>  
<body>  
<div class="container">
    <h3 align="center">Display data from Mysql Database Using AngularJS with PHP</h3>
    <div ng-app="sa_delete" ng-controller="controller" ng-init="display_data()">
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Fathername</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pass</th>
            </tr>
            <tr ng-repeat="x in names">
                <td>{{x.cust_id}}</td>
                <td>{{x.cust_name}}</td>
                <td>{{x.cust_fname}}</td>
                <td>{{x.cust_email}}</td>
                <td>{{x.cust_address}}</td>
                <td>{{x.cust_pass}}</td>
                <td align="center">
                    <button ng-click="delete_data(x.cust_id )"class="btn btn-danger">X</button>
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- Script -->  
<script>
    var app = angular.module("sa_delete", []);
    app.controller("controller", function($scope, $http) {
        $scope.display_data = function() {
            $http.get("display.php")
                .success(function(data) {
                    $scope.names = data;
                });
            }
        $scope.delete_data = function(id) {
            if (confirm("Are you sure you want to delete?")) {
                $http.post("angular_delete.php", {
                        'cust_id': id
                    })
                    .success(function(data) {
                        alert(data);
                        $scope.show_data();
                    });
            } else {
                return false;
            }
        }
    });
</script> 
</body>  
</html> 