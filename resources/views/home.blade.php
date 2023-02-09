@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($item as $data)
        <div class="col-md-2">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/1.png')}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">{{$data->item_name}}</p>
                  <p style="text-align: center">
                    <a href="{{url('detail/'.$data->id)}}">Detail</a>
                </p>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection
{{-- <div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>
</div> --}}