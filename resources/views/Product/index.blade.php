@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Product') }}
                    </div>
                    <div class="float-end">
                            @csrf
                            <a href="{{ route('product.create') }}" class="btn btn-sm btn-outline-primary">Tambah
                                Data</a>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name product</th>
                                    <th>Stok</th>
                                    <th>Price</th>
                                    <th>deskription</th>
                                    <th>Nama brand</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($product as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->name_product }}</td>
                                    <td>{{ $data->stok }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{ $data->deskription }}</td>
                                    <td>{{ $data->brand->id_brand}}</td>
                                    <td>
                                        <form action="{{ route('product.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('product.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-dark">Show</a> |
                                            <a href="{{ route('product.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">Edit</a> |
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                             class="btn btn-sm btn-outline-danger">Delete</button> |
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection