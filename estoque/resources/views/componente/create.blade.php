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
                <label for="descricao">Descrição do componente:</label>
                <input type="text" class="form-control" name="componente_descricao"/>
            </div>
                <div class="row">
                    <div class="form-group">
                        @csrf
                        <label for="tipo">Tipo do componente</label>
                        <select class="form-control" name="componente_tipo">
                            <option value="Liquido">Liquido</option>
                            <option value="Gasoso">Gasoso</option>
                            <option value="Alimento">Alimento</option>
                        </select>
                    </div>

                    <div class="form-group input_row">
                        @csrf
                        <label for="quantidade">Quantidade:</label>
                        <input type="text" class="form-control" name="componente_quantidade"/>
                    </div>

                    <div class="form-group input_row">
                        @csrf
                        <label for="metrica">Metrica do componente</label>
                        <select class="form-control" name="componente_metrica">
                            <option value="L">L</option>
                            <option value="ml">ml</option>
                            <option value="Kg">Kg</option>
                        </select>
                    </div>
                    <div class="form-group input_row">
                        @csrf
                        <label>Data de Validade:</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            <input type="date" class="form-control" im-insert="false" name="componente_dt_validade" />
                        </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>

@endsection
