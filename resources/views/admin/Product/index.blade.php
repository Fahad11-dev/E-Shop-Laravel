@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h1>Product Page</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>

                <tbody>
                    @foreach ($product as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="" height="65"></td>
                            <td>{{ $product->product_title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <a href="{{ url('edit-product/'.$product->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-product/'.$product->id) }}" class="btn btn-danger">Del</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                </thead>

            </table>
        </div>
    </div>
@endsection
