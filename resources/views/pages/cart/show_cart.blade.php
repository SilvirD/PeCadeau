@extends('layout')
@section('content')



<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">

<section id="cart_items">
    <h3>YOUR CART</h3>
    <hr>
    <div class="container">
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
                            <a href=""><img src="{{('public/Upload/product/'.$v_content->options->image)}}" alt=""
                                    width="50"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' '.'vnđ'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                    {{ csrf_field() }}

                                    <!-- <a class="cart_quantity_up" href=""> + </a> -->
                                    <input class="cart_quantity_input" type="number" name="cart_quantity"
                                        value="{{$v_content->qty}}" min="1" max="{{$product[0]->prod_quantity}}"
                                        size="2">
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
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">

        </div>
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Total: <span>{{Cart::subtotal().' '.'VND'}}</span></li>
                        <li>Tax: <span>{{Cart::tax().' '.'VND'}}</span></li>
                        <li>Shipping Cost: <span>Free</span></li>
                        <li>Total: <span>{{Cart::total().' '.'VND'}}</span></li>
                    </ul>
                    <div class="check-cart">
                        <!-- Check Cart -->
                        <?php
                        $customer_id = Session::get('acc_id');
                        if ($customer_id != NULL) {
                        ?>
                        <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Check Out</a>

                        <?php
                        } else {
                        ?>
                        <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Check Out</a>

                        <?php
                        }
                        ?>
                        <!-- end check cart -->
                    </div>
                </div>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</section>
<!--/#do_action-->



@endsection