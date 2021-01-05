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
            <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Barang</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select name="category_id" required class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="selling_price">Harga Jual</label>
                <input class="form-control" type="number" name="selling_price" placeholder="Rp." value="{{ old('selling_price') }}">
            </div>
            <div class="form-group">
                <label for="purchase_price">Harga Beli</label>
                <input class="form-control" type="number" name="purchase_price" placeholder="Rp." value="{{ old('purchase_price') }}">
            </div>
            <div class="form-group">
                <label for="stock">Qty</label>
                <input class="form-control" type="number" name="stock" placeholder="0" value="{{ old('stock') }}">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" rows="10" class="d-block w-100 form-control">{{ old('description') }}</textarea>
            <div/>
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
