@extends('layout')
@section('content')


<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">

@if (\Session::has('exceed'))
<div class="alert alert-danger alert-dismissable text-center">
    <button type="button" class="close" data-dismiss="alert" area-hidden="true">&times;</button> {!!
    \Session::get('exceed') !!}
</div>
@endif

<section id="cart_items">
    <div class="container">
        <div id="form-deli">
            <H3>PAYMENT</H3>
            <hr>
        </div>
    </div>

    <div class="review-payment">
        <div class="table-responsive cart_info">
            <?php
            $content = Cart::content();
            // echo '<pre>';
            // print_r($content);
            // echo '<pre>';

            ?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Description</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href="{{URL::to('/detail/'.$v_content->id)}}"><img
                                    src="{{('public/Upload/product/'.$v_content->options->image)}}" alt=""
                                    width="50"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' '.'VND'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                    {{ csrf_field() }}

                                    <!-- <a class="cart_quantity_up" href=""> + </a> -->
                                    <input class="cart_quantity_input" type="number" name="cart_quantity"
                                        value="{{$v_content->qty}}" min="1" max="{{$v_content->options->maxx}}"
                                        style="width: 50px">
                                    <!-- <a class="cart_quantity_down" href=""> - </a> -->
                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart"
                                        class="form-control">
                                    <input type="submit" value="Update" name="update_qty" class="btn-sm">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal) . ' ' . 'VND';
                                ?>

                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete"
                                href="{{URL::to('/delete-item-cart/'.$v_content->rowId)}}"><i
                                    class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <h4 style="margin:40px 0; font-size:20px; margin-left:50px">Payment option</h4>
    <form action="{{URL::to('/confirm-order')}}" method="POST">
        {{csrf_field()}}
        <div class="payment-options cart_quantity_button" style="margin-left:50px">
            <span>
                <label><input type="radio" name="payment-opt" value="1"> Direct Bank Transfer</label>
            </span>
            <span>
                <label><input type="radio" name="payment-opt" value="2"> Cash on delivery</label>
            </span>
            <input type="submit" value="CONFIRM" name="conf_order" class=" btn-sm">
        </div>
    </form>

</section>
<!--/#cart_items-->

@endsection