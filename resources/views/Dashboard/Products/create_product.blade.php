@extends('Dashboard.layouts.dashboard')
@section('dashboard_connect')
    <div class="container mt-5">
        <div class="d-flex justify-content-center mb-5">
            <h2>Create Product</h2>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('products_view') }}">
                            <button class="btn btn-success" type="text">Back</button>
                        </a>
                    </div>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Id</label>
                            <select name="category" id="" class="form-control">
                                @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              
                               </select>

                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Products Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputText"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" id="exampleInputdecimal">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Sale Price</label>
                            <input type="text" class="form-control" name="sale_price" id="exampleInputdecimal">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
