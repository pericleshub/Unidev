@extends('layout.template')
@section('main')

    <div class="row">
        <div class="col-md d-flex justify-content-between align-items-center">
            <h1>Atualização de produtos</h1>
            <a href="{{ route('user.index') }}" class="btn btn-primary">Voltar para a listagem</a>
        </div>
    </div>

    @include('layout.messages')

    <form action="{{ route('user.update', $user->id) }}" method="post">

        @csrf
        @method('put')

        @include('users.form')

    </form>

@endsection
