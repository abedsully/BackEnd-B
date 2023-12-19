<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    @foreach ($bukus as $buku)
        <div class="col-4 mb-3 mt-3">
            <div class="card" style="width: 18rem;">
                @if ($buku->image)
                    <img class="card-img-top" src="{{ asset('storage/images/' . $buku->image ) }}" alt="Card image cap" style="width: 18rem; height: 15rem;">
                @else
                    <img class="card-img-top" src="{{ asset('assets/buku.jpg') }}" alt="Card image cap" style="width: 18rem; height: 15rem;">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$buku->title}}</h5>
                    <p class="card-text text-secondary" style="font-size: 12px; font-style: italic;">Author: {{$buku->author}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
