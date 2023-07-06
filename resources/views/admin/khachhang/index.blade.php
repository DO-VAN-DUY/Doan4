@extends("admin/_layout")
@section('content')
<div class="container-fluid px-4" ng-controller="khcontrol">
                   
                       
                    <p>
                        <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                    <table class="table table-bordered table-stripper ">
                        <thead>
                            <tr>
                               
                                <th>Full name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                               
                        <tbody>
                            <tr ng-repeat="kh in khs ">
                                
                                <td>@{{kh.Tenkh}}</td>
                                <td>@{{kh.Diachi}}</td>
                                <td>@{{kh.Email}}</td>
                                <td>@{{kh.SDT}}</td>
                                <td>@{{kh.password}}</td>
                                <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(kh.id)"> </button></td>
                                <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(kh.id)"> </button></td>
                            </tr>
                
                        </tbody>
                    </table>
                
                
                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">@{{modalTitle}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="tenncc">Tenkhachhang</label>
                                            <div><input type="text" ng-model="kh.Tenkh" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">Dia chi</label>
                                            <div><input type="text" ng-model="kh.Diachi" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">Email</label>
                                        <div><input type="text" ng-model="kh.Email" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">Phone</label>
                                            <div><input type="text" ng-model="kh.SDT" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">Password</label>
                                            <div><input type="text" ng-model="kh.password" class="form-control"></div>
                                        </div>
                                    </div>
                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
@stop