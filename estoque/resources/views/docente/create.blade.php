@extends('home')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Docente.
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
      <form method="post" action="{{ route('docente.store') }}">
            <div class="form-group">
                @csrf
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="docente_nome"/>
            </div>
            <div class="form-group">
                @csrf
                <label for="matricula">Matricula:</label>
                <input type="text" class="form-control" name="docente_matricula"/>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>
@endsection
