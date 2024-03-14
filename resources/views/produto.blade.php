@extends('layout.principal')
@section('conteudo')
<h2>Listagem de produtos</h2>

<a href="{{route('produto.formulario')}}"><i class="bi bi-plus-circle-fill"></i></a> 
<table class="table">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade em estoque</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->categoria }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->qtd }}</td>
                <td> <a href="{{route('produto.formulario.edit', ['id'=>$produto->id])}}"><i class="bi bi-pencil-square"></i></a></td>
                
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
