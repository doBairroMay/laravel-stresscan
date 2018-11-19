@extends('layouts.funcionarios')

@section('content')
<div data-brackets-id="16180" class="content">  

<div data-brackets-id="16237" class="row">
  <div data-brackets-id="16238" class="col-md-12">
                {!!  Form::open() !!}
                {!! Form::text('username') !!}             
                {!! Form::close() !!}
<div class="container-fluid">
          <div class="row">            
            <div class=" col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Gerência e Controle</h4>
                  <p class="card-category">Lista de itens que podem ser alterados pelo sistema</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td><a href="{{ url('/funcionarios') }}">Funcionários</a></td>
                      </tr>
                      <tr>
                      <td><a href="{{ url('/clientes') }}">Clientes</a></td>
                      </tr>
                      <tr>
                      <td><a href="{{ url('/terceiros') }}">Terceiros</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>                         
          
        </div>
      
          </div>
          
          <div data-brackets-id="16245" class="clearfix"></div>
        
      </div>
@endsection
