@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
        
            <div class="col-md-8">
                <div class="card">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Account</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($account as $data)
                            <tr>
                                <th scope="row">{{$data->first_name}} {{$data->last_name}}</th>
                                <td>
                                    <a href="{{url('account_maintenance/role/'.$data->id)}}" class="btn btn-primary btn-sm" style="float: left;">Update Role</a>
                                    <form action="{{url('account/delete/'.$data->id)}}" method="POST" style="width: 100px; float: left;">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm" style="margin-left:5px;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
@endsection