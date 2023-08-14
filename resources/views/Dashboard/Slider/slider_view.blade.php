@extends('Dashboard.layouts.dashboard')
@section('dashboard_connect')
    <div class="container">
        <div class="card card-body mt-5">
            <div class="d-flex justify-content-center mt-2 mb-5">
                <h1>
                    Slider View
                </h1>
            </div>
            <div class="row">
                <div class="datatable-container">
                    <table id="datatablesSimple" class="datatable-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>update At</th>

                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr data-index="0">
                                    <td>{{ $slider->id }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->name }}</td>
                                    <td>
                                        <img style="width: 50px; height:50px;" src="{{ Storage::url($slider->image) }}"alt="">
                                    </td>

                                    <td>{{ $slider->created_at }}</td>
                                    <td>{{ $slider->updated_at }}</td>
                                    <td><a href="{{route('edit', $slider->id)}}" class="btn btn-success">Edit</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
