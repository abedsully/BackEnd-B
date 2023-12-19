<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="m-5">
    @if ($buku->image)
        <img class="card-img-top" src="{{ asset('storage/images/' . $buku->image) }}" alt="Card image cap" style="width: 10rem;">
    @else
        <img class="card-img-top" src="{{ asset('assets/buku.jpg') }}" alt="Card image cap" style="width: 10rem;">
    @endif
    <h1>{{ $buku->title }}</h1>
    <p>{{$buku->description}}</p>
    <p>{{$buku->author}}</p>
    <p>{{$buku->stocks}}</p>
    <p>{{$buku->date}}</p>
    
</body>

</html>
