@extends('layouts.app')

@section('content')
<div class="container spark-screen">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel-heading">
			  Informações do Cliente
        <a class="pull-right" href="{{ url('clientes') }}"> Listagem de Clientes</a>
       </div>
        <div class="panel-body">
          {!!Form::open(['url'=>'funcionarios/salvar','method' => 'patch'])!!}

          {!!Form::label('nome','Nome')!!} 
          {!!Form::input('text','nome','',['class'=> 'form-control','autofocus'])!!}

          {!!Form::label('endereco','Endereço')!!} 
          {!!Form::input('text','endereco','',['class'=> 'form-control','autofocus', 'placeholder'=> 'Endereço'])!!}

          {!!Form::label('email','Email')!!} 
          {!!Form::input('email','email','',['class'=> 'form-control','autofocus', 'placeholder'=> 'Email'])!!}

          {!!Form::label('cpf','CPF')!!} 
          {!!Form::input('text','descricao','',['class'=> 'form-control','autofocus', 'placeholder'=> 'CPF'])!!}
          <br>
          {!!Form::submit('Salvar',['class'=> 'btn btn-primary'])!!} 

          {!!Form::close()!!}
        </div>

     </div>
    </div>
  </div>
</div>
@endsection