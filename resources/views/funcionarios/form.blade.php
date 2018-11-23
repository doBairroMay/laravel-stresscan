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
          {!!Form::open()!!}

          {!!Form::label('nome','Nome')!!}  

          {!!Form::input('text','nome','',['class'=> 'form-control','autofocus'])!!}

          {!!Form::input('text','nome','',['class'=> 'form-control','autofocus', 'placeholder'=> 'Endereço'])!!}
          {!!Form::close()!!}
        </div>

     </div>
    </div>
  </div>
</div>
@endsection