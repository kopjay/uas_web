@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($item as $data)
        <div class="col-md-2" style="margin-bottom: 10px;">
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
    <br>
    <div class="d-flex">
        <div class="mx-auto">
        {{ $item->links() }}
        </div>
    </div>
</div>
@endsection