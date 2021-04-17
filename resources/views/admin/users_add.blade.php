@extends('admin/layout')
@section('title','users')
@section('dashboard')
<div class="container">
<div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                
                   <a href="{{url('admin/users')}}">
                      <button class="au-btn au-btn-icon au-btn--blue">
                        Back
                      </button>
                    </a>  
             </div>
        </div>
</div> 





   
     <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                   @if($data['id']!=0)
                                  <?php $pass_type="text";?>
                                   Edit User Info
                                   @else
                                  <?php $pass_type="password";?>

                                     User Registration
                                   @endif
                                    </div>
                                    <div class="card-body">
                                     
                                        <form action="{{route('user.signup')}}" method="post" enctype="multipart/form-data" >
                                            @csrf <div class="form-group">
                                            	<input type="hidden" name="id" value="{{$data['id']}}">
                                    <label>Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" value="{{$data['name']}}" placeholder="name">
                                     @error('name')
                                                <div class="alert alert-danger" >{{$message}}</div>
                                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" value="{{$data['email']}}" placeholder="Email">
                                     @error('email')
                                                <div class="alert alert-danger" >{{$message}}</div>
                                                @enderror
                                </div>


                                <div class="form-group">
                                    <label>Mobile NO.</label>
                                    <input class="au-input au-input--full" type="text" name="mobile_number" value="{{$data['mobile']}}"  placeholder="Mobile no.">
                                     @error('mobile_number')
                                                <div class="alert alert-danger" >{{$message}}</div>
                                                @enderror
                                </div>

                                   <div class="form-group">
                                    <label>Profile Picture</label>
                                    <input class="au-input au-input--full" type="file" name="profile_picture" >
                                     @error('profile_picture')
                                                <div class="alert alert-danger" >{{$message}}</div>
                                                @enderror
                                </div>

                                   <div class="form-group">
                                    <label>D.O.B</label>
                                    <input class="au-input au-input--full" type="date" name="date_of_birth" value="{{$data['b_date']}}"
                                    	
                                     placeholder="Date of Birth">
                                     @error('date_of_birth')
                                                <div class="alert alert-danger" >{{$message}}</div>
                                                @enderror
                                </div>

                    <div class="row">
                     
                        <div class="col-md-6 col-lg-6">

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="{{$pass_type}}" name="password" placeholder="Password" value="{{$data['password']}}">
                                     @error('password')
                                                <div class="alert alert-danger" >{{$message}}</div>
                                                @enderror
                                </div>
                             </div>  
                  
                      
                        <div class="col-md-6 col-lg-6">             
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input 
                                    class="au-input au-input--full"
                                   type="{{$pass_type}}" name="confirm_password"value="{{$data['password']}}" placeholder="Confirm Password">
                                     @error('confirm_password')
                                                <div class="alert alert-danger">
                                                {{$message}}
                                               </div>
                                                @enderror
                                </div>
                            </div>
                        </div> 
                                            
                                             
                        		
                                            
                                           
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                 @if($data['id']!=0) 
                                                 save updates
                                                 @else 
                                                  Add User 
                                                  @endif
                                                   
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

    
</div>
@endsection