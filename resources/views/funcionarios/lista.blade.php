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
            {{ $funcionario }}
        </div>

     </div>
    </div>
  </div>
</div>
@stop