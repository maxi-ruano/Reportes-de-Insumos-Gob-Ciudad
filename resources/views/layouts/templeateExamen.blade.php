<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Examen Teorico </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- NProgress -->

    <!-- Custom Theme Style -->
    <!-- Custom Theme Style -->
    <script src="{{ asset('build/js/countdown.js')}}"></script>
    <link href="{{ asset('build/css/examen.css')}}" rel="stylesheet">

  </head>

  <body>


    <div class="container-fluid contenedor-full">
      <div class="row content">
        <div class="col-sm-9 sidenav">

            <div class="pregunta">
              <div class="contenedor-examen-panel panel panel-default ">
                <div class="panel-body">
                  <legend>Pregunta</legend>
                      @yield('pregunta')
                </div>
              </div>
            </div>

          <div class="respuestas">
            <div class=" contenedor-examen-panel panel panel-default">
              <div class="panel-body">
                @yield('respuestas')

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 sidenav">
          <div class="datos-personales">
            <div class="panel panel-default  contenedor-examen-panel">
              <div class="panel-body text-center">
                <h3>@yield('nombre')<h3>
                  <p>
                    <img src="{{ asset('production/images/img.jpg')}}" alt="..." class=" img-thumbnail">
                  </p>
              </div>
            </div>
          </div>
          <div class="progreso">
            <div class="panel panel-default  contenedor-examen-panel">
              <div class="panel-body"><legend>Progreso</legend>
                <h4 class="text-center numerador-preguntas" >Pregunta 1 de 30</h4>
                <div class="col progress">
                  <div class="progress-bar progress-preguntas" role="progressbar" aria-valuenow="0"
                       aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    <span class="sr-only">0% completado</span>
                  </div>
                </div>
                <h4 class="text-center">Tiempo Restante</h4>
                <div class="col progress">
                  <div class="progress-bar progress-tiempo" role="progressbar" aria-valuenow="0"
                       aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    <span class="sr-only">0% completado</span>
                  </div>
                </div>
                <div id="regresion" class="text-center">

                </div>

              </div>
            </div>
          </div>
          <div class="acciones">
            <div class="panel panel-default  contenedor-examen-panel">
              <div class="panel-body text-center">
                <legend>Acciones</legend>
                  <p>
                    <button type="button" class="btn btn-primary btn-lg" onclick="siguientePregunta(1)" id="botonPregunta">Siguiente</button>

                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>

    @yield('scripts')

    <!-- Custom Theme Scripts
    <script src="{{ asset('build/js/custom.min.js')}}"></script>
-->
  </body>
</html>