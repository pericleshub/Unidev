@extends('layout.template')
@section('main')

    @include('products.partials.search')

    <div class="row">
        <div class="col-md d-flex justify-content-between align-items-center">
            <h1>Listagem de produtos</h1>
            <a href="{{ route('product.create') }}" class="btn btn-success btn-unidev">Cadastrar novo</a>
        </div>
    </div>

    @include('layout.messages')

    <div class="table-responsive">
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Validade</th>
                <th scope="col">Fabricação</th>
                <th scope="col" width="150"></th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price_formated }}</td>
                <td>{{ $product->provider->name }}</td>
                <td>{{ $product->expiration_date->format('d/m/Y') }}</td>
                <td>{{ $product->manufacturing_date->format('d/m/Y') }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('product.edit', $product->id) }}">Editar</a>
                    <a class="btn btn-danger btn-sm" onclick="deleteInDatabase('{{ route('product.destroy', $product->id) }}')">Excluir</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        {{ $products->appends([
            'action' => request('action'),
            'keyword' => request('keyword'),
            'price_from' => request('price_from'),
            'price_to' => request('price_to'),
            'order_by' => request('order_by')
        ])->links() }}
    </div>

@endsection
