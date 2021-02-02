@extends('layout.template')
@section('main')

    @include('users.search')

    <h1>Lista de Usuários</h1>
    <div class="table-responsive">
        <table class="table table-striped mt-5">

            <tr>
                <th>Id</th>
                <th>Nome do Usuário</th>
                <th>Email do Usuário</th>
                <th>Data de Criação</th>
            </tr>



            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }} </td>
                <td>{{ $user->name }} </td>
                <td>{{ $user->email }} </td>
                <td>{{ $user->created_at->format('d/m/Y') }} </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="mt-5">
        {{ $users->appends([
            'keyword' => request('keyword'),
            'created_at' => request('created_at'),
            'order_by' => request('order_by')
        ])->links() }}
    </div>

@endsection
