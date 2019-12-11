@extends('home')

@section('content')

<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <td><a href="{{ route('docente.create')}}" class="btn btn-primary">NOVO DOCENTE</a></td>
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>MATRICULA</td>
            <td colspan="2">AÇÃO</td>
          </tr>
      </thead>
      <tbody>
          @foreach($docentes as $docente)
          <tr>
              <td>{{$docente->id_docente}}</td>
              <td>{{$docente->nome}}</td>
              <td>
                {{str_pad($docente->matricula,5,"0",STR_PAD_LEFT)}}
              </td>

              <td><a href="{{ route('docente.edit',$docente->id_docente)}}" class="btn btn-primary">Alterar</a></td>
              <td>
                  <form action="{{ route('docente.destroy', $docente->id_docente)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Excluir</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>


@endsection

