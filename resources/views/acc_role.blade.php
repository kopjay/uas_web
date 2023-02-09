@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('account_maintenance/role/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="{{$account->id}}">


        <div class="row justify-content-center">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 px-5">
                                <h4 style="margin-top: 20px;">{{$account->first_name}} {{$account->last_name}}</h4>
                                <label for="exampleInputEmail1" class="form-label mt-3" style="text-align:left">Role</label>
                                <select class="form-select" name="role_id">
                                    <option value="1" {{ ($account->role_id == 1)? "selected" : ""}}>User</option>
                                    <option value="2" {{ ($account->role_id == 2)? "selected" : ""}}>Admin</option>
                                </select>
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