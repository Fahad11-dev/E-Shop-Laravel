{{-- dd() --}}
@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-categories') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <input type="text" value="{{ $category->name }}" class="p-1 form-control border border-secondary" name="name" >
                    </div>
                    <div class="col-md-12 mb-3">
                       <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
