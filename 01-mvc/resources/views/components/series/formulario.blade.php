<form action="{{ $action }}" method="post">
    @csrf
    @isset($series)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome"
        @isset($series) value="{{ $series->nome }}" @endisset>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
