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
        @if(Session::has('mensagem_sucesso'))
          <div class="alert alert-success">
        @endif
          {{Session::get('mensagem_sucesso')}}
          </div>
        
          @if(Request::is('*/editar'))
            {!!Form::model($f, ['method'=>'PATCH','url'=>'funcionarios/atualizar'.$f->id/editar])!!}
          @else
            {!!Form::open(['url'=>'funcionarios/salvar'])!!}
          @endif         

          {!!Form::label('nome','Nome')!!} 
          {!!Form::input('text','nome',null,['class'=> 'form-control','autofocus'])!!}

          {!!Form::label('nomeusuario','Nome de Usuário')!!} 
          {!!Form::input('text','nomeusuario',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'Endereço'])!!}

          {!!Form::label('endereco','Endereço')!!} 
          {!!Form::input('text','endereco',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'Endereço'])!!}

          {!!Form::label('cidade','Cidade')!!} 
          {!!Form::input('text','cidade',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'Cidade'])!!}

          {!!Form::label('pais','Pais')!!} 
          {!!Form::input('text','pais',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'Pais'])!!}

          {!!Form::label('cep','CEP')!!} 
          {!!Form::input('text','pais',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'CEP'])!!}

          {!!Form::label('endereco','Endereço')!!} 
          {!!Form::input('text','endereco',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'Endereço'])!!}

          {!!Form::label('email','Email')!!} 
          {!!Form::input('email','email',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'Email'])!!}

          {!!Form::label('cpf','CPF')!!} 
          {!!Form::input('text','descricao',null,['class'=> 'form-control','autofocus', 'placeholder'=> 'CPF'])!!}
          <br>
          {!!Form::submit('Salvar',['class'=> 'btn btn-primary'])!!} 

          {!!Form::close()!!}
        </div>

     </div>
    </div>
  </div>
</div>
@endsection