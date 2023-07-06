@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="hdncontrol">
                   
                        
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table class="table table-bordered table-stripper ">
                            <thead>
                                <tr>
                                    
                                    <th>Id_nhanvien</th>
                                    <th>id_ncc</th>
                                    <th>date</th>
                                    <th>Tongtien</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                                  
                            <tbody>
                                <tr ng-repeat="bn in hdns ">
                                   
                                    <td>@{{bn.id_nhanvien}}</td>
                                    <td>@{{bn.id_ncc}}</td>
                                    <td>@{{bn.date}}</td>
                                    <td>@{{bn.Tongtien}}</td>
                                    <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(bn.id)"> </button></td>
                                    <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(bn.id)"> </button></td>
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
                                                <label for="tenncc">id_nhanvien</label>
                                                <div><input type="text" ng-model="bn.id_nhanvien" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">id_ncc</label>
                                                <div><input type="text" ng-model="bn.id_ncc" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">date</label>
                                            <div><input type="text" ng-model="bn.date" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Tongtien</label>
                                                <div><input type="text" ng-model="bn.Tongtien" class="form-control"></div>
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