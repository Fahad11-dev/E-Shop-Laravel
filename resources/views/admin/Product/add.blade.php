@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="p-1 form-select" name="category_id">
                            @foreach ($category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Product Title</label>
                        <input type="text" class="p-1 form-control border border-secondary" name="product_title" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="p-1 form-control border border-secondary" name="price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Stock</label>
                        <input type="text" name="stock" class="p-1 form-control border border-secondary">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Upload Product Image</label>
                        <input type="file" class="p-1 form-control border border-secondary" name="image" required>
                    </div>

                    <div class="col-md-12 mb-3">
                       <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
