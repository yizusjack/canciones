<!DOCTYPE html>
<html lang="es">
	<head>
			<meta charset="utf-8">
			<title>canciones</title>
		</head>
		<body>
            @if(is_null($cancion))
                <h1>Canciones</h1>
                <ul>
                    @foreach($canciones as $cancion)
                        <li>{{$cancion['nombre']}} - {{$cancion['artista']}}</li>
                    @endforeach
                </ul>
            @else
                <h1>{{$cancion['nombre']}}</h1>
                <h2>{{$cancion['artista']}}</h2>
            @endif
		</body>
</html>