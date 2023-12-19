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

<body>
    <h2 class="text-center mt-5">Add Buku</h2>


    <form action="/store-book" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column align-items-center pt-3 gap-3">

            <div class="form-group col-4">
                <label class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Enter book title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Enter book description" name="description" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror"
                    placeholder="Enter book author" name="author" value="{{ old('author') }}">
                @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Stocks</label>
                <input type="text" class="form-control @error('stocks') is-invalid @enderror"
                    placeholder="Enter book stocks" name="stocks" value="{{ old('stocks') }}">
                @error('stocks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Release Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror"
                    placeholder="Enter book date" name="date" value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group col-4">
                <label class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror"
                    placeholder="Enter book image" name="image" value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>

</body>

</html>
