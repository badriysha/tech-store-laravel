@extends('admin.layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-primary btn-block" type="submit">
                    Submit
                </button>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
