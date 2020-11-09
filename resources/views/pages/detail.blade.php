@extends('layout')
@section('content')
<!--product-detail-->
<div class="container">
    <div class="row">
        <div class="col-lg-6 text-center">
            <div class="image-detail">
                <figure>
                    @foreach($product as $key => $value1)
                    <img class="img-thumb" src=" {{URL::TO('public/upload/product/'.$value1->thumbnail)}}">
                    <figcaption>
                        @foreach($product_image as $key => $value)
                        @if($value1->prod_id == $value->prod_id)
                        <div class="grid-album">
                            <div class="grid-item"><img class="img-detail"
                                    src=" {{URL::TO('public/upload/product/'.$value->image_name)}}"> </div>
                            @endif
                            @endforeach
                        </div>
                        @endforeach
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="item-infor">
                <form action="{{URL::to('/save-cart')}}" method="POST">
                    {{  csrf_field() }}
                    <h2>{{$product[0]->prod_name}}</h2>
                    <p>Describe: <b>{{$product[0]->prod_desc}}</b></p>
                    <hr>
                    <p>Price: <b>{{$product[0]->prod_price}}</b> </p>
                    <hr>
                    <label for="exampleInputEmail1">Quantity: </label>
                    <input type="number" name="prod_qty" class="prod_quantity" min="1" value="1">
                    <input type="hidden" name="prodid_hidden" value="{{$product[0]->prod_id}}">
                    <hr>
                    <p>Status: <b>
                            @if($product[0]->prod_quantity > 0)
                            <?php echo "Còn hàng" ?>
                            @else
                            <?php echo "Hết hàng" ?>
                            @endif
                        </b></p>
                    <hr>
                    <button type="submit" class="btn-WN">
                        <i class="fa fa-shopping-cart"></i> Add to cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection