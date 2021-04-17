@extends('admin/layout')
@section('title','users')
@section('dashboard')
@if(session('message')!=null)
<div class="col-md-12"><div class="alert alert-success" >{{session('message')}}</div></div>
@endif
<div class="col-md-12">
      <div class="overview-wrap">
        <h2 class="title-1">Users info</h2>
          <a href="{{url('admin/users/add')}}"> <button class="au-btn au-btn-icon au-btn--blue">
    <i class="zmdi zmdi-plus"></i>add user</button></a> 
                                </div>
</div>




                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-border table-data3">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>mobile</th>
                                                <th>img</th>
                                                <th>D.O.B</th>
                                                

                                                <th>action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                   @foreach($data as $list)
                                            <tr>
                                                <td>{{$list->name}}</td>
                                                <td>{{$list->email}}</td>
                                                <td>{{$list->mobile}}</td> 
                                                 <td>
                                                    <img width="100px" src="{{asset('storage/media/'.$list->profile_img)}}">
                                                   </td>
                                                   <td>{{$list->b_date}}</td>
                                                    
                                                <td class="process">
                                                

                                                <a href="{{url('admin/users/edit/')}}/{{$list->id}}"><button class="btn btn-primary btn-sm">Edit</button></a>

                                                



                                                <a href="{{url('admin/users/delete')}}/{{$list->id}}"><button class="btn btn-danger btn-sm">Delete</button></a>	
                                                </td>
                                                
                                            </tr>
                                    @endforeach        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
@endsection