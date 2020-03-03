@extends('home')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Editar componente
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
        <form method="post" action="{{ route('componente.update', $componente->id_componente) }}">
          @method('PATCH')

          <div class="form-group">
            @csrf
            <label for="descricao">Descrição do componente:</label>
          <input type="text" class="form-control" name="componente_descricao" value="{{ $componente->descricao  }}"/>
        </div>
            <div class="row">
                <div class="form-group">
                    @csrf
                    <label for="tipo">Tipo do componente</label>
                    <select class="form-control" name="componente_tipo">
                        <option value="Liquido" @if($componente->tipo == "Liquido") selected="selected" @endif>Liquido</option>
                        <option value="Gasoso" @if($componente->tipo == "Gasoso") selected="selected" @endif>Gasoso</option>
                        <option value="Alimento" @if($componente->tipo == "Alimento") selected="selected" @endif>Alimento</option>
                    </select>
                </div>

                <div class="form-group input_row">
                    @csrf
                    <label for="quantidade">Quantidade:</label>
                    <input type="text" class="form-control" name="componente_quantidade" value="{{ $componente->quantidade }}"/>
                </div>

                <div class="form-group input_row">
                    @csrf
                    <label for="metrica">Metrica do componente</label>
                    <select class="form-control" name="componente_metrica">
                        <option value="L" @if($componente->metrica == "L") selected="selected" @endif>L</option>
                        <option value="ml" @if($componente->metrica == "ml") selected="selected" @endif>ml</option>
                        <option value="Kg" @if($componente->metrica == "Kg") selected="selected" @endif>Kg</option>
                    </select>
                </div>
                <div class="form-group input_row">
                    @csrf
                    <label>Data de Validade:</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        <input type="date" class="form-control" im-insert="false" name="componente_dt_validade" value="{{ $componente->dt_validade }}"/>
                    </div>
                </div>
            </div>
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
  </div>


@endsection

