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
      <form method="post" action="{{ route('docentecurso.store') }}">
        <div class="form-group">
            @csrf
            <label for="nome">Data de Inicio:</label>
            <input type="date" class="form-control" name="data inicio"/>
        </div>
        <div class="form-group">
            @csrf
            <label for="matricula">Data de Término:</label>
            <input type="date" class="form-control" name="data fim"/>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
  </div>
</div>
@endsection
