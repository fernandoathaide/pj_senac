@extends('home')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .row {
    margin-left:0px !important;
  }
  .input_row{
    margin-left: 1rem;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Curso.
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
      <form method="post" action="{{ route('curso.store') }}">
            <div class="form-group">
                @csrf
                <label for="nome">Nome do Curso:</label>
                <input type="text" class="form-control" name="curso_nome"/>
            </div>
            <div class="form-group">
                @csrf
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" name="curso_descricao" rows="5"></textarea>
            </div>

                <div class="row">
                    <div class="form-group">
                        @csrf
                        <label for="qt_alunos">Quantidade de Alunos:</label>
                        <input type="text" class="form-control" name="curso_qt_alunos"/>
                    </div>
                    <div class="form-group input_row">
                        @csrf
                        <label>Data de Início:</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" im-insert="false" name="curso_dt_inicio" />
                        </div>
                    </div>
                    <div class="form-group input_row">
                        @csrf
                        <label>Data de Fim:</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" im-insert="false" name="curso_dt_fim" />
                        </div>
                    </div>
                    <div class="form-group input_row">
                        @csrf
                        <label for="carga_horaria">Carga Horária:</label>
                        <input type="text" class="form-control" name="curso_carga_horaria"/>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>

@endsection
