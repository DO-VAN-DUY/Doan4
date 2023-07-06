@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="nvcontrol">
                   
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table class="table table-bordered table-stripper ">
                            <thead>
                                <tr>
                                   
                                    <th>Full name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </tr>
                            </thead>
                                  
                            <tbody>
                                <tr ng-repeat="nc in nvs">
                                    <td>@{{nc.Tennv}}</td>
                                <td>@{{nc.Diachi}}</td>
                                <td>@{{nc.Email}}</td>
                                <td>@{{nc.SDT}}</td>
                                    <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(nc.id)"> </button></td>
                                    <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(nc.id)"> </button></td>
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
                                                <label for="tenncc">Tennhanvien</label>
                                                <div><input type="text" ng-model="nvv.Tennv" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Dia chi</label>
                                                <div><input type="text" ng-model="nvv.Diachi" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Email</label>
                                            <div><input type="text" ng-model="nvv.Email" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Phone</label>
                                                <div><input type="text" ng-model="nvv.SDT" class="form-control"></div>
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