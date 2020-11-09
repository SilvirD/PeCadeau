@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            {{-- Add Category --}}
                            Add Product
                        </header>
                        <?php 
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::TO('/save-category-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category name</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea style="resize: none;" rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Display</label>   
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Show</option>
                                        <option value="1">Hidden</option>
                                    </select>
                                </div>
                               {{--  <div class="form-group">
                                    <label for="exampleInputEmail1">Product ID:</label>
                                    <input type="number" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product name:</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity:</label>
                                    <input type="number" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Price:</label>
                                    <input type="number" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product number:</label>
                                    <input type="number" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Author ID:</label>
                                   <select name="category_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">---</option>
                                        <option value="1">Vũ Phong</option>
                                        <option value="2">Cô Độc</option>
                                        <option value="3">Địa Phi</option>
                                        <option value="4">Thiên Tàm Thổ Đậu</option>
                                        <option value="5">Nhĩ Căn</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Publisher ID:</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">---</option>
                                        <option value="1">Bạch Ngọc Sách</option>
                                        <option value="2">Văn Đàn</option>
                                        <option value="3">Phong Nguyệt Lâu</option>
                                        <option value="4">Vong Ngữ</option>
                                        <option value="5">Tàng Thư Viện</option>
                                    </select>
                                </div> --}}
                                </div>
                                <button type="submit" class="btn btn-info">Add</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
</div>
@endsection