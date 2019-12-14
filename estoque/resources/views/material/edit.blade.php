@extends('home')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Editar Material
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
        <form method="post" action="{{ route('material.update', $material->id_material) }}">
          @method('PATCH')

          <div class="form-group">
            @csrf
            <label for="descricao">Descrição do material:</label>
          <input type="text" class="form-control" name="material_descricao" value="{{ $material->descricao  }}"/>
        </div>
            <div class="row">
                <div class="form-group">
                    @csrf
                    <label for="tipo">Tipo do Material</label>
                    <select class="form-control" name="material_tipo">
                        <option value="Liquido" @if($material->tipo == "Liquido") selected="selected" @endif>Liquido</option>
                        <option value="Gasoso" @if($material->tipo == "Gasoso") selected="selected" @endif>Gasoso</option>
                        <option value="Alimento" @if($material->tipo == "Alimento") selected="selected" @endif>Alimento</option>
                    </select>
                </div>

                <div class="form-group input_row">
                    @csrf
                    <label for="quantidade">Quantidade:</label>
                    <input type="text" class="form-control" name="material_quantidade" value="{{ $material->quantidade }}"/>
                </div>

                <div class="form-group input_row">
                    @csrf
                    <label for="metrica">Metrica do Material</label>
                    <select class="form-control" name="material_metrica">
                        <option value="L" @if($material->metrica == "L") selected="selected" @endif>L</option>
                        <option value="ml" @if($material->metrica == "ml") selected="selected" @endif>ml</option>
                        <option value="Kg" @if($material->metrica == "Kg") selected="selected" @endif>Kg</option>
                    </select>
                </div>
                <div class="form-group input_row">
                    @csrf
                    <label>Data de Validade:</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        <input type="date" class="form-control" im-insert="false" name="material_dt_validade" value="{{ $material->dt_validade }}"/>
                    </div>
                </div>
            </div>
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
  </div>


@endsection

