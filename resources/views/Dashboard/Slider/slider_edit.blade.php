@extends('Dashboard.layouts.dashboard')
@section('dashboard_connect')
<div class="container mt-5">
    <div class="d-flex justify-content-center mb-5">
        <h2>Creact Slider</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{route('slider_view')}}">
                        <button class="btn btn-success" type="text">Back</button>
                    </a>
                </div>

                <form action="{{route('update',$slider)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$slider->title}}" id="exampleInputText"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$slider->name}}" id="exampleInputText">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" value="{{$slider->image}}" id="formFile">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection