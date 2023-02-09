@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('profile/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="{{Auth::user()->id}}">


        <div class="row justify-content-center">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="card-img-top" src="{{asset('display_picture/'.Auth::user()->display_picture_link.'')}}" alt="Card image cap">
                        </div>
                        <div class="col-md-4">
                            <div class="px-5">
                                <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">FirstName</label>
                                <input type="text" name="first_name" class="form-control" value="{{Auth::user()->first_name}}">
                            </div>
    
                            <div class="mb-3 px-5">
                                <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Email</label>
                                <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                            </div>
    
                            <div class="mb-3 px-5">
                                <label for="exampleInputPassword1" class="form-label text-start">Gender</label> <br>
                                <span><input type="radio" name="gender_id" id="gender_id" value="1" {{ (Auth::user()->gender_id == 1) ? 'checked' : '' }}> Male</span>
                                <span><input type="radio" name="gender_id" id="gender_id" value="2" {{ (Auth::user()->gender_id == 2) ? 'checked' : '' }}> Female</span>
                            </div>
                            <br>
                            <div class="mb-3 px-5">
                                <label for="exampleInputPassword1" class="form-label text-start">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="px-5">
                                <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="{{Auth::user()->last_name}}">
                            </div>
    
                            <div class="mb-3 px-5">
                                <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Role</label>
                                <input type="text" name="role" class="form-control" value="{{Auth::user()->role->role_name}}" disabled readonly>
                            </div>
    
                            <div class="mb-3 px-5">
                                <label for="exampleInputPassword1" class="form-label text-start">Display Picture</label> <br>
                                <input id="display_picture_link" type="file" class="form-control" name="display_picture_link">
                            </div>
    
                            <div class="mb-3 px-5">
                                <label for="exampleInputPassword1" class="form-label text-start">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <br>
                                <button type="submit" class="btn btn-primary" style="width: 100px;">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection