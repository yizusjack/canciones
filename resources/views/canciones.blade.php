<!DOCTYPE html>
<html lang="es">
	<head>
			<meta charset="utf-8">
			<title>canciones</title>
		</head>
		<body>
            <h1>Canciones</h1>
            <ul>
                @foreach($canciones as $cancion)
                    <li>{{$cancion['nombre']}} - {{$cancion['artista']}}</li>
                @endforeach
            </ul>
		</body>
</html>