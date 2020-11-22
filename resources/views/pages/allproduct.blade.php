@extends('layout')
@section('content')

<section id="introduce" class="section-padding">
    <div class="container text-center">
        <h2 class="title" style="color: lightcoral;">ALL PRODUCT</h2>
        <p class="sub-title" style="color: lightcoral;">----------</p>
        <div class="row">
            @foreach($product as $key => $value)
            <div class="col-lg-3">
                <div class="item">
                    <figure>  
                        <img src="{{('public/Upload/product/'.$value->thumbnail)}}" alt="">
                        <figcaption>
                            <h3>{{$value->prod_name}}</h3>
                            <!-- <p>{{$value->prod_desc}}</p> -->
                            <p class="product-price">{{number_format($value->prod_price)}} VND</p>
                            <a href="{{URL::TO('/detail/'.$value->prod_id)}}" class="btn-WN">Watch now</a>
                        </figcaption>
                        <br>
                            <form action="{{URL::to('/save-cart')}}" method="POST">
                        {{ csrf_field() }}
                            <input type="hidden" name="prodid_hidden" value="{{$value->prod_id}}">
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
        <br>
        {!! $product->links()  !!}
    </div>
</section>
@endsection