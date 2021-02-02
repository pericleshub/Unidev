@extends('layout.template')
@section('main')

    <div class="row">
        <div class="col-md d-flex justify-content-between align-items-center">
            <h1>Atualização de produtos</h1>
            <a href="{{ route('product.index') }}" class="btn btn-primary">Voltar para a listagem</a>
        </div>
    </div>

    @include('layout.messages')

    <form action="{{ route('product.update', $product->id) }}" method="post">

        @csrf
        @method('put')

        @include('products.partials.form')

    </form>

@endsection
