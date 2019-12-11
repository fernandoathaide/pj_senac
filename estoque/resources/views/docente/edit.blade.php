@extends('home')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Edit Share
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('docente.update', $docente->id_docente) }}">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="docente_nome" value={{ $docente->nome }} />
          </div>
          <div class="form-group">
            <label for="matricula">Matricula:</label>
            <input type="text" class="form-control" name="docente_matricula" value={{str_pad($docente->matricula,5,"0",STR_PAD_LEFT)}} />
          </div>
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
  </div>


@endsection

