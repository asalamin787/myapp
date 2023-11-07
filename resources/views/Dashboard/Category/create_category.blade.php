@extends('Dashboard.layouts.dashboard')
@section('dashboard_connect')
    <div class="container mt-5">
        <div class="d-flex justify-content-center mb-5">
            <h2>Create Category</h2>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('categorys_view')}}">
                            <button class="btn btn-success" type="text">Back</button>
                        </a>
                    </div>
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputText"
                                aria-describedby="emailHelp">

                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" id="exampleInputdecimal">
                        </div> --}}
                        

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
