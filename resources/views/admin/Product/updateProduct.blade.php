{{-- dd() --}}
@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="p-1 form-select"  name="category_id">
                                <option value="{{$product->category_id}}">{{ $product->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="text" value="{{ $product->product_title }}" class="p-1 form-control border border-secondary" name="product_title">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Price</label>
                        <input type="text" value="{{ $product->price }}" class="p-1 form-control border border-secondary" name="price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Stock</label>
                        <input type="text" value="{{ $product->stock }}" class="p-1 form-control border border-secondary" name="stock">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Product Image</label>
                        <input type="file" value="{{ $product->image }}" class="p-1 form-control border border-secondary" name="stock">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
