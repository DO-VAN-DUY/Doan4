var app = angular.module('myapp', []);
app.controller('spcontrol', function($scope, $http) {
    $scope.pageSize = '10';
    $scope.page = '1';
    $scope.name = '';
    $http({
        method: "GET",
        url: "http://127.0.0.1:8000/api/sanpham"

    }).then(function(data) {
        $scope.sanphams = data.data;//in ra dữ liệu
    });
    
    $scope.reloadData = function() {
        $http({
            method: "GET",//phương thức
            url: "http://127.0.0.1:8000/api/sanpham"//đường dẫn

        }).then(function(data) {
           
            $scope.sanphams = data.data;
        });
        
    }
    $scope.listCategory;
    $scope.listncc;
    
    $scope.loadCategory = function(){
      $http({
          method : 'GET',
          url: "http://127.0.0.1:8000/api/loaisp",
          dataType: "json",
          
        }).then(function mySuccess(response) {
            $scope.listCategory = response.data;
        }, function myError(response) {
            console.log('loix');
        });
    };
    $scope.loadncc = function(){
        $http({
            method : 'GET',
            url: "http://127.0.0.1:8000/api/nhacc",
            dataType: "json",
            
          }).then(function mySuccess(response) {
              $scope.listncc = response.data;
          }, function myError(response) {
              console.log('loix');
          });
      };

    // $scope.saveData = function() {
    //     // scope.Mota  = CKEDITOR.instances.Mota.getData();
    //     var file = document.getElementById('file').files[0];
    //     if (file) { 
    //         const formData = new FormData();
    //         formData.append('file', $scope.file);
    //         $http({
    //             method: "POST",
    //             url: "http://127.0.0.1:8000/api/sanpham",
    //             data: $scope.sp,//dữ liệu
    //             'content-Type': "application/json"
    //         }).then(function(res) {  
    //             $scope.sp.Anh = res.data.filePath;
    //             console.log(res.data);
    //         });
    //     } else {
    //         //update
    //         $http({
    //             method: "PUT",
    //             url: "http://127.0.0.1:8000/api/sanpham/" + $scope.id,
    //             data: $scope.sp,
    //             'content-Type': "application/json"
    //         }).then(function(res) {
    //             console.log(res.data);
    //         });
           
    //     }
    //     $("#modelId").modal('hide');
    //     $scope.reloadData();
    // }
    $scope.saveData = function() {
        if ($scope.id == 0) {
            // create
            $http({
                method: "POST",
                url: "http://127.0.0.1:8000/api/sanpham",
                data: $scope.sp,
                'content-Type': "application/json"
            }).then(function(res) {
                console.log(res.data);
            });
        } else {
            //update
            $http({
                method: "PUT",
                url: "http://127.0.0.1:8000/api/sanpham" + $scope.id,
                data: $scope.sp,
                'content-Type': "application/json"
            }).then(function(res) {
                console.log(res.data);
            });
        }
        $("#modelId").modal('hide');
        $scope.reloadData();
    }

    // $scope.saveData = function(){    
    //     var file = document.getElementById('file').files[0];
    //     if (file) {
    //       const formData = new FormData();
    //       formData.append('file', file);
    //       $http({
    //         method: 'POST',
    //         headers: {
             
    //             'Content-Type': undefined
    //         },
    //         data: formData,
    //         url: "http://127.0.0.1:8000/api/sanpham/upload",
    //     }).then(function(res){
    //         $scope.sanphams.Anh = res.data.filePath;
    //         $http({
    //           method:"POST",
    //           url: "http://127.0.0.1:8000/api/sanpham",
    //           data:$scope.sanphams     
    //         }).then(function(){
    //             //  window.location.href = "http://127.0.0.1:5500/views/admin/product/product.html";
    //             alert('chúc mừng bạn');
    //         });
    //       })
    //     }
    //     else{
    //       $http({
    //         method:"POST",
    //         url: "http://127.0.0.1:8000/api/sanpham",
    //         data:$scope.sanphams,
    //       }).then(function(data){
    //            //window.location.href = "http://127.0.0.1:5500/views/admin/product/product.html";
    //            alert('chúc mừng');
    //       }, function errorCallback(response) {
    //           console.log('lỗi');
    //       });
    //     }   
    //     $("#modelId").modal('hide');
    //     $scope.reloadData();
    //   };
     
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong?");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://127.0.0.1:8000/api/sanpham/" + id

            }).then(function(data) {
                
                $scope.message = data.data;
                $scope.reloadData();
            });
        }
    }
    $scope.showModal = function(id) {
        $scope.id = id;
        console.log($scope.id);
        //scope.Mota  = CKEDITOR.instances.Mota.getData();
        if (id == 0) {
            
            // them mot ban tin moi
            $scope.modalTitle = "Them moi ban ghi";
            if ($scope.sp){
                $scope.sp.Maloai = "";
                $scope.sp.Mancc = "";
                $scope.sp.Tensp = "";
                $scope.sp.giacu = "";
                $scope.sp.giamoi = "";
                $scope.sp.Anh ="";
                $scope.sp.Mota ="";
                $scope.sp.Thongtin ="";
               
            }       
        } 
        else {
            //dang la sua ban ghi
            $scope.modalTitle = "Sua ban ghi";
           
            $http({
                method: "GET",
                url: "http://127.0.0.1:8000/api/sanpham/" + id

            }).then(function(data) {
                $scope.sp = data.data;
                // CKEDITOR.instances['Mota'].setData($scope.sp.Mota);
                // CKEDITOR.instances['Thongtin'].setData($scope.sp.Thongtin);
            });
        }
       
        $("#modelId").modal('show');
        
    }
});