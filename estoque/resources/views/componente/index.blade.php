@extends('home')
@section('title', 'Página componentes')
@section('content')
<style>
    .uper {
          margin-top: 40px;
        }
        .table, table tr, table tr td, table th{
            border: 5px solid #dee2e6 !important;
        }
        .btn-danger {
            color: #fff;
            background-color: #f29400;
            border-color: #f29400;
        }
        .btn-danger:hover {
            color: #fff;
            background-color: #FF4500;
            border-color: #FF4500;
        }
        .btn-primary {
            color: #fff;
            background-color: #004687;
            border-color: #004687;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #000080;
            border-color: #000080;
        }

  </style>

  <div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <a href="{{ route('componente.create')}}" class="btn btn-primary">NOVO componente</a>
    <table class="table table-striped table-bordered">
      <thead>
          <tr style="text-align: center !important;">
            <th>ID</th>
            <th>NOME componente</th>
            <th>DESCRIÇÃO</th>
            <th>QUANTIDADE DE ALUNOS</th>
            <th>DATA INÍCIO</th>
            <th>DATA FIM</th>
            <th>CARGA HORÁRIA</th>
            <th colspan="2">AÇÃO</th>
          </tr>
      </thead>
        <tbody>
            @foreach($componentes as $componente)
            <tr>
                <th style="text-align: center !important;">{{$componente->id_componente}}</th>
                <td>{{$componente->no_componente}}</td>
                <td>{{$componente->descricao}}</td>
                <td>{{$componente->qt_alunos}}</td>
                <td>{{$componente->dt_inicio}}</td>
                <td>{{$componente->dt_fim}}</td>
                <td>{{$componente->qt_horas_componente}}</td>

                <td><a href="{{ route('componente.edit',$componente->id_componente)}}" class="btn btn-primary btn-block">Alterar</a></td>
                <td>
                    <form action="{{ route('componente.destroy', $componente->id_componente)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-block" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  <div>
@endsection
