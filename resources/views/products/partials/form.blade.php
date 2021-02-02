<div class="row mt-5">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="name" class="form-label">Nome do produto</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ex.: Macarrão parafuso" value="{{ $product->name ?? '' }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="price" class="form-label">Fornecedor</label>
            <select name="provider_id" id="provider_id" class="form-select" required>
                <option value="">---</option>
                @foreach($providers as $provider)
                <option {{ (isset($product) && $provider->id === $product->provider_id) ? 'selected' : '' }} value="{{ $provider->id }}">{{ $provider->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="price" class="form-label">Preço do produto</label>
            <input type="number" class="form-control" id="price" name="price" min="0.01" step="0.01" value="{{ $product->price ?? '' }}" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="name" class="form-label">Data de Fabricação</label>
            <input type="date" class="form-control" id="manufacturing_date" name="manufacturing_date" placeholder="Ex.: Macarrão parafuso" value="{{ (isset($product) ? $product->manufacturing_date->format('Y-m-d') : '') }}" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="price" class="form-label">Data de Validade</label>
            <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ (isset($product) ? $product->expiration_date->format('Y-m-d') : '') }}" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <hr>
        <button type="submit" class="btn btn-success">Registrar produto</button>
    </div>
</div>
