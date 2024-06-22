@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row-justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('product') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('product.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <hr>
                    <h4>{{ $product->name_product }}</h4>
                    <p class="tmt-3">
                        Harga : Rp.{{ number_format($product->price, 2) }}
                    </p>
                    <p class="tmt-3">
                        {!! $product->deskription !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection