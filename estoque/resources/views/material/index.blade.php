@extends('home')
@section('title', 'Manter Materiral')
@section('content')

<style>
        .uper {
          margin-top: 40px;
        }
        .table, table tr, table tr td, table th{
            border: 5px solid #dee2e6 !important;
        }
        .btn-danger {
            color: #fff;
            background-color: #f29400;
            border-color: #f29400;
        }
        .btn-danger:hover {
            color: #fff;
            background-color: #FF4500;
            border-color: #FF4500;
        }
        .btn-primary {
            color: #fff;
            background-color: #004687;
            border-color: #004687;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #000080;
            border-color: #000080;
        }

</style>
      <div class="uper">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div><br />
        @endif
        <a href="{{ route('material.create')}}" class="btn btn-primary">NOVO MATERIAL</a>
    <table class="table table-striped">
        <thead>
        <tr style="text-align: center !important;">
            <th>ID</th>
            <th>DESCRIÇÃO</th>
            <th>TIPO</th>
            <th>QUANTIDADE</th>
            <th>METRICA</th>
            <th>DATA DE VALIDADE</th>
            <th colspan="2">AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materiais as $material)
            <tr>
                <th style="text-align: center !important;">{{$material->id_material}}</th>
                <td>{{$material->descricao}}</td>
                <td>{{$material->tipo}}</td>
                <td>{{$material->quantidade}}</td>
                <td>{{$material->metrica}}</td>
                <td>{{$material->dt_validade}}</td>

                <td><a href="{{ route('material.edit',$material->id_material)}}" class="btn btn-primary  btn-block">Alterar</a></td>
                <td>
                   <form action="{{ route('material.destroy', $material->id_material)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-block" type="submit">Excluir</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
 </table>
</div>

@endsection

