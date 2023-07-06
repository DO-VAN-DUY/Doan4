@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="dhcontrol">  
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table class="table table-bordered table-stripper ">
                            <thead>
                                <tr>
                                    
                                    <th>Fist_Name</th>
                                    <th>Last Name</th>
                                    <th>dienthoai</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                                   @php
                                    $stt=1;
                                    @endphp
                            <tbody>
                                <tr ng-repeat="d in dhs ">
                                    
                                    <td>@{{d.Fist_Name}}</td>
                                    <td>@{{d.Last_Name}}</td>
                                    <td>@{{d.dienthoai}}</td>
                                    <td>@{{d.diachi}}</td>
                                    <td>@{{d.Email}}</td>
                                    
                                    <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(d.id)"> </button></td>
                                    <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(d.id)"> </button></td>
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
                                                <label for="tenncc">id_kh</label>
                                                <div><input type="text" ng-model="dhh.id_kh" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Fist_Name</label>
                                                <div><input type="text" ng-model="dhh.Fist_Name" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Last_Name</label>
                                                <div><input type="text" ng-model="dhh.Last_Name" class="form-control"></div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="tenncc">dienthoai</label>
                                                <div><input type="text" ng-model="dhh.dienthoai" class="form-control"></div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="tenncc">Dia chi</label>
                                                <div><input type="text" ng-model="dhh.diachi" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Email</label>
                                                <div><input type="text" ng-model="dhh.Email" class="form-control"></div>
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