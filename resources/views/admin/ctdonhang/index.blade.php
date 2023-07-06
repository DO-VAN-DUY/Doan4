@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="ctdhcontrol">  
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table class="table table-bordered table-stripper ">
                            <thead>
                                <tr>
                                
                                    <th>Mahoadon</th>
                                    
                                    <th>quantity</th>
                                    <th>price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                                   @php
                                    $stt=1;
                                    @endphp
                            <tbody>
                                <tr ng-repeat="ctd in ctdhs ">
                                   
                                    <td>@{{ctd.Madonhang}}</td>
                                    <td>@{{ctd.quantity}}</td>
                                    <td>@{{ctd.price|number}}</td>
                                    
                                    
                                    <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(ctd.id)"> </button></td>
                                    <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(ctd.id)"> </button></td>
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
                                                <label for="tenncc">Madonhang</label>
                                                <div><input type="text" ng-model="ctdhh.Madonhang" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tenncc">quantity</label>
                                                <div><input type="text" ng-model="ctdhh.quantity" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                      <label for="tenncc">price</label>
                                                      <div><input type="text" ng-model="ctdhh.price" class="form-control"></div>
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