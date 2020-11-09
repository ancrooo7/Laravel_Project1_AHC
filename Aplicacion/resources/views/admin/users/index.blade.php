<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
            padding: 1em 0;
        }
        th,td{
            padding: .5em 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Página principal</h1>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Role Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Creando</th>
            <th>Actulizado</th>
        </tr>
        @if ($users)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    
                    @if($user->foto)
                        <td><img src="/images/{{ $user->foto->ruta_foto }}" width="150" height="150"></td>
                    @else
                        <td><img src="/images/incognito.png" width="150" height="150"></td>
                    @endif
                    <td>{{ $user->role_id }}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            @endforeach
        @endif
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"     integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"     crossorigin="anonymous"></script>
</body>
</html>