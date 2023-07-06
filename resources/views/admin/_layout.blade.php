<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin-Trang quản trị </title>

  <link rel="stylesheet" href="/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/admin/js/select.dataTables.min.css">

  <link rel="stylesheet" href="/admin/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="/admin/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>
<style>
  th,td{
      padding-left: 20px;
      border: 1px solid rgb(56, 50, 50);
  }
  th
  {
      padding: 10px;
  }
  td{
      font-size: 13px;
  }
</style>

<body ng-app="myapp">
  <div class="container-scroller">
     @include('admin.includes.header') 
    <div class="container-fluid page-body-wrapper">
       @include('admin.includes.discoloration') 
      @include('admin.includes.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                @include('admin.includes.nu')
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    @include('admin.includes.hour')
                    <main>
                      @yield('content')
                    </main>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
   
  </div>

  <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="/admin/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/hoverable-collapse.js"></script>
  <script src="/admin/js/template.js"></script>
  <script src="/admin/js/settings.js"></script>
  <script src="/admin/js/todolist.js"></script>
  <script src="/admin/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="/admin/js/dashboard.js"></script>
  <script src="/admin/js/Chart.roundedBarCharts.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/SanphamController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/nhanvienController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/loaispController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/newController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/nhaccController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/khachhangController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/hoadonnhapController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/hoadonbanController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/usersController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/donhangController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/ctdonhangController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/detailbanController.js "></script>
    <script type="text/javascript" src="/admin/js/ControllerAnguar/detailnhapController.js "></script>
    
   
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
        app.filter('cut', function () {
                        return function (value, wordwise, max, tail) {
                            if (!value) return '';
                            max = parseInt(max, 10);
                            if (!max) return value;
                            if (value.length <= max) return value;
                            value = value.substr(0, max);
                            if (wordwise) {
                                var lastspace = value.lastIndexOf(' ');
                                if (lastspace !== -1) {
                                if (value.charAt(lastspace-1) === '.' || value.charAt(lastspace-1) === ',') {
                                    lastspace = lastspace - 1;
                                }
                                value = value.substr(0, lastspace);
                                }
                            }
                            return value + (tail || ' …');
                        };
                    })
    </script>

</body>

</html>

