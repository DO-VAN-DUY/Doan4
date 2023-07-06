@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="loaicontrol">
                   
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table class="table table-bordered table-stripper ">
                            <thead>
                                <tr>
                                   
                <th>Tenloai</th>
                <th>Ghichu</th>
                <th>Edit</th>
                <th>Delete</th>
                                </tr>
                            </thead>
                                 
                            <tbody>
                                <tr ng-repeat="nc in ls ">
                                   
                                    <td>@{{nc.Tenloai}}</td>
                                    <td>@{{nc.Ghichu}}</td>
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
                                                <label for="tenncc">Ten loai</label>
                                                <div><input type="text" ng-model="lsp.Tenloai" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">Ghi chu</label>
                                                <div><input type="text" ng-model="lsp.Ghichu" class="form-control"></div>
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