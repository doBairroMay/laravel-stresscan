@extends('layouts.app')

@section('content')
<div class="container spark-screen">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel-heading">
			  Informações do Funcionário
            <a class="pull-right" href="{{ url('funcionarios/novo') }}">Novo Funcionário</a>
            </div>
            <div class="panel-body">                   
                    <table class="table">
                    <th> Nome</th>
                    <th> Endereço </th>
                    <th> Cidade </th>
                    <th> Pais </th>
                    <th> CEP </th>
                    <th> CPF </th>
                    <th>Email </th>
                    <th>Ações</th>
                    <tbody>
                    @foreach($func as $f)
                        <tr>
                            <td>{{ $f->nome }}</td>
                            <td>{{ $f->endereco }}</td>
                            <td>{{ $f->cidade }}</td>
                            <td>{{ $f->pais }}</td>
                            <td>{{ $f->cep }}</td>
                            <td>{{ $f->cpf }}</td>
                            <td>{{ $f->email }}</td>
                            <td>
                                <a href="funcionarios/{{$f->id}}/editar" class="btn btn-default btn-sm"> Editar</a>
                                {!!Form::open($f, ['method'=>'DELETE','url'=>'funcionarios/'.$f->id, 'style'=>'display:inline;'])!!}
                                <button type="submit" class="btn btn-sm">Excluir</button>
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
        </div>

     </div>
    </div>
  </div>
</div>
@stop