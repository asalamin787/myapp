@extends('Dashboard.layouts.dashboard')
@section('dashboard_connect')
<div class="container">
    <div class="card card-body mt-5">
        <div class="d-flex justify-content-center mt-2 mb-5">
            <h1>
                Categorys View
            </h1>
        </div>
        <div class="row">
            <div class="datatable-container">
                <table id="datatablesSimple" class="datatable-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            
                            <th>Created At</th>
                            <th>update At</th>

                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorys as $category)
                            <tr data-index="0">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                

                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td><a href="{{route('edit_category', $category->id)}}" class="btn btn-success">Edit</a>
                                    
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