@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('addcart')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
        
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset('images/1.png')}}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="item_id" value="{{$item->id}}">
                    <input type="hidden" name="price" value="{{$item->price}}">

                    <p><b>Price : Rp. {{$item->price}},-</b></p>
                    <p>{{$item->item_desc}}</p>
                    <button type="submit" class="btn btn-success">Buy</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection