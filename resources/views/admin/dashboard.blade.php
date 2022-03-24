@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h1>Admin</h1>
        </div>
        <div class="card-body">
            Welcome <?php echo auth()->user()->name?>
        </div>
    </div>
@endsection
