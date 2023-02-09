@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body" style="text-align: center">
            
                <div class="alert alert-success" role="alert">
                    {{ __('Saved') }} <br>
                </div>
                <a href="{{url('/')}}">Click here to home</a>
            
        </div>
    </div>
</div>
@endsection