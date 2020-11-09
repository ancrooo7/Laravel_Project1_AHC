<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Página para crear</h1>
    <br><br>
    {!! Form::open(['method'=>'POST', 'action' => 'AdminUsersController@store', 'files' => true]) !!}
        <table>
            <tr>
                <td>{!! Form::label('name', 'Nombre: ') !!}</td>
                <td>{!! Form::text('name') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('password', 'Password: ') !!}</td>
                <td>{!! Form::text('password') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('email', 'E-mail: ') !!}</td>
                <td>{!! Form::text('email') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('email', 'Verificar E-mail: ') !!}</td>
                <td>{!! Form::text('email_verified_at') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('role', 'Rol: ') !!}</td>
                <td>{!! Form::text('role_id') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('foto', 'Foto: ') !!}</td>
                <td>{!! Form::file('foto_id') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::submit('Crear') !!}</td>
                <td>{!! Form::reset('Borrar') !!}</td>
            </tr>
        </table>
    {!! Form::close() !!}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"     crossorigin="anonymous"></script>
    </body>
</html>