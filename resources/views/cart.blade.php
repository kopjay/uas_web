@extends('layouts.app')

@section('content')
<div class="container">
    <?php $price = 0; ?>
    @foreach ($order as $data)        
    <div class="row justify-content-center">
        <div class="col-md-1">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/1.png')}}" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-1">
            <p>{{$data->item->item_name}}</p>
        </div>
        <div class="col-md-1">
            <p>Rp. {{$data->item->price}}</p>
        </div>
        <div class="col-md-2">
            <p><a href="">Delete</a></p>
        </div>
    </div>
    <?php $price += $data->price; ?>
    @endforeach
    <br>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <p>
                <b>TOTAL : Rp. {{$price}},-</b>
            </p>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Checkout</button>
        </div>
    </div>
</div>
@endsection