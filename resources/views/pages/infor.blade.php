@extends('layout')
@section('content')
<!--product-detail-->
<!-- <div class="container">
    <div class="detai-prod">
        <div class="col-lg-8">
            <?php //$infor=session('acc');
            //foreach ($infor as $key => $value) {
                # code...
            
            ?>
            <div class="" ><?php //echo $key.": ".$value;?> </div>
            <br>

            <?php
            //}
            ?>
        </div>
    </div>
</div> -->

<link href="{{asset('public/Frontend/css2/main.css')}}" rel="stylesheet">

<section id="cart_items">
    <div class="container">
        <div id="form-deli">
            <div class="row">
                <div class="col-sm-12">
                    <h2>CUSTOMER INFO</h2>
                    <hr>
                    <div class="bill-to">
                        <div class="form-one">
                            <form action="{{URL::to('/trang-chu')}}">
                                <input type="text" name="account-email" value="{{session('acc')->acc_email}}"
                                    placeholder="Email(*)" required>
                                <input type="text" name="account-name" value="{{session('acc')->acc_name}}"
                                    placeholder="Your name(*)" required>
                                <input type="text" name="account-phone" value="{{session('acc')->acc_contact}}"
                                    placeholder="Phone number(*)" required>
                                <hr>
                                <input type="submit" value="Confirm" name="update_qty" class="btn btn-sm">
                            </form>
                        </div>
                        <div class="form-two">
                            <h4>Shopping history</h4>
                            <?php
                            print_r(dd(session()->all()));

                           ?>
                            <!-- <img src="{{('public/Frontend/image/avt.jpg')}}" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
@endsection