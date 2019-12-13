@extends('home')
@section('title', 'Manter Docente')
@section('content')

<style>
    .uper {
      margin-top: 40px;
    }
    .table, table tr, table tr td, table th{
        border: 5px solid #dee2e6 !important;
    }
  </style>
  <div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <a href="{{ route('docente.create')}}" class="btn btn-primary">NOVO DOCENTE</a>
    <table class="table table-striped table-bordered">
      <thead>
          <tr style="text-align: center !important;">
            <th>ID</th>
            <th>NOME</th>
            <th>MATRICULA</th>
            <th colspan="2">AÇÃO</th>
          </tr>
      </thead>
      <tbody>
          @foreach($docentes as $docente)
          <tr>
              <th style="text-align: center !important;">{{$docente->id_docente}}</th>
              <td>{{$docente->nome}}</td>
              <td>
                {{str_pad($docente->matricula,5,"0",STR_PAD_LEFT)}}
              </td>

              <td><a href="{{ route('docente.edit',$docente->id_docente)}}" class="btn btn-primary btn-block">Alterar</a></td>
              <td>
                  <form action="{{ route('docente.destroy', $docente->id_docente)}}" method="post">
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

