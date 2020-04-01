@extends('principal')

@section('pageTitle', 'Vendas')

@section('breadcrumb')
    <a href="{{ route('vendas.index') }}">Vendas</a> / Editar
@endsection

@section('conteudo')
    <div class="corpo-conteudo">
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('vendas.update', $venda->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nome">Título da venda</label>
                        <input type="text" value="{{ $venda->titulo }}" class="form-control" id="titulo" name="titulo" placeholder="Título da venda" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" class="form-control" name="descricao" rows="5" cols="50" required>{{ $venda->descricao }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" value="{{ $venda->quantidade }}" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade em estoque">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" value="{{ $venda->valor }}" class="form-control" id="valor" name="valor" placeholder="Exemplo: 1099.99">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
