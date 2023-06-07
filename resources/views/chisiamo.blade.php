<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chi siamo</title>
</head>
<body>
    <a href="/home">home</a>

    {{-- @dump($arrayProva) --}}

    <ul>
        @forelse ($arrayProva as $key => $value )
        <li>
            {{$key}} : {{$value}}
        </li>

        @empty

        @endforelse ($prova as $array§Prova )

    </ul>


</body>
</html>
