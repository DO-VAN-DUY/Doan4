app.controller('dhcontrol', function($scope, $http) {
                  $http({
                      method: "GET",
                      url: "http://127.0.0.1:8000/api/donhang"
              
                  }).then(function(data) {
                      $scope.dhs = data.data;
                  });
                  $scope.reloadData = function() {
                      $http({
                          method: "GET",
                          url: "http://127.0.0.1:8000/api/donhang"
              
                      }).then(function(data) {
                          $scope.dhs = data.data;
                      });
                  }
                  
                  $scope.saveData = function() {
                      if ($scope.id == 0) {
                          // create
                          $http({
                              method: "POST",
                              url: "http://127.0.0.1:8000/api/donhang",
                              data: $scope.dhh,
                              'content-Type': "application/json"
                          }).then(function(res) {
                              console.log(res.data);
                          });
              
                      } else {
                          //update
                          $http({
                              method: "PUT",
                              url: "http://127.0.0.1:8000/api/donhang/" + $scope.id,
                              data: $scope.dhh,
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
                              url: "http://127.0.0.1:8000/api/donhang/" + id
              
                          }).then(function(data) {
                              $scope.message = data.data;
                              $scope.reloadData();
                          });
                      }
                  }
                  $scope.showModal = function(id) {
                      $scope.id = id;
                      console.log($scope.id);
                      if (id == 0) {
                          //dang la them mot ban tin moi
                          $scope.modalTitle = "Them moi ban ghi";
                          if ($scope.dhh) {
                            $scope.dhh.id_kh = "";
                              $scope.dhh.Fist_Name = "";
                              $scope.dhh.Last_Name = "";
                              $scope.dhh.dienthoai = "";
                             
                              $scope.dhh.diachi = "";
                              $scope.dhh.Email = "";
                             
                          }
                      } else {
                          //dang la sua ban ghi
                          $scope.modalTitle = "Sua ban ghi";
                          $http({
                              method: "GET",
                              url: "http://127.0.0.1:8000/api/donhang/" + id
              
                          }).then(function(data) {
                              $scope.dhh = data.data;
                          });
                      }
                      $("#modelId").modal('show');
                      // alert("xin chao");
                  }
              });