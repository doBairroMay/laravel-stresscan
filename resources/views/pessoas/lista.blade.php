@extends('layouts.funcionarios')
@section('content')
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
                        <td><a href="cadusuarios.html">Funcionários</a></td>
                      </tr>
                      <tr>
                        <td><a href="cadclientes.html" <="" a="">Clientes</a></td>
                      </tr>
                      <tr>
                        <td><a href="cadfornecedores.html"></a>Fornecedores</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection