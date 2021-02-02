<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ URL::to('/') }}">
    <title>Unidev Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <a class="nav-link {{ (request()->segment(1) === 'product') ? 'active' : '' }}" href="{{ route('product.index') }}">Produtos</a>
                    <a class="nav-link {{ (request()->segment(1) === 'user') ? 'active' : '' }}" href="{{route('user.index')}}">Usuarios</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="#"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </div>
                <span class="navbar-text text-light">
                    Bem-vindo: {{ auth()->user()->name }}
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md">

                @yield('main')

            </div>
        </div>
    </div>

    <form id="delete_form" action="" method="post">

        @csrf
        @method('delete')

    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>

        const order_by = document.querySelector('#order_by');

        if(order_by)
            order_by.value = "{{ request()->get('order_by') }}";

        function deleteInDatabase(path) {
            if(confirm('Você tem certeza que seja remover este registro?')) {
                const deleteForm = document.querySelector('#delete_form');
                deleteForm.action = path;

                deleteForm.submit();
            }
        }

    </script>

</body>
</html>
