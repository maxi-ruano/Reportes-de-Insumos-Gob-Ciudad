@extends('layouts.templeate')
@section('titlePage', 'Teorico')
@section('content')
<!-- page content -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Buscar persona</h2>
          @include('includes.headerContainer')
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
                {!! Form::open(['route' => 'bedel.index', 'id'=>'formCategory', 'method' => 'GET', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true ]) !!}
                <div class="form-group">
                    <div class="col-md-3 col-sm-3">
                      <select name="pais" class="form-control">
                        @foreach($paises as $pais)
                        @if($pais->id == 1)
                        <option value="{{ $pais->id }}" selected>{{ $pais->description }}</option>
                        @else
                        <option value="{{ $pais->id }}">{{ $pais->description }}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>



                      <div class="col-md-1 col-sm-1">
                        <select name ="tipo_doc" class="form-control">
                          @foreach($tipo_doc as $tdoc)
                          @if($tdoc->id == 1)
                          <option value="{{ $tdoc->id }}" selected>{{ $tdoc->description }}</option>
                          @else
                          <option value="{{ $tdoc->id }}">{{ $tdoc->description }}</option>
                          @endif
                          @endforeach
                        </select>
                      </div>

                      <div class="col-md-5 col-sm-5">
                        <input name="doc" type="text" class="form-control" placeholder="Documento">
                      </div>

                        <div class="col-md-1 col-sm-1">
                          <select name="sexo" class="form-control">
                            @foreach($sexo as $sex)
                            @if($sex->id == 0)
                            <option value="{{ strtolower($sex->description) }}" selected>{{ $sex->description }}</option>
                            @else
                            <option value="{{ strtolower($sex->description) }}">{{ $sex->description }}</option>
                            @endif
                            @endforeach
                          </select>
                        </div>


                  <!--<div class="ln_solid"></div>-->

                    <!--<div class="col-md-2 col-sm-2">-->
                      <input id="send" type="submit" class="btn btn-success col-md-1 col-sm-1" value="Enviar">
                    <!--</div>-->
                      </div>
                {!! Form::close() !!}
                @if(!empty($peticion))
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>
                          <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        </th>
                        <th class="column-title">Tramite ID </th>
                        <th class="column-title">Pedido </th>
                        <th class="column-title">Otorgado </th>
                        <th class="column-title">Tipo </th>
                        <th class="column-title">Estado </th>
                        <th class="column-title">Retenido </th>
                        </th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($peticion as $datos)
                      <tr class="even pointer">
                        <td class="a-center ">
                          <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                        </td>
                        <td class=" ">{{ $datos['tramite_id'] }}</td>
                        <td class=" ">{{ $datos['clase_value'] }}</td>
                        <td class=" ">{{ $datos['clase_otorgada_value'] }}</td>
                        <td class=" ">{{ $datos['tipo_tramite_value'] }}</td>
                        <td class=" ">{{ $datos['estado_value'] }}</td>
                        <td class="a-right a-right ">{{ $datos['motivo_detencion_value'] }}</td>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @endif
      </div>
    </div>
  </div>
</div>

<!-- /page content -->
@endsection

@section('scripts')
<!-- validator -->
<script src="{{ asset('vendors/validator/validator.js')}}"></script>
@include('includes.scriptForms')

@endsection