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
          <div class="form-group">
            <label for="matricula">Data Inicio:</label>
            <input type="date" class="form-control" name="data_inicio" value={{str_pad($docente->matricula,5,"0",STR_PAD_LEFT)}} />
          </div>
          <div class="form-group">
            <label for="matricula">Data Fim:</label>
            <input type="date" class="form-control" name="data_fim" value={{str_pad($docente->matricula,5,"0",STR_PAD_LEFT)}} />
          </div>
          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
  </div>


@endsection

