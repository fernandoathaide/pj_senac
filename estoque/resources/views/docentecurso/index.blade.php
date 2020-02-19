@extends('home')
@section('title', 'Docente Curso')
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
    <a href="{{ route('docentecurso.create')}}" class="btn btn-primary">NOVO CURSO</a>
    <table class="table table-striped table-bordered">
      <thead>
          <tr style="text-align: center !important;">
            <th>ID</th>
            <th>DATA INÍCIO</th>
            <th>DATA FIM</th>
          </tr>
      </thead>
        <tbody>
            @foreach($docentecursos as $docentecurso)
            <tr>
                <th style="text-align: center !important;">{{$docentecurso->fk_id_curso}}</th>
                <td>{{$docentecurso->dt_inicio}}</td>
                <td>{{$docentecurso->dt_fim}}</td>

                <td><a href="{{ route('docentecurso.edit',$docentecurso->fk_id_curso)}}" class="btn btn-primary btn-block">Alterar</a></td>
                <td>
                    <form action="{{ route('docentecurso.destroy', $docentecurso->fk_id_docente)}}" method="post">
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
