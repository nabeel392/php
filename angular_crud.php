<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>SoftAOX | Insert, Update, Delete Data in MySQL using AngularJS with PHP</title>  
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>  
<body>  
<div class="col-md-12">
    <h3 align="center">Insert, Update, Delete Data in MySQL using AngularJS with PHP</h3>
    <div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
        <div class="col-md-6">
            <label>Name</label>
            <input type="text" name="cust_name" ng-model="cust_name" class="form-control">
            <br/>
            <label>Fathername</label>
            <input type="text" name="cust_fname" ng-model="cust_fname" class="form-control">
            <br/>
            <label>Email</label>
            <input type="text" name="cust_email" ng-model="cust_email" class="form-control">
            <br/>
            <label>Address</label>
            <input type="text" name="cust_address" ng-model="cust_address" class="form-control">
            <br/>
            <label>Password</label>
            <input type="text" name="cust_pass" ng-model="cust_pass" class="form-control">
            <br/>
            <input type="hidden" ng-model="cust_id">
            <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Fathername</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Pass</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr ng-repeat="x in names">
                    <td>{{x.cust_id}}</td>
                    <td>{{x.cust_name}}</td>
                    <td>{{x.cust_fname}}</td>
                    <td>{{x.cust_email}}</td>
                    <td>{{x.cust_address}}</td>
                    <td>{{x.cust_pass}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" ng-click="update_data(x.cust_id, x.cust_name, x.cust_fname,
                         x.cust_email , x.cust_address , x.cust_pass)">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-xs" ng-click="delete_data(x.cust_id )">
                            <span class="glyphicon glyphicon-trash"></span> Delete
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>  
var app = angular.module("sa_app", []);
app.controller("controller", function($scope, $http) {
    $scope.btnName = "Insert";
    $scope.insert = function() {
        if ($scope.cust_name == null) {
            alert("Enter Your Name");
        } else if ($scope.cust_fname == null) {
            alert("Enter Your fathername");
        } else if ($scope.cust_email == null) {
            alert("Enter Your email");
        } else if ($scope.cust_address == null) {
            alert("Enter Your Address");
        } else if ($scope.cust_pass == null) {
            alert("Enter Your password");
        } else {
            $http.post(
                "angular_insert.php", {
                    'cust_name': $scope.cust_name,
                    'cust_fname': $scope.cust_fname,
                    'cust_email': $scope.cust_email,
                    'cust_address': $scope.cust_address,
                    'cust_pass': $scope.cust_pass,
                    'btnName': $scope.btnName,
                    'cust_id': $scope.cust_id
                }
            ).success(function(data) {
                alert(data);
                $scope.cust_name = null;
                $scope.cust_fname = null;
                $scope.cust_email = null;
                $scope.cust_address = null;
                $scope.cust_pass = null;
                $scope.btnName = "Insert";
                $scope.show_data();
            });
        }
    }
    $scope.show_data = function() {
        $http.get("display.php")
            .success(function(data) {
                $scope.names = data;
            });
    }
    $scope.update_data = function(cust_id, cust_name, cust_fname, cust_email , cust_address , cust_pass) {
        $scope.cust_id = cust_id;
        $scope.cust_name = cust_name;
        $scope.cust_fname = cust_fname;
        $scope.cust_email = cust_email;
        $scope.cust_address = cust_address;
        $scope.cust_pass = cust_pass;
        $scope.btnName = "Update";
    }
    $scope.delete_data = function(cust_id) {
        if (confirm("Are you sure you want to delete?")) {
            $http.post("angular_delete1.php", {
                    'cust_id': cust_id
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