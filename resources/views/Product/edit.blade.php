@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Editt Barang') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama product</label>
                            <input type="text" class="form-control @error('nama_product') is-invalid @enderror" name="nama_product"
                                value="{{ $product->nama_product }}" placeholder="product Name" required>
                            @error('nama_product')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ old('stok') }}" placeholder="stok" required>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                                value="{{ $product->price }}" placeholder="price" required>
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskription</label>
                            <textarea class="form-control" class="form-control @error('deskription') is-invalid @enderror"
                                name="deskription" rows="3" placeholder="deskirpsi"
                                required>{{ $product->deskription }}</textarea>
                            @error('deskirpsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Brand</label>
                            <select name="id_brand" id="" class="form-control">
                                @foreach ($brand as $item)
                                    <option value="{{$item->id}}">{{ $item->name_brand }}</option>
                                @endforeach
                            </select>
                        </div>
                       
                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection