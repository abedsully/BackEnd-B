<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="text-center">
        <h2 class="text-center mt-3">Dashboard</h2>

        <a href="/add-buku" class="btn btn-success btn-sm">Add New Book</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success text-center d-flex align-items-center justify-content-center gap-2 mt-3">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-danger text-center d-flex align-items-center justify-content-center gap-2 mt-3">
            {{ session('deleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    @foreach ($bukus as $buku)
        <div class="col-4 mb-3 mt-3 px-5">
            <div class="card" style="width: 18rem;">
                @if ($buku->image)
                    <img class="card-img-top" src="{{ asset('storage/images/' . $buku->image) }}" alt="Card image cap">
                @else
                    <img class="card-img-top" src="{{ asset('assets/buku.jpg') }}" alt="Card image cap">
                @endif

                <div class="card-body">
                    <h5 class="card-title text-truncate">Title: {{ $buku->title }}</h5>
                    <p class="card-text text-secondary" style="font-style: italic; font-size: 12px;">Author:
                        {{ $buku->author }}</p>
                    <div class="d-flex justify-content-around">
                        <a href="/detail-buku/{{ $buku->id }}" class="btn btn-primary">Details</a>
                        <a href="/edit-buku/{{ $buku->id }}" class="btn btn-warning">Edit</a>

                        <form action="/delete-buku/{{ $buku->id }}" method="POST" id="deleteForm{{ $buku->id }}">
                            @csrf
                            @method('delete')
                            <button type="button" onclick="confirmDelete({{ $buku->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>

<script>
    function confirmDelete(bukuId) {
        var confirmation = confirm("Do you really wish to delete this book?");
        if (confirmation) {
            document.getElementById('deleteForm' + bukuId).submit();
        } else {
            return false;
        }
    }
</script>

</html>
