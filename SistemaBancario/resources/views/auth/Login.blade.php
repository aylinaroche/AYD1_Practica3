<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
    <div class="container">
    @if (session()->has('flash'))
        <div class="alert alert-info">{{ session('flash') }}</div>
    @endif
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Acceso al Sistema Bancario</h1>
                    </div>
                    <div class="panel-body">
                        <form method = "POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input class="form-control" type ="text" name="usuario" placeholder="Ingresa tu usuario">
                                {!! $errors->first('usuario', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type ="password" name="password" placeholder="Ingresa tu contraseña">
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                            <button class = "btn btn-primary" name="acceder">Acceder</button>
                            </br>
                            <div class="form-group">
                                <label for="cuenta">¿No tiene una cuenta?</label>
                                <a href="{{ route('Registrarse') }}">Registrarse</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>