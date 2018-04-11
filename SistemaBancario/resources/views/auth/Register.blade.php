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
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Resgistrarse en el Sistema Bancario</h1>
                    </div>
                    <div class="panel-body">
                        <form method = "POST" action="{{ route('Register') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nombre">Nombre Completo</label>
                                <input class="form-control" type ="text" name="nombre" placeholder="Ingresa tu nombre completo">
                                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input class="form-control" type ="text" name="usuario" placeholder="Ingresa tu usuario">
                                {!! $errors->first('usuario', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input class="form-control" type ="email" name="email" placeholder="Ingresa tu correo">
                                {!! $errors->first('usuario', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type ="password" name="password" placeholder="Ingresa tu contraseña">
                                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                            </div>
                            <button class = "btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>