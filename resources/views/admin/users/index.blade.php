@extends("admin/_layout")
@section('content')
<div class="container-fluid px-4" ng-controller="usercontrol">   
                    <p>
                        <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                    <table >
                        <thead>
                            <tr>
                                
                                <th>full_name</th>
                                            <th>email</th>
                                            <th>password</th> 
                                            <th>address</th>  
                                            <th>rote</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                            </tr>
                        </thead>
                               
                        <tbody>
                            <tr ng-repeat="u in uss ">
                                <td>@{{u.full_name}}</td>
                                <td>@{{u.email}}</td>
                                <td>@{{u.password}}</td>
                                <td>@{{u.address}}</td>
                                <td>@{{u.Quyen}}</td>
                                <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(u.id)"> </button></td>
                                <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(u.id)"> </button></td>
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
                                            <label for="tenncc">full_name</label>
                                            <div><input type="text" ng-model="us.full_name" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">Email</label>
                                            <div><input type="text" ng-model="us.email" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">password</label>
                                        <div><input type="text" ng-model="us.password" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">address</label>
                                            <div><input type="text" ng-model="us.address" class="form-control"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenncc">permission</label>
                                            {{-- <div><input type="text" ng-model="us.permission" class="form-control"></div> --}}
                                            <div>
                                                <select style="width:100%">
                                                    <option ng-model="us.permission"></option>
                                                    <option>admin</option>
                                                    <option>nhanvien</option>
                                                </select>
                                            </div>
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