@extends("admin/_layout")
@section('content')
<div class="container-fluid px-4">
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Danh sách slide
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            
                                            <th>link</th>
                                            <th>image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                                 
                                          
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                       
                                        @foreach ($info as $item)
                                        <tr>
                                            
                                            <td>{{$item->link}}</td>
                                            <td>{{$item->image}}</td>
                                            <td><a href="/admincp/slide/{{$item->id_slide}}/edit" class="btn btn-info">Edit</a></td>
                                            <td><a href="" class="btn btn-danger">Delete</a></td>
                                           
                                            
                                            
                                        </tr>
                                            
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@stop