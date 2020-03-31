@extends('principal')

@section('pageTitle', 'Vendas')

@section('breadcrumb', 'Vendas')

@section('conteudo')
    <div class="corpo-conteudo">
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
        <div class="card mb-4">
            <div class="card-header"><button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('vendas.create') }}';">Cadastrar Venda</button></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Adicionado</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Adicionado</th>
                            <th>Ações</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($vendas as $venda)
                        <tr>
                            <td>{{ $venda->id }}</td>
                            <td>{{ $venda->titulo }}</td>
                            <td>{{ $venda->descricao }}</td>
                            <td>{{ $venda->quantidade }}</td>
                            <td>{{ $venda->valor }}</td>
                            <td>{{ $venda->created_at }}</td>
                            <td>
                            <div class="row">
                                <div class="col-md text-center">
                                    <a href="{{ route('vendas.edit',$venda->id) }}">
                                        <span class="text-primary fa fa-edit"></span>
                                    </a>
                                </div>
                                <div class="col-md text-center">
                                    <form id="form" action="{{ route('vendas.destroy', $venda->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a onclick="this.closest('form').submit(); return false;" style="cursor: pointer">
                                            <span class="text-primary fa fa-trash"></span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
