@extends("admin/_layout")
@section('content')

<div class="container-fluid px-4" ng-controller="spcontrol">
    {{ csrf_field() }}
                        <p>
                            <button class="btn btn-primary fa fa-plus" ng-click="showModal(0)"> Create</button></p>
                        <table>
                            <thead>
                                <tr>
                                    {{-- <th>TT</th> --}}
                                    <th>Tensanpham</th>
                                    <th>Giacu</th>
                                    <th>Giaban</th> 
                                    <th>Anh</th>
                                    <th>Mota</th>
                                    <th>Thongtin</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>           
                            <tbody>
                                {{-- @php
                                $stt = 1 ;
                                @endphp --}}
                                <tr ng-repeat="s in sanphams ">
                                   
                                    {{-- <td>{{$stt++}}</td> --}}
                                            <td>@{{s.Tensp}}</td>
                                            <td>@{{s.giacu|number}}</td>
                                            <td>@{{s.giamoi|number}}</td>
                                            <td><img ng-src="/upload/images/@{{s.Anh}}" alt="" style="width:70px;height:70px"></td>
                                            <td>@{{s.Mota}}</td>
                                            <td>@{{s.Thongtin|cut:true:100}}</td>
                                    <td><button class="btn btn-info fa fa-pencil " ng-click="showModal(s.id)"> </button></td>
                                    <td><button class="btn btn-danger fa fa-trash " ng-click="deleteClick(s.id)"> </button></td>
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
                                                <label for="tensp">Tensanpham</label>
                                                <div><input type="text" ng-model="sp.Tensp" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tensp">Maloai</label>
                                                <div name="Maloai" ng-init="loadCategory()">
                                                    <select ng-model="sp.Maloai" name="sp.Maloai" class="form-control" ng-options="option.id as option.Tenloai for option in listCategory">  
                                                    </select>
                                                </div>
                                              
                                            </div>
                                            <div class="form-group">
                                                <label for="tensp">Mancc</label>
                                                <div name="Mancc">
                                                    <div name="Maloai" ng-init="loadncc()">
                                                        <select ng-model="sp.Mancc" name="sp.Mancc" class="form-control" ng-options="option.id as option.Tenncc for option in listncc">  
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tensp">Giagoc</label>
                                                <div><input type="text" ng-model="sp.giacu" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tensp">Giaban</label>
                                            <div><input type="text" ng-model="sp.giamoi" class="form-control"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tensp">Anh</label>
                                                <div>
                                                    <input type="text" id="file" ng-model="sp.Anh" class="form-control" >
                                                    {{-- <img id="avatar" class="thumbnail" width="300px" height="300px"> --}}
                                                </div>
                                            </div>
                                            {{-- <script type="text/javascript">
                                                function changeImg(input){
                                                    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
                                                    if(input.files && input.files[0]){
                                                        var reader = new FileReader();
                                                        //Sự kiện file đã được load vào website
                                                        reader.onload = function(e){
                                                            //Thay đổi đường dẫn ảnh
                                                            $('#avatar').attr('src',e.target.result);
                                                        }
                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                    alert(input.val());
                                                }
                                                $(document).ready(function() {
                                                    $('#avatar').css('cursor','pointer');
                                                    $('#avatar').click(function(){
                                                        $('#file').click();
                                                    });
                                                });
                                            </script> --}}

                                            <div class="form-group">
                                                <label for="tensp">Mota</label>
                                                <textarea class="form-control" name="Mota" ng-model="sp.Mota" id="Mota">    
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="tensp">Thongtin</label>
                                                <textarea class="form-control" ng-model="sp.Thongtin" name="Thongtin" id="Thongtin">
                                                </textarea>
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
                    <script type="text/javascript" src="/admin/js/ckeditor/ckeditor.js"></script>
                    <script>
                        
                        // CKEDITOR.replace( 'Mota' );
                        // CKEDITOR.replace( 'Thongtin' );
                       // var data = CKEDITOR.instances.Mota.getData();
                        
                </script>
               
                {{-- <script>
                    
                        CKEDITOR.replace( 'Thongtin' );
                       
                </script> --}}
               
                    
@stop