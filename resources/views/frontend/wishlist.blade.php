@extends('frontendtemplate')

@section('nav')
    @include('frontend.nav')
@endsection

@section('content')
	<div class="container my-5">
        <h1 class="py-3 text-center">Your WishList</h1>
        <div class="row">
            <?php 
                if($Items->isEmpty()) { ?>

                <h4>Sorry, Product Not Found!</h4>

            <?php }else { ?>

            @foreach($Items as $item)
            <div class="col-md-4 my-2">
                <div class="text-center">
                    <a href="{{'itemdetail',$item->id}}">
                        <img src="{{asset($item->photo1)}}" class="" width="200" height="200">
                    </a>
                    <h2>{{$item->price}}</h2>
                    <p>
                        <a href="{{'itemdetail',$item->id}}">
                            {{$item->name}}
                        </a>
                    </p>
                    <button class="btn btn-info cart" data-cid="{{$item->id}}" data-cname="{{$item->name}}" data-cphoto="{{$item->photo1}}" data-cprice="{{$item->price}}" data-cdiscount="{{$item->discount}}">Add To Cart</button>
                </div>
            </div>
            @endforeach

            <?php } ?>
        </div>    
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection
