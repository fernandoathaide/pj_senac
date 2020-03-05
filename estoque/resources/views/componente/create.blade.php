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
    Adicionar componente.
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
      <form method="post" action="{{ route('componente.store') }}">
            <div class="form-group">
                @csrf
                <label for="no_componente"> numero de componente:</label>
                <input type="text" class="form-control" name="componente_no_componente"/>
            </div>
                <div class="row">
                    <div class="form-group">
                        @csrf
                        <label for="discricao">Qual curso do componente</label>
                        <select class="form-control" name="componente_discricao">
                            <option value="Informatica">informatica</option>
                            <option value="Gastronomia">Gastronomia</option>
                            <option value="Cabelereiro">cabelereiro</option>
                            <option value="Segurança do trabalho">segurança do trabalho</option>
                            <option value="Culinaria">Culinaria</option>
                            <option value="Gestao de negocios">Gestao de negocios</option>
                        </select>
                    </div>

                    <div class="form-group input_row">
                        @csrf
                        <label for="qt_horas_componente">Quantidade de horas do curso:</label>
                        <input type="text" class="form-control" name="componente_qt_horas_componente"/>
                    </div>



                    <div class="form-group input_row">
                        @csrf
                        <label for="carga_horaria">Carga Horária:</label>
                        <input type="text" class="form-control" name="curso_carga_horaria"/>
                    </div>




                    <div class="form-group input_row">
                        @csrf
                        <label for="qt_alunos_mat_componente">Quantidade de alunos no curso:</label>
                        <input type="text" class="form-control" name="componente_qt_alunos_mat_componente"/>
                    </div>


                    <div class="form-group">
                        @csrf
                        <label for="Quatidade">Quantos alunos:</label>
                        <input type="text" class="form-control" name="componente_qt_alunos_mat_componente"/>
                    </div>

                </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>

@endsection
