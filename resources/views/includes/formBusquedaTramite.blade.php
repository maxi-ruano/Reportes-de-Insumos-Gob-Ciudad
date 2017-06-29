{{ Form::open(['route' => 'disposiciones.create', 'method' => 'GET', 'role' => 'form', 'files' => false, 'class' => 'form-horizontal form-label-left input_mask']) }}
    <div class="item form-group">
      <div class="col-md-2 col-sm-2">
        {!! Form::select('pais', $paises, 1, ['data-type'=>'text', 'class'=>'select2_single form-control', 'tabindex'=>'-1', 'data-placeholder'=>'Seleccionar Pais', 'required']) !!}
      </div>
      <div class="col-md-1 col-sm-1">
        {!! Form::select('tipo_doc', $tdocs, null, ['data-type'=>'text', 'class'=>'select2_single form-control', 'tabindex'=>'-1', 'data-placeholder'=>'Seleccionar Tipo Doc', 'required']) !!}
      </div>
      <div class="col-md-1 col-sm-1">
        <select data-type="text" class="select2_single form-control" tabindex="-1" data-placeholder="Seleccionar Sexo" required="required" name="sexo">
          <option value="0">-</option>
          <option value="m">M</option>
          <option value="f">F</option>
        </select>
      </div>
      <div class="col-md-2 col-sm-2">
        <input name="nro_doc" type="text" autocomplete="off" class="form-control" placeholder="Documento" required>
      </div>
      <input id="send" type="submit" class="btn btn-success" value="Buscar">
    </div>
{{ Form::close() }}
@if(isset($datosPersonales) && !empty($datosPersonales))
<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
  <div class="well profile_view">
    <div class="col-sm-12">
      <h4 class="brief"><i>Datos Contribuyente</i></h4>
      <div class="left col-xs-7">
        <h2>{{ $datosPersonales->nombre.' '.$datosPersonales->apellido }}</h2>
        <p><strong>DOC: </strong> {{ $datosPersonales->nro_doc  }}</p>
      </div>
    </div>
    <div class="col-xs-12 bottom text-center">

    </div>
  </div>
</div>
@endif
