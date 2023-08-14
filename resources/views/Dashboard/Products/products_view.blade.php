@extends('Dashboard.layouts.dashboard')
@section('dashboard_connect')
    <div class="container">
        <div class="card card-body mt-5">
            <div class="d-flex justify-content-center mt-2 mb-5">
                <h1>
                    Products View
                </h1>
            </div>
            <div class="row">
                <div class="datatable-container">
                    <table id="datatablesSimple" class="datatable-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>update At</th>

                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                        
                                <tr data-index="0">
                                    <td>{{ $product->id }}</td>
                                    @if($product->category)
                                    <td>{{ $product->category->name }}</td>
                                    @else 
                                    <td class="text-danger"> Category not found</td>
                                    @endif
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->sale_price }}</td>
                                    <td>
                                        <img style="width: 50px; height:50px;"
                                            src="{{ Storage::url($product->image) }}"alt="">
                                    </td>

                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-success">Edit</a>
                                        
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                    
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
