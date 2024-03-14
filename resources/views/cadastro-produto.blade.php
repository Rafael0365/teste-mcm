@extends('layout.principal')
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif
    @if (@empty($produto))
        <form action="{{route('produto.insere')}}" method="POST">
            @csrf
            <label class="form-label"> Descrição</label>
            <input class="form-control" type="text" name="descricao" maxlength="50" value="">
            <br>
            <label class="form-label"> Categoria </label>
            <input class="form-control" type="text" name="categoria" maxlength="50" value="">
            <br>
            <label class="form-label"> Preço </label>
            <input class="form-control" type="text" name="preco" maxlength="50" value="">
            <br>
            <label class="form-label"> Quantidade em estoque </label>
            <input class="form-control" type="number" name="qtd" maxlength="50" value="">
            <br>
            <button class="btn btn-primary" type="submit"> Salvar </button>
    @else
        <form action="{{route('produto.edicao', ['id'=>$produto->id])}}" method="POST">
            @csrf
            <label class="form-label"> Descrição</label>
            <input class="form-control"    type="text" name="descricao" maxlength="50" value="{{$produto->descricao}}">
            <br>
            <label class="form-label"> Categoria </label>
            <input class="form-control" type="text" name="categoria" maxlength="50" value="{{$produto->categoria}}">
            <br>
            <label class="form-label"> Preço </label>
            <input class="form-control" type="text" name="preco" maxlength="50" value="{{$produto->preco}}">
            <br>
            <label class="form-label"> Quantidade em estoque </label>
            <input class="form-control" type="number" name="qtd" maxlength="50" value="{{$produto->qtd}}">
            <br>
            <button class="btn btn-primary" type="submit"> Editar </button>
            <a class="btn btn-secondary" href="{{route('produto.lista')}}">Cancelar</a>
    @endif
    </form>
    @if (!empty($produto))
    <form action="{{route('produto.exclusao', ['id'=>$produto->id])}}" method="POST">
        @csrf
        <button class="btn btn-danger" type="submit"> Excluir </button>
    </form>
    @endif
@endsection