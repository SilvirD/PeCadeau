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
                            <p class="product-price">{{number_format($product->prod_price)}} VND</p>
                            <a href="{{URL::TO('/detail/'.$product->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                        <br>
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="prodid_hidden" value="{{$product->prod_id}}">
                            <input type="hidden" name="prod_qty" value="1">
                            <button type="submit" class="btn-WN">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>
                        </form>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection