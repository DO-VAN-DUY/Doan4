@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="ctncontrol">
                   
                       
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table class="table table-bordered table-stripper ">
                            <thead>
                                <tr>
                                    
                                    <th>Id_hdn</th>
                                
                                    <th>id_sp</th>
                                    <th>soluong</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                                   @php
                                    $stt=1;
                                    @endphp
                            <tbody>
                                <tr ng-repeat="ct in ctns ">
                                    
                                    <td>@{{ct.id_hdn}}</td>
                                    
                                    <td>@{{ct.id_sp}}</td>
                                    <td>@{{ct.slg}}</td>
                                    <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(ct.id)"> </button></td>
                                    <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(ct.id)"> </button></td>
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
                                                <label for="tenncc">id_hdn</label>
                                                <div><input type="text" ng-model="ctn.id_hdn" class="form-control"></div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="tenncc">id_sp</label>
                                            <div><input type="text" ng-model="ctn.id_sp" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">soluong</label>
                                                <div><input type="text" ng-model="ctn.slg" class="form-control"></div>
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