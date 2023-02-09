@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body" style="text-align: center">
            
                <div class="alert alert-success" role="alert">
                    {{ __('Success') }} <br>
                    {{ __('We will contact you 1x24 hours') }} <br>
                </div>
                <a href="{{url('/')}}">Click here to home</a>

            
        </div>
    </div>
</div>
@endsection