app.controller('mycontrol', function($scope, $http) {
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/nhacc"

    }).then(function(data) {
        $scope.nccs = data.data;
    });
    $scope.reloadData = function() {
        $http({
            method: "GET",
            url: "http://127.0.0.1:8000/api/nhacc"

        }).then(function(data) {
            $scope.nccs = data.data;
        });
    }
    
    $scope.saveData = function() {
        if ($scope.id == 0) {
            // create
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/nhacc",
                data: $scope.n,
                'content-Type': "application/json"
            }).then(function(res) {
                console.log(res.data);
            });

        } else {
            //update
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/nhacc/" + $scope.id,
                data: $scope.n,
                'content-Type': "application/json"
            }).then(function(res) {
                console.log(res.data);
            });
        }
        $("#modelId").modal('hide');
        $scope.reloadData();
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/nhacc/" + id

            }).then(function(data) {
                $scope.message = data.data;
            
                $scope.reloadData();
            });
        }
    }
    $scope.showModal = function($id) {
        $scope.id = $id;
        console.log($scope.id);
        if (id == 0) {
            //dang la them mot ban tin moi
            $scope.modalTitle = "Them moi ban ghi";
            if ($scope.n) {
                $scope.n.Tenncc = "";
                $scope.n.Diachi = "";
                $scope.n.Email = "";
                $scope.n.Dienthoai = "";
            }
        } else {
            //dang la sua ban ghi
            $scope.modalTitle = "Sua ban ghi";
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/nhacc/" + id

            }).then(function(data) {
                $scope.n = data.data;
            });
        }
        $("#modelId").modal('show');
        // alert("xin chao");
    }
});