@extends('layouts.templeate')
@section('titlePage', 'Tramites Habilitados')
@section('content')
<!-- page content -->

<div class="container">

    <div class="row">
        <div class="col-sm-8 col-xs-8">
            {!! Form::open(['method'=>'GET','url'=>'tramitesHabilitados','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ Request::get('search') }}">
                <span class="input-group-btn">
                    <button class="btn btn-default-sm" type="submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
            {!! Form::close() !!}
        </div>

        <div class="col-sm-4 col-xs-4 text-right">
            <a href="{{route('tramitesHabilitados.create')}}" class="btn btn-primary">Nuevo <i class="glyphicon glyphicon-plus-sign"></i> </a>
        </div>
    </div>

    <div class="table-responsive">
    @if($data)
        <table class="table table-striped jambo_table">
            <thead>
                <tr>
                    <th class="column-title">Apellido</th>
                    <th class="column-title">Nombre</th>
                    <th class="column-title">Tipo Doc.</th>
                    <th class="column-title">Nro. Doc.</th>
                    <th class="column-title">Pais</th>
                    <th class="column-title">Fecha</th>
                    <th class="column-title">Usuario</th>
                    <th class="column-title"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->apellido }}</td>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->tipo_doc }}</td>
                    <td>{{ $row->nro_doc }}</td>
                    <td>{{ $row->pais }}</td>
                    <td>{{ $row->fecha }}</td>
                    <td>{{ $row->user_id }}</td>                        
                    <td>
                        <a href="{{ route('tramitesHabilitados.edit', $row->id) }}" class="btn btn-success pull-right btn-xs" title="Editar"> Editar <i class="fa fa-edit"></i></a>                        
                        {!! Form::open(array('route' => array('tramitesHabilitados.destroy', $row->id), 'method' => 'delete')) !!}
                            <button class='btn btn-danger pull-right btn-xs' type="submit"> Borrar <i class="fa fa-trash"></i> </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    </div>

    <div class="col-sm-12 col-xs-12 text-center">
        {{ $data->links() }}
    </div>

</div>

<!-- /page content -->
@endsection

@push('scripts')
  <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@endpush