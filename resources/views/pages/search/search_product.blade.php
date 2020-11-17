@extends('layout')
@section('content')

<section id="introduce" class="section-padding">
    <div class="container text-center">
    <h2 class="title">Search result</h2>
    <hr>
        <div class="row">
            @foreach($search_product as $key => $product)
            <div class="col-lg-3">
                <div class="item">
                    <figure>
                        <img src=" {{URL::TO('public/upload/product/'.$product->thumbnail)}}">
                        
                        <figcaption class="caption">
                            <h3>{{$product->prod_name}}</h3>
                            <p>{{$product->prod_desc}}</p>
                            <p class="product-price">{{$product->prod_price}}</p>
                        </figcaption>
                        <a href="{{URL::TO('/detail/'.$product->prod_id)}}" class="btn-WN">Watch now</a>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection