<div class="row mt-5">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="name" class="form-label">Nome do usuário</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="name" class="form-label">Email do usuário</label>
            <input type="email" class="form-control" id="email" name="email"  value="{{ $user->email ?? '' }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="name" class="form-label">Senha do usuário</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    </div>


</div>
<div class="row">
    <div class="col-md">
        <hr>
        <button type="submit" class="btn btn-success">Registrar Usuário</button>
    </div>
</div>
