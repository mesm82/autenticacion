<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>
    <div class="container" id="main" >
            <div class="row"> 
            <div class="col-xs-12"> 
            <form method="get" v-on:submit.prevent="iniciando_sesion()">
            <h4>Iniciar Sesión</h4>
            <div class="form-group">
                        <label for="rut">RUT</label>
                        <input type="text" class="form-control" aria-describedby="rut" v-model="rut">
                        <small id="rut" class="form-text text-muted">Ejemplo  Rut: 25.111.111-k</small>
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input type="password" class="form-control" v-model="clave">
                    </div>
                    
                    <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
                    </div>     
            </form>
            <div v-if="errors.length" class="alert alert-danger alert-dismissible fade show" role="alert">
                  <b>Por favor, corrija el(los) siguiente(s) error(es):</b>
                   <ul>
                    <li v-for="error in errors">@{{ error }}</li>
                   </ul>
                 </div>
            </div>
          </div>
        </div>
    </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
