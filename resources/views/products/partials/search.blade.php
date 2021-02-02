<div class="row">
    <div class="col-md mb-5">

        <h3 class="mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Filtros de busca</h3>

        <div class="collapse show" id="collapseExample">
            <div class="card card-body">

                <form class="row">

                    <input type="hidden" name="action" value="search">

                    <div class="col-md-3">
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Nome do produto" value="{{ request()->get('keyword') }}">
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" class="form-control" id="price_from" name="price_from" placeholder="Preço de" value="{{ request()->get('price_from') }}">
                            <div class="mx-2">Até</div>
                            <input type="text" class="form-control" id="price_to" name="price_to" placeholder="Preço até" value="{{ request()->get('price_to') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="order_by" name="order_by">
                            <option value="">Ordernar por...</option>
                            <option value="newest">Mais recentes</option>
                            <option value="older">Mais antigos</option>
                            <option value="price_desc">Maior preço</option>
                            <option value="price_asc">Menor preço</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                        <a class="btn btn-warning" href="{{ route('product.index') }}">Limpar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
